<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("jurusan/siswa/_partials/head.php") ?>
</head>

<body>

	<?php $this->load->view("jurusan/siswa/_partials/navbar.php") ?>

	<?php $this->load->view("jurusan/siswa/_partials/sidebar.php") ?>


	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Guru Pembimbing</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/siswa/Dashboard/') ?>">Menu Utama</a></li>
									<li class="breadcrumb-item active" aria-current="page">Guru Pembimbing</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="<?php echo site_url('jurusan/siswa/bimbingan/add') ?>" role="button">
									Tambahkan Baru
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Bordered table End -->
				<!-- Striped table start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<!-- <div class="pull-left">
							<h4 class="text-blue h4">List </h4>
						</div> -->
					</div>
					<?php if ($this->session->flashdata('message')) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('message') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif ?>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Nama Guru Pembimbing</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($bimbingan as $aaa) :
							?>
								<tr>
									<!-- <th scope="row"><?php echo $no++ ?></th> -->
									<td><?php echo $aaa->name ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											<a class="dropdown-item" href="<?php echo site_url('jurusan/siswa/bimbingan/edit/' . $aaa->id) ?>"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" onclick="deleteConfirm('<?php echo site_url('jurusan/siswa/bimbingan/delete/' . $aaa->id) ?>')" href="#!"><i class="dw dw-delete-3"></i> Hapus</a>
											</div>
										</div>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Contextual classes End -->
	</div>
	<?php $this->load->view("jurusan/siswa/_partials/footer.php") ?>
	</div>
	</div>
	<!-- js -->
	<?php $this->load->view("jurusan/siswa/_partials/js.php") ?>

	<!-- Logout Modal-->
	<?php $this->load->view("jurusan/siswa/_partials/modal.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>


</body>

</html>