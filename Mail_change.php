<?php require_once 'utils/common.php' ?>
<?php $title = 'Connexion';
$page = 'Connexion';?>
<!doctype html>
<html lang="fr">

<?php require_once SITE_ROOT . ('partials/head.php') ?>

<body>

    <?php require_once SITE_ROOT . ('partials/header.php') ?>


    <div class="image-container">
        <h1 class="titre1">Changer Email</h1>

    </div>
    </div>



    <form method="POST" action="traitement.php">
        <br>
        <input class="case1" placeholder="Ancien mail" required="required"><br><br>
        <input class="case1" placeholder="Nouveau mail" required="required"><br><br>
        <input class="case1" placeholder="Confirmer le mail" required="required"><br><br>
        <br><br>
        <input class="boutonConfirmer" type="submit" value="Confirmer">
    </form>
</body>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>