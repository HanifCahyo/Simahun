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
								<h4>List Cetak Lembar Monitoring</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/Dashboard/') ?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List Cetak Lembar Monitoring</li>
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
							<h4 class="text-blue h4">List Cetak Monitoring</h4>
						</div>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">NIS</th>
								<th scope="col">Jurusan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1.</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2.</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3.</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
							<tr>
								<th scope="row">4.</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">5.</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
					
                    <div class="row">
                    <div class="col-sm-12 col-md-10">
                    <button type="button" class="btn btn-outline-success">Submit</button>
                    <button type="button" class="btn btn-outline-info">Print</button>
                   </div>
                   </div>
							</code></pre>
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

</body>
</html>
