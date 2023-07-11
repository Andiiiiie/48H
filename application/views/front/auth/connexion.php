
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo">
                        <img src="<?=base_url('assets/images/logo.svg')?>" alt="logo">
                    </div>
                    <h6 class="font-weight-light">Connecter votre compte, pour continuer.</h6>
                    <?php echo form_open('front/auth/connexion', array('class'=>'pt-3')); ?>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" placeholder="Email" value="john.doe@example.com"
                                name="email" required>
                            <span class="text-danger"><?= get_error($errors, 'email') ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Mot de passe" value="password123"
                                name="motDePasse" required>
                            <span class="text-danger"><?= get_error($errors, 'motDePasse') ?></span>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Connexion</button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                            Vous n'avez pas de compte? <a href="<?= site_url('front/auth/inscription') ?>" class="text-primary">Créer</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->

