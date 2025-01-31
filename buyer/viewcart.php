<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/bg.css">
    <link rel="stylesheet" type="text/css" href="../css/buyerview.css">

    </head>
    <title>Online Fruits Shop</title>
<body>
<?php

include "../authentication/authguard.php";
include "menu.php";
include("../db/dbconn.php");

$sql_result=mysqli_query($conn,"select * from cart join product on product.pid=cart.pid where userid=$_SESSION[userid]");

$total=0;
while($dbrow=mysqli_fetch_assoc($sql_result) )
    {
        $total+=$dbrow['price'];
        echo "<div class='pdt-card'>
            <img class='pdt-img' src='$dbrow[impath]'>
            <div class='name'>$dbrow[name]</div>
            <div class='details'>$dbrow[details]</div>
            <div class='price'>$dbrow[price]</div>
            <div class='but'>
            <a href='deletecart.php?cartid=$dbrow[cartid]'>
                <button class='btn btn-danger'>Remove From Cart</button>
            </a>
            </div>
        </div>";
    }
echo "<br>
    <div class='orderp'>
        <span class='text1'>Place order:</span><br>
        <a href='#' onclick='checkTotal(event)' id='viewbtn'><button class='btnt'>{$total}</button></a>

        <script>
        
            function checkTotal(event) {
                event.preventDefault();
                let total = parseInt(document.getElementById('viewbtn').innerText);

                if (isNaN(total) || total === 0) {
                    alert('Add product first');
                } 
                else {
                    window.location.href = 'placeorder.php';
                }
            }
        </script>
    </div>"; 
?>
</body>
</html>