<?php $title=$_GET['title_game']; ?>

<?php ob_start(); ?>


<div class="container-fluid" style="margin-top:5%">
    <div class="row" style="width:100%">
        <div class="col-md-6 ">
            <?php while($donnees= $req->fetch()){

?>


            <div class="content-block__effect">
                <div class="card_leenk-effect">
                    <div class="card_leenk card_leenk-effect__item card_leenk-hover">

                        <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item"
                            width="826" height="551">

                        <div class="card_leenk__info">



                            <div class="card_leenk__links">
                                <?php if(isset($_SESSION['user'])){
                ?>
                                <div class="card_leenk__link-block_left">

                                    <a class="card_leenk__link"
                                        href="index.php?action=addGameToUser&id_game=<?= $donnees['id_game']?>"
                                        title="Link Title">
                                        <i class="fas fa-plus-circle card_leenk_fas "></i>

                                    </a>

                                </div>
                                <?php } ?>
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

                </div>
            </div>



        </div>
        <div class="col-md-6" style="margin:auto 0">
            <div class="game_desc_text"><?= $donnees['desc_game']?></div>
        </div>
        <?php
};
?>
    </div>
</div>

<div id="who_plays_it_box">
    <p id="title_WPI" style="color:#ff8f00">Celles & ceux qui y joue également :</p>
    <div style="width:100%;margin-bottom:3%">
    <hr class="bottom-oranged">
    </div>
    <div class="box_WPI_player">
    <?php while($datas = $whoplay->fetch()){
        ?>

    <a href="index.php?action=viewOthersProfil&id_user=<?= $datas['id_user']?>&name=<?= $datas['nickname_user']?>"
        id="who_plays_it">
        <div style="width:50%;margin-bottom:1%;">
            <img style="width:100%" src="<?=$datas['avatar_user']?>"><img></div>
        <p style="width:100%;margin-bottom:0;color:#ff8f00"><?= $datas['nickname_user']?></p>
    </a>
    <?php } ?>
    <?php $whoplay->closeCursor(); ?>
    </div>
</div>



<?php $content = ob_get_clean();?>

<?php require 'views/template.php'?>