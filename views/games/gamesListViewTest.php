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
<div style="width:100%">
<hr class="top-oranged" style="width:30%"></div>
        <?php }?>




    <div class="content-block__effect">
      
        <div class="card_leenk-effect">

    
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


      </div>
    </div>




<?php }

$req->closeCursor();

?>
<div style="width:100%">
<hr class="bottom-oranged"></div>
</div>
<a class="fas fa-arrow-circle-up" href="#" id="backToTop_btn"></a>

<script>

$(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 200) {
                    btn.addClass("show");
                } else {
                    btn.removeClass("show");
                }
            });
            /* Back to top button */
            let btn = $("#backToTop_btn");
            btn.on("click", function (e) {
                e.preventDefault();
                $("html, body").animate({
                    scrollTop: 0
                },
                    "300"
                );
            });
        });




        
        </script>
<?php $content = ob_get_clean();?>

<?php require 'views/template.php'?>