<div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome <?= $user['nama']; ?>!</h3>
                                <ul class="breadcrumb">
                                    <?php if ($user['role_id'] == '1') { ?>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('superadmin') ?>">Home</a></li>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == '2') { ?>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Home</a></li>
                                    <?php } ?>
                                    <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Total Account</h6>
                                        <h3>50055</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="<?php echo base_url('assets/template1') ?>/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Buku</h6>
                                        <h3>50+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="<?php echo base_url('assets/template1') ?>/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>