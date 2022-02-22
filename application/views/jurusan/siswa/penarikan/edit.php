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
								<h4>Form Edit Penarikan PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/siswa/Dashboard/') ?>">Menu Utama</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Penarikan PKL</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Penarikan PKL</h4>
							<p class="mb-30">Mohon Isi Data pada Form Dibawah :</p>
						</div>
					</div>
					<form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $penarikan->id ?>" />
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NOMOR</label>                           
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nomor" value="<?php echo $penarikan->nomor ?>">
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">LAMP</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="lamp" value="<?php echo $penarikan->lamp ?>">
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">HAL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="hal" value="<?php echo $penarikan->hal ?>">
							</div>
						</div> -->
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TANGGAL SURAT</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="tanggal_surat" value="<?php echo $penarikan->tanggal_surat ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TAHUN PELAJARAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="tahun_pelajaran" value="<?php echo $penarikan->tahun_pelajaran ?>">
							</div>
						</div> -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama_perusahaan" value="<?php echo $penarikan->nama_perusahaan ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">ALAMAT PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
                                <textarea class="form-control" name="alamat_perusahaan"><?php echo $penarikan->alamat_perusahaan ?></textarea>
							</div>
						</div>
						<div class="form-group row">
						  <label class="col-sm-12 col-md-2 col-form-label">Periode PKL</label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control date-picker" placeholder="Pilih Tanggal" name="mulai_pkl" value="<?php echo $penarikan->mulai_pkl ?>">
							</div>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control date-picker" placeholder="Pilih Tanggal" name="selesai_pkl" value="<?php echo $penarikan->selesai_pkl ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama" value="<?php echo $penarikan->nama ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">KELAS</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="kelas" value="<?php echo $penarikan->kelas ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NOMOR WA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" name="nomor" value="<?php echo $penarikan->nomor ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">EMAIL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="email" name="email" value="<?php echo $penarikan->email ?>">
							</div>
						</div>
						<input type="hidden" name="nis" value="<?php echo $penarikan->nis ?>" />
						<input type="hidden" name="status" value="<?php echo $penarikan->status ?>" />
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

</body>

</html>