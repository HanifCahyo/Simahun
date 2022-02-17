<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Edit Pengajuan PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('admin/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item"><a href="<?php echo site_url('admin/Pengajuan/') ?>">Cetak Pengajuan PKL</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Pengajuan PKL</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Pengajuan PKL</h4>
							<p class="mb-30">Mohon Isi Data pada Form Dibawah :</p>
						</div>
					</div>
					<form action="" method="post">
						<input type="hidden" name="id" value="<?php echo $pengajuan->id ?>" />
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NOMOR SURAT</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nomor_surat" value="<?php echo $pengajuan->nomor_surat ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TANGGAL SURAT</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" type="text" name="tanggal_surat" value="<?php echo $pengajuan->tanggal_surat ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TAHUN PELAJARAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="tahun_pelajaran" value="<?php echo $pengajuan->tahun_pelajaran ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama_perusahaan" value="<?php echo $pengajuan->nama_perusahaan ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">ALAMAT PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="form-control" name="alamat_perusahaan"><?php echo $pengajuan->alamat_perusahaan ?></textarea>
							</div>
						</div>
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">BIDANG USAHA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="bidang_usaha" value="<?php echo $pengajuan->bidang_usaha ?>">
							</div>
						</div> -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">MULAI PKL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" type="text" name="mulai_pkl" value="<?php echo $pengajuan->mulai_pkl ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">SELESAI PKL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" type="text" name="selesai_pkl" value="<?php echo $pengajuan->selesai_pkl ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama" value="<?php echo $pengajuan->nama ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">KELAS</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="kelas" value="<?php echo $pengajuan->kelas ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NOMOR WA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" name="nomor" value="<?php echo $pengajuan->nomor ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">EMAIL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="email" name="email" value="<?php echo $pengajuan->email ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NIS</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" name="nis" value="<?php echo $pengajuan->nis ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">STATUS</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="status">
									<option selected=""><?php echo $pengajuan->status ?></option>
									<option value="1">Belum diapprove</option>
									<option value="2">Sudah diapprove</option>
								</select>
							</div>
						</div>

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
	<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
	</div>
	<!-- js -->
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>