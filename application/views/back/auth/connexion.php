<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page de connexion | Administration</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('assets/vendors/animate.css/animate.min.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/css/custom.min.css') ?>" rel="stylesheet">

    <!-- toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/toastr/toastr.min.css') ?>">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <?php echo form_open('back/auth/connexion') ?>
                    <h1>Page de connexion</h1>
                    <div>
                        <span class="text-danger"><?= get_error($errors, 'email') ?></span>
                        <input type="email" class="form-control" placeholder="Email"
                               name="email" value="<?= set_value('email') ?>" required/>
                    </div>
                    <div>
                        <span class="text-danger"><?= get_error($errors, 'motDePasse') ?></span>
                        <input type="text" class="form-control" placeholder="Mot de passe"
                                name="motDePasse" value="<?= set_value('motDePasse') ?>" required/>
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Se connecter</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-dashcube"></i> Administration</h1>
                            <p>©2023 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>

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
        errorPlacement: function(error, element) {
            error.insertBefore(element);
        },
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
