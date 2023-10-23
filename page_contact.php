<?php require_once 'utils/common.php' ?>
<!doctype html>
<html lang="fr">
<?php require_once SITE_ROOT . ('partials/head.php') ?>
<body class="page_MyContact">
<?php require_once SITE_ROOT . ('partials/header.php') ?>



  <div class="image-container">
    <h1 class="title-bo">NOUS CONTACTER</h1>
</div>

 



    <div class="logo-main">
        <div class="blue-square">
          <p class="circle-orange">

            <img  class="image_icone" src="assets/img_icones/mobile-phone-8-48.png" width=40px height=40px/></a>
          </p>

          <p class="txt_square">
            06 05 04 03 02
          </p>


      </div>
        <div class="blue-square">

          <p class="circle-orange">

            <img class="image_icone" src="assets/img_icones/message-outline-48.png" width=40px height=40px/></a>
          </p>

          <p class="txt_square">
            jarjar@binks.com
          </p>


      </div>
        <div class="blue-square">

          <p class="circle-orange">

            <img class="image_icone"  src="assets/img_icones/map-marker-2-48.png" width=40px height=40px/></a>
          </p>

          <p class="txt_square">
            Bamako
          </p>



      </div>


    </div>




  <form class="block-form"  method="POST" action="traitement.php">

      <div class="flex">
        <input class="case5"  placeholder="Nom" required="required">
        <input   class="case5"  placeholder="Email"  required="required" >
      </div> 

      <div>
        <input class="case5"  placeholder="Sujet"  required="required" >
      </div>

        <div>
        <textarea class="textarea-contact" placeholder="Message"  required="required" ></textarea>
        </div>

        <div>
        <input class="bouton" type="submit" value="Envoyer">
        </div>
      
      </form>
</body>


<?php require_once SITE_ROOT . ('partials/footer.php') ?>
</html>