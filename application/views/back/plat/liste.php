<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Les compositions<small>Pour les plats</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Composition</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($compositions as $composition): ?>
                            <tr>
                                <td><?= $composition['composition'] ?></td>
                                <td>
                                    <a href="<?= base_url($composition['image_path']) ?>" download>
                                        <?= $composition['image_path'] ?> <i class="fas fa-download"></i>
                                    </a>

                                </td>
                                <td>
                                    <a href="<?= site_url('back/plat/modifier_composition/'.$composition['id_plat_detail']) ?>" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= site_url('back/plat/supprimer_composition/'.$composition['id_plat_detail']) ?>" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
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
</div>
<!-- /page content -->
