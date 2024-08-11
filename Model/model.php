<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
         <form action="controller/Delete_shop.php" method="post">
         <div class="modal-body">
        <h3>
            Are you want to delete
        </h3>
        <input type="hidden" name="id_del" id="id_del">
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger rounded-0" data-bs-dismiss="modal">No</button>
            <button type="submit" class="btn btn-success rounded-0">Yes</button>
        </div>
         </form>
    </div>
  </div>
</div>