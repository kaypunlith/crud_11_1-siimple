<?php
 include("components/header.php");
 include("Model/model.php");
 $conn=new mysqli("localhost","root","","php_class");
?>
     <div class="container ">
           <div class="d-flex mt-3 justify-content-between">
               <h3>Product</h3>
               <a href="create.php" class="btn btn-primary rounded-0">Create Product</a>
           </div>
          <table class="table mt-4 shadow align-middle">
            <tr class="table-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Action</th>
            </tr>
            <?php 
               $sql="SELECT * FROM `shop`";
               $result=$conn->query($sql);
               while ($row=$result->fetch_array()){
                 ?>
                     <tr>
                        <td><?php echo $row[0]?></td>
                        <td>
                            <img width="80px" style="border:1px solid black" src="./img/<?php echo $row[1]?>" alt="">
                        </td>
                        <td><?php echo $row[2]?></td>
                        <td><?php echo $row[3]?></td>
                        <td><?php echo $row[4]?>in stock</td>
                        <td>
                            <a href="controller/edit.php?id=<?php echo $row[0]?>" class="btn btn-warning rounded-0">Edit</a>
                            <button onclick="Delete_shop(<?php echo $row[0]?>)" class="btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                        </td>
                    </tr>
                 <?php
               }
            ?>
           
          </table>
     </div>
<?php include("components/footer.php")?>