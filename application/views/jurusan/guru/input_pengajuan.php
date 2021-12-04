<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("jurusan/guru/_partials/head.php") ?>
</head>


<body>

	<?php $this->load->view("jurusan/guru/_partials/navbar.php") ?>

	<?php $this->load->view("jurusan/guru/_partials/sidebar.php") ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Input Pengajuan PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Input Pengajuan PKL</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Input Pengajuan PKL</h4>
							<p class="mb-30">Mohon Isi Data pada Form Dibawah :</p>
						</div>
					</div>
					<form action="<?php echo site_url('jurusan/guru/input_pengajuan') ?>" method="post">
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TAHUN PELAJARAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="tahun_pelajaran">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama_perusahaan">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">ALAMAT PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="alamat_perusahaan">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">BIDANG USAHA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="bidang_usaha">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">PERIODE PKL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="periode_pkl">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">KELAS</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="kelas">
							</div>
						</div>
						<input type="hidden" name="id_user" value="<?= $current_user->nis ?>" />
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
								<input class="btn btn-success" type="submit" value="INPUT PERMOHONAN DATA SISWA PKL" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Input Validation End -->

	</div>
	<?php $this->load->view("jurusan/guru/_partials/footer.php") ?>
	</div>
	</div>
	<!-- js -->
	<?php $this->load->view("jurusan/guru/_partials/js.php") ?>

</body>

</html>