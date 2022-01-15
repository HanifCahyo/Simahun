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
									<li class="breadcrumb-item active" aria-current="page">Monitoring Pekerjaan Siswa</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Bordered table End -->
				<!-- Striped table start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
						</div>
						<?php if ($this->session->flashdata('msg_success')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('msg_success') ?>
							</div>
						<?php endif ?>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Nama Kegiatan</th>
									<th>Tanggal Kegiatan</th>
									<th>Image</th>
									<th>Validasi</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($kegiatan as $aaa) :
								?>
									<tr>
										<td class="table-plus"><?php echo $aaa->name ?></td>
										<td class="table-plus"><?php echo $aaa->nama_kegiatan ?></td>
										<td><?php echo $aaa->tanggal_kegiatan ?></td>
										<td>
											<img src="<?php echo base_url('upload/kegiatan/' . $aaa->image) ?>" width="64" />
										</td>
										<td><span class="badge badge-success"><?php echo $aaa->validasi ?></td>
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
													<a class="dropdown-item" href="<?php echo site_url('jurusan/guru/kegiatan/edit/' . $aaa->id) ?>"><i class="dw dw-edit2"></i> Edit</a>
													<!-- <a class="dropdown-item" onclick="deleteConfirm('<?php echo site_url('jurusan/guru/bimbingan/delete/' . $aaa->id) ?>')" href="#!"><i class="dw dw-delete-3"></i> Delete</a> -->
												</div>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!-- Contextual classes End -->
		</div>
		<?php $this->load->view("jurusan/guru/_partials/footer.php") ?>
	</div>
	</div>
	<!-- js -->
	<?php $this->load->view("jurusan/guru/_partials/js.php") ?>


	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

	<!-- Logout Modal-->
	<?php $this->load->view("jurusan/guru/_partials/modal.php") ?>

</body>

</html>