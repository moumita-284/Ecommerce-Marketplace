<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/bg.css">
    <link rel="stylesheet" type="text/css" href="../css/sellerview.css">

    </head>
    <title>Online Fruite Shop</title>
<style>
    .aligncard{
    padding-left: 10px;
    padding-bottom: 10px;
}
</style>
</html>
<?php
    include "../authentication/authguard.php";
    include "menu.php";
    include "../db/dbconn.php";
    
    $owner = $_SESSION['userid'];

    $sql_result=mysqli_query($conn,"select *, DATE(myorders.order_created_date) AS order_date from myorders join product on product.pid=myorders.pid join user on user.userid=myorders.userid where product.owner=$owner");

    while($dbrow=mysqli_fetch_assoc($sql_result) )
    {
        echo "<div class='pdt-card'>
            <img class='pdt-img' src='$dbrow[impath]'>
            <div class='name'>$dbrow[name]</div>
            <div class='price'>$dbrow[price]</div>
            <div class='aligncard'>Order ID: {$dbrow['orderid']}</div>
            <div class='aligncard'>Order By: {$dbrow['username']}</div>
            <div class='aligncard'>Order Date: {$dbrow['order_date']}</div>  
        </div>";
    }

?>