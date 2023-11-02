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
        <img src="assets/memory.jpg" alt="le memory">

    <h2 class="titre2">C'est quoi le memory ?</h2>
        <p class="p2">Le jeu du memory est le jeu de société idéal pour réunir les petits et les plus grands ! Ce jeu universel se présente avec des règles simples qui se transmettent de génération en génération.</p>
        <h2 class="titre2">Comment Jouer ?</h2>
        <p class="p2">Le jeu se compose de paires de cartes portant des illustrations identiques. L'ensemble des cartes est mélangé, puis étalé face contre table. À son tour, chaque joueur retourne deux cartes de son choix. S'il découvre deux cartes identiques, il les ramasse et les conserve, ce qui lui permet de rejouer. Si les cartes ne sont pas identiques, il les retourne faces cachées à leur emplacement de départ. Le jeu se termine quand toutes les paires de cartes ont été découvertes et ramassées. Le gagnant est le joueur qui possède le plus de paires.</p>
</div>
        




<div class="blocks_selectThemeDiff">

<label for="difficultées" class="color_forDiff">
    Choisir une difficultée
        <div id="fileSelect_diff">
                    <select id="select_diff" name="Difficultés">
                        <option value=""> </option>
                        <option value="Easy">Easy </option>
                        <option value="Medium"> Medium</option>
                        <option value="Hard"> Hard</option>
                    </select>
        </div>
</label>

<label for="difficultées" class="color_forDiff">
    Choisir    un     Thème
        <div id="fileSelect_themes">
                    <select id="select_themes" name="Themes">
                        <option value=""> </option>
                        <option value= "Memes">Memes </option>
                        <option value= "DBZ"> DBZ</option>
                        <option value= "Nourriture"> Nourriture</option>

                    </select>
        </div>
</label>


</div>

<div id="time_button"<time>00:00:00</time></div>
<button id="strt">start</button>
<button id="stp">stop</button>
<button id="rst">reset</button>
        
        <input class="button_commencer_jeu" type="button" id="button_commencer_jeu" value="Lancer le jeu" onclick="addTable;">

        <div class="tableau_carte1_DBZ" id="Tab_EasyDBZ">
        </div>

        <div class="tableau_carte2_DBZ" id="Tab_MediumDBZ">
        </div>

        <div class="tableau_carte3_DBZ" id="Tab_HardDBZ">
        </div>

</body>
<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>
<script src="script.js"></script>