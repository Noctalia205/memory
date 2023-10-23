<?php require_once('partials/common.php') ?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maiin.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <title>Accueil</title>
</head>

<body>
<?php require_once('partials/header.php') ?>

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
                        <p><span>310</span></p>
                        <p>Parties Jouées</p>
                    </div>
                    <div class="carre vert">
                        <p><span>1020</span></p>
                        <p>Joueurs connectés</p>
                    </div>
                </div>

                <div class="block2">
                    <div class="carre rose">
                        <p><span>10 sec</span></p>
                        <p>Temps record</p>
                    </div>
                    <div class="carre orange">
                        <p><span>21 300</span></p>
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
<footer>
    <div>
        <h2 class="titre1">Information</h2>
        <P class="tree">Si vous souhaitez plus d'informations.</P>
        <p class="one">Tel : <span>06 05 04 03 02</span><br /><br />
            Email : <span>support@powerofmemory.com</span><br /><br />
            Location : <span>Paris</span></p>
        <a href="https://www.facebook.com/?locale=fr_FR"> <img src="assets/img_icones/icons8-facebook-circled-94.png" width=30px height=30px /></a>
        <a href="https://twitter.com/?lang=fr"> <img src="assets/img_icones/icons8-twitter-circled-94.png" width=30px height=30px /></a>
        <a href="https://www.google.fr/"> <img src="assets/img_icones/icons8-google-94.png" width=30px height=30px /></a>
        <a href="https://www.pinterest.fr/"> <img src="assets/img_icones/icons8-pinterest-94.png" width=30px height=30px /></a>
        <a href="https://www.instagram.com/"> <img src="assets/img_icones/icons8-instagram-94.png" width=30px height=30px /></a>
        <br /><br /><br /><br /><br />
        <p class="copyright-color">Copyright © 2023 Tous droits réservés</p><br>
    </div>
    <div>
        <h2 class="titre1">Power Of Memory</h2><br />
        <ul class="two">
            <li><a href="games/page_jeu_dbz.php" class="listefooter">Jouer !</a></li><br />
            <li><a href="games/page_de_score.php" class="listefooter">Les scores</a></li><br />
            <li><a href="page_contact.php" class="listefooter">Nous contacter</a></li>
        </ul>
    </div>
</footer>

</html>