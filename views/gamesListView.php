<?php $title = "Nos jeux";?>

<?php ob_start();?>

<div>
            
            
        </div>
<?php
$previousCat = "";



while ($donnees = $req->fetch()) {
    ?>
<h1><?=$donnees['typeOf']?></h1>
<?php if ($donnees['typeOf'] !== $previousCat) {

    while($donnees =$req->fetch()){
        ?>

<?php $previousCat = $donnees['typeOf'];?>



<div class="content-block__effect">
    <div class="card_leenk-effect">
        

        <div>
            <div class="card_leenk card_leenk-effect__item card_leenk-hover">

                <img class="card_leenk__image" src="<?=$donnees['url_image_game']?>" alt="Portfolio Item" width="826"
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
                                href="index.php?action=deleteGameFromUserFav&id_game=<?=$donnees['id_game']?>"
                                title="Link Title">
                                <i class="material-icons">-</i>

                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
   <?php } ?>



        <?php }?>

    </div>
</div>


<?php }

$req->closeCursor();

?>

<?php $content= ob_get_clean();?>

<?php require 'views/template.php'?>