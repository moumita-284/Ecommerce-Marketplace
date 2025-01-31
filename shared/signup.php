<?php
print_r($_POST);
include("../db/dbconn.php");
mysqli_query($conn,"insert into user(username,password,usertype) value('$_POST[username]','$_POST[password]','$_POST[usertype]')");

header("Location:login.html");
?>