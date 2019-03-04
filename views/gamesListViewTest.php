<?php $title = "Nos jeux";?>

<?php ob_start();?>

<div>


</div>
<div id="game_list_mainbox"> 
<?php
$previousCat = "";

while ($donnees = $req->fetch()) { ?>
   

<?php if ($donnees['typeOf'] !== $previousCat) {?>

<?php $previousCat = $donnees['typeOf'];?>

<h1 id="title_game_list"><?=$previousCat?></h1>
        <?php }?>




    <div class="content-block__effect">
      
        <div class="card_leenk-effect">

    
        <div class="card_leenk card_leenk-effect__item card_leenk-hover">
            
            <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item" width="826" height="551">
     
               <div class="card_leenk__info">
     
                 <h3 class="card_leenk__header"><?=$donnees['name_game']?></h3>
                 
                 <div class="card_leenk__links">
                   
                   <div class="card_leenk__link-block">
                     
                     <a class="card_leenk__link" href="index.php?action=addGameToUser&id_game=<?= $donnees['id_game']?>" title="Link Title">
                       <i class="fas fa-plus-circle card_leenk_fas card_leenk_fas_size"></i>
                     
                     </a>
                     
                   </div>
                   
                   <div class="card_leenk__link-block">
                     
                     <a class="card_leenk__link" href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>" title="Link Title">
                     <i class="fas fa-search card_leenk_fas"></i>
                       
                     </a>
                     
                   </div>
                   
                 </div>
     
               </div>
                 
          </div>


      </div>
    </div>




<?php }

$req->closeCursor();

?>
</div>
<?php $content = ob_get_clean();?>

<?php require 'views/template.php'?>