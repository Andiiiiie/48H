<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>Validation des codes <small>Les codes seront validés ici avant de créditer la porte-feuille</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                </p>

                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Montant</th>
                        <th>Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($codes as $code): ?>
                        <tr>
                            <td><?= $code['code']['code'] ?></td>
                            <td class="text-right"><?= number_format($code['code']['montant'], 0, ',', ' ') ?></td>
                            <td><?= $code['utilisateur']['prenom'] ?> <?= $code['utilisateur']['nom'] ?></td>
                            <td>
                                <a href="<?= site_url('back/code/valider/'.$code['id_insertion_code']) ?>" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                </a>
                                <a href="<?= site_url('back/code/refuser/'.$code['id_insertion_code']) ?>" class="btn btn-danger">
                                    <i class="fas fa-cancel"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
