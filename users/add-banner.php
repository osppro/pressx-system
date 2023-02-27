<div class="modal fade"  id="add-banner">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="post" action="../action" enctype="multipart/form-data">
          <div class="modal-header">
            <h4 class="modal-title" > <img src="../assets/images/kwagala.jpg" style="width: 100%;"><br>
              <center class="text-danger">Adding New Banner</center> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"> </i> </button>  
          </div>
        <!-- `banner_id`, `banner_title`, `banner_photo`, `banner_description`-->
          <div class="modal-body">
            <div class="form-group">
              <label> Banner Title: </label>
                <input type="text" class="form-control" name="banner_title" placeholder="Enter Banner Title " required>
            </div>
            <div class="form-group">
              <label> Upload Banner Image: </label>
                <input type="file" class="form-control" name="banner_photo" required>
            </div>
            <div class="form-group">
              <label> Banner Description: </label>
              <textarea name="banner_description" id="banner_description" class="form-control" ></textarea>
                <script>
                  CKEDITOR.replace( 'banner_description');
              </script>
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" name="add_new_banner_btn" class="btn btn-primary">
            <i class="fa fa-sign-in"></i> Submit </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times fa-1x"></i> Cancel </button>
          </div>
      </form>
    </div>
</div>
</div>

