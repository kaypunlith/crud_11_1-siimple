<?php include("components/header.php")?>

<div class="container">
<div class="d-flex mt-3 justify-content-between">
        <h3>Product</h3>
        <a href="index.php" class="btn btn-primary rounded-0">Show Product</a>
    </div>
    <form action="controller/create.php" method="post" class="shadow p-5" enctype="multipart/form-data">
          <div class="form-gruop">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" placeholder="Enter code" class="form-control">
          </div>
          <div class="form-gruop">
              <label for="" class="form-label">Price</label>
              <input type="text" name="price" placeholder="Enter code" class="form-control">
          </div>
          <div class="form-gruop">
              <label for="" class="form-label">Qty</label>
              <input type="text" name="Qty" placeholder="Enter code" class="form-control">
          </div>
          <div class="form-gruop">
              <label for="" class="form-label">Image</label>
              <input type="file" name="img" class="form-control">
          </div>
           <div class="form-footer mt-2">
                <button type="submit" class="btn btn-success">Create</button>
                <button class="btn btn-danger">Close</button>
           </div>
    </form>
</div>