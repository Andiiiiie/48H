<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Les activites <small>sportives</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($sports as $sport): ?>
                            <tr>
                                <td><?= $sport['designation'] ?></td>
                                <td>
                                    <a href="<?= base_url($sport['image_path']) ?>" download>
                                        <?= $sport['image_path'] ?> <i class="fas fa-download"></i>
                                    </a>

                                </td>
                                <td>
                                    <a href="<?= site_url('back/sport/modifier/'.$sport['id_ACTIVITE']) ?>" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= site_url('back/sport/supprimer/'.$sport['id_ACTIVITE']) ?>" class="btn btn-danger">
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
