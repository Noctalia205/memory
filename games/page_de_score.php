<?php require_once '../utils/database.php' ?>
<?php require_once '../utils/common.php' ?>


<?php $title = 'Score';
$page = 'Score'; ?>
<!DOCTYPE html>

<html lang="fr">

<?php require_once SITE_ROOT . ('partials/head.php') ?>


<?php require_once SITE_ROOT . ('partials/header.php') ?>
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
        <div class="box_searchbar_container">
            <table class="element_searchbar">
                <tr>
                    <td>
                        <input type="text" placeholder="Recherche" class="Recherche">
                    </td>
                    <td>
                        <a href="#"> <img src="../" </a>
                    </td>
                </tr>
            </table>

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
                            <?php foreach (recupereScorePageDeScore() as $score) : ?>
                                <tr>
                                    <td><?= $score->id; ?> </td>
                                    <td><?= $score->username; ?></td>
                                    <td><?= $score->name_game; ?></td>
                                    <td><?= $score->difficulties; ?></td>
                                    <td><?= $score->scoring; ?> </td>
                                </tr>
                            <?php endforeach; ?>
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

<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>