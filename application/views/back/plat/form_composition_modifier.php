<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Modification d'une composition</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Photo de description actuelle</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img src="<?= base_url($composition['image_path']) ?>" alt="Photo de description actuelle" class="img-responsive">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Désignation <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="composition"
                                    value="<?= set_value('composition', $composition['composition']) ?>">
                                <span class="text-danger"><?= get_error($errors, 'composition') ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Photo de description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="date-picker form-control col-md-7 col-xs-12" type="file" name="userfile"
                                       value="<?= set_value('designation') ?>">
                                <span class="text-danger"><?= get_error($errors, 'userfile') ?></span>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-primary" href="<?= site_url('back/plat/compositions') ?>">Retourner à la liste</a>
                                <button type="submit" class="btn btn-success">Modifier composition</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>