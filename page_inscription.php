<?php 
    require_once 'utils/common.php';
    $title = 'Connexion';
    $page = 'Connexion'; 

    if (isset($_GET['mail'])) {
        
            if (!preg_match("^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$", ($_GET['mail']))); {
            $errorMessage = "Le format de l'email n'est pas valide";

        }   
      
            if {
            
              
         // VERIF EMAIL EXISTANT //

         } 
         
         // alors insérer en base de données ...
            
        }

        

        if (isset($_GET ['pseudo'])) {// tester si le pseudo est ok

            if( $pseudo > 4 ($_GET['pseudo'])) {

                $errorMessage = "Le pseudo doit comporter plus de 4 caractères";

            } 
            
            if {

                // VERIF PSEUDO EXISTANT //

            }

            // alors insérer en base de données ...

        }
        if (isset($_GET{'password'})) {        // tester si le mdp et confirmMDP est ok

         
        
        if {



        }

        }

        if(!isset($errorMessage)){ 
            // InsererUnUtilisateur   
        }

    
    
?>

    <?php if (isset($message)) : ?>
            <p><?php echo $message ?></p>
    <?php endif; ?>
        
        
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<body>
    <?php require_once SITE_ROOT . ('partials/header.php') ?>
    <div class="image-container">
        <h1 class="titre1">Inscription</h1>
    </div>

    <form method="GET">
        <br>
        <input name="mail" class="case1" placeholder="Email" required="required"><br><br>
        <input name="pseudo" class="case1" placeholder="Pseudo" required="required"><br><br>
        <input name="password" class="case1" placeholder="Mot de passe" required="required"><br><br>
        <input name="confirmPassword" class="case1" placeholder="Confirmer le mot de passe" required="required">
        <br><br>
        <input class="boutonEnvoyer" type="submit" value="Envoyer">
    </form>

    <?php if (isset($errorMessage)) : ?>
        <p class="white-texte"><?php echo $errorMessage ?></p>
    <?php endif; ?>
    
</body>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>

</html>