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
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Cetak Sertifikat PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cetak Sertifikat PKL</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>

				

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Cetak Sertifikat PKL</h4>
						</div>
						
					</div>
					<br>
					<form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama Perusahaan</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tempat, Tanggal Lahir</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="url">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NIS</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="tel">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kompetensi Keahlian</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-2 col-form-label">Periode PKL</label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control date-picker" placeholder="Pilih Tanggal">
							</div>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control date-picker" placeholder="Pilih Tanggal">
							</div>
						</div>

							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Predikat</label>
							<div class="col-sm-12 col-md-5">
								<select class="custom-select form-control">
									<option value="">*Pilih Salah Satu</option>
									<option value="">Sangat Baik</option>
									<option value="Amsterdam">Baik</option>
									<option value="Berlin">Cukup</option>
									<option value="Frankfurt">Kurang</option>
								</select>
							</div>
						</div>

						<br>

					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Instrument Penilaian</h4>
						</div>
						</div>
					<br>
					<form>
						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Ilmu Pengetahuan (Knowledge) :</label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>
						<br>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label">Ketreampilan (Skill) Yang Dipelajari :</label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-3 col-form-label"></label>
							<div class="col-sm-7 col-md-5">
								<input type="text" class="form-control">
							</div>

								<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Sikap (Attitude) :</label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>


						<div class="form-group row">
						  <label class="col-sm-12 col-md-9 col-form-label">Presentasi (Pelaksanaan Di Sekolah) :</label>
							<div class="col-sm-7 col-md-1">
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-7 col-md-5">
							</div>
						</div>
				
				</form>
						<div class="form-group row">
                            <div class="col-sm-12 col-md-10">
                                <input class="btn btn-success" type="submit" value="Submit" />
                                <input class="btn btn-success" type="submit" value="Print" />
                            </div>
                        </div>
			</div>
				<!-- success Popup html End -->
			</div>
			<?php $this->load->view("jurusan/guru/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("jurusan/guru/_partials/js.php") ?>
</body>
</html>