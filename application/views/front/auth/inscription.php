<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo">
                        <img src="<?= base_url('assets/images/logo.svg') ?>" alt="logo">
                    </div>
                    <h4>Nouveau ici?</h4>
                    <h6 class="font-weight-light">S'inscrire facilement. C'est rapide!</h6>
                    <?php echo form_open('front/auth/inscription', array('class'=>'pt-3')); ?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Nom" required
                                   name="nom" value="<?php echo set_value('nom') ?>">
                            <span class="text-danger"><?= get_error($errors, 'nom') ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"placeholder="Prénom" required
                                   name="prenom" value="<?php echo set_value('prenom') ?>">
                            <span class="text-danger"><?= get_error($errors, 'prenom') ?></span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" placeholder="Email" required
                                   name="email" value="<?php echo set_value('email') ?>">
                            <span class="text-danger"><?= get_error($errors, 'email') ?></span>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control form-control-lg" placeholder="Date de naissance" required
                                   name="date_de_naissance" value="<?php echo set_value('date_de_naissance') ?>">
                            <span class="text-danger"><?= get_error($errors, 'date_de_naissance') ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Mot de passe" required minlength="4"
                                   name="motDePasse" value="<?php echo set_value('motDePasse') ?>">
                            <span class="text-danger"><?= get_error($errors, 'motDePasse') ?></span>
                        </div>
                        <div class="mb-4">
                            J'accepte les termes et conditions en poursuivant.
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">
                                S'inscrire
                            </button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                            Vous avez déjà un compte? <a href="<?= site_url('front/auth/connexion') ?>" class="text-primary">Se connecter</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>