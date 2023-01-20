<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title"><?php echo $page_title ?></h3>
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

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title"><?php echo $page_title ?></h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="<?php echo base_url('superadmin/add_akun') ?>" class="btn btn-outline-primary me-2"><i class="fas fa-user"></i> Tambah Pengguna</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Nama</th>
                                        <th>Level Akun</th>
                                        <th>Status Akun</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($alluser as $user) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $user['nama']; ?></td>
                                            <td>
                                                <span>
                                                    <?php if ($user['role_id'] == '1') { ?>
                                                        <div type="button" class="btn btn-block btn-danger btn-sm disabled">Superadmin</div>
                                                    <?php } ?>
                                                </span>
                                                <span>
                                                    <?php if ($user['role_id'] == '2') { ?>
                                                        <div type="button" class="btn btn-block btn-warning btn-sm disabled">Admin Koordinator</div>
                                                    <?php } ?>
                                                </span>
                                                <span>
                                                    <?php if ($user['role_id'] == '3') { ?>
                                                        <div type="button" class="btn btn-block btn-success btn-sm disabled">Masyarakat</div>
                                                    <?php } ?>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <?php if ($user['is_active'] == '0') { ?>
                                                        <div type="button" class="btn btn-block btn-secondary btn-sm disabled">Akun Tidak Aktif</div>
                                                    <?php } ?>
                                                </span>
                                                <span>
                                                    <?php if ($user['is_active'] == '1') { ?>
                                                        <div type="button" class="btn btn-block btn-outline-success btn-sm disabled">Akun Aktif</div>
                                                    <?php } ?>
                                                </span>
                                            </td>
                                            <td><?= $user['created_at']; ?></td>
                                            <td>
                                                <div class="actions" style="position: center;">
                                                    <a href="<?= base_url('superadmin/edit_akun/?id=' . $user['id']) ?>" class="btn btn-sm bg-success-light me-2">
                                                        <span class="feather-edit"></span>
                                                    </a>
                                                    <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('superadmin/delete_akun/' . $user['id']) ?>" class="btn btn-sm bg-danger-light">
                                                        <span class="feather-trash"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>