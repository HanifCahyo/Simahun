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
								<h4>Form Edit Sertifikat PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/siswa/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/siswa/sertifikat/') ?>">Cetak Sertifikat PKL</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Sertifikat PKL</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Sertifikat PKL</h4>
							<p class="mb-30">Mohon Isi Data pada Form Dibawah :</p>
						</div>
					</div>
					<form action="" method="post">
						<input type="hidden" name="id" value="<?php echo $sertifikat->id ?>" />
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama_perusahaan" value="<?php echo $sertifikat->nama_perusahaan ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">ALAMAT PERUSAHAAN</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="form-control" name="alamat_perusahaan"><?php echo $sertifikat->alamat_perusahaan ?></textarea>
							</div>
						</div> -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama" value="<?php echo $sertifikat->nama ?>">
							</div>
						</div>
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TEMPAT LAHIR</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="tempat_lahir" value="<?php echo $sertifikat->tempat_lahir ?>">
							</div>
						</div> -->
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TANGGAL LAHIR</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control form-control-lg date-picker" type="text" name="tanggal_lahir" value="<?php echo $sertifikat->tanggal_lahir ?>">
							</div>
						</div> -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">JURUSAN</label>
							<div class="col-sm-12 col-md-10">
								<select class="selectpicker form-control form-control-lg" name="program_studi" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
									<option selected=""><?php echo $sertifikat->program_studi ?></option>
									<?php
									$array = array_values($program_studi);
									foreach ($array as $l) {
										echo "<option value='$l'>$l</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">KELAS</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="kelas" value="<?php echo $sertifikat->kelas ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">TANGGAL SURAT</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" type="text" name="tanggal_surat" value="<?php echo $sertifikat->tanggal_surat ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NAMA PEMBIMBING DUDI</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama_pembimbing" value="<?php echo $sertifikat->nama_pembimbing ?>">
							</div>
						</div>

						<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Instrument Penilaian</h4>
						</div>
						</div>
					<br>
					<form>
						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Disiplin :</label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_disiplin" value="<?php echo $sertifikat->angka_disiplin ?>">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Kerjasama :</label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_kerjasama" value="<?php echo $sertifikat->angka_kerjasama ?>">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Inisiatif :</label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_inisiatif" value="<?php echo $sertifikat->angka_inisiatif ?>">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Kerajinan :</label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_kerajinan" value="<?php echo $sertifikat->angka_kerajinan ?>">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Tanggung Jawab :</label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_tanggung_jawab" value="<?php echo $sertifikat->angka_tanggung_jawab ?>">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Kepribadian :</label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_kepribadian" value="<?php echo $sertifikat->angka_kepribadian ?>">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Prestasi :</label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_prestasi" value="<?php echo $sertifikat->angka_prestasi ?>">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>

						<br>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label">Ketreampilan (Skill) Yang Dipelajari :</label>
						  
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control" name="keahlian1" value="<?php echo $sertifikat->keahlian1 ?>">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_keahlian1" value="<?php echo $sertifikat->angka_keahlian1 ?>">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control" name="keahlian2" value="<?php echo $sertifikat->keahlian2 ?>">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_keahlian2" value="<?php echo $sertifikat->angka_keahlian2 ?>"> 
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control" name="keahlian3" value="<?php echo $sertifikat->keahlian3 ?>">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_keahlian3" value="<?php echo $sertifikat->angka_keahlian3 ?>">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control" name="keahlian4" value="<?php echo $sertifikat->keahlian4 ?>">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_keahlian4" value="<?php echo $sertifikat->angka_keahlian4 ?>">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control" name="keahlian5" value="<?php echo $sertifikat->keahlian5 ?>">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_keahlian5" value="<?php echo $sertifikat->angka_keahlian5 ?>">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control" name="keahlian6" value="<?php echo $sertifikat->keahlian6 ?>">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_keahlian6" value="<?php echo $sertifikat->angka_keahlian6 ?>">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control" name="keahlian7" value="<?php echo $sertifikat->keahlian7 ?>">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="number" class="form-control" name="angka_keahlian7" value="<?php echo $sertifikat->angka_keahlian7 ?>">
							</div>
						</div>
						<input type="hidden" name="nis" value="<?php echo $sertifikat->nis ?>" />
						<input type="hidden" name="status" value="<?php echo $sertifikat->status ?>" />
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