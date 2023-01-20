<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Disipusda</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/home') ?>/img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets/home') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/home') ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/home') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/template1') ?>/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/home') ?>/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?php echo base_url('home') ?>" class="logo d-flex align-items-center">
                <img src="<?php echo base_url('assets/home') ?>/img/logo.png" alt="">
                <span>Disipusda</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo base_url('home') ?>">Home</a></li>
                    <li><a class="getstarted scrollto" href="<?php echo base_url('landing') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <center>
                        <br>
                        <br>
                        <br>
                        <h1 data-aos="fade-up">Dinas Perpustakaan Daerah Kabupaten Purwakarta</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">Bersama Anda Layanan Kami Istimewa</h2>
                    </center>
                    <br>
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title"><?php echo $page_title ?></h3>
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
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>

    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="<?php echo base_url('assets/home') ?>/img/logo.png" alt="">
                            <span>Disipusda</span>
                        </a>
                        <p>Bersama Anda Layanan Kami Istimewa.</p>
                        <div class="social-links mt-3">
                            <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="" class="youtube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jalan Mr. Dr. Kusumahatmaja No. 8<br>
                            <strong>Phone:</strong> (0264) 200640<br>
                            <strong>Email:</strong> -<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Doni Kurniawan</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/home') ?>/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('assets/home') ?>/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/js/feather.min.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/plugins/apexchart/chart-data.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/plugins/datatables/datatables.min.js"></script>
<script src="<?php echo base_url('assets/template1') ?>/js/script.js"></script>

    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="<?php echo base_url('assets') ?>/alert.js"></script>
    <?php echo "<script>" . $this->session->flashdata('message') . "</script>" ?>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/home') ?>/js/main.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

</body>

</html>