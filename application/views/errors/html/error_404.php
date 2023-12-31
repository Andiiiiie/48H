<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();
if (!isset($CI)) {
    $CI = new CI_Controller();
}
$CI->load->helper('url');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page d'erreur</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vertical-layout-light/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
            <div class="row flex-grow">
                <div class="col-lg-7 mx-auto text-white">
                    <div class="row align-items-center d-flex flex-row">
                        <div class="col-lg-6 text-lg-right pr-lg-4">
                            <h1 class="display-1 mb-0">404</h1>
                        </div>
                        <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                            <h2>Désolé 🥺!</h2>
                            <h3 class="font-weight-light">Le page que vous avez demandez n'existe pas.</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 text-center mt-xl-2">
                            <?php if($CI->session->userdata('niveau') >= 10): ?>
                                <a class="text-white font-weight-medium" href="<?= base_url('front/dashboard') ?>">Retourner à la page principale</a>
                            <?php else: ?>
                                <a class="text-white font-weight-medium" href="<?= base_url('back/dashboard') ?>">Retourner au tableau de bord</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 mt-xl-2">
                            <p class="text-white font-weight-medium text-center">Copyright &copy; 2023  All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets/js/off-canvas.js') ?>"></script>
<script src="<?= base_url('assets/js/hoverable-collapse.js') ?>"></script>
<script src="<?= base_url('assets/js/template.js') ?>"></script>
<script src="<?= base_url('assets/js/settings.js') ?>"></script>
<script src="<?= base_url('assets/js/todolist.js') ?>"></script>
<!-- endinject -->
</body>

</html>
