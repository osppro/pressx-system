<div class="modal fade"  id="add-product">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="modal-header">
            <h4 class="modal-title" > <img src="../uploads/logoo.png" style="width: 100%;"><br>
              <center class="text-danger">Adding New Product</center> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"> </i> </button>  
          </div>
         <!--`pid`, `cat_id`, `pname`, `pprice`, `pfront`, `pback`, `pside`, `pqnty`, `pdesc`, `pdate_added` -->
          <div class="modal-body">
            <div class="form-group">
              <label> Category: </label>
               <select class="form-control" name="cat_id" required>
                 <option value="">--select category--</option>
                 <?php $cat = $dbh->query("SELECT * FROM category ");
                 while ($rox = $cat->fetch(PDO::FETCH_OBJ)) { ?>
                   <option value="<?=$rox->cat_id; ?>"><?=$rox->cat_name; ?></option>
                 <?php } ?>
               </select>
            </div>
            <div class="form-group">
              <label> Product Name: </label>
                <input type="text" class="form-control" name="pname" placeholder="Enter Product Name" required>
            </div>
             <div class="form-group">
              <label> Product Price: </label>
                <input type="text" class="form-control" name="pprice" placeholder="Enter Product Price" required>
            </div>
            <div class="form-group">
              <label> Product Quantity: </label>
                <input type="text" class="form-control" name="pqnty" placeholder="Enter Product Quantity" required>
            </div>
            <div class="form-group">
              <label> Front Image: </label>
                <input type="file" class="form-control" name="pfront" required>
            </div>
            <div class="form-group">
              <label> Back Image: </label>
                <input type="file" class="form-control" name="pback" required>
            </div>
            <div class="form-group">
              <label> Aside Image: </label>
                <input type="file" class="form-control" name="pside" required>
            </div>

            <div class="form-group">
              <label> Banner Description: </label>
              <textarea name="pdesc" id="pdesc" class="form-control" ></textarea>
                <script>
                  CKEDITOR.replace( 'pdesc');
              </script>
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" name="add_new_product_btn" class="btn btn-primary">
            <i class="fa fa-sign-in"></i> Submit </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times fa-1x"></i> Cancel </button>
          </div>
      </form>
    </div>
</div>
</div>

