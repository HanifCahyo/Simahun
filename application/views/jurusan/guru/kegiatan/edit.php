<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("jurusan/guru/_partials/head.php") ?>
</head>

<body>

    <?php $this->load->view("jurusan/guru/_partials/navbar.php") ?>

    <?php $this->load->view("jurusan/guru/_partials/sidebar.php") ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Validasi Kegiatan PKL</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/Dashboard/') ?>">Menu Utama</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/bimbingan/') ?>">Siswa Bimbingan</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('jurusan/guru/bimbingan/detail/' . $kegiatan->nis) ?>">Monitoring Kegiatan Siswa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Validasi Kegiatan PKL</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">

                    <?php if ($this->session->flashdata('msg_success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('msg_success') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>

                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Validasi Kegiatan PKL</h4>
                            <!-- <p class="mb-30">Mohon Isi Data pada Form Dibawah :</p> -->
                        </div>
                    </div>
                    <div class="gallery-wrap">
                        <ul class="row">
                            <li class="col-lg-4 col-md-6 col-sm-12">
                                <div class="da-card box-shadow">
                                    <div class="da-card-photo">
                                        <img src="<?php echo base_url('upload/kegiatan/' . $kegiatan->image) ?>" alt="">
                                        <div class="da-overlay">
                                            <div class="da-social">
                                                <h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                                                <ul class="clearfix">
                                                    <li><a href="<?php echo base_url('upload/kegiatan/' . $kegiatan->image) ?>" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?php echo $kegiatan->id ?>" />

                        <!-- <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">NAMA KEGIATAN</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control <?php echo form_error('nama_kegiatan') ? 'is-invalid' : '' ?>" type="text" name="nama_kegiatan" value="<?php echo $kegiatan->keterangan ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_kegiatan') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">KETERANGAN</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control <?php echo form_error('keterangan') ? 'is-invalid' : '' ?>" type="text" name="keterangan" value="<?php echo $kegiatan->keterangan ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('keterangan') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">TANGGAL KEGIATAN</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control date-picker <?php echo form_error('tanggal_kegiatan') ? 'is-invalid' : '' ?>" type="text" name="tanggal_kegiatan" value="<?php echo $kegiatan->tanggal_kegiatan ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_kegiatan') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">GAMBAR KEGIATAN</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" value="<?php echo $kegiatan->image ?>">
                                <input type="hidden" name="old_image" value="<?php echo $kegiatan->image ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>
                        </div> -->
                        <input type="hidden" name="old_image" value="<?php echo $kegiatan->image ?>">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">VALIDASI</label>
                            <div class="col-sm-12 col-md-10">
                                <select class="selectpicker form-control " name="validasi" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
                                    <option selected=""><?= $kegiatan->validasi ?></option>
                                    <?php
                                    $array = array_values($validasi);
                                    foreach ($array as $l) {
                                        echo "<option value='$l'>$l</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10">
                                <input class="btn btn-success" type="submit" value="SIMPAN" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Input Validation End -->

    </div>
    <?php $this->load->view("jurusan/guru/_partials/footer.php") ?>
    </div>
    </div>
    <!-- js -->
    <?php $this->load->view("jurusan/guru/_partials/js.php") ?>


    <!-- fancybox Popup Js -->
    <script src="<?php echo base_url('assets_deskapp/src/plugins/fancybox/dist/jquery.fancybox.js') ?>"></script>

    <!-- Logout Modal-->
    <?php $this->load->view("jurusan/guru/_partials/modal.php") ?>

</body>

</html>