

<?php $donneesUser=$req->fetch()?>
<?php $title=$donneesUser['nickname_user'] ?>

<?php ob_start(); ?>


    
 




<div class="row bg_profil_user" style="background-image:url('<?=$donneesUser['bg_profil_user']?>')">


    <div class="col-md-6 sides profil_top_left">
        <div class="profil_user bg_user_sides" >
            <img id="img_profil" src="<?=$donneesUser['avatar_user']?>" alt="#">
            <p class="title_nickname_user"><?=$donneesUser['nickname_user']?></p>
            <p id="">Joueur de type : <?=$donneesUser['typeOf_user']?></p>

            <hr class="style_hr">
            <h2>Ajoute le !</h2>
            <div class="box_link_user">
               <a class="link_leenk_profil fab fa-discord" style="margin-left:0" href=""></a>

               <a class="link_leenk_profil fab fa-steam-square" style="margin-top:-6px" href="https://steamcommunity.com/profiles/76561198090680480/"></a>
            </div>
        </div>
    </div>

    <div class="col-md-6 sides profil_top_right">
        <div class="post_user bg_user_sides">

            <?php while ($donnees = $test->fetch()) {?>
            <p id="title_post" class="title_desc_profil">Votre description </p>
            <hr class="hr_profil_right">
            <p id="description_user"><?=$donnees['content_post']?></p>
            <?php }
;
$test->closeCursor();
?>
        </div>

    </div>
</div>




<!-- Profil Page -->




<div class="row">


    <div class="col-md-12 profil_bottom">

    <div class="user_games">
        <h2 id="title_game_box">Ses Favoris : </h2>
        <div style="width:100%">
                <hr class="top-oranged" style="width:30%">
            </div>
        <?php while ($donnees = $fav->fetch()) {?>
        <div class="card_leenk card_leenk-effect__item card_leenk-hover">

            <img class="card_leenk__image" src="<?=$donnees['url_image_game']?>" alt="Portfolio Item" width="826"
                height="551">

            <div class="card_leenk__info">

       

                <div class="card_leenk__links">

                    <div class="card_leenk__link-block_right">

                        <a class="card_leenk__link"
                            href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>"
                            title="Link Title">
                            <i class="fas fa-search card_leenk_fas"></i>

                        </a>

                        <!-- <a class="card_leenk__link"
                            href="index.php?action=deleteGameFromUserFav&id_game=<?=$donnees['id_game']?>"
                            title="Link Title">
                            <i class="material-icons">-</i>

                        </a> -->
                    </div>

                </div>

            </div>

        </div>
        <?php }
$fav->closeCursor();?>

    </div>




    <div class="user_games">

        <h2 id="title_game_box">Ses jeux : </h2>
        <div style="width:100%">
                <hr class="top-oranged" style="width:30%">
            </div>
        <?php while ($donnees = $reqGames->fetch()) {
    ?>
        <div class="card_leenk card_leenk-effect__item card_leenk-hover">

            <img class="card_leenk__image" src="<?=$donnees['url_image_game']?>" alt="Portfolio Item" width="826"
                height="551">

            <div class="card_leenk__info">

                <div class="card_leenk__links">

                    <div class="card_leenk__link-block_right">

                        <a class="card_leenk__link"
                            href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>"
                            title="Link Title">
                            <i class="fas fa-search card_leenk_fas"></i>

                        </a>
                     

                    </div>

                </div>

            </div>

        </div>
        <?php }
$req->closeCursor();?>
    </div>
    </div>
    <!-- <div class="col-md-6 sides profil_bottom_right">
    </div> -->

</div>


















<?php $content= ob_get_clean(); ?>
<?php require 'views/template.php' ?>







