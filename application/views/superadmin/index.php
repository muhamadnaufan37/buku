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
                                <li class="breadcrumb-item"><a href="<?php echo base_url('petugas') ?>">Home</a></li>
                            <?php } ?>
                            <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>