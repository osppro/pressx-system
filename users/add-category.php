<div class="modal fade"  id="add-category">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="post" action="../action" enctype="multipart/form-data">
          <div class="modal-header">
            <h4 class="modal-title" > <img src="../assets/images/kwagala.jpg" style="width: 100%;"><br>
              <center class="text-danger">Adding New Category</center> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"> </i> </button>  
          </div>
        <!-- `cat_id`, `cat_name`-->
          <div class="modal-body">
            <div class="form-group">
              <label> Category: </label>
                <input type="text" class="form-control" name="cat_name" placeholder="Enter Category " required>
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" name="add_new_category_btn" class="btn btn-primary">
            <i class="fa fa-sign-in"></i> Submit </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times fa-1x"></i> Cancel </button>
          </div>
      </form>
    </div>
</div>
</div>

