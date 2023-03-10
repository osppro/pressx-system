<?php 
  require_once '../root/config.php';  
  // `userid`, `name`, `email`, `phone`, `password`, `u_type`, `date_registered`
  if (isset($_POST['register'])) {
    trim(extract($_POST));
      // `userid`, `email`, `fullname`, `u_type`, `password`, `date_registered`
      $check = $dbh->query("SELECT email FROM users WHERE (email = '$email') ")->fetchColumn();
    if(!$check){
      $password = md5($password);
      $sql = "INSERT INTO users VALUES(NULL,'$name','$email','$phone','$password','user','$today')";
      $result = dbCreate($sql);
      if($result == 1){
          echo "<script>
              alert('Registration is Successful');
              window.location = '".HOME_URL."/auth-login';
              </script>";
      }else{
          echo "<script>
            alert('User registration failed');
            window.location = '".HOME_URL."/auth-register';
            </script>";
      }
   }else{
        echo "<script>
          alert('Username already registered');
          window.location = '".HOME_URL."/auth-register';
          </script>";
      }

  }
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
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
    <title>Register | Press X</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../uploads/logo.png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
  </head>
  <body>
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="<?=SITE_URL; ?>" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="../uploads/logoo.png" style="width: 100%; padding: 10px;">
                  </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Adventure starts Here.</h4>
              <p class="mb-4">Fill up the form below to become a member !</p>

              <form id="formAuthentication" class="mb-3" action="" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Fullname</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="name"
                    placeholder="Enter your Fullname"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="email" 
                  name="email" 
                  placeholder="Enter your email" 
                  required 
                  />
                </div>
                 <div class="mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="phone" 
                  name="phone" 
                  placeholder="Enter your Phone Number" 
                  required 
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" required name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" name="register">Sign up</button>
              </form>
              <p class="text-center">
                <span>Already have an account?</span>
                <a href="auth-login">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Page JS -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>