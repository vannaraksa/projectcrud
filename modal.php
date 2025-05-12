<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./create.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <label for="name" class=" form-label" >Name</label>
            <input type="text" name="name" id="name" class=" form-control" >
            <label for="price" class=" form-label" >Price</label>
            <input type="text" name="price" id="price" class=" form-control" >
            <label for="qty" class=" form-label" >QTY</label>
            <input type="text" name="qty" id="qty" class=" form-control" >
            <label for="img" class=" form-label" >Image</label>
            <input type="file" name="img" id="img" class=" form-control" >
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="acceptAdd">ADD</button>
        </div>
    </form>
    </div>
  </div>
</div>
