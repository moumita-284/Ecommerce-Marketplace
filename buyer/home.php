<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/bg.css">
    <link rel="stylesheet" type="text/css" href="../css/buyerhome.css">
    </head>
    <title>Online Fruits Shop</title>
</html>

<?php
    include "../authentication/authguard.php";
    include "menu.php";
    include "../db/dbconn.php";

    $sql_result=mysqli_query($conn,"select * from product");

    while($dbrow=mysqli_fetch_assoc($sql_result) )
    {
        echo "<div class='pdt-card'>
            <img class='pdt-img' src='$dbrow[impath]'>
            <div class='name'>$dbrow[name]</div>
            <div class='details'>$dbrow[details]</div>
            <div class='price'>$dbrow[price]</div>
            <div class='but'>
            <a href='addcart.php?pid={$dbrow['pid']}&owner={$dbrow['owner']}'>
                <button class='btn btn-primary'>Add to Cart</button>
            </a>
            </div>
        </div>";
    }

?>