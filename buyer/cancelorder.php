<?php

include "../authentication/authguard.php";
include "../db/dbconn.php";

$orderid=$_GET['orderid'];

mysqli_query($conn,"delete from myorders where orderid=$orderid");

header("location:trackorder.php");

?>