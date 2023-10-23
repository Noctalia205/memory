<header>        <nav class="main-nav">
            <div class="logo"><a href="index.php">Beginner SLAY Memory</a></div>
            <ul>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>index.php" class="<?= $page == 'Accueil' ? 'active':'' ?> ">Accueil</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>games/page_jeu_dbz.php" class="<?= $page == 'Jeu' ? 'active':'' ?> ">Jeu</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>games/page_de_score.php" class="<?= $page == 'Score' ? 'active':'' ?> ">Score</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_contact.php" class="<?= $page == 'Nous Contacter' ? 'active':'' ?> ">Nous contacter</a></li>
                <li class="navpoint"><a href="<?php echo PROJECT_FOLDER ?>page_login.php" class="<?= $page == 'Connexion' ? 'active':'' ?> ">Connexion</a></li>
                <div class="profil"><a href="<?php echo PROJECT_FOLDER ?>page_MyAccount.php" ><img src="../assets/icon-connexion.png" alt="icon"></a></div>
            </ul>
        </nav>

</header>