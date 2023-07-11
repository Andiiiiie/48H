<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Insertion d'une activite sportive</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Désignation <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="designation"
                                       value="<?= set_value('designation') ?>">
                                <span class="text-danger"><?= get_error($errors, 'designation') ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Photo d'illustration de l'activite <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="date-picker form-control col-md-7 col-xs-12" type="file" name="image_path"
                                       value="<?= set_value('image_path') ?>">
                                <span class="text-danger"><?= get_error($errors, 'image_path') ?></span>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-primary" href="<?= site_url('back/sport/liste') ?>">Retourner à la liste</a>
                                <button type="submit" class="btn btn-success">Insérer composition</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>