<?php
require_once 'utils/common.php';
require_once 'utils/database.php';
$title = 'Connexion';
$page = 'Connexion';
$pdo = connectToDbAndGetPdo();

'' 

?>

<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>

<body>
    <?php require_once SITE_ROOT . ('partials/header.php') ?>
    <div class="image-container">
        <h1 class="titre1">Inscription</h1>
    </div>

    <form method="GET" class="register-form">
        <div class="formulaire.container">
            <br>

            <input name="mail" class="case1" placeholder="Email" required="required"><br><br>

            <?php if (isset($_GET['mail'])) :
                if (!filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)) : ?>
                    <p class="erreurMailnonCorrect"> l'Email n'est pas correct.</p>
            <?php endif;
            endif; ?>

            <?php if (isset($_GET['mail'])) :
                if (!isMailExist($_GET['mail'])) : ?>
                    <p class="Maildéjà_pris"> Mail déjà pris.</p>
            <?php endif;
            endif ?>

            <input name="pseudo" class="case1" placeholder="Pseudo" required="required"><br><br>

            <?php if (isset($_GET['pseudo'])) :
                if (strlen($_GET['pseudo']) < 5) : ?>
                    <p class="erreurPseudo_carac"> Pseudo insérer en dessous de 4 caractères.</p>
            <?php endif;
            endif ?>

            <?php if (isset($_GET['pseudo'])) :
                if (!isPseudoExist($_GET['pseudo'])) : ?>
                    <p class="Pseudodeja_pris"> Pseudo déjà pris.</p>
            <?php endif;
            endif ?>

            <input name="password" class="case1" placeholder="Mot de passe" required="required"><br><br>

            <?php if (isset($_GET['password'])) :
                if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/i", ($_GET['password']))) : 
                ?> 
                
                    
                    <p class="passwordCorrect"> Le mot de passe n'est pas correct</p>

            <?php endif;
            endif ?>


            <input name="confirmPassword" class="case1" placeholder="Confirmer le mot de passe" required="required"><br><br>

            <?php if (isset($_GET['confirmPassword'])) :
                if (($_GET['password']) != ($_GET['confirmPassword'])) : ?>
                    <p class="erreurConfirmPassword">Le mot de passe ne correspond pas.</p>
            <?php endif;
            endif ?>

            <input class="boutonEnvoyer" type="submit" value="Envoyer">
        </div>
    </form>
</body>

<?php


if (

    isset($_GET['mail']) &&
    filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL) &&
    isMailExist($_GET['mail']) &&

    isset($_GET['pseudo']) &&
    !strlen($_GET['pseudo']) < 5 &&
    isPseudoExist($_GET['pseudo']) &&

    isset($_GET['confirmPassword']) &&
    isset($_GET['password']) &&
    ($_GET['password']) == ($_GET['confirmPassword']) &&
    preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/i", $_GET['password'])


) { ?>

    <p class="Inscreussi">Inscription réussi!</p>

<?php
}

?>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>