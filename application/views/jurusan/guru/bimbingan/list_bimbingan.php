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
								<h4>List Pengajuan PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List Pengajuan PKL</li>
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
							<h4 class="text-blue h4">List </h4>
						</div>
					</div>
					<?php if ($this->session->flashdata('msg_success')) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('msg_success') ?>
						</div>
					<?php endif ?>
					<table class="table table-striped">
						<thead>
						<tr>
								<th scope="col">Nomor Induk Siswa</th>
								<th scope="col">Nama</th>
								<th scope="col">Status</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$no = 1;
							foreach ($bimbingan as $aaa) :
							?>
								<tr>
									<th scope="row"><?php echo $aaa->nomor_induk ?></th>
									<td><?php echo $aaa->name ?></td>
									<td><?php echo $aaa->status ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="<?php echo site_url('jurusan/guru/bimbingan/detail/' . $aaa->nomor_induk) ?>"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" onclick="deleteConfirm('')" href="#!"><i class="dw dw-delete-3"></i> Delete</a>
												<a class="dropdown-item" href="#"><i class="dw dw-print"></i> Print</a>
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
	<?php $this->load->view("jurusan/guru/_partials/footer.php") ?>
	</div>
	</div>
	<!-- js -->
	<?php $this->load->view("jurusan/guru/_partials/js.php") ?>

	<!-- Logout Modal-->
	<?php $this->load->view("jurusan/guru/_partials/modal.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>


</body>

</html>