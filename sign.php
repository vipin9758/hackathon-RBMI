
<!DOCTYPE html>
<html lang="en">
  



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet">
    <!-- Flag icon css -->
    <link rel="stylesheet" href="assets/css/vendors/flag-icon.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="assets/css/iconly-icon.css">
    <link rel="stylesheet" href="assets/css/bulk-style.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="assets/css/themify.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="assets/css/fontawesome-min.css">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/weather-icons/weather-icons.min.css">
    <!-- App css -->
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <!-- <div class="col-xl-7 login_bs_validation p-0"><img class="bg-img-cover bg-center" src="assets/images/login/1.jpg" alt="looginpage"></div> -->
        <div class="col-xl-5 p-0"> 
          <div class="login-card login-dark login-bg">
            <div>
              <div><a class="logo text-center" href="index.html"><img class="img-fluid for-light m-auto" src="assets/images/logo/logo1.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo-dark.png" alt="logo"></a></div>
              <div class="login-main"> 
                <form class="theme-form">
                  <h2>Create your account</h2>
                  <p>Enter your personal details to create account</p>
                  <div class="form-group">
                    <label class="col-form-label pt-0">Your Name</label>
                    <div class="row g-2">
                      <div class="col-2">
                        <input class="form-control" type="text" required="" placeholder="First name">
                      </div>
                      <!-- <div class="col-6">
                        <input class="form-control" type="text" required="" placeholder="Last name">
                      </div> -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0 checkbox-checked">
                    <div class="form-check checkbox-solid-info">
                      <input class="form-check-input" id="solid6" type="checkbox">
                      <label class="form-check-label" for="solid6">Agree with</label><a class="ms-3 link" href="forget-password.html">Privacy Policy</a>
                    </div>
                    <button class="btn btn-primary btn-block w-100 mt-3" type="submit">unlock</button>
                  </div>
                  <div class="login-social-title">
                    <h6>Or Sign in with                 </h6>
                  </div>
                  <div class="form-group">
                   
                  </div>
                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="login.php">Sign in</a></p>
                </form>
                <?php
                include('include/db.php');
                
                
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- jquery-->
      <script src="assets/js/vendors/jquery/jquery.min.js"></script>
      <!-- bootstrap js-->
      <script src="assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
      <script src="assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
      <!--fontawesome-->
      <script src="assets/js/vendors/font-awesome/fontawesome-min.js"></script>
      <!-- password_show-->
      <script src="assets/js/password.js"></script>
      <!-- custom script -->
      <script src="assets/js/script.js"></script>
    </div>
  </body>

<!-- Mirrored from admin.pixelstrap.net/admiro/template/sign-up-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Oct 2025 04:09:24 GMT -->
</html>