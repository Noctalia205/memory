<?php require_once 'utils/common.php' ?>
<?php $title = 'Accueil';
$page = 'Accueil';?>
<!DOCTYPE html>

<html lang="fr">

<?php require_once SITE_ROOT . ('partials/head.php') ?>
<?php require_once SITE_ROOT . ('utils/database.php') ?>
<?php connectToDbAndGetPdo() ?>

<body>
    <?php require_once SITE_ROOT . ('partials/header.php') ?>
    <div class="img-head">

        <div class="title">VIENS SLAY DANS NOTRE STUDIO ! </div>
        <div class="sous-title">Slayy en challengant les cerveaux les plus agiles<br></div>
        <div class="button"><a href="games/page_jeu_dbz.php">Jouez !</a></button>
        </div>
    </div>


    <main>
        <div class="flex-all">
            <div class="img-container">
                <div class="img-start"><img src="assets/cerveau.jpg" alt="cerveau"></div>
                <div class=""><img src="assets/motivation.jpg" alt="motivation"></div>
                <div class="img-end"><img src="assets/ordinateur.jpg" alt="ordinateur"></div>
            </div>
            <div class="text-container">
                <div class="columns">
                    <div class="num">01</div>
                    <div class="text">
                        <h3>L'intelligence</h3>
                        <p>Chacun de nous est béni d'un esprit exceptionnel, d'une intelligence qui est le moteur de nos réalisations. L'intelligence ne se limite pas à un simple quotient intellectuel, mais englobe la créativité, la perspicacité, la curiosité et la capacité d'apprendre.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="num">02</div>
                    <div class="text">
                        <h3>La motivation</h3>
                        <p>Chaque jour qui se lève est une nouvelle opportunité, une page blanche sur laquelle tu peux écrire ton histoire. Il est facile de rester coincé dans la routine et de craindre le changement, mais rappelle-toi que la croissance personnelle et le succès naissent de l'audace.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="num">03</div>
                    <div class="text">
                        <h3>La passion</h3>
                        <p>La passion est le moteur de la vie, la force qui nous pousse à poursuivre nos rêves et à réaliser l'extraordinaire. Chacun de nous porte en lui une flamme unique, une passion qui fait vibrer notre cœur et nous anime. C'est cette passion qui nous guide vers notre véritable objectif.</p>
                    </div>
                </div>
            </div>
        </div>



        <div id="main-block">
            <div class="block-img">
                <img src="assets/anime.jpg" alt="Anime girl">
            </div>
            <div class="all-block">
                <div class="block1">
                    <div class="carre violet">
                        <p><span><?php echo AffichePartiesJouees()?></span></p>
                        <p>Parties Jouées</p>
                    </div>
                    <div class="carre vert">
                        <p><span><?php echo AfficheJoueursConnectees()?></span></p>
                        <p>Joueurs connectés</p>
                    </div>
                </div>

                <div class="block2">
                    <div class="carre rose">
                        <p><span><?php echo AfficheTempsRecord()?></span></p>
                        <p>Temps record</p>
                    </div>
                    <div class="carre orange">
                        <p><span><?php echo AfficheJoueursInscrits()?></span></p>
                        <p>Joueurs inscrit </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="text-equip">
            <p>L'équipe qui slay</p>
        </section>
        <div class="sous-title">La slaytitude représentée par 3 queenies </div>
        <div class="line-gold"><img src="assets/line-gold.png" alt="line gold"></div>

        <div class="flex-card">
            <div class="person-container">
                <div class="person-card">
                    <div class="person-img"><img class="avatar" src="assets/Fiafei.jpg" alt="Jiafey la queen"></div>
                    <p>JIAFEI</p>
                    <div class="sous-title">Chang-chang developpeuse</div>
                    <div class="social-media"><img class="social-img" src="assets/social-media.jpg" alt="réseaux sociaux"></div>
                </div>
            </div>
            <div class="person-container">
                <div class="person-card">
                    <div class="person-img"><img class="avatar-2" src="assets/jiafei_avocat.jpg" alt="Jiafey l'avocat"></div>
                    <p>JIAFEI AVOCAT</p>
                    <div class="sous-title">L'hymne de la joie feifei</div>
                    <div class="social-media"><img class="social-img" src="assets/social-media.jpg" alt="réseaux sociaux"></div>
                </div>
            </div>
            <div class="person-container">
                <div class="person-card">
                    <div class="person-img"><img class="avatar-3" src="assets/Kris.jpg" alt="Kris la reine"></div>
                    <p>KRIS DARLING</p>
                    <div class="sous-title">Queen manager</div>
                    <div class="social-media"><img class="social-img" src="assets/social-media.jpg" alt="réseaux sociaux"></div>
                </div>
            </div>
        </div>
        </div>
    </main>


</body>
<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>
