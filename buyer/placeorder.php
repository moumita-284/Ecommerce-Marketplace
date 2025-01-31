<?php
include "../authentication/authguard.php";
include("../db/dbconn.php");

$userid = $_SESSION['userid'];

$sql_result = mysqli_query($conn, "SELECT * FROM cart WHERE userid = $userid");


    while ($row = mysqli_fetch_assoc($sql_result)) {

        $pid = $row['pid'];
        $owner = $row['owner'];
        $insert_query = "INSERT INTO myorders (userid,pid,owner) VALUES ($userid, $pid,$owner)";

        if (mysqli_query($conn, $insert_query)) {
            echo "<script>alert('Order placed successfully for product ID: $pid')</script><br>";
        }
        else{
            echo "<script>alert('Error placing order for product ID: $pid. Error: ')" . mysqli_error($conn) ."</script><br>";
        }
    }

    $clear_cart_query = "DELETE FROM cart WHERE userid = $userid";
    if (mysqli_query($conn, $clear_cart_query)) {
        echo "<script>alert('Cart cleared successfully.')</script><br>";
        header("Location:trackorder.php");
    } 
    else { 
        echo "Error clearing cart. Error: " . mysqli_error($conn);
    }
?>   