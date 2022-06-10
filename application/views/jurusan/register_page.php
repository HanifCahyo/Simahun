<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets_deskapp/vendors/images/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets_deskapp/vendors/images/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets_deskapp/vendors/images/favicon-16x16.png') ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_deskapp/vendors/styles/core.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_deskapp/vendors/styles/icon-font.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_deskapp/src/plugins/jquery-steps/jquery.steps.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_deskapp/vendors/styles/style.css') ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="<?php echo base_url('assets_deskapp/vendors/images/deskapp-logo.svg') ?>" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="<?php echo site_url('jurusan/auth/login') ?>">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?php echo base_url('assets_deskapp/vendors/images/register-page-img.png') ?>" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Register To DeskApp</h2>
						</div>
						<?php if ($this->session->flashdata('message_error')) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<?= $this->session->flashdata('message_error') ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif ?>
						<form action="<?php echo site_url('jurusan/auth/register') ?>" method="post" enctype="multipart/form-data">

							<div class="input-group custom">
								<input type="username" class="form-control form-control-lg <?= form_error('username') ? 'invalid' : '' ?>" placeholder="Username" name="username" value="<?= set_value('username') ?>" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg <?= form_error('prodi_keahlian') ? 'invalid' : '' ?>" placeholder="Program Studi Keahlian" name="prodi_keahlian" value="<?= set_value('prodi_keahlian') ?>" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-open-book"></i></span>
								</div>
								<div class="invalid-feedback">
									<?= form_error('prodi_keahlian') ?>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg <?= form_error('password') ? 'invalid' : '' ?>" placeholder="**********" name="password" value="<?= set_value('password') ?>" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
								<div class="invalid-feedback">
									<?= form_error('password') ?>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg <?= form_error('password_confirm') ? 'invalid' : '' ?>" placeholder="**********" name="password_confirm" value="<?= set_value('password_confirm') ?>" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
								<div class="invalid-feedback">
									<?= form_error('password_confirm') ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<input class="btn btn-primary btn-lg btn-block" type="submit" value="Register">
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="<?php echo site_url('jurusan/auth/login') ?>">Login To Account</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/core.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/script.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/process.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/layout-settings.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/jquery-steps/jquery.steps.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/steps-setting.js') ?>"></script>
</body>

</html>