<?php $title = $_SESSION['user']['nickname_user']?>

<?php ob_start();?>



<!-- Modal POUR LE BACKGROUND USER -->


<div class="modal" id="bg_modal_box" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifiez votre bannière</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form_bg" action="" method="post">
               <div class="modal-picture-preview" data-id="1"><img style="width:100%" src="public\ressources\banner_profil\bg1.png"  alt="#"></div>
               <div class="modal-picture-preview" data-id="2"><img style="width:100%" src="public\ressources\banner_profil\bg2.jpg"  alt="#"></div>
               <div class="modal-picture-preview" data-id="3"><img style="width:100%" src="public\ressources\banner_profil\bg3.jpg"  alt="#"></div>
               <div class="modal-picture-preview" data-id="4"><img style="width:100%" src="public\ressources\banner_profil\bg4.jpg"  alt="#"></div>
               <div class="modal-picture-preview" data-id="5"><img style="width:100%" src="public\ressources\banner_profil\bg5.jpg"  alt="#"></div>
               <div class="modal-picture-preview" data-id="6"><img style="width:100%" src="public\ressources\banner_profil\bg6.jpg"  alt="#"></div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary req_bg" value="Valider"></button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Profil Page -->
<?php if ($_GET['action'] == "updatePassword") {
    ?>
<div class="updatedPwd">Votre mot de passe à été mis à jour.</div>
<?php }?>
<div class="row bg_profil_user" style="background-image:url('<?=$_SESSION['user']['bg_profil_user']?>')">
<div style="width:100%">
    <div class="edit_background">
        <a href="#" data-toggle="modal" data-target="#bg_modal_box" id="edit_bg" class="far fa-edit picto_edit_bg"></a>
    </div>
</div>
    <div class="col-md-6 sides profil_top_left">
        <div class="profil_user bg_user_sides">


            <?php if ($_SESSION['user']['avatar_user'] == "no_img") {?>


            <img id="img_profil" src="./public/ressources/image/testProfil.jpg" alt="#">
            <?php } else {?>

            <img id="img_profil" src="<?=$_SESSION['user']['avatar_user']?>" alt="#">
            <?php }?>
            <p class="title_nickname_user"><?=$_SESSION['user']['nickname_user']?></p>

            <hr class="style_hr">
            <h2>Ajoute le !</h2>
            <div class="box_link_user">
                <a class="link_leenk_profil fab fa-discord" style="margin-left:0" href=""></a>

                <a class="link_leenk_profil fab fa-steam-square" style="margin-top:-6px"
                    href="https://steamcommunity.com/profiles/76561198090680480/"></a>
            </div>
        </div>

        <a href="app/updateProfil" class="update_profil_btn_01">Mettre à jour mon profil</a>
    </div>


    <div class="col-md-6 sides profil_top_right">
        <div class="post_user bg_user_sides">

            <?php if ($_SESSION['user']['post_value'] == 0) {

    ?>
            <p id="title_post" class="title_desc_profil">Votre description  </p>
            <hr class="hr_profil_right">
            <form action="app/post_userView" method="post">
                <input type="text" name="post_user">
                <input type="submit" data-id="Valider">
            </form>
            <?php
} else {
    ?>
            <?php while ($donnees = $test->fetch()) {?>
            <p id="title_post" class="title_desc_profil">Votre description</p>
            <hr class="hr_profil_right">
            <p id="description_user"><?=$donnees['content_post']?></p>
            <?php }
    ;
    $test->closeCursor();
}?>
        </div>



        <div id="box_alert_user">
            <p>Redigez une alerte basée sur vos jeux favoris !</p>
            <a href="app/alertFromUser&id=<?=$_SESSION['user']['id_user']?>">Go !</a>
        </div>
    </div>


</div>


<div class="row">


    <div class="col-md-12 profil_bottom">

        <div class="user_games">
            <h2 id="title_game_box">Mes Favoris : </h2>
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
                                href="app/viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>"
                                title="Link Title">
                                <i class="fas fa-search card_leenk_fas"></i>

                            </a>
                        </div>
                        <div class="card_leenk__link-block_left">
                            <a class="card_leenk__link"
                                href="app/deleteGameFromUserFav&id_game=<?=$donnees['id_game']?>" title="Link Title">
                                <i class="fas fa-minus-circle card_leenk_fas"></i>

                            </a>
                        </div>

                    </div>

                </div>

            </div>
            <?php }
$fav->closeCursor();?>

        </div>




        <div class="user_games">

            <h2 id="title_game_box">Mes jeux : </h2>
            <div style="width:100%">
                <hr class="top-oranged" style="width:30%">
            </div>
            <?php while ($donnees = $req->fetch()) {
    ?>
            <div class="card_leenk card_leenk-effect__item card_leenk-hover">

                <img class="card_leenk__image" src="<?=$donnees['url_image_game']?>" alt="Portfolio Item" width="826"
                    height="551">

                <div class="card_leenk__info">



                    <div class="card_leenk__links">

                        <div class="card_leenk__link-block_left">

                            <a class="card_leenk__link" href="app/deleteGameFromUser&id_game=<?=$donnees['id_game']?>"
                                title="Link Title">
                                <i class="fas fa-minus-circle card_leenk_fas"></i>

                            </a>
                        </div>
                        <div class="card_leenk__link-block_center">

                            <a class="card_leenk__link" href="app/addToFavorite&id_game=<?=$donnees['id_game']?>"
                                title="addToFav Title">
                                <i class="fas fa-star card_leenk_fas">
                                </i>

                            </a>
                        </div>
                        <div class="card_leenk__link-block_right">

                            <a class="card_leenk__link"
                                href="app/viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>"
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
<script>
$('#bg_modal_box').on('shown.bs.modal', function() {
    $('#edit_bg').trigger('focus')
});


$(".modal-picture-preview").on('click',function(){

    $(this).toggleClass("active-bg");
    $(this).siblings().removeClass("active-bg");
    let test=$(this).data("id");

    $('.form_bg').attr("action","index.php?action=editBackground&id="+test);

});


</script>
<?php $content = ob_get_clean();?>
<?php require 'views/template.php'?>