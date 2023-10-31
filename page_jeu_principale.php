<?php require_once 'utils/common.php' ?>
<?php $title = 'Jeu';
$page = 'Jeu'; ?>
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<script src="script.js"></script>

<body>
    <?php require_once SITE_ROOT . ('partials/header.php') ?>

    <h1 class="titre1">The Power Of Memory</h1>
    <div class="regles">
    <h2 class="titre2">C'est quoi le memory ?</h2>
        <p class="p2">Le jeu du memory est le jeu de société idéal pour réunir les petits et les plus grands ! Ce jeu universel se présente avec des règles simples qui se transmettent de génération en génération.</p>
        <h2 class="titre2">Comment Jouer ?</h2>
        <p class="p2">Le jeu se compose de paires de cartes portant des illustrations identiques. L'ensemble des cartes est mélangé, puis étalé face contre table. À son tour, chaque joueur retourne deux cartes de son choix. S'il découvre deux cartes identiques, il les ramasse et les conserve, ce qui lui permet de rejouer. Si les cartes ne sont pas identiques, il les retourne faces cachées à leur emplacement de départ. Le jeu se termine quand toutes les paires de cartes ont été découvertes et ramassées. Le gagnant est le joueur qui possède le plus de paires.</p>
</div>
        







<div id="fileSelect_diff">
                <select id="select_diff" name="Difficultés">
                    <option value="Easy">Easy </option>
                    <option value="Medium"> Medium</option>
                    <option value="Hard"> Hard</option>

                </select>
        </div>

<div id="fileSelect_themes">
                <select id="select_themes" name="Themes">
                    <option value= "Memes" »>Memes </option>
                    <option value= "DBZ"> DBZ</option>
                    <option value= "Nourriture"> Nourriture</option>

                </select>
        </div>
        <input class="button_commencer_jeu" type="button" value="Lancer le jeu">

</body>
<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>