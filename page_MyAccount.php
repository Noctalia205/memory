<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page mon espace</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="maiin.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="header.css">
  <nav class="main-nav">
            <div class="logo"><a href="index.php">Beginner SLAY Memory</a></div>
            <ul>
                <li class="navpoint"><a href="index.php">Accueil</a></li>
                <li class="navpoint"><a href="games/page_jeu_dbz.php">Jeu</a></li>
                <li class="navpoint"><a href="games/page_de_score.php">Score</a></li>
                <li class="navpoint"><a href="page_contact.php">Nous contacter</a></li>
                <li class="navpoint"><a href="page_login.php">Connexion</a></li>
                <div class="profil"><a href="page_MyAccount.php"><img src="assets/icon-connexion.png"  alt="icon"></a></div>
            </ul>
        </nav>



</head>
<br><br><br>
  <body class="page_MyAccount">

    <div class="image-top">
        <h1 class="title-top">MON ESPACE</h1>
    </div>

    <div class="block_MyAccount">
        <div class="pp_block">
        <img class="pp_gohan" src="assets/photo_profil.png" alt="Gohan SSJ2">
        </div>  
        <div class="positionpseudo_MyAccount">
            <p class="pseudo_MyAccount">
                @_xxProGamerXX_
            </p>
        </div>
        <div class="suptitre_modifinfo">
            <h1 class="titre_modifinfo">
                MODIFIER VOS INFORMATIONS :
            </h1>
        </div>

        <form method="POST" action="traitement.php" class="input_container">

            <div class="input_wrapper">
                <input class="case" type="text" name="Pseudo" placeholder="Pseudo" required="required" />
                <a  href="pseudo_change.php"> <img src="assets/stylo.png" class="input_icon" alt="pen"/></a>
            </div>
            <div class="input_wrapper">
                <input   class="case"  placeholder="Email"  required="required" >
                <a  href="Mail_change.php"> <img src="assets/stylo.png" class="input_icon" alt="pen"/></a>            
            </div> 
            <div class="input_wrapper">
                <input class="case" type="password" name="passe" placeholder="Mot de passe"/>
                <a  href="Mdp_oublier.php"> <img src="assets/stylo.png" class="input_icon" alt="pen"/></a> 
            </div>

            <div>
                <button class="bouton_valider">
                    <span class="txt-envoyer">
                        Valider
                    </span>
                </button>
            </div>
              
            
            </form>





    </div>
    

<br><br><br>

  </body>

  <footer>
    <div><h2 class ="titre1">Information</h2>
      <P class="tree">Si vous souhaitez plus d'informations.</P>
      <p class="one">Tel : <span>06 05 04 03 02</span><br/><br/>
      Email : <span>support@powerofmemory.com</span><br/><br/>
      Location : <span>Paris</span></p>
      <a href="https://www.facebook.com/?locale=fr_FR"> <img src="assets/img_icones/icons8-facebook-circled-94.png" width=30px height=30px/></a>
          <a href="https://twitter.com/?lang=fr"> <img src="assets/img_icones/icons8-twitter-circled-94.png" width=30px height=30px/></a>
          <a href="https://www.google.fr/"> <img src="assets/img_icones/icons8-google-94.png" width=30px height=30px/></a>
          <a href="https://www.pinterest.fr/"> <img src="assets/img_icones/icons8-pinterest-94.png" width=30px height=30px/></a>
          <a href="https://www.instagram.com/"> <img src="assets/img_icones/icons8-instagram-94.png" width=30px height=30px/></a>
          <br/><br/><br/><br/><br/>
      <p class="copyright-color">Copyright © 2023 Tous droits réservés</p><br></div>
      <div><h2 class="titre1">Power Of Memory</h2><br/>
      <ul class="two">
      <li><a href="games/page_jeu_dbz.php" class="listefooter">Jouer !</a></li><br/>
              <li><a href="games/page_de_score.php" class="listefooter">Les scores</a></li><br/>
              <li><a href="page_contact.php" class="listefooter">Nous contacter</a></li>
      </ul></div>
  </footer>

</html>