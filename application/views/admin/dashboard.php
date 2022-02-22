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
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>