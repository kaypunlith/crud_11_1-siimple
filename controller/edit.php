<?php 
  $conn=new mysqli("localhost","root","","php_class");
$id=$_GET['id'];
$sql="SELECT * FROM `shop` WHERE `product_id`=$id";
$result=$conn->query($sql);
$row=$result->fetch_array();
?>
   <?php include("../components/header.php")?>

<div class="container">
<div class="d-flex mt-3 justify-content-between">
        <h3>Edit product</h3>
        <a href="../index.php" class="btn btn-primary rounded-0">Show Product</a>
    </div>
    <form action="Update.php" method="post" class="shadow p-5" enctype="multipart/form-data">
          <input type="hidden" name="edit_id" value="<?php echo $row[0]?>">
          <div class="form-gruop">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" value="<?php echo $row[2]?>" placeholder="Enter code" class="form-control">
          </div>
          <div class="form-gruop">
              <label for="" class="form-label">Price</label>
              <input type="text" name="price" value="<?php echo $row[3]?>" placeholder="Enter code" class="form-control">
          </div>
          <div class="form-gruop">
              <label for="" class="form-label">Qty</label>
              <input type="text" name="Qty" value="<?php echo $row[4]?>" placeholder="Enter code" class="form-control">
          </div>
          <div class="form-gruop">
              <label for="" class="form-label">Image</label>
              <input type="file" name="img" class="form-control">
          </div>
           <div class="form-footer mt-2">
                <button type="submit" class="btn btn-success">Update</button>
                <button class="btn btn-danger">Close</button>
           </div>
    </form>
</div>
<?php


?>