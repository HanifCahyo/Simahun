<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("jurusan/guru/_partials/head.php") ?>
</head>

<body>

	<?php $this->load->view("jurusan/guru/_partials/navbar.php") ?>

	<?php $this->load->view("jurusan/guru/_partials/sidebar.php") ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<?php if ($this->session->flashdata('message')) : ?>
					<?php $this->load->view("jurusan/guru/_partials/breadcrumb.php") ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('message') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<?php
								$avatar = $current_user->avatar ?
									base_url('upload/avatar/' . $current_user->avatar)
									: get_gravatar($current_user->email)
								?>
								<img src="<?= $avatar ?>" alt="" class="avatar-photo" alt="<?= htmlentities($current_user->avatar, TRUE) ?>">
							</div>
							<h5 class="text-center h5 mb-0"><?= htmlentities($current_user->name) ?></h5>
							<p class="text-center text-muted font-14"><?= htmlentities($current_user->role) ?></p>
							<div class="profile-info">
								<!-- <h5 class="mb-20 h5 text-blue">Overview</h5>
								<ul>
									<li>
										<span>Nomor Induk Yayasan:</span>
										<?= htmlentities($current_user->nomor_induk) ?>
									</li>
									<li>
										<span>Program Studi:</span>
										<?= htmlentities($current_user->program_studi) ?>
									</li>
									<li>
										<span>Alamat Tempat Tinggal:</span>
										<?= htmlentities($current_user->alamat) ?>
									</li>
									<li>
										<span>Tempat, Tanggal Lahir:</span>
										<?= htmlentities($current_user->tempat_lahir) ?> <?= htmlentities($current_user->tanggal_lahir) ?>
									</li>
									<li>
										<span>Jenis Kelamin:</span>
										<?= htmlentities($current_user->jekel) ?>
									</li>
									<li>
										<span>Status:</span>
										<?= htmlentities($current_user->status) ?>
									</li>
								</ul> -->
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#diri" role="tab">Data Diri</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#avatar" role="tab">Ganti Avatar</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#password" role="tab">Ganti Password</a>
										</li>
									</ul>
									<div class="tab-content">

										<!-- Data Pribadi Tab start -->
										<div class="tab-pane fade show active" id="diri" role="tabpanel">
											<div class="profile-setting">
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('jurusan/guru/profile/edit_profile') ?>">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">Data Pribadi</h4>
															<div class="form-group">
																<label>Nama Lengkap</label>
																<input class="form-control form-control-lg" type="text" name="name" value="<?= $current_user->name ?>">
															</div>
															<div class="form-group">
																<label>Alamat Tempat Tinggal</label>
																<textarea class="form-control" name="alamat"><?= $current_user->alamat ?></textarea>
															</div>
															<div class="form-group">
																<label>Tempat Lahir</label>
																<input class="form-control form-control-lg" type="text" name="tempat_lahir" value="<?= $current_user->tempat_lahir ?>">
															</div>
															<div class="form-group">
																<label>Tanggal Lahir</label>
																<input class="form-control form-control-lg date-picker" type="text" name="tanggal_lahir" value="<?= $current_user->tanggal_lahir ?>">
															</div>
															<div class="form-group">
																<label>Jenis Kelamin</label>
																<div class="d-flex">
																	<div class="custom-control custom-radio mb-5 mr-20">
																		<input type="radio" id="customRadio4" name="jekel" class="custom-control-input" value="Laki-laki">
																		<label class="custom-control-label weight-400" for="customRadio4">Laki-laki</label>
																	</div>
																	<div class="custom-control custom-radio mb-5">
																		<input type="radio" id="Perempuan" name="jekel" class="custom-control-input" value="Perempuan">
																		<label class="custom-control-label weight-400" for="Perempuan">Perempuan</label>
																	</div>
																</div>
															</div>
															<div>
																<button type="submit" name="save" class="btn btn-primary">Simpan</button>
															</div>
														</li>
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">Opsional</h4>
															<div class="form-group">
																<label>Program Studi</label>
																<select class="selectpicker form-control form-control-lg" name="program_studi" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
																	<option selected=""><?= $current_user->program_studi ?></option>
																	<?php
																	$array = array_values($program_studi);
																	foreach ($array as $l) {
																		echo "<option value='$l'>$l</option>";
																	}
																	?>
																</select>
															</div>
															<!-- <div class="form-group">
																<label>Status PKL</label>
																<select class="selectpicker form-control form-control-lg" name="status" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
																	<option selected=""><?= $current_user->status ?></option>
																	<?php
																	$array = array_values($status);
																	foreach ($array as $l) {
																		echo "<option value='$l'>$l</option>";
																	}
																	?>
																</select>
															</div> -->
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" value="Simpan">
															</div>
														</li>
													</ul>
												</form>
											</div>
										</div>
										<!-- Data Pribadi Tab End -->

										<!-- Tasks Tab start -->
										<div class="tab-pane fade height-100-p" id="password" role="tabpanel">
											<div class="profile-setting">
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('jurusan/guru/profile/edit_password') ?>">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<div class="form-group">
																<label>Password</label>
																<input class="form-control form-control-lg" type="password" name="password" value="" required>
															</div>
															<div class="form-group">
																<label>Confirm Password</label>
																<input class="form-control form-control-lg" type="password" name="password_confirm" value="" required>
															</div>
															<div>
																<button type="submit" name="save" class="btn btn-primary">Simpan</button>
															</div>
														</li>
													</ul>
												</form>
											</div>
										</div>
										<!-- Tasks Tab End -->

										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="avatar" role="tabpanel">
											<div class="profile-setting">
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('jurusan/guru/profile/upload_avatar') ?>">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<div class="form-group">
																<input class="form-control form-control-lg" type="file" name="avatar">
															</div>
															<div>
																<button type="submit" name="save" class="btn btn-primary">Simpan</button>
																<a href="<?= site_url('jurusan/guru/profile/remove_avatar') ?>" class="btn btn-danger">Hapus Avatar</a>
															</div>
														</li>
													</ul>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- js -->
	<?php $this->load->view("jurusan/guru/_partials/js.php") ?>

	<!-- Logout Modal-->
	<?php $this->load->view("jurusan/guru/_partials/modal.php") ?>
</body>

</html>