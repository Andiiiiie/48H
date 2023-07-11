<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Créditer mon porte feuille</h3>
                    <h6 class="font-weight-normal mb-0">Une manière sécurisée d'approvisionner votre compte</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?= form_open('front/porte_monnaie/ajouter') ?>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" name="code"
                                    value="<?= set_value('code') ?>" >
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-primary" type="submit">
                                        <i class="mdi mdi-credit-card"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="text-danger"><?= get_error($error, 'code') ?></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Liste des derniers codes</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="display expandable-table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Montant</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($codes); $i++): ?>
                                    <tr>
                                        <td>
                                            <span id="code<?= $i ?>"><?= $codes[$i]['code'] ?></span>
                                            <a class="mdi mdi-content-copy" onclick="copy('code<?= $i ?>')" href="#"></a>
                                        </td>
                                        <td class="text-right"><?= number_format($codes[$i]['montant'], 0, ',', ' ') ?></td>
                                        <?php if($codes[$i]['confirme']): ?>
                                            <td><label class="badge badge-secondary">Utilisé</label></td>
                                        <?php elseif($codes[$i]['en_attente']): ?>
                                            <td><label class="badge badge-warning">En attente</label></td>
                                        <?php elseif($codes[$i]['utilisable']): ?>
                                            <td><label class="badge badge-success">Disponible</label></td>
                                        <?php else: ?>
                                            <td><label class="badge badge-danger">Expiré</label></td>
                                        <?php endif ?>
                                    </tr>
                                    <?php endfor ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>