<?php require_once SITE_ROOT . ('utils/userConnexion.php');
require_once SITE_ROOT . ('utils/database.php');

if (isset($_SESSION["userID"])) : ?>
    <?php $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT username FROM Users WHERE id = :id');
    $pdoStatement->execute([":id" => $_SESSION["userID"]]);
    $userSessionId = $pdoStatement->fetch();
    echo $userSessionId->username;
    ?>


    <header>
        <nav class="main-nav">
            <div class="logo"><a href="index.php">Beginner SLAY Memory</a></div>
            <ul>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>index.php" class="<?= $page == 'Accueil' ? 'active' : '' ?> ">Accueil</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_jeu_principale.php" class="<?= $page == 'Jeu' ? 'active' : '' ?> ">Jeu</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>games/page_de_score.php" class="<?= $page == 'Score' ? 'active' : '' ?> ">Score</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_contact.php" class="<?= $page == 'Nous Contacter' ? 'active' : '' ?> ">Nous contacter</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_login.php" class="<?= $page == 'Connexion' ? 'active' : '' ?> ">Connexion</a></li>
                <div class="profil"><a href="<?php echo PROJECT_FOLDER ?>page_MyAccount.php"><img src="<?php echo PROJECT_FOLDER; ?>assets/icon-connexion.png" class="<?= $page == 'Pseudo' ? 'active' : '' ?>"><?php if (isset($userSessionId->username)){echo $userSessionId->username;}?></a></div>
            </ul>
        </nav>

    </header>
<?php else : 
    echo "déconnecté";?>
    <header>
        <nav class="main-nav">
            <div class="logo"><a href="index.php">Beginner SLAY Memory</a></div>
            <ul>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>index.php" class="<?= $page == 'Accueil' ? 'active' : '' ?> ">Accueil</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_jeu_principale.php" class="<?= $page == 'Jeu' ? 'active' : '' ?> ">Jeu</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>games/page_de_score.php" class="<?= $page == 'Score' ? 'active' : '' ?> ">Score</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_contact.php" class="<?= $page == 'Nous Contacter' ? 'active' : '' ?> ">Nous contacter</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_login.php" class="<?= $page == 'Connexion' ? 'active' : '' ?> ">Connexion</a></li>
                <div class="profil"><a href="<?php echo PROJECT_FOLDER ?>page_MyAccount.php"><img src="<?php echo PROJECT_FOLDER; ?>assets/icon-connexion.png" class="<?= $page == 'Pseudo' ? 'active' : '' ?>"><?php if (isset($userSessionId->username)){echo $userSessionId->username;}?></a>Pseudo</div>
            </ul>
        </nav>

    </header>
<?php endif; ?>