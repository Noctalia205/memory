<?php require_once 'utils/common.php' ?>
<?php $title = 'Jeu';
$page = 'Jeu'; ?>
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>

<body>
    <?php require_once SITE_ROOT . ('partials/header.php') ?>

    <h1 class="titre1">The Power Of Memory</h1>
    <div class="regles">
    <h2 class="titre2">C'est quoi le memory ?</h2>
        <p class="p2">Le jeu du memory est le jeu de société idéal pour réunir les petits et les plus grands ! Ce jeu universel se présente avec des règles simples qui se transmettent de génération en génération.</p>
        <h2 class="titre2">Comment Jouer ?</h2>
        <p class="p2">Le jeu se compose de paires de cartes portant des illustrations identiques. L'ensemble des cartes est mélangé, puis étalé face contre table. À son tour, chaque joueur retourne deux cartes de son choix. S'il découvre deux cartes identiques, il les ramasse et les conserve, ce qui lui permet de rejouer. Si les cartes ne sont pas identiques, il les retourne faces cachées à leur emplacement de départ. Le jeu se termine quand toutes les paires de cartes ont été découvertes et ramassées. Le gagnant est le joueur qui possède le plus de paires.</p>
</div>
        <div class="flex-globaltittle">
            <h2 class="titre-diff">Difficultés</h2>
            <h2 class="titre-thèmes">Thèmes</h2>
        </div>
        <div class="bouttons_difth">
            <form method="POST" action="traitement.php">
                <div class="bouttons_dif">
                    <input class="bouton" type="submit" value="Easy">
                    <input class="bouton" type="submit" value="Medium">
                    <input class="bouton" type="submit" value="Hard">
                </div>
            </form>
            <div class="bouttons_th">
                <form action="page_jeu_meme.php">
                    <input class="bouton" type="submit" value="Memes">
                </form>
                <form action="page_jeu_dbz.php">
                    <input class="bouton" type="submit" value="DBZ">
                </form>
                <form action="page_jeu_nourriture.php">
                    <input class="bouton" type="submit" value="Nourriture">
                </form>
            </div>
        </div>
</body>
<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>