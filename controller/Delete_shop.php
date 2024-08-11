<?php 
  $conn=new mysqli("localhost","root","","php_class");
  $id=$_POST['id_del'];
  $sql="DELETE FROM `shop` WHERE product_id =$id";
  $conn->query($sql);
  if($sql){
    header("Location:../index.php");
  }
?>