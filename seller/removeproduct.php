<?php

include "../authentication/authguard.php";
include "../db/dbconn.php";

$pid=$_GET['pid'];

mysqli_query($conn,"delete from product where pid=$pid");

header("location:view.php");

?>