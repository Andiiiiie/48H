<div>
    <h1>Insertion des détails</h1>
    <form class="forms-sample" action="<?php echo base_url("index.php/front/user/inserer_parametres") ?>" method="post">
        <div  class="form-group">
            <label>Objectif</label>
            <input type="number" class="form-control" id="exampleInputName1" name="objectif" required/>
            <input type="radio" name="nature" value=-1 checked> Perte de poids<br>
            <input type="radio" name="nature" value=1> Prise de poids<br>
            <input type="radio" name="nature" value=0 id="imc"> IMC<br>
        </div>
        <?php foreach($parametres as $p) { ?>
            <div  class="form-group">
                <label><?php echo $p['designation'] ?> actuel</label>
                <input type="<?php echo $p['type_champs'] ?>" id="<?php echo $p['designation'] ?>" class="form-control"  name="<?php echo $p['id_parametre'] ?>" required/>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
</div>
<script>
    var champs_imc = document.getElementById("imc");
    var champs_objectif = document.getElementById("exampleInputName1");
    let champs_poids = document.getElementById("Pois");
    let champs_taille= document.getElementById("Taille");
    champs_imc.addEventListener("click", function(){
        champs_poids.addEventListener("change", function(){
            let c = champs_taille.value / 100;
            let imc = champs_poids.value / c * c;
            console.log(imc);
            champs_objectif.setAttribute("value", imc);
        });
        champs_taille.addEventListener("change", function(){
            let c = champs_taille.value / 100;
            let imc = champs_poids.value / c * c;
            console.log(imc);
            champs_objectif.setAttribute("value", imc);
        });
    });
</script>