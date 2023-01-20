
    </div>

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