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
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="<?php echo base_url('assets_deskapp/vendors/images/banner-img.png') ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Selamat Datang <div class="weight-600 font-30 text-blue"><?= htmlentities($current_user->name) ?></div>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">

			<div class="pd-ltr-20">
            <div class="product-wrap">
					<div class="product-list">
						<ul class="row">
							<li class="col-lg-3 col-md-4 col-sm-7">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url('assets_deskapp/vendors/images/product-img1.jpg')?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Monitoring Kegiatan Siswa</a></h4>
										<a href="<?php echo site_url('jurusan/guru/bimbingan/') ?>" class="btn btn-outline-primary">Masuk</a>
									</div>
								</div>
							</li>
							<li class="col-lg-3 col-md-6 col-sm-7">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url('assets_deskapp/vendors/images/product-img2.jpg')?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Cetak Pengajuan PKL</a></h4>
										<a href="<?php echo site_url('jurusan/guru/pengajuan') ?>" class="btn btn-outline-primary">Masuk</a>
									</div>
								</div>
							</li>
							<li class="col-lg-3 col-md-6 col-sm-7">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url('assets_deskapp/vendors/images/product-img3.jpg')?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="">Cetak Penarikan PKL</a></h4>
										<a href="<?php echo site_url('jurusan/guru/penarikan') ?>" class="btn btn-outline-primary">Masuk</a>
									</div>
								</div>
							</li>
							<li class="col-lg-3 col-md-6 col-sm-7">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url('assets_deskapp/vendors/images/product-img4.jpg')?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Cetak Sertifikat PKL</a></h4>
										<a href="<?php echo site_url('jurusan/guru/sertifikat') ?>" class="btn btn-outline-primary">Masuk</a>
									</div>
								</div>         
            </div>
        </div>
		</div>
        <?php $this->load->view("jurusan/guru/_partials/footer.php") ?>
    </div>
    </div>

    <?php $this->load->view("jurusan/guru/_partials/js.php") ?>

	
    <!-- Logout Modal-->
    <?php $this->load->view("jurusan/guru/_partials/modal.php") ?>

</body>

</html>