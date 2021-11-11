<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<?php $this->load->view("admin/_partials/sidebar.php") ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<?php if ($this->session->flashdata('message')) : ?>
					<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
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
								<!-- <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a> -->
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
								<h5 class="mb-20 h5 text-blue">Overview</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										<?= htmlentities($current_user->email) ?>
									</li>
								</ul>
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
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/profile/edit_profile') ?>">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<div class="form-group">
																<label>Name</label>
																<input class="form-control form-control-lg" type="text" name="Name" value="<?= $current_user->name ?>" required maxlength="32">
															</div>
															<div class="form-group">
																<label>Email</label>
																<input class="form-control form-control-lg" type="email" name="email" value="<?= $current_user->email ?>">
															</div>
															<div>
																<button type="submit" name="save" class="btn btn-primary">Save Update</button>
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
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/profile/edit_password') ?>">
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
																<button type="submit" name="save" class="btn btn-primary">Save Update</button>
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
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/profile/upload_avatar') ?>">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<div class="form-group">
																<input class="form-control form-control-lg" type="file" name="avatar">
															</div>
															<div>
																<button type="submit" name="save" class="btn btn-primary">Save Update</button>
																<a href="<?= site_url('admin/profile/remove_avatar') ?>" class="txt-red">Remove Avatar</a>
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
	<?php $this->load->view("admin/_partials/js.php") ?>
	<script>
		window.addEventListener('DOMContentLoaded', function() {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function() {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function() {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function() {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>
	<script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});
	</script>
</body>

</html>