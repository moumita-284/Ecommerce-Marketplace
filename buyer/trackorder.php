<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/bg.css">
    <link rel="stylesheet" type="text/css" href="../css/buyerview.css">
    </head>
    <style>
    .date{
        padding-left: 10px;
        padding-bottom: 10px;
    }
    </style>
    <title>Online Fruits Shop</title>
    
<body>

<?php
    include "../authentication/authguard.php";
    include "menu.php";
    include "../db/dbconn.php";

    $sql_result=mysqli_query($conn,"select *, DATE(myorders.order_created_date) AS order_date from myorders join product on product.pid=myorders.pid where userid=$_SESSION[userid]");
    
    while($dbrow=mysqli_fetch_assoc($sql_result) )
    {
        echo "<div class='pdt-card'>
            <img class='pdt-img' src='$dbrow[impath]'>
            <div class='name'>$dbrow[name]</div>
            <div class='details'>$dbrow[details]</div>
            <div class='price'>$dbrow[price]</div>
            <div class='date'>Order Date: {$dbrow['order_date']}</div>
            <div class='but'>
            <a href='cancelorder.php?orderid=$dbrow[orderid]'>
                <button class='btn btn-danger'>Cancel Order</button>
            </a>
            </div>
        </div>";
    }
    echo "<br>
    <div class='orderp'>
        <span class='text1'>Thank You For order..!</span><br>
        <span class='text2'>Your Order will be delivered in 3 to 4 Working days.<br>Cash ON Delivery..</span><br>   
    </div>";
?>

</body>
</html>