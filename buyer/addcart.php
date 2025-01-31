<?php
include "../authentication/authguard.php";
include "menu.php";

$owner=$_GET['owner'];
$pid=$_GET['pid'];
include "../db/dbconn.php";
mysqli_query($conn,"insert into cart(userid,pid,owner) values($_SESSION[userid],$pid,$owner)");

header("location:home.php");
?>