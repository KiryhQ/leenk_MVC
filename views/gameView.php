<?php $title=$_GET['title_game']; ?>

<?php ob_start(); ?>


<div id="game_view">
<?php while($data= $req->fetch()){

?>


<div id="game_title_view"><?=$data['name_game']?></div>
<div id="game_img_view"><img src="<?= $data['url_image_game']?>" alt="<?php $data['name_game']?>"></div>
<div id="game_desc_view"><?= $data['desc_game']?></div>

<?php
};
?>
</div>
<a id="btn_add_game_view" href="index.php?action=addGameToUser&id_game=<?= $data['id_game']?>">Ajouter à vos jeux</a>
<div id="who_plays_it_box">
    <p id="title_WPI">Celles & ceux qui y joue également :</p>

    <?php while($datas = $whoplay->fetch()){
        ?>
    
        <a href="index.php?action=viewOthersProfil&id_user=<?= $datas['id_user']?>&name=<?= $datas['nickname_user']?>" id="who_plays_it"><?= $datas['nickname_user']?></a>
    <?php } ?>
      <?php $whoplay->closeCursor(); ?>
</div>
<?php $content = ob_get_clean();?>

<?php require 'views/template.php'?>
