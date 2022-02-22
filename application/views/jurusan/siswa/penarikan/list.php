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
								<h4>Cetak Penarikan PKL</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/siswa/Dashboard/') ?>">Menu Utama</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cetak Penarikan PKL</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="<?php echo site_url('jurusan/siswa/penarikan/add') ?>" role="button">
									Tambahkan Baru
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Bordered table End -->
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pb-20">
						<?php if ($this->session->flashdata('message')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('message') ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif ?>
						<table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Nama Perusahaan</th>
                                    <th>Alamat Perusahaan</th>
                                    <th>Nama Lengkap</th>
									<th>Status</th>
                                    <th class="datatable-nosort">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($penarikan as $aaa) :
                                ?>
                                    <tr>
                                        <td class="table-plus"><?php echo $aaa->nama_perusahaan ?></td>
                                        <td><?php echo $aaa->alamat_perusahaan ?></td>
                                        <td><?php echo $aaa->nama ?></td>
										<td><span class="badge badge-danger" <?php echo $aaa->status ?>>Belum diapprove</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <!-- <a class="dropdown-item" href="<?php echo site_url('jurusan/siswa/penarikan/print/' . $aaa->id) ?>"><i class="dw dw-print"></i> Print</a> -->
                                                    <a class="dropdown-item" href="<?php echo site_url('jurusan/siswa/penarikan/edit/' . $aaa->id) ?>"><i class="dw dw-edit2"></i> Edit</a>
                                                    <a class="dropdown-item" onclick="deleteConfirm('<?php echo site_url('jurusan/siswa/penarikan/delete/' . $aaa->id) ?>')" href="#!"><i class="dw dw-delete-3"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php
                                $no = 1;
                                foreach ($penarikan2 as $aaa) :
                                ?>
                                    <tr>
                                        <td class="table-plus"><?php echo $aaa->nama_perusahaan ?></td>
                                        <td><?php echo $aaa->alamat_perusahaan ?></td>
                                        <td><?php echo $aaa->nama ?></td>
										<td><span class="badge badge-success" <?php echo $aaa->status ?>>Sudah diapprove</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="<?php echo site_url('jurusan/siswa/penarikan/print/' . $aaa->id) ?>"><i class="dw dw-print"></i> Print</a>
                                                    <a class="dropdown-item" href="<?php echo site_url('jurusan/siswa/penarikan/edit/' . $aaa->id) ?>"><i class="dw dw-edit2"></i> Edit</a>
                                                    <a class="dropdown-item" onclick="deleteConfirm('<?php echo site_url('jurusan/siswa/penarikan/delete/' . $aaa->id) ?>')" href="#!"><i class="dw dw-delete-3"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
					</div>
				</div>
				<!-- Simple Datatable End -->
			</div>
		</div>

		<!-- Contextual classes End -->
	</div>
	<?php $this->load->view("jurusan/siswa/_partials/footer.php") ?>

	<!-- js -->
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/core.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/script.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/process.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/layout-settings.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/dataTables.responsive.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js') ?>"></script>
	<!-- buttons for Export datatable -->
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/dataTables.buttons.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/buttons.bootstrap4.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/buttons.print.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/buttons.html5.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/buttons.flash.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/pdfmake.min.js') ?>"></script>
	<script src="<?php echo base_url('assets_deskapp/src/plugins/datatables/js/vfs_fonts.js') ?>"></script>
	<!-- Datatable Setting js -->
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/datatable-setting.js') ?>"></script>


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