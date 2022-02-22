<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <?php if ($this->session->flashdata('message')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('message') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Nomor Induk Yayasan</th>
                                <th>Nama</th>
                                <th class="datatable-nosort">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($guru as $guru) : ?>
                                <tr>
                                    <td class="table-plus"><?php echo $guru->nomor_induk ?></td>
                                    <td><?php echo $guru->name ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Lihat</a>
                                                <a class="dropdown-item" href="<?php echo site_url('admin/guru/edit/' . $guru->nomor_induk) ?>"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" onclick="deleteConfirm('<?php echo site_url('admin/guru/delete/' . $guru->nomor_induk) ?>')" href="#!"><i class="dw dw-delete-3"></i> Hapus</a>
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
        <?php $this->load->view("admin/_partials/footer.php") ?>
    </div>
    </div>

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

    <?php $this->load->view("admin/_partials/modal.php") ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>