<?php
include('config.php');
// Escape user inputs for security
$regfullname = mysqli_real_escape_string($link, $_REQUEST['regfullname']);
$regusername = mysqli_real_escape_string($link, $_REQUEST['regusername']);
$regpassword = mysqli_real_escape_string($link, $_REQUEST['regpassword']);
 
// Attempt insert query execution

$sql = "INSERT INTO user (regfullname, regusername, regpassword) VALUES ('$_POST[regfullname]','$_POST[regusername]','$_POST[regpassword]')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

header('location:index.php');


?>