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

                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">

                    <!-- <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Guru</h4>
                            <p class="mb-30">Edit data guru</p>
                        </div>
                    </div> -->

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nomor Induk Yayasan</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="number" placeholder="" name="nomor_induk" value="<?php echo $guru->nomor_induk ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" placeholder="" name="name" value="<?php echo $guru->name ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="password" placeholder="" name="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10">
                                <input class="btn btn-success" type="submit" value="Simpan" />
                            </div>
                        </div>

                    </form>
                </div>
                <!-- Default Basic Forms End -->
            </div>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- add sweet alert js & css in footer -->
    <script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>

</body>

</html>