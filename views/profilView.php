<?php $title=$_SESSION['user']['nickname_user'] ?>

<?php ob_start(); ?>



<main id='profil_main'>
    <div id="title_userView">

        <h1>Bienvenue <?= $_SESSION['user']['nickname_user']?></h1>
    </div>

    <div id="box_profilReview">
        <img id="img_profil" src="./public/ressources/image/testProfil.jpg" alt="#">
        <p id="name_user_profil"><?= $_SESSION['user']['nickname_user']?></p>
        <p id="type_user_profil">Joueur de type : <?= $_SESSION['user']['typeOf_user']?></p>
    </div>


    <div id="post_user">

        <?php if($_SESSION['user']['post_value'] == 0){

    ?>
        <p id="title_post">Votre description :</p>
        <form action="index.php?action=post_userView" method="post">
            <input type="text" name="post_user">
            <input type="submit" value="Valider">
        </form>
        <?php
  } else {
  ?>
        <?php while($donnees=$test->fetch()){?>
        <p id="title_post">Votre description :</p>
        <p id="description_user"><?=$donnees['content_post']?></p>
        <?php }; $test->closeCursor();
  } ?>
    </div>

    <div id="sidebar_right">
        <h2>Ajoute le !</h2>

        <p>Discord : </p>

        <a href="https://steamcommunity.com/profiles/76561198090680480/">Steam :</a>
        <p>blabla</p>
    </div>

    <div id="box_alert_user">
        <p>Redigez une alerte basé sur vos jeux favoris !</p>
        <a href="index.php?action=alertFromUser&id=<?= $_SESSION['user']['id_user']?>">Go !</a>
    </div>


    <div id="user_fav_games">
        <h2 id="title_game_box">Ses Favoris : </h2>

        <?php while($donnees= $fav->fetch()) { ?>
        <div class="card_leenk card_leenk-effect__item card_leenk-hover">

            <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item" width="826"
                height="551">

            <div class="card_leenk__info">

                <h3 class="card_leenk__header"><?=$donnees['name_game']?></h3>

                <div class="card_leenk__links">

                    <div class="card_leenk__link-block">

                        <a class="card_leenk__link"
                            href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>"
                            title="Link Title">
                            <i class="material-icons">link</i>

                        </a>

                        <a class="card_leenk__link"
                            href="index.php?action=deleteGameFromUserFav&id_game=<?= $donnees['id_game']?>"
                            title="Link Title">
                            <i class="material-icons">-</i>

                        </a>
                    </div>

                </div>

            </div>

        </div>
        <?php } $fav->closeCursor(); ?>

    </div>




    <div id="user_games">

        <h2 id="title_game_box">Ses jeux : </h2>
        <?php while( $donnees = $req->fetch()){
      ?>
        <div class="card_leenk card_leenk-effect__item card_leenk-hover">

            <img class="card_leenk__image" src="<?= $donnees['url_image_game'] ?>" alt="Portfolio Item" width="826"
                height="551">

            <div class="card_leenk__info">

                <h3 class="card_leenk__header"><?=$donnees['name_game']?></h3>

                <div class="card_leenk__links">

                    <div class="card_leenk__link-block">

                        <a class="card_leenk__link"
                            href="index.php?action=viewGame&id_game=<?=$donnees['id_game']?>&title_game=<?=$donnees['name_game']?>"
                            title="Link Title">
                            <i class="material-icons">link</i>

                        </a>
                        <a class="card_leenk__link"
                            href="index.php?action=addToFavorite&id_game=<?=$donnees['id_game']?>"
                            title="addToFav Title">
                            <i class="material-icons">Favoris</i>

                        </a>

                        <a class="card_leenk__link"
                            href="index.php?action=deleteGameFromUser&id_game=<?= $donnees['id_game']?>"
                            title="Link Title">
                            <i class="material-icons">-</i>

                        </a>

                    </div>

                </div>

            </div>

        </div>
        <?php } $req->closeCursor(); ?>
    </div>


</main>


<?php $content= ob_get_clean(); ?>
<?php require 'views/template.php' ?>