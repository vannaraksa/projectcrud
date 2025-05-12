<!-- Modal -->
<div class="modal fade" id="exampleModal_update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form_update" action="./update.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <input type="hidden" name="upid" id="upid">
            <label for="name" class=" form-label" >Name</label>
            <input type="text" name="upname" id="upname" class=" form-control" >
            <label for="price" class=" form-label" >Price</label>
            <input type="text" name="upprice" id="upprice" class=" form-control" >
            <label for="qty" class=" form-label" >QTY</label>
            <input type="text" name="upqty" id="upqty" class=" form-control" >
            <label for="img" class=" form-label" >Image</label>
            <input type="hidden" id="up_old_img" name="up_old_img">
            <input type="file" name="up_new_img"  id="up_new_img"  class=" form-control mb-2" >
            <img src="" id="preview" alt="" height="80" width="80">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="acceptUpdate">Update</button>
        </div>
    </form>
    </div>
  </div>
</div>
