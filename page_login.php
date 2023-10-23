<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="maiin.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="header.css">
  <script src="script.js"></script>


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
<body>




<div class="image-container">
    <h1 class="titre1">Connexion</h1>

    </div>
</div>



  <form method="POST" action="traitement.php">
    <br>
        <input class="case1"  placeholder="Email" required="required"><br><br>
        <input class="case1"  placeholder="Mot de passe"  required="required" ><br><br>
        <a class="inscription" a href="Mdp_oublier.php">Mot de Passe oublié ?</a><br><br>
        <a class="inscription" a href="page_inscription.php">Pas de compte ? S'inscrire</a><br><br>
        <input type="checkbox" class="checkSouvenir" name="Se Souvenir de moi" />
        <label for="checkSouvenir" class="checksouvenirs">Se Souvenir de moi</label><br><br><br><br>
        <input class="boutonEnvoyer" type="submit" value="Envoyer">
        
    </form>
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