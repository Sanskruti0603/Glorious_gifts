<?php
session_start();
include './connection.php';
 
 
$pid  =$_POST['pid'];
$qty = $_POST['qty'];
$q = mysqli_query($connection,"select * from tbl_product where product_id='{$pid}'");
 $uq = mysqli_fetch_array($q);
$uid = $_SESSION['uid'];
$single = $uq['product_price'];
$sub = $qty * $single;

if(!isset($_SESSION['uid']))
{
    header("location:login.php");
}

$query_cart=mysqli_query($connection,"SELECT * FROM `tbl_cart` WHERE `product_id`='{$pid}' and user_id='{$uid}'");
$count_cart=mysqli_num_rows($query_cart);
if($count_cart==0){

$q = mysqli_query($connection,"insert into tbl_cart(product_id,quantity,price,user_id) values('{$pid}','{$qty}','{$sub}','{$uid}')");
header("location:cart.php");
}else{
echo "<script>alert('This product already exist in cart!');window.location='cart.php';</script>";
}

?>