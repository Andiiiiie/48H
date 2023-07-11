<div>
    <h1>Insertion des détails</h1>
    <form class="forms-sample" action="<?php echo base_url("index.php/front/user/inserer_parametres") ?>" method="post">
        <div  class="form-group">
            <label>Objectif</label>
            <input type="number" class="form-control" id="exampleInputName1" name="objectif" required/>
            <input type="radio" name="nature" value=-1 checked> Perte de poids<br>
            <input type="radio" name="nature" value=1> Prise de poids<br>
            <input type="radio" name="nature" value=0> IMC<br>
        </div>
        <?php foreach($parametres as $p) { ?>
            <div  class="form-group">
                <label><?php echo $p['designation'] ?> actuel</label>
                <input type="<?php echo $p['type_champs'] ?>" class="form-control" id="exampleInputName1" name="<?php echo $p['id_parametre'] ?>" required/>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
</div>