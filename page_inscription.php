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

    <form method="POST" class="register-form">
        <div class="formulaire.container">
            <br>

            <input name="mail" class="case1" placeholder="Email" required="required"><br><br>

            <?php if (isset($_POST['mail'])) :
                if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) : ?>
                    <p class="erreurMailnonCorrect"> l'Email n'est pas correct.</p>
            <?php endif;
            endif; ?>

            <?php if (isset($_POST['mail'])) :
                if (isMailExist($_POST['mail'])) : ?>
                if (isMailExist($_POST['mail'])) : ?>
                    <p class="Maildéjà_pris"> Mail déjà pris.</p>
            <?php endif;
            endif ?>

            <input name="pseudo" class="case1" placeholder="Pseudo" required="required"><br><br>

            <?php if (isset($_POST['pseudo'])) :
                if (strlen($_POST['pseudo']) < 5) : ?>
                    <p class="erreurPseudo_carac"> Pseudo insérer en dessous de 4 caractères.</p>
            <?php endif;
            endif ?>

            <?php if (isset($_POST['pseudo'])) :
                if (isPseudoExist($_POST['pseudo'])) : ?>
                if (isPseudoExist($_POST['pseudo'])) : ?>
                    <p class="Pseudodeja_pris"> Pseudo déjà pris.</p>
            <?php endif;
            endif ?>

            <input type="password" name="password" class="case1" placeholder="Mot de passe" required="required"><br><br>

            <?php if (isset($_POST['password'])) :
                if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/i", ($_POST['password']))) :
                    $hashagemdp = password_hash($_POST['password'], PASSWORD_DEFAULT);
            ?>
                    <p class="passwordCorrect"> Le mot de passe n'est pas correct</p>

            <?php endif;
            endif ?>

            <input type="password" name="confirmPassword" class="case1" placeholder="Confirmer le mot de passe" required="required"><br><br>

            <?php if (isset($_POST['confirmPassword'])) :
                if (($_POST['password']) != ($_POST['confirmPassword'])) : ?>
                    <p class="erreurConfirmPassword">Le mot de passe ne correspond pas.</p>
            <?php endif;
            endif ?>

            <input class="boutonEnvoyer" type="submit" value="Envoyer">
        </div>
    </form>
</body>

<?php


if (
    isset($_POST['mail']) &&
    filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) &&
    !!isMailExist($_POST['mail']) &&

    isset($_POST['pseudo']) &&
    strlen($_POST['pseudo']) >= 5 &&
    !!isPseudoExist($_POST['pseudo']) &&

    isset($_POST['confirmPassword']) &&
    isset($_POST['password']) &&
    ($_POST['password']) == ($_POST['confirmPassword']) &&
    preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/i", $_POST['password'])


) {
    
    InsererUnUtilisateur($_POST['pseudo'], $_POST['mail'], $_POST['password'])


?>

    <p class="Inscreussi">Inscription réussi!</p>

<?php
}

?>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>