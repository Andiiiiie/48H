</div>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
<!-- NProgress -->
<script src="<?= base_url('assets/vendors/nprogress/nprogress.js')?>"></script>
<!-- Chart.js -->
<script src="<?= base_url('assets/vendors/Chart.js/dist/Chart.min.js')?>"></script>
<!-- gauge.js -->
<script src="<?= base_url('assets/vendors/gauge.js/dist/gauge.min.js')?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
<!-- iCheck -->
<script src="<?= base_url('assets/vendors/iCheck/icheck.min.js')?>"></script>
<!-- Skycons -->
<script src="<?= base_url('assets/vendors/skycons/skycons.js')?>"></script>
<!-- Flot -->
<script src="<?= base_url('assets/vendors/Flot/jquery.flot.js')?>"></script>
<script src="<?= base_url('assets/vendors/Flot/jquery.flot.pie.js')?>"></script>
<script src="<?= base_url('assets/vendors/Flot/jquery.flot.time.js')?>"></script>
<script src="<?= base_url('assets/vendors/Flot/jquery.flot.stack.js')?>"></script>
<script src="<?= base_url('assets/vendors/Flot/jquery.flot.resize.js')?>"></script>
<!-- Flot plugins -->
<script src="<?= base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
<script src="<?= base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/flot.curvedlines/curvedLines.js')?>"></script>
<!-- DateJS -->
<script src="<?= base_url('assets/vendors/DateJS/build/date.js')?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/vendors/jqvmap/dist/jquery.vmap.js')?>"></script>
<script src="<?= base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
<script src="<?= base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url('assets/vendors/moment/min/moment.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/jszip/dist/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/pdfmake/build/vfs_fonts.js') ?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url('assets/js/custom.min.js')?>"></script>

<!-- form validation -->
<script src="<?= base_url('assets/vendors/jquery-validation/jquery.validate.js') ?>"></script>
<script src="<?= base_url('assets/vendors/jquery-validation/localization/messages_fr.js') ?>"></script>
<script>
    $("form").validate({
        submitHandler: function(form) {
            form.submit();
        },
        errorElement: "span",
        errorClass: "text-danger",
    });
</script>


<!-- toastr -->
<script src="<?= base_url('assets/vendors/toastr/toastr.min.js') ?>"></script>
<?php foreach (['success', 'info', 'warning', 'error'] as $type) :
    $information = $this->session->flashdata($type);
    if (is_array($information)) :
        foreach ($information as $message) : ?>
            <script>
                toastr.<?= $type ?>("<?= $message ?>");
            </script>
        <?php endforeach;
    endif;
endforeach; ?>

</body>
</html>
