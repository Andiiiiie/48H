<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>Insertion Plat</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate>
                    <div class="form-group">
                        <label for="designation">Designation * :</label>
                        <input type="text" id="designation" class="form-control" name="designation" required />
                        <span class="text-danger"><?= get_error($errors, 'designation') ?></span>
                    </div>

                    <div class="form-group">
                        <label for="image_path">Photo :</label>
                        <input class="date-picker form-control col-md-7 col-xs-12" type="file" name="image_path"
                               value="<?= set_value('designation') ?>">
                        <span class="text-danger"><?= get_error($errors, 'image_path') ?></span>
                    </div>

                    <div class="form-group">
                        <label for="ingredient[]">Ingredients:</label>
                        <p style="padding: 5px;">
                            <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                            <br />
                            <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                            <br />
                            <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                            <br />
                        </p>
                    </div>


                    <br />
                    <span class="btn btn-primary">enregistrer plat</span>
                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
