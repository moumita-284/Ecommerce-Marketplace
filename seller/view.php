<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bg.css">

        <link rel="stylesheet" type="text/css" href="../css/sellerview.css">
    </head>
    <title>
    <title>Online Fruits Shop</title>
</html>

<?php
    include "../authentication/authguard.php";
    include "menu.php";
    include "../db/dbconn.php";

    $sql_result=mysqli_query($conn,"select * from product where owner=$_SESSION[userid]");

    while($dbrow=mysqli_fetch_assoc($sql_result) )
    {
        echo "<div class='pdt-card'>
            <img class='pdt-img' src='$dbrow[impath]'>
            <div class='name'>$dbrow[name]</div>
            <div class='details'>$dbrow[details]</div>
            <div class='price'>Price: $dbrow[price]</div>
            <div class='but'>
            <a href='removeproduct.php?pid=$dbrow[pid]'>
                <button class='btn btn-danger'>Remove Product</button>
                </a>
            </div>
        </div>";
    }

?>