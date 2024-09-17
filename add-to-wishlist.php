<?php
session_start();
include './connection.php';
 
$pid  = $_GET['pid'];

$uid = $_SESSION['uid'];

if(!isset($_SESSION['uid']))
{
    header("location:login.php");
}
//$q = mysqli_query($connection,"insert into tbl_wishlist(user_id,product_id) values('{$uid}','{$pid}')");

$wq = mysqli_query($connection,"SELECT * FROM `tbl_wishlist` WHERE `product_id`='{$pid}' and user_id='{$uid}'");
$count=mysqli_num_rows($wq);
if($count==0){
$q = mysqli_query($connection,"insert into `tbl_wishlist` (user_id,product_id) values('{$uid}','{$pid}')");
header("location:wishlist.php");
}else{
echo "<script>alert('This product already exist in wishlist!');window.location='wishlist.php';</script>";
}
?>

