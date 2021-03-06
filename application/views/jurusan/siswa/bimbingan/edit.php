<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("jurusan/siswa/_partials/head.php") ?>
</head>

<body>

	<?php $this->load->view("jurusan/siswa/_partials/navbar.php") ?>

	<?php $this->load->view("jurusan/siswa/_partials/sidebar.php") ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Tambahkan Guru Pembimbing</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/siswa/Dashboard/') ?>">Menu Utama</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tambahkan Guru Pembimbing</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Tambahkan Guru Pembimbing</h4>
							<p class="mb-30">Mohon Isi Data pada Form Dibawah :</p>
						</div>
					</div>
					<form action="<?php echo site_url('jurusan/siswa/bimbingan/add') ?>" method="post">

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Pilih</label>
							<div class="col-sm-12 col-md-10">
								<select class="selectpicker form-control form-control-lg col-12" name="niy" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
									<?php foreach ($guru as $guru) : ?>
										<option selected="<?php echo $guru->name ?>" value="<?php echo $guru->nomor_induk ?>"><?php echo $guru->name ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<input type="hidden" name="nis" value="<?= $current_user->nomor_induk ?>" />
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
								<input class="btn btn-success" type="submit" value="SIMPAN" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Input Validation End -->

	</div>
	<?php $this->load->view("jurusan/siswa/_partials/footer.php") ?>
	</div>
	</div>
	<!-- js -->
	<?php $this->load->view("jurusan/siswa/_partials/js.php") ?>

	 <!-- Logout Modal-->
	 <?php $this->load->view("jurusan/siswa/_partials/modal.php") ?>

</body>

</html>