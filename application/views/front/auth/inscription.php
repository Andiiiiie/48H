<h1>Inscription</h1>

<?php print_r($errors); ?>

<?php echo form_open('auth/inscription'); ?>
    <input type="text" name="nom" placeholder="Nom" value="<?php echo set_value('nom') ?>">
    <input type="text" name="prenom" placeholder="Prenom" value="<?php echo set_value('prenom') ?>">
    <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
    <input type="text" name="motDePasse" placeholder="Mot de passe" value="<?php echo set_value('motDePasse') ?>">
    <input type="submit">
</form>
