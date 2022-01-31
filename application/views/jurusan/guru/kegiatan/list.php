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
								<h4>Monitoring Pekerjaan Siswa</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/bimbingan/') ?>">Siswa Bimbingan</a></li>
									<li class="breadcrumb-item active" aria-current="page">Monitoring Pekerjaan Siswa</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Checkbox select Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Table with Checckbox select</h4>
					</div>
					<div class="pb-20">
						<?php if ($this->session->flashdata('msg_success')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('msg_success') ?>
							</div>
						<?php endif ?>
						<table class="checkbox-datatable table nowrap">
							<thead>
								<tr>
									<th>
										<div class="dt-checkbox">
											<input type="checkbox" name="select_all" value="1" id="example-select-all">
											<span class="dt-checkbox-label"></span>
										</div>
									</th>
									<th>Nama Kegiatan</th>
									<th>Tanggal Kegiatan</th>
									<th>Waktu Kegiatan</th>
									<th>Lokasi</th>
									<th>Status approve</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($kegiatan as $aaa) :
								?>
									<tr>
										<td class="table-plus"><?php echo $aaa->nama_kegiatan ?></td>
										<td><?php echo $aaa->tanggal_kegiatan ?></td>
										<td><?php echo $aaa->waktu_mulai ?>-<?php echo $aaa->waktu_selesai ?></td>
										<td><?php echo $aaa->lokasi ?></td>
										<td><span class="badge badge-success"><?php echo $aaa->validasi ?></td>
										<!-- <td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdown-item" onclick="checkedConfirm('<?php echo site_url('jurusan/guru/bimbingan/checked/' . $aaa->id) ?>')" href="#!"><i class="dw dw-checked"></i> Approve</a>
													<a class="dropdown-item" href="#"><i class="dw dw-cancel"></i> Salah</a>
												</div>
											</div>
										</td> -->
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Checkbox select Datatable End -->
			</div>
			<?php $this->load->view("jurusan/guru/_partials/footer.php") ?>
		</div>
	</div>
	<!-- js -->
	<?php $this->load->view("jurusan/guru/_partials/js.php") ?>

	<!-- Logout Modal-->
	<?php $this->load->view("jurusan/guru/_partials/modal.php") ?>
</body>

</html>