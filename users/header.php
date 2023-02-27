<?php 
  require_once '../root/config.php'; 

  if (empty($_SESSION['userid'])) {
    header("Location: auth-login");
  }else{
    //`userid`, `fullname`, `email`, `u_type`, `u_status`, `password`, `date_registered`, `terms`
    $interface = $_SESSION['u_type'];
    $fullname   = $_SESSION['fullname'];
    $email = $_SESSION['email'];
    $userid = $_SESSION['userid'];
    $u_status = $_SESSION['u_status'];
    $date_registered = $_SESSION['date_registered'];
  }
 ?>
<!DOCTYPE html>
<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="assets/"
data-template="vertical-menu-template-free">
<head>
<meta charset="utf-8" />
<meta
name="viewport"
content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
/>
<title>Dashboard - Kwagala Orphanage</title>
<meta name="description" content="" />
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="../assets/images/kwagala.jpg" />
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
rel="stylesheet"/>
<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
<!-- Core CSS -->
<link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="assets/css/demo.css" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
<!-- Page CSS -->
<!-- Helpers -->
<script src="assets/vendor/js/helpers.js"></script>
<script src="assets/js/config.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="<?=HOME_URL; ?>" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="../assets/images/kwagala.jpg" style="width: 50%; padding: 10px;">
      </span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>
  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="<?=HOME_URL; ?>" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <?php if (@$interface == 'admin') { ?>
    <!-- Layouts -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Users</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="?view-users" class="menu-link">
            <div data-i18n="Blank">View Users</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Account Settings">Banners</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="?view-banners" class="menu-link">
            <div data-i18n="Notifications">View Banners</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div data-i18n="Authentications">Causes</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="?category" class="menu-link">
            <div data-i18n="Basic">View Category</div>
          </a>
          <a href="?cause" class="menu-link">
            <div data-i18n="Basic">View Causes</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
        <div data-i18n="Misc">Events</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="?events" class="menu-link">
            <div data-i18n="Error">View Events</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Cards -->
    <li class="menu-item">
      <a href="?donations" class="menu-link">
        <i class="menu-icon tf-icons bx bx-dollar"></i>
        <div data-i18n="Basic">Donations</div>
      </a>
    </li>
    <!-- User interface -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-box"></i>
        <div data-i18n="User interface">Testimonials</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="?view-testimonies" class="menu-link">
            <div data-i18n="Accordion">View Testimonies</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div data-i18n="User interface">Blog Posts</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="?view-blog-posts" class="menu-link">
            <div data-i18n="Accordion">View Blog Posts</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="?teams" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Basic">Teams</div>
      </a>
    </li>

  <?php }else{ ?>
    <li class="menu-item">
      <a href="?donations" class="menu-link">
        <i class="menu-icon tf-icons bx bx-dollar"></i>
        <div data-i18n="Basic">Donations</div>
      </a>
    </li>

  <?php } ?> 

    <!-- Misc -->
    <li class="menu-item">
      <a href=""
        class="menu-link">
        <i class="menu-icon tf-icons bx bx-support"></i>
        <div data-i18n="Support">Support</div>
      </a>
    </li>

<li class="menu-item">
      <a href="../logout"
        class="menu-link">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div data-i18n="Support">Logout</div>
      </a>
    </li>
  </ul>
</aside>
<!-- / Menu -->
<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->
  <nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
  >
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
          <i class="bx bx-search fs-4 lh-0"></i>
          <input
            type="text"
            class="form-control border-0 shadow-none"
            placeholder="Search..."
            aria-label="Search..."
          />
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->
        <li class="nav-item lh-1 me-3">
          <a
            class="github-button"
            href=""
            data-icon="octicon-star"
            data-size="large"
            data-show-count="true"
            aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
            >Star</a
          >
        </li>

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="../uploads/aaa.png" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="../uploads/aaa.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block"><?=$_SESSION['fullname']; ?></span>
                    <small class="text-muted"><?=@$interface ?></small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="../logout">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
  </nav>
  <!-- / Navbar -->
<?php 
   include 'add-banner.php'; 
   include 'add-cause.php';
   include 'add-category.php';
   include 'add-team.php';
   include 'add-blog.php';
?>