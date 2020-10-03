<?php
include "connect.php";
$proname=$_POST['proname'];
$price=$_POST['price'];
$description=$_POST['desc'];
$sql = "insert into products (proname,price,description) values ('".$proname."','".$price."','".$description."')";
if(mysqli_query($conn,$sql)){
  echo "Successful";
  header("Location:addproduct.php");
}else{
  echo "ERROR".mysqli_error($conn);
}
?>