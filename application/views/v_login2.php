
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Monitoring & Pengendali Inkubator Bayi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url();?>assets/production/images/icon-title-bar.ico" type="image/ico" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login_v16/css/main.css">
<!--===============================================================================================-->
		<link rel="stylesheet" href="<?php echo base_url('assets/custome/style.css'); ?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/Login_v16/images/bg-02.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title2 p-b-41">
                Sistem Monitoring dan Pengendali Inkubator Bayi
				</span>
                <?=$this->session->flashdata('notif')?>
				<form class="login100-form validate-form p-b-33 p-t-5" action="<?php echo base_url('login/aksi_login'); ?>" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="User_Name" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
				<br />
				<p style="text-align: center;">©2018 Laboratorium Teknik Kontrol Otomat Departemen Teknik Elektro Universitas Diponegoro</p>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login_v16/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login_v16/js/main.js"></script>

</body>
</html>