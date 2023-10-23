<?php require_once 'utils/common.php' ?>
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<body>
<?php require_once SITE_ROOT . ('partials/header.php') ?>



<div class="image-container">
    <h1 class="titre1">Inscription</h1>

    </div>
</div>



  <form method="POST" action="traitement.php">
    <br>
        <input class="case1"  placeholder="Email" required="required"><br><br>
        <input class="case1"  placeholder="Pseudo"  required="required" ><br><br>
        <input class="case1"  placeholder="Mot de passe"  required="required" ><br><br>
        <input class="case1"  placeholder="Confirmer le mot de passe"  required="required" >
        <br><br>
        <input class="boutonEnvoyer" type="submit" value="Envoyer">
    </form>
</body>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>
</html>