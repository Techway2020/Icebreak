<php>
    function onLogin($user) {
    $token = GenerateRandomToken();    // generate a token, should be 128 - 256 bit
    storeTokenForUser($user, $token);
    $cookie = $user . ':' . $token;
    $mac = hash_hmac('sha256', $cookie, SECRET_KEY);
    $cookie .= ':' . $mac;
    setcookie('rememberme', $cookie);
    }


    function rememberMe() {
    $cookie = isset($_COOKIE['rememberme']) ? $_COOKIE['rememberme'] : '';
    if ($cookie) {
    list ($user, $token, $mac) = explode(':', $cookie);
    if (!hash_equals(hash_hmac('sha256', $user . ':' . $token, SECRET_KEY), $mac)) {
    return false;
    }
    $usertoken = fetchTokenByUserName($user);
    if (hash_equals($usertoken, $token)) {
    logUserIn($user);
    }
    }
    }



    /**
    * A timing safe equals comparison
    *
    * To prevent leaking length information, it is important
    * that user input is always used as the second parameter.
    *
    * @param string $safe The internal (safe) value to be checked
    * @param string $user The user submitted (unsafe) value
    *
    * @return boolean True if the two strings are identical.
    */
    function timingSafeCompare($safe, $user) {
    if (function_exists('hash_equals')) {
    return hash_equals($safe, $user); // PHP 5.6
    }
    // Prevent issues if string length is 0
    $safe .= chr(0);
    $user .= chr(0);

    // mbstring.func_overload can make strlen() return invalid numbers
    // when operating on raw binary strings; force an 8bit charset here:
    if (function_exists('mb_strlen')) {
    $safeLen = mb_strlen($safe, '8bit');
    $userLen = mb_strlen($user, '8bit');
    } else {
    $safeLen = strlen($safe);
    $userLen = strlen($user);
    }

    // Set the result to the difference between the lengths
    $result = $safeLen - $userLen;

    // Note that we ALWAYS iterate over the user-supplied length
    // This is to prevent leaking length information
    for ($i = 0; $i < $userLen; $i++) {
    // Using % here is a trick to prevent notices
    // It's safe, since if the lengths are different
    // $result is already non-0
    $result |= (ord($safe[$i % $safeLen]) ^ ord($user[$i]));
    }

    // They are only identical strings if $result is exactly 0...
    return $result === 0;
    }




</php>