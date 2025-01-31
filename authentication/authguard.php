<?php
session_start();
if(!isset($_SESSION['login_status'])){
    echo "You Skipped the Login..";
    echo "<br> <a href='../shared/login.html'>Login Here..</a>";
    die;
}

if($_SESSION['login_status']==false){
    echo "Unauthorized Attempt";
    echo "<br> <a href='../shared/login.html'>Login Here..</a>";
    die;
}

?>
