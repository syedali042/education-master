<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 12:04:13 GMT -->
<head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>DES - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?=AD_IMG?>favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
		<script src="https://kit.fontawesome.com/f7e9049f48.js" crossorigin="anonymous"></script>
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=AD_PLUGINS?>bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?=AD_PLUGINS?>fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?=AD_PLUGINS?>fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?=AD_CSS?>style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to your dashboard</p>
								
								<!-- Form -->
								<form action="<?=BASEURL?>admin/signIn" method="POST">	
									<div class="form-group">
										<select name="login_role" class="form-control login_role" required="">
											<option>Sign In As</option>
											<option value="admin">Admin</option>
											<option value="teacher">Instructor / Teacher</option>
										</select>
									</div>
									<div class="form-group">
										<input class="form-control user_gmail" name="user_gmail" type="text" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="form-control user_password" name="user_password" type="text" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								  
								<!-- Social Login -->
								<div class="social-login">
									<span>Login with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?=AD_JS?>popper.min.js"></script>
        <script src="<?=AD_PLUGINS?>bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="<?=AD_PLUGINS?>slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="<?=AD_PLUGINS?>apexchart/apexcharts.min.js"></script>
		<script src="<?=AD_PLUGINS?>apexchart/chart-data.js"></script>
		
		<!-- Custom JS -->
		<script  src="<?=AD_JS?>/script.js"></script>
		<script type="text/javascript">
			$('footer').css('display', 'none');
		</script>
		
    </body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 12:04:14 GMT -->
</html>