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

                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Siswa</h4>
                            <p class="mb-30">Edit data siswa</p>
                        </div>
                    </div>

                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $siswa->id ?>" />
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" placeholder="" name="username" value="<?php echo $siswa->username ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('username') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Jurusan</label>
                            <div class="col-sm-12 col-md-10">
                                <select class="custom-select col-12" name="prodi_keahlian" class="form-control <?php echo form_error('prodi_keahlian') ? 'is-invalid' : '' ?>">
                                    <option selected=""><?php echo $siswa->prodi_keahlian ?></option>
                                    <option value="RPL">RPL</option>
                                    <option value="Animasi">Animasi</option>
                                    <option value="DKV">DKV</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('prodi_keahlian') ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10">
                                <input class="btn btn-success" type="submit" value="Daftar" />
                            </div>
                        </div>

                    </form>
                </div>
                <!-- Default Basic Forms End -->
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

    <!-- add sweet alert js & css in footer -->
    <script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>

</body>

</html>