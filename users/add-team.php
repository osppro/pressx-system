<div class="modal fade"  id="add-team">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="post" action="../action" enctype="multipart/form-data">
          <div class="modal-header">
            <h4 class="modal-title" > <img src="../assets/images/kwagala.jpg" style="width: 100%;"><br>
              <center class="text-danger">Adding New Team Member</center> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"> </i> </button>  
          </div>
          <!-- `team_id`, `team_fullname`, `team_photo`, `team_title`, `team_gender`, `team_description` -->
          <div class="modal-body">
            <div class="form-group">
              <label> Fullname: </label>
                <input type="text" class="form-control" name="team_fullname" placeholder="Enter Fullname " required>
            </div>
             <div class="form-group">
              <label> Title/ Position: </label>
                <input type="text" class="form-control" name="team_title" placeholder="Enter Title " required>
            </div>
            <div class="form-group">
              <label>Gender: </label>
               <select class="form-control" name="team_gender" required>
                 <option value="">--select gender--</option>
                 <option value="female">Female</option>
                 <option value="male">Male</option>
               </select>
            </div>
            <div class="form-group">
              <label> Upload Photo: </label>
                <input type="file" class="form-control" name="team_photo" required>
            </div>
            <div class="form-group">
              <label> Banner Description: </label>
              <textarea name="team_description" id="team_description" class="form-control" ></textarea>
                <script>
                  CKEDITOR.replace( 'team_description');
              </script>
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" name="add_new_team_btn" class="btn btn-primary">
            <i class="fa fa-sign-in"></i> Submit </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times fa-1x"></i> Cancel </button>
          </div>
      </form>
    </div>
</div>
</div>

