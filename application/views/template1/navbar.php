<div class="header">

    <div class="header-left">
        <?php if ($user['role_id'] == '1') { ?>
            <a href="<?php echo base_url('superadmin') ?>" class="logo">
            <?php } ?>
            <?php if ($user['role_id'] == '2') { ?>
                <a href="<?php echo base_url('petugas') ?>" class="logo">
                <?php } ?>
                <img src="<?php echo base_url('assets/template1') ?>/img/Purwakarta.png" alt="Logo">
                </a>
                <?php if ($user['role_id'] == '1') { ?>
                    <a href="<?php echo base_url('superadmin') ?>" class="logo logo-small">
                    <?php } ?>
                    <?php if ($user['role_id'] == '2') { ?>
                        <a href="<?php echo base_url('petugas') ?>" class="logo logo-small">
                        <?php } ?>
                        <img src="<?php echo base_url('assets/template1') ?>/img/Purwakarta.png" alt="Logo" width="30" height="30">
                        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item zoom-screen me-2">
            <a href="#" class="nav-link header-nav-list win-maximize">
                <img src="<?php echo base_url('assets/template1') ?>/img/icons/header-icon-04.svg" alt="">
            </a>
        </li>

        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="<?php echo base_url('assets/template/dist/img/') . $user['image']; ?>" width="31" alt="user">
                    <div class="user-text">
                        <h6><?= $user['nama']; ?></h6>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="<?php echo base_url('assets/template/dist/img/') . $user['image']; ?>" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6><?= $user['nama']; ?></h6>
                        <p class="text-muted mb-0"><?= ($user['role_id'] == "1") ? 'Superadmin' : '<a class="text-muted">Tidak ada title</a>'; ?></p>
                    </div>
                </div>
                <a class="dropdown-item" href="<?php echo base_url('landing/logout') ?>">Logout</a>
            </div>
        </li>

    </ul>

</div>