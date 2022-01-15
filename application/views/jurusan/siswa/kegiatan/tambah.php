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
								<h4>Input Kegiatan PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/siswa/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Input Kegiatan PKL</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<?php if ($this->session->flashdata('message')) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('message') ?>
						</div>
					<?php endif ?>
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Input Kegiatan PKL</h4>
							<p class="mb-30">Mohon Isi Data pada Form Dibawah :</p>
						</div>
					</div>
					<form action="<?php echo site_url('jurusan/siswa/kegiatan/tambah') ?>" method="post" enctype="multipart/form-data">

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA KEGIATAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama_kegiatan">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">KETERANGAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="keterangan">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TANGGAL KEGIATAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" type="text" name="tanggal_kegiatan">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">GAMBAR KEGIATAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image">
								<div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
							</div>
						</div>
						<input type="hidden" name="nis" value="<?= $current_user->nomor_induk ?>" />
						<div class="form-group row">
							<div class="col-sm-12 col-md-10">
								<input class="btn btn-success" type="submit" value="INPUT KEGIATAN" />
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