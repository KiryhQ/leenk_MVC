<?php $title="Leenk" ?>


<?php ob_start() ?>

<div id="body">

        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        <div id="part_01">
  <div id="alert_box_home">
  <?php while($donnees= $alert->fetch()){
    ?>

    <p><a href="index.php?action=viewOthersProfil&id_user=<?= $donnees['id_user']?>&name=<?= $donnees['nickname_user']?>"><?= $donnees['nickname_user']?></a> joue à <?= $donnees['name_game']?> et recherche d'autres joueurs !</p> 








 <?php } $alert->closeCursor(); ?>

  </div>
</div>
    <div id="part_04"> 
            


                <div class="content-block__effect">
      <h2 style="color:#ff8f00">Et vous, à quoi jouez vous ?</h2>
      <hr class="top-oranged" >
        <div class="card_leenk-effect animation-card">

        <?php while($donnees= $req->fetch()){

?>
        <div class="card_leenk card_leenk-effect__item card_leenk-hover">
            
            <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item" width="826" height="551">
     
               <div class="card_leenk__info">
                 
                 <div class="card_leenk__links">
              <?php if(isset($_SESSION['user'])){
                ?>
            
                   <div class="card_leenk__link-block_left">
                     
                     <a class="card_leenk__link" href="index.php?action=addGameToUser&id_game=<?= $donnees['id_game']?>" title="Ajouter <?=$donnees['name_game']?>">
                       <i class="fas fa-plus-circle card_leenk_fas card_leenk_fas_size"></i>
                     
                     </a>
                     
                   </div>
              <?php } ?>
                   <div class="card_leenk__link-block_right">
                     
                     <a class="card_leenk__link" href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>" title="En savoir plus sur <?= $donnees['name_game']?>">
                     <i class="fas fa-search card_leenk_fas"></i>
                       
                     </a>
                     
                   </div>
                   
                 </div>
     
               </div>
                 
          </div>
          <?php
  }
$req->closeCursor(); ?>
        </div>
    

      </div>
  <hr class="bottom-oranged">
  <div class="block_link_leenk"><a href="index.php?action=checkGamesList" class="style_link_leenk"> Voir plus !</a></div>


<script>


//  attempting to autoscroll box
  // $(function () {
  //           $("#alert_box_home").scrollTop(10000) 
          
  //       });
        
    function indexAnimation() {


        $(window).scroll(function() {

            let Y = window.scrollY;
            // alert(Y);
            if (Y > 300) {
                $('#text_part02').fadeIn(2000);
                // alert(Y);
            }

            if (Y > 650) {
                $('#animate_sphone').animate({
                    left: "55%"
                }, 1000);
                $('#text_part03').fadeIn(2000);
            }
            // if (Y > 950){
            // $(".card_leenk").fadeIn(2000);
            // }
        });
    };

    setTimeout(function() {
        indexAnimation();
    }, 1750);


</script>
    

<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php' ?>