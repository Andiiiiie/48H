<div style="margin-top: 5%">
    <h1>Insertion des détails</h1>
    <form class="forms-sample" action="<?php echo base_url("index.php/front/user/inserer_parametres") ?>" method="post">
        <?php foreach($parametres as $p) { ?>
            <div  class="form-group">
                <label><?php echo $p['designation'] ?></label>
                <input type="<?php echo $p['type_champs'] ?>" class="form-control" id="exampleInputName1" name="<?php echo $p['id_parametre'] ?>" required/>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
    </form>
</div>