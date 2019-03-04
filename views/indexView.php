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

    <div id="part_02">
        <p id="text_part02">"Une plateforme qui nous relie"</p>
    </div>

    <div id="part_03">
        <div id="img_part03">
            <img id="animate_sphone" src="./public/ressources/image/smart.png" alt="smartphone + logo" />
        </div>
        <div id="text_part03">
            <p id="animated_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur ipsa ducimus possimus quaerat laborum tempora, culpa soluta sunt recusandae,
                distinctio rem voluptates voluptatibus quasi quas! Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Officia, ratione.</p>
        </div>
      
    </div>
    <div id="part_04"> 
            


                <div class="content-block__effect">
      <h2>Et vous, à quoi jouez vous ?</h2>

        <div class="card_leenk-effect">

        <?php while($donnees= $req->fetch()){

?>
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
          <?php
  }
$req->closeCursor(); ?>
        </div>
    

      </div>

  <div class="block_link_leenk"><a href="index.php?action=checkGamesList" class="style_link_leenk"> Voir plus !</a></div>




        <script>
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