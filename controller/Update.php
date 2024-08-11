<?php 
   $conn=new mysqli("localhost","root","","php_class");
   $edit_id=$_POST['edit_id'];
   $name=$_POST['name'];
   $price=$_POST['price'];
   $qty=$_POST['Qty'];
   $file_name=$_FILES['img']['name'];
   $file_tmp=$_FILES['img']['tmp_name'];
   $img_folder='../img/'.$file_name;
   move_uploaded_file($file_tmp,$img_folder);
   $sql="UPDATE `shop` SET
    `product_img`='$file_name',`product_name`='$name',`product_price`='$price',`prodcut_qty`='$qty' WHERE `product_id`=$edit_id";
    $conn->query($sql);
    if($sql){
        header("Location:../index.php");
    }
?>