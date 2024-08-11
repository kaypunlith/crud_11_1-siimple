<?php 
   $conn=new mysqli("localhost","root","","php_class");

    $name=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['Qty'];
    $file_name=$_FILES['img']['name'];
    $file_tmp=$_FILES['img']['tmp_name'];
    $img_folder='../img/'.$file_name;
    move_uploaded_file($file_tmp,$img_folder);
        $sql="INSERT INTO `shop`(`product_img`, `product_name`, `product_price`, `prodcut_qty`) VALUES
        ('$file_name','$name','$price','$qty')";
        $conn->query($sql);
        if($sql){
            header("Location:../index.php");
        }
    ?>