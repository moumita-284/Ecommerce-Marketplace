<?php

session_start();
$_SESSION['login_status']=false;
include("../db/dbconn.php");
$query="select * from user where username='$_POST[username]' and password='$_POST[password]'";
//echo $query;
$sql_result=mysqli_query($conn,$query);

//print_r($sql_result);

if($sql_result->num_rows>0){
    echo "Login success";

    $_SESSION['login_status']=true;

    $dbrow=mysqli_fetch_assoc($sql_result);
    print_r($dbrow);

    $_SESSION['userid']=$dbrow['userid'];
    $_SESSION['usertype']=$dbrow['usertype'];
    $_SESSION['username']=$dbrow['username'];
    
    if($dbrow["usertype"]=="Seller"){
        header("Location:../seller/home.php");
    }
    else if($dbrow["usertype"]=="Buyer"){
        header("Location:../buyer/home.php");
    }
}
else{
    echo "<script>alert('Invalid Credentials');</script>"; 
    echo "<script>window.location.href = 'login.html';</script>";
}
?>
