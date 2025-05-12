<!-- Modal -->
<div class="modal fade" id="exampleModal_del" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to delete?
      </div>
      <div class="modal-footer">
        <form action="./delete.php" method="post">
          <input type="text" id="img_del" name="img_del">
          <input type="text" id="code_del" name="code_del">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" name="accept_del">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>