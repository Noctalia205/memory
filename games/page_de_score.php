<?php require_once '../utils/common.php'; ?>
<?php require_once '../utils/database.php'; ?>


<?php $title = 'Score';
$page = 'Score'; ?>
<!DOCTYPE html>

<html lang="fr">

<?php require_once SITE_ROOT . ('partials/head.php'); ?>


<?php require_once SITE_ROOT . ('partials/header.php'); ?>
<header>

    <div class="banner-score">
        <div class="title-score">SCORE</div>
    </div>
    <div class="score-container">
        <div class="icon-score">
            <div class="person-container">
                <div class="score-person-card">
                    <div class="person-img"><img class="score-avatar" src="../assets/Jiafei-1.jpg" alt="Jiafey UwU"></div>
                    <p>TON PROFIL</p>
                </div>
            </div>
        </div>
        <div class="barre_de_recherche_container">
            <form class="search_form" method="$_GET">
                <input name="BarreDeRecherche" placeholder="Tape ma bestie !" class="barre_recherche">
                <input type="submit" value="Rechercher" />
            </form>
        </div>
    </div>
    <main class="table_score">
        <div class="table_score_container">
            <section class="table__header">
                <h1>Tableau des scores</h1>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th> Nom de l'utilisateur</th>
                            <th>Nom du jeu</th>
                            <th>Difficulté</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['BarreDeRecherche']) && $_GET['BarreDeRecherche'] != "") {

                            echo rechercheDeDonneesDansLaBarreDeRecherche();
                        } else {
                            echo recupereScorePageDeScore();
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
    </body>
    </div>

    </div>
    </div>



</header>

<?php require_once SITE_ROOT . ('partials/footer.php'); ?>

</html>