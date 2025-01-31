<?php

include "menu.php";
session_start();
$source=$_FILES['pdtimg']['tmp_name'];
$target="../shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($source,$target);

include "../db/dbconn.php";
$query="insert into product(name,price,details,impath,owner) values('$_POST[name]',$_POST[price],'$_POST[details]','$target',$_SESSION[userid])";

$sql_status=mysqli_query($conn,$query);

if($sql_status){
    echo "<script>alert('Product Uploaded Successfully!');</script>"; 
    echo "<script>window.location.href = 'view.php';</script>";
}else{
    echo "<script>alert('Error in SQl')".mysqli_error($conn)."</script>";
    echo "<script>window.location.href = 'home.php';</script>";
}
?>
