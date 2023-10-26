<?php require_once 'utils/common.php' ?>
<?php $title = 'Pseudo';
$page = 'Pseudo';?>
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<br>
  <body class="page_MyAccount">
  <?php require_once SITE_ROOT . ('partials/header.php') ?>

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

  <?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>