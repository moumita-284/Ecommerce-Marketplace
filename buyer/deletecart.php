<?php

include "../authentication/authguard.php";
include "../db/dbconn.php";

$cartid=$_GET['cartid'];

mysqli_query($conn,"delete from cart where cartid=$cartid");

header("location:viewcart.php");

?>