<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>

    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <?php
                        $avatar = $current_user->avatar ?
                            base_url('upload/avatar/' . $current_user->avatar)
                            : get_gravatar($current_user->email)
                        ?>
                        <img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->avatar, TRUE) ?>">
                    </span>
                    <span class="user-name"><?= htmlentities($current_user->name) ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="<?php echo site_url('admin/profile/') ?>"><i class="dw dw-user1"></i> Profil</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="dw dw-logout"></i> Keluar</a>
                </div>
            </div>
        </div>
    </div>
</div>