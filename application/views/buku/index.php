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
                                    <a href="<?php echo base_url('superadmin/add_buku') ?>" class="btn btn-outline-primary me-2"><i class="fas fa-book"></i> Tambah Buku</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Judul Buku</th>
                                        <th>Author</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Penerbit</th>
                                        <th>jumlah</th>
                                        <th>Katagori</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($allbuku as $user) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $user['judul']; ?></td>
                                            <td><?= $user['author']; ?></td>
                                            <td><?= $user['publisher']; ?></td>
                                            <td><?= $user['tahun_terbit']; ?></td>
                                            <td><?= $user['jumlah']; ?></td>
                                            <td><?= $user['katagori']; ?></td>
                                            <td><?= $user['created_at']; ?></td>
                                            <td>
                                                <div class="actions" style="position: center;">
                                                    <a href="<?= base_url('superadmin/edit_buku/?id_buku=' . $user['id_buku']) ?>" class="btn btn-sm bg-success-light me-2">
                                                        <span class="feather-edit"></span>
                                                    </a>
                                                    <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('superadmin/delete_buku/' . $user['id_buku']) ?>" class="btn btn-sm bg-danger-light">
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