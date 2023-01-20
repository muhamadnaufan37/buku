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
                            </div>
                        </div>
                        <form method="post" action="<?php echo base_url('superadmin/add_buku'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                                <div class="form-group">
                                    <label for="author">Author</label>
                                    <input type="text" class="form-control" id="author" name="author" required>
                                </div>
                                <div class="form-group">
                                    <label for="publisher">Penerbit</label>
                                    <input type="text" class="form-control" id="publisher" name="publisher" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_terbit">Tahun Terbit</label>
                                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Buku</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                                </div>
                                <div class="form-group">
                                    <label for="rak_buku">Rak Buku</label>
                                    <input type="number" class="form-control" id="rak_buku" name="rak_buku" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="katagori">katagori Buku</label>
                                    <select class="form-select form-select mb-3" id="katagori" name="katagori" required>
                                        <option disabled selected>Pilih katagori Buku</option>
                                        <option value="Umum">Umum</option>
                                        <option value="Pelajar">Pelajar</option>
                                    </select>
                                </div>

                                <div class="card-footer">
                                    <a type="button" href="<?php echo base_url('superadmin/akun') ?>" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>