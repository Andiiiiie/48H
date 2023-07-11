<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
                <div class="card-body">
                    <p class="mb-4">Votre argent sur votre compte actuel</p>
                    <p class="fs-30 mb-2">MGA <?php echo $porte_feuilles ?></p>
                    <p>Compte rechargable via code </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tables des transactions</h4>
                <p class="card-description">
                    Les transaction dans ce compte
                </p>
                <div class="table-responsive pt-3">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Montant
                            </th>
                            <th>
                                Type
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($transactions as $transaction) { ?>
                            <tr>
                                <td>
                                    <?php echo $transaction['id_transaction_porte_feuille']?>
                                </td>
                                <td>
                                    <?php echo $transaction['date_implementation']?>
                                </td>
                                <td>
                                    <?php echo $transaction['valeur']?>
                                </td>
                                <td>
                                    <?php if ($transaction['valeur']<0) { ?>
                                        retrait
                                    <?php } else { ?>
                                        credit
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Eto fenoina -->



