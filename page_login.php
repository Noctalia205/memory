<?php require_once 'utils/common.php' ?>
<?php $title = 'Connexion';
$page = 'Connexion'; ?>
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<?php require_once SITE_ROOT . ('utils/userConnexion.php') ?>

<?php $userMail = '';
$userPass = '';
$userId = null;
$userUsername = ''; ?>

<!doctype html>
<html lang="fr">


<body>
    <?php require_once SITE_ROOT . ('partials/header.php') ?>
    <div class="image-container">
        <h1 class="titre1">Connexion</h1>

    </div>
    </div>

    <form method="POST">
        <br>
        <input class="case1" name="mail" id="mail" placeholder="Email" required="required"><br><br>
        <input class="case1" name="mdp" id="mdp" placeholder="Mot de passe" required="required"><br><br>

        <a class="inscription" a href="Mdp_oublier.php">Mot de Passe oublié ?</a><br><br>
        <a class="inscription" a href="page_inscription.php">Pas de compte ? S'inscrire</a><br><br>
        <input type="checkbox" class="checkSouvenir" name="Se Souvenir de moi" />
        <label for="checkSouvenir" class="checksouvenirs">Se Souvenir de moi</label><br><br><br><br>


        <p style="color: white; text-align: center;"> <?php if (isset($_POST['mail']) && isset($_POST['mdp'])) { echo connexionUsers($userMail, $userPass,  $userId, $userUsername);header("location:index.php");}?></p>


        
        <input class="boutonEnvoyer" type="submit" value="Envoyer">
    </form>
    <form method="POST">
        <input class="boutonEnvoyer" name="disconnect" type="submit" value="Déconnexion">
        <?php if (isset($_POST["disconnect"])) {
            session_destroy();
            header("location:index.php");
        } ?>
    </form>
</body>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>