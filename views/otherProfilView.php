

<?php $donneesUser=$req->fetch()?>
<?php $title=$donneesUser['nickname_user'] ?>

<?php ob_start(); ?>


    
 
<main id='profil_main_otherView'>


  <div id="box_profilReview">
    <img id="img_profil" src="./public/ressources/image/testProfil.jpg" alt="#">
    <p id="name_user_profil"><?= $donneesUser['nickname_user']?></p>
    <p id="type_user_profil">Joueur de type : <?= $donneesUser['typeOf_user']?></p>
  </div>

  <div id="post_user">


  <?php while($donnees=$test->fetch()){?>
    <p id="title_post">Sa description :</p>
  <p id="description_user"><?=$donnees['content_post']?></p>
  <?php }; $test->closeCursor();
   ?>
  </div>

  <div id="sidebar_right">
  <h2>Ajoute le !</h2>
  
  <p>Discord : </p>

  <a href="<?= $donneesUser['steamId_user'] ?>">Steam :</a>
  <p>blabla</p>
  </div>


  <div id="user_games">

    <h2 id="title_game_box">Ses jeux : </h2>
      <?php while( $donnees = $reqGames->fetch()){
      ?>    
     <div class="card_leenk card_leenk-effect__item card_leenk-hover">
        
            <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item" width="826" height="551">
     
               <div class="card_leenk__info">
     
                 <h3 class="card_leenk__header"><?=$donnees['name_game']?></h3>
                 
                 <div class="card_leenk__links">
                   
                   <div class="card_leenk__link-block">
                     
                     <a class="card_leenk__link" href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>" title="Link Title">
                       <i class="material-icons">link</i>
                
                     </a>
                     
                   </div>
                   
                 
                   
                 </div>
     
               </div>
                   
     </div>
    <?php } $reqGames->closeCursor(); ?>   
  </div>
</main>


<?php $content= ob_get_clean(); ?>
<?php require 'views/template.php' ?>