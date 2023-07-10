<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>INSERTION CODE <small>Code utilisable une fois</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Settings 1</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?php echo form_open('back/code/save', array('class'=>'form-horizontal form-label-left')); ?>
                <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="code">Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="code" required="required" class="form-control" name="code" value="<?php echo set_value('code') ?>">
                            <span class="text-danger"><?= get_error($errors, 'code') ?></span>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="montant" class="col-form-label col-md-3 col-sm-3 label-align">Montant </label>
                        <div class="col-md-6 col-sm-6">
                            <input id="montant" class="form-control" type="number" step="0.01" name="montant" value="<?php echo set_value('montant') ?>">
                            <span class="text-danger"><?= get_error($errors, 'montant') ?></span>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class=" col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
