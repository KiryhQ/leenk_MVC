<?php $title="Votre Recherche"; ?>

<?php ob_start(); ?>

<h2 class="title_search">Votre recherche : </h2>

<div class="content-block__effect">
    <div class="card_leenk-effect">
        <?php while( $donnees = $result->fetch()){
      ?>
         <div class="card_leenk card_leenk-effect__item card_leenk-hover">
            
            <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item" width="826" height="551">
     
               <div class="card_leenk__info">
     
      
                 
                 <div class="card_leenk__links">
                 <?php if(isset($_SESSION['user'])){
                ?>
                   <div class="card_leenk__link-block_left">
                     
                     <a class="card_leenk__link" href="index.php?action=addGameToUser&id_game=<?= $donnees['id_game']?>" title="Link Title">
                       <i class="fas fa-plus-circle card_leenk_fas "></i>
                     
                     </a>
                     
                   </div>
                 <?php } ?>
                   <div class="card_leenk__link-block_right">
                     
                     <a class="card_leenk__link" href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>" title="Link Title">
                     <i class="fas fa-search card_leenk_fas"></i>
                       
                     </a>
                     
                   </div>
                   
                 </div>
     
               </div>
                 
          </div>

        <?php } $result->closeCursor(); ?>
    </div>
</div>
<?php $content= ob_get_clean(); ?>
<?php require 'views/template.php' ?>