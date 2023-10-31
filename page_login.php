<?php require_once 'utils/common.php' ?>
<?php $title = 'Connexion';
$page = 'Connexion';?>
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<body>
<?php require_once SITE_ROOT . ('partials/header.php') ?>



<div class="image-container">
    <h1 class="titre1">Connexion</h1>

    </div>
</div>



  <form method="POST" action="traitement.php">
    <br>
        <input class="case1"  placeholder="Email" required="required"><br><br>
        <input type="password" class="case1"  placeholder="Mot de passe"  required="required" ><br><br>
        <a class="inscription" a href="Mdp_oublier.php">Mot de Passe oublié ?</a><br><br>
        <a class="inscription" a href="page_inscription.php">Pas de compte ? S'inscrire</a><br><br>
        <input type="checkbox" class="checkSouvenir" name="Se Souvenir de moi" />
        <label for="checkSouvenir" class="checksouvenirs">Se Souvenir de moi</label><br><br><br><br>
        <input class="boutonEnvoyer" type="submit" value="Envoyer">
        
    </form>
</body>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>
</html>