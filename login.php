
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
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
  </head>
  <body>
   
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7 login_one_image"><img class="bg-img-cover bg-center" src="assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card login-dark login-bg">
            <div>
              <div><a class="logo" href="index.php"><img class="img-fluid for-light m-auto" src="include/logo.png" alt="looginpage"><img class="for-dark" src="include/logo.png" alt="logo"></a></div>
              <div class="login-main"> 
                <form class="theme-form"   action='' method='POST'>
                  <h2 class="text-center">Sign in to account</h2>
                  <p class="text-center">Enter your email &amp; password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" required="" name='email' placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="pass" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                   </span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0 checkbox-checked">
                    <div class="form-check checkbox-solid-info">
                      <input class="form-check-input" id="solid6" type="checkbox">
                      <label class="form-check-label" for="solid6">Remember password</label>
                    </div><a class="link" href="forget-password.html">Forgot password?</a>
                    <div class="text-end mt-3">
                      <!-- <button class="btn btn-primary btn-block w-100" type="submit">Sign in                 </button> -->
                        <input class="btn btn-primary btn-block w-100" id="solid6" name='submit'  type="submit"> 
                    </div>
                  </div>
                  <div class="login-social-title">
                    <h6>Or Sign in with               </h6>
                  </div>
                 
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign.php">Create Account</a></p>
                </form>

                  <?php
	// Start the session at the top
	

	// Include database connection
	include('include/db.php');
	include('include/function.php');

	if (isset($_POST['submit'])) {
        
 
		
		$name = htmlspecialchars(trim($_POST['email']));
      
		$password = htmlspecialchars(trim($_POST['pass']));

   
		$query = "SELECT * FROM `user` WHERE `email` = ? AND `pass` = ?";
         
		$stmt = $conn->prepare($query);

		$stmt->bind_param("ss", $name, $password);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {

		
			session_start();
			$user = $result->fetch_assoc();
     
			$_SESSION['user'] = $user['name'] ;
			$_SESSION['email'] = $user['email'];
			$_SESSION['id'] = $user['uniqe_id'];
     
sweet('login in Dashboard','',   'success');
go('dashboard.php','2000');
						exit;
		} else {

			echo "<script>const notyf = new Notyf();
notyf.error('User name and password Do not Match');</script>";
		}
	}
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


</html>