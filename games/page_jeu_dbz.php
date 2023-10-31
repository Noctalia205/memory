<?php require_once '../utils/common.php' ?>
<?php $title = 'Jeu';
$page = 'Jeu';?>
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<body class="background-DBZ">
<?php require_once SITE_ROOT . ('partials/header.php') ?>
    
    <h1 class="titre1">The Power Of Memory</h1>
    <div class="flex-globaltittle">
    <h2 class="titre-diff">Difficultés</h2>
    <h2 class="titre-thèmes">Thèmes</h2>
    </div>
    <div class="bouttons_difth">
    <form method="POST" action="traitement.php">
        <div class="bouttons_dif">
        <input class="bouton" type="submit" value="Easy">
        <input class="bouton" type="submit" value="Medium">
        <input class="bouton" type="submit" value="Difficile">
        </div>
    </form>
        <div class="bouttons_th">
            <form action="page_jeu_meme.php">
        <input class="bouton" type="submit" value="Memes"></form>
        <form action="page_jeu_dbz.php">
        <input class="bouton" type="submit" value="DBZ"></form>
        <form action="page_jeu_nourriture.php">
        <input class="bouton" type="submit" value="Nourriture"></form>
        </div>
    </div><br><br><br>

    <div class="tableau_carte1_DBZ">
    <table class="Easy">
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ1-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ2-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ3-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ4-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ5-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ6-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ7-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ8-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ9-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ10-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ8-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ2-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ7-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ4-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ9-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ5-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ1-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ10-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ6-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ3-removebg-preview.png"></td>
        </tr>
    </table></div><br><br><br>
    <div class="tableau_carte2_DBZ">
    <table class="Medium">
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ1-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ2-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ3-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ4-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ5-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ6-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ7-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ8-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ9-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ10-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ11-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ12-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ13-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ14-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ15-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ16-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ17-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ18-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ19-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ20-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ21-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ22-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ23-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ24-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ25-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ26-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ27-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ28-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ29-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ30-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ31-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ32-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ31-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ26-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ22-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ19-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ11-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ4-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ8-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ13-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ30-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ15-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ28-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ6-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ5-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ23-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ29-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ27-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ9-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ32-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ16-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ1-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ2-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ7-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ20-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ12-removebg-preview.png"></td>
        </tr>
        <tr>
            <td class="carte"><img src="../assets/DBZ/DBZ28-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ3-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ10-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ14-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ17-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ21-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ18-removebg-preview.png"></td>
            <td class="carte"><img src="../assets/DBZ/DBZ24-removebg-preview.png"></td>
    </table></div><br><br><br>
    <div class="tableau_carte3_DBZ">
        <table class="Difficile">
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ1-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ2-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ3-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ4-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ5-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ6-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ7-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ8-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ9-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ10-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ11-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ12-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ13-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ14-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ15-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ16-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ17-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ18-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ19-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ20-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ21-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ22-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ23-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ24-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ25-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ26-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ27-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ28-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ29-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ30-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ31-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ32-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ33-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ34-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ35-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ36-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ37-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ38-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ39-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ40-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ41-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ42-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ43-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ44-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ45-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ46-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ47-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ48-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ49-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ50-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ51-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ52-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ53-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ54-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ55-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ56-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ57-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ58-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ59-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ60-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ61-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ62-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ63-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ64-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ65-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ66-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ67-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ68-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ69-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ70-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ71-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ72-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ72-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ71-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ70-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ69-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ68-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ67-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ66-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ65-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ64-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ63-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ62-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ61-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ60-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ59-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ58-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ57-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ56-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ55-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ54-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ53-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ52-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ51-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ50-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ49-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ48-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ47-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ46-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ45-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ44-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ43-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ42-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ41-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ40-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ39-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ38-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ37-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ36-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ35-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ34-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ33-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ32-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ31-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ30-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ29-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ28-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ27-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ26-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ25-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ24-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ23-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ22-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ21-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ20-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ19-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ18-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ17-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ16-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ15-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ14-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ13-removebg-preview.png"></td>
            </tr>
            <tr>
                <td class="carte"><img src="../assets/DBZ/DBZ12-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ11-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ10-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ9-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ8-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ7-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ6-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ5-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ4-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ3-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ2-removebg-preview.png"></td>
                <td class="carte"><img src="../assets/DBZ/DBZ1-removebg-preview.png"></td>
            </tr>
        </table></div>





    <!-- <div class="chatbox-container">
        <div class="chatbox-high" >  
            <div class="pp-position">
            <img class="pp" src="../assets/photo_profil.png">
            </div>
            <p class="txt-top">
                Chat général
            </p> 
        </div>
        <div class="chatbox-chat">
           
           <div class="block_user1">
            <p class="name-user1">
                Moi
            </p> 
             
            <p class="chat-user1">
               <span class="txt-chatboxusers">Hello</span>   
            </p>
            <p class="date-user1">
                Aujourd'hui à 15h22
            </p>
           </div>
           <div class="block_user2">
            <div class="posimg-pp">
            <img class="photo_profil_user2" src="../assets/rebeudeter_photoprofil.png" alt="rebeudeter">
            </div>
            <div class="blocktxt_user2">
            <p class="name-user2">
                rebeu_SOIN
            </p>
            <p class="chat-user2">
                <span class="txt-chatboxusers">Qu'j'quitte la France, elle a fait la petite frange 
            C'est la kiffance, c'est la kiffance
            Que je dépense, gros joint devant la Défense
            C'est la kiffance, c'est la kiffance.</span>
            </p>
            <p class="date-user2">
                Aujourd'hui à 15h30
            </p>
        
            <div class="block_user3">
                <p class="name-user3">
                    Moi
                </p> 
                 
                <p class="chat-user3">
                   <span class="txt-chatboxusers">Demain est un autre jour</span>   
                </p>
                <p class="date-user3">
                    Aujourd'hui à 15h34
                </p>
               </div>

            </div>
            </div>
          
        </div>
        <form method="POST" action="traitement.php" class="chatbox-submit">
            <input type="text" name="chat" id="chat" placeholder="Votre message..." required="required">
            <input class="send"  type="submit" value="Envoyer">
    
    
    
        </form>
    
        </div> -->
</body>
<?php require_once SITE_ROOT . ('partials/footer.php') ?>
</html>