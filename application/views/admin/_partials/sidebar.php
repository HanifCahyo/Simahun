<div class="left-side-bar">
<div class="brand-logo">
        <a href="index.html">
            <img src="<?php echo base_url('assets_deskapp/vendors/images/simahun.png') ?>" alt="" class="dark-logo">
            <img src="<?php echo base_url('assets_deskapp/vendors/images/simahun.png') ?>" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Menu Utama</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('admin') ?>">Dasbor</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-add-user"></span><span class="mtext">Guru</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('admin/guru/') ?>">Data Pengguna</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-add-user"></span><span class="mtext">Siswa</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('admin/siswa/') ?>">Data Pengguna</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-print"></span><span class="mtext">Hubungan Industri</span>
                    </a>
                    <ul class="submenu">
                        <li><a href=<?php echo site_url('admin/pengajuan') ?>>Cetak Pengajuan PKL</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href=<?php echo site_url('admin/penarikan') ?>>Cetak Penarikan PKL</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href=<?php echo site_url('admin/sertifikat') ?>>Cetak Sertifikat PKL</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>