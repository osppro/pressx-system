<?php include 'header.php'; ?>

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
      <?php 
      if ($interface == 'admin') {
      if (isset($_REQUEST['view-users'])) { ?>
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> System Users</h4>
          <!-- Basic Bootstrap Table -->
          <div class="card">
            <h5 class="card-header">System Users</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>No(#)</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php 
                $users = $dbh->query("SELECT * FROM users ");
                $x = 1;
                  while ($rows = $users->fetch(PDO::FETCH_OBJ)) { ?>
                  <!-- `userid`, `name`, `email`, `password`, `u_type`, `u_status`, `date_registered` -->
                    <tr>
                      <td><?=$x++; ?></td>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$rows->fullname ?></strong></td>
                      <td><?=$rows->email ?></td>
                      <td><?=$rows->u_type ?></td>
                      <?php if ($rows->u_status ==1) { ?>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      <?php }else{ ?>
                        <td><span class="badge bg-label-danger me-1">Inactive</span></td>
                      <?php } ?>
                      <td><?=date('jS - F, Y', strtotime($rows->date_registered)) ?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
          <!--/ Basic Bootstrap Table -->
       <?php }elseif (isset($_REQUEST['view-banners'])) { ?>
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Banners</h4>
          <!-- Basic Bootstrap Table -->
          <a href="#add-banner" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-primary">Add New Banner</a>
          <div class="card">
            <h5 class="card-header">Banners</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>No(#)</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php 
                $users = $dbh->query("SELECT * FROM banners ORDER BY banner_id DESC ");
                $x = 1;
                  while ($rows = $users->fetch(PDO::FETCH_OBJ)) { ?>
                  <!-- `banner_id`, `banner_title`, `banner_photo`, `banner_description` -->
                    <tr>
                      <td><?=$x++; ?></td>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$rows->banner_title ?></strong></td>
                      <td><img style="width: 100px; " src="../uploads/<?=$rows->banner_photo?>"></td>
                      <td><?=$rows->banner_description ?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
       <?php }elseif (isset($_REQUEST['category'])) { ?>
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Category</h4>
          <!-- Basic Bootstrap Table -->
          <a href="#add-category" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-primary">Add New Category</a>
          <div class="card">
            <h5 class="card-header">Category</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>No(#)</th>
                    <th>Category</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php 
                $users = $dbh->query("SELECT * FROM category ORDER BY cat_id DESC ");
                $x = 1;
                  while ($rows = $users->fetch(PDO::FETCH_OBJ)) { ?>
                  <!--`cat_id`, `cat_name` -->
                    <tr>
                      <td><?=$x++; ?></td>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$rows->cat_name ?></strong></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a >
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       <?php }elseif (isset($_REQUEST['cause'])) { ?>
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Cause</h4>
          <!-- Basic Bootstrap Table -->
          <a href="#add-cause" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-primary">Add New Cause</a>
          <div class="card">
            <h5 class="card-header">Causes</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>No(#)</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Goal</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php 
                $my_causes = $dbh->query("SELECT * FROM category ca, cause c WHERE ca.cat_id = c.cat_id ORDER BY c.cause_id DESC ");
                $x = 1;
                  while ($rows = $my_causes->fetch(PDO::FETCH_OBJ)) { ?>
                  <!--`cause_id`, `cat_id`, `cause_title`, `cause_photo`, `cause_description`, `currency`, `cause_goal` -->
                    <tr>
                      <td><?=$x++; ?></td>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$rows->cause_title ?></strong></td>
                      <td><img style="width: 100px; " src="../uploads/<?=$rows->cause_photo ?>"></td>
                      <td><?=$rows->cause_description ?></td>
                      <td><?=$rows->currency ?> <?=number_format($rows->cause_goal) ?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" onclick="return confirm('Do you really want to delete this content.?'); " href="?delete-cause=<?=$rows->cause_id ?>"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
       <?php }elseif (isset($_REQUEST['delete-cause'])) { 
          dbDelete('cause','cause_id',$_REQUEST['delete-cause']);
          redirect_page('?cause'); ?>

       <?php }elseif (isset($_REQUEST['teams'])) { ?>
      <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Team</h4>
          <!-- Basic Bootstrap Table -->
          <a href="#add-team" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-primary">Add New Team</a>
          <div class="card">
            <h5 class="card-header">Team</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>No(#)</th>
                    <th>Fullname</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php 
                $team = $dbh->query("SELECT * FROM  team ORDER BY team_id DESC ");
                $x = 1;
                  while ($rows = $team->fetch(PDO::FETCH_OBJ)) { ?>
                  <!--`team_id`, `team_fullname`, `team_photo`, `team_title`, `team_gender`, `team_description` -->
                    <tr>
                      <td><?=$x++; ?></td>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$rows->team_fullname ?></strong></td>
                      <td><?=$rows->team_title ?></td>
                      <td><img style="width: 100px; " src="../uploads/<?=$rows->team_photo ?>"></td>
                      <td><?=$rows->team_description ?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
       <?php }elseif (isset($_REQUEST['view-blog-posts'])) { ?>
         <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blog</span></h4>
          <!-- Basic Bootstrap Table -->
          <a href="#add-blog" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-primary">Add New Blog</a>
          <div class="card">
            <h5 class="card-header">Blog Posts</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>No(#)</th>
                    <th>Category</th>
                    <th>Blog Title</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Comment</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php 
                $blog = $dbh->query("SELECT * FROM blogs b, category c WHERE b.cat_id = c.cat_id ORDER BY b.blog_id DESC ");
                $x = 1;
                  while ($rows = $blog->fetch(PDO::FETCH_OBJ)) { ?>
                  <!--`blog_id`, `cat_id`, `blog_title`, `blog_description`, `blog_photo`, `blog_comments`, `blog_date_added` -->
                    <tr>
                      <td><?=$x++; ?></td>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$rows->cat_name ?></strong></td>
                      <td><?=$rows->blog_title ?></td>
                      <td><img style="width: 100px; " src="../uploads/<?=$rows->blog_photo ?>"></td>
                      <td><?=$rows->blog_description ?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
       <?php }elseif (isset($_REQUEST[''])) { ?>

       <?php }elseif (isset($_REQUEST[''])) { ?>

       <?php }elseif (isset($_REQUEST[''])) { ?>

       <?php }elseif (isset($_REQUEST[''])) { ?>
         
        <?php }else{ ?>

        <div class="col-lg-8 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Welcome <?=ucwords($fullname); ?>!</h5>
                  <p class="mb-4">
                    You have done well visiting your Dashboard today !<br>
                    For any assistance, contact us on. <br>
                    <a href="tel:+256782422208">+256 782 422208</a>
                    <!-- , <a href="tel:+256756765431">+256-756-765-431</a> -->
                  </p>
                  <a class="btn btn-primary" style="text-decoration: none; color: white;"><?=date('jS - F, Y', strtotime($today)); ?></a>
                </div>
              </div>
              <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img
                    src="assets/img/illustrations/man-with-laptop-light.png"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 order-1">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="assets/img/icons/unicons/chart-success.png"
                        alt="chart success"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt3"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">Make Donation</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Donations</span>
                  <?php if ($interface == 'admin') { 
                    $total_donation = $dbh->query("SELECT * FROM personal_donations WHERE userid = '$userid' AND pd_status = 'DONATED' ")->rowCount();
                    ?>
                    <h3 class="card-title mb-2">$ <?=$total_donation; ?></h3>
                    <small class="text-success fw-semibold"> Total Donations</small>
                  <?php }elseif ($interface == 'user') { 
                    $personal_donation = $dbh->query("SELECT * FROM personal_donations WHERE userid = '$userid' AND pd_status = 'DONATED' ")->rowCount();
                    ?>
                    <h3 class="card-title mb-2">$ <?=$personal_donation; ?></h3>
                    <small class="text-success fw-semibold">My Donations </small>
                    <hr>
                  <a href="" class="btn btn-success">Make Donation</a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>


    <?php }elseif ($interface == 'user') { 

      if (isset($_REQUEST[''])) { ?>
    

    <?php }elseif (isset($_REQUEST[''])) { ?>

    <?php }elseif (isset($_REQUEST[''])) { ?>

    <?php }elseif (isset($_REQUEST[''])) { ?>

    <?php }elseif (isset($_REQUEST[''])) { ?>

    <?php }elseif (isset($_REQUEST[''])) { ?>
      
      <?php }else{ ?>

      <div class="col-lg-8 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Welcome <?=ucwords($fullname); ?>!</h5>
                  <p class="mb-4">
                    You have done well visiting your Dashboard today !<br>
                    For any assistance, contact us on. <br>
                    <a href="tel:+256782422208">+256 782 422208</a>
                    <!-- <a href="tel:+256775550528">+256-775-550-528</a>, <a href="tel:+256756765431">+256-756-765-431</a> -->
                  </p>
                  <a class="btn btn-primary" style="text-decoration: none; color: white;"><?=date('jS - F, Y', strtotime($today)); ?></a>
                </div>
              </div>
              <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img
                    src="assets/img/illustrations/man-with-laptop-light.png"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 order-1">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="assets/img/icons/unicons/chart-success.png"
                        alt="chart success"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt3"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">Make Donation</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Donations</span>
                  <?php 
                    $personal_donation = $dbh->query("SELECT * FROM personal_donations WHERE userid = '$userid' AND pd_status = 'DONATED' ")->rowCount();
                    ?>
                    <h3 class="card-title mb-2">$ <?=$personal_donation; ?></h3>
                    <small class="text-success fw-semibold">My Donations </small>
                    <hr>
                  <a href="" class="btn btn-success">Make Donation</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>

    <?php } ?>

    </div>
  </div>
  <!-- / Content -->

<?php include 'footer.php'; ?>