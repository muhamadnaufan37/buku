
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <?php if ($user['role_id'] == '1') { ?>
                                <a href="<?php echo base_url('superadmin') ?>"><i class="feather-grid"></i> <span> Dashboard</span></a>
                            <?php } ?>
                            <?php if ($user['role_id'] == '2') { ?>
                                <a href="<?php echo base_url('admin') ?>"><i class="feather-grid"></i> <span> Dashboard</span></a>
                            <?php } ?>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li>
                            <a href="<?php echo base_url('superadmin/akun') ?>"><i class="fas fa-users"></i> <span>Pengguna</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('superadmin/buku') ?>"><i class="fas fa-book"></i> <span>Kelola Buku Perpustakaan</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>