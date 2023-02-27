<div class="modal fade"  id="add-cause">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="post" action="../action" enctype="multipart/form-data">
          <div class="modal-header">
            <h4 class="modal-title" > <img src="../assets/images/kwagala.jpg" style="width: 100%;"><br>
              <center class="text-danger">Adding New Cause</center> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"> </i> </button>  
          </div>
        <!-- `cause_id`, `cat_id`, `cause_title`, `cause_photo`, `cause_description`, `currency`, `cause_goal`-->
          <div class="modal-body">
             <div class="form-group">
              <label> Category: </label>
                <select name="cat_id" class="form-control" required>
                  <option value="">--select category--</option>
                  <?php $ba = $dbh->query("SELECT * FROM category ");
                  while ($ro = $ba->fetch(PDO::FETCH_OBJ)) { ?>
                    <option value="<?=$ro->cat_id ?>"><?=$ro->cat_name ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group">
              <label> Title: </label>
                <input type="text" class="form-control" name="cause_title" placeholder="Enter Cause Title " required>
            </div>
            <div class="form-group">
              <label> Upload Cause Image: </label>
                <input type="file" class="form-control" name="cause_photo" required>
            </div>
            <div class="form-group">
              <label> Currencyl: </label>
                <select class="form-control" name="currency" required>
                  <option value="">--select currency--</option>
                  <option value="UGX">UGX</option>
                  <option value="USD">USD</option>
                </select>
            </div>
            <div class="form-group">
              <label> Cause Goal: </label>
                <input type="text" class="form-control" name="cause_goal" required>
            </div>
            <div class="form-group">
              <label> Cause Description: </label>
              <textarea name="cause_description" id="cause_description" class="form-control" ></textarea>
                <script>
                  CKEDITOR.replace( 'cause_description');
              </script>
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" name="add_new_cause_btn" class="btn btn-primary">
            <i class="fa fa-sign-in"></i> Submit </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times fa-1x"></i> Cancel </button>
          </div>
      </form>
    </div>
</div>
</div>

