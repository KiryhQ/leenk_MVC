<?php $title="Votre Recherche" ?>

<?php ob_start(); ?>

<h2>Votre recherche : </h2>


<div class="card_leenk-effect">

<?php while($donnees= $result->fetch()){
?>
<div class="card_leenk card_leenk-effect__item card_leenk-hover">
    
    <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item" width="826" height="551">

       <div class="card_leenk__info">

         <h3 class="card_leenk__header"><?=$donnees['name_game']?></h3>
         
         <div class="card_leenk__links">
           
           <div class="card_leenk__link-block">
             
             <a class="card_leenk__link" href="index.php?action=addGameToUser&id_game=<?= $donnees['id_game']?>" title="Link Title">
               <i class="material-icons">+</i>
             
             </a>
             
           </div>
           
           <div class="card_leenk__link-block">
             
             <a class="card_leenk__link" href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>" title="Link Title">
               <i class="material-icons">Infos</i>
               
             </a>
             
           </div>
           
         </div>

       </div>
         
  </div>
  <?php
}
$result->closeCursor(); ?>
</div>


<?php $content= ob_get_clean(); ?>

<?php require 'views/template.php' ?>