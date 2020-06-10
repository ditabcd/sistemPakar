<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Sistem Pakar Diagnosa Awal Jenis Kulit Wajah</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/assets_login/images/icons/favicon.ico')?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/animate/animate.css')?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/css-hamburgers/hamburgers.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/animsition/css/animsition.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/select2/select2.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/daterangepicker/daterangepicker.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/css/main.css')?>">
</head>
<body style="background-color: #ffb8b8;">
	
	<div class="UTF-8">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="<?php echo base_url('login/aksi_login')?>">
					<span class="login100-form-title p-b-33">
						Login Sistem Pakar
					</span>
					
					<div class="wrap-input100">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					<div class="wrap-input100">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="<?php echo base_url('Login/register'); ?>" class="txt1">
								Create an account
							</a>
						</div>
						<div>
							<a href="<?php echo base_url('home/index');  ?>" class="txt1">
								Back to Home
							</a>
						</div>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background-color: #6675df">
							Login
						</button>
					</div>					
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url('assets/assets_login/images/bg1.jpg')?>');">
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/assets_login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/animsition/js/animsition.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/select2/select2.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/daterangepicker/daterangepicker.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/countdowntime/countdowntime.js')?>"></script>
	<script src="<?php echo base_url('assets/assets_login/js/main.js')?>"></script>

</body>
</html>