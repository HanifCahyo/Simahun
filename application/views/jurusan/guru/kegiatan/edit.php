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
                    <?php if ($this->session->flashdata('message')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $this->session->flashdata('message') ?>
                        </div>
                    <?php endif ?>
                    <div class="clearfix">
                        <div class="pull-left"> 
                            <h4 class="text-blue h4">Validasi Kegiatan PKL</h4>
                            <!-- <p class="mb-30">Mohon Isi Data pada Form Dibawah :</p> -->
                        </div>
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
                        <input type="hidden" name="nis" value="<?php echo $kegiatan->nis ?>" />

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

    <!-- Logout Modal-->
    <?php $this->load->view("jurusan/guru/_partials/modal.php") ?>

</body>

</html>