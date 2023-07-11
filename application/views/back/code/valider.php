<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Valider ce code</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <p class="text-muted font-13 m-b-30">
                        Vous confirmer le code <span class="text-primary"><?= $code['code']['code'] ?></span>
                        pour créditer <span class="text-primary"><?= $code['utilisateur']['prenom'] ?> <?= $code['utilisateur']['nom'] ?></span>
                        de <span class="text-success">MGA <?= number_format($code['code']['montant'], 0, ',', ' ') ?></span> ?
                    </p>
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post">
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-success" href="<?= site_url('back/code/validation') ?>">Retourner à la liste</a>
                                <button type="submit" class="btn btn-primary">Valider la transaction</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>