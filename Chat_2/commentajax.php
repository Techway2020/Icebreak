<?php

include ('config.php');

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
$comment=mysqli_real_escape_string($link, $_POST['user_comm']);
$name=mysqli_real_escape_string($link, $_POST['user_name']);
$sql="INSERT INTO comments (name,comment,post_time) VALUES ('$name' , '$comment' , CURRENT_TIMESTAMP)";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


}

?>

