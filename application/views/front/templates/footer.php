</div>
</div>

<!-- plugins:js -->
<script src="<?=base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?=base_url('assets/vendors/chart.js/Chart.min.js')?>"></script>
<script src="<?=base_url('assets/vendors/datatables.net/jquery.dataTables.js')?>"></script>
<script src="<?=base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')?>"></script>
<script src="<?=base_url('assets/js/dataTables.select.min.js')?>"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?=base_url('assets/js/off-canvas.js')?>"></script>
<script src="<?=base_url('assets/js/hoverable-collapse.js')?>"></script>
<script src="<?=base_url('assets/js/template.js')?>"></script>
<script src="<?=base_url('assets/js/settings.js')?>"></script>
<script src="<?=base_url('assets/js/todolist.js')?>"></script>

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

<!-- endinject -->

<!-- Custom js for this page-->
<script src="<?=base_url('assets/js/dashboard.js')?>"></script>
<script src="<?=base_url('assets/js/Chart.roundedBarCharts.js')?>"></script>

<!-- End custom js for this page-->


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
