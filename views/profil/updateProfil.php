<?php $title="Mettre à jour mon Profil" ?>

<?php ob_start() ?>


<?php $donnees=$req->fetch()?>


<form action="index.php?action=confirmUpdateProfil" auto-complete="off" method="post" class="form_style" enctype="multipart/form-data">

    <!-- <h3 class="title_form">Leenkons-nous !</h3> -->
    <h3 class="title_form">Mise à jour du profil</h3>

    <input type="text" class="form_input_login height_class" name="nickname_user"
        value="<?= $donnees['nickname_user']?>" placeholder="Saisissez votre pseudonyme" required>


    <input type="email" class="form_input_login height_class" name="email" placeholder="Saisissez votre adresse e-mail"
        value="<?=$donnees['email_user']?>" required>



    <p id="question_form_sub">Vous êtes un joueur : </p>


    <?php if($donnees['typeOf_user'] == "Solo"){ ?>

    <label for="typeOf">Solo </label>
    <input type="radio" name="typeOf" value="Solo" checked="checked">

    <label for="typeOf">En groupe </label>
    <input type="radio" name="typeOf" value="En groupe">
    <?php } elseif($donnees['typeOf_user'] == "En groupe") {
?>

    <label for="typeOf">Solo </label>
    <input type="radio" name="typeOf" value="Solo">

    <label for="typeOf">En groupe </label>
    <input type="radio" name="typeOf" value="En groupe" checked="checked">
    <?php 
} ?>
    <input type="text" class="form_input_login height_class" value="<?=$donnees['steamId_user']?>" name="steamId_user" placeholder="URL Steam Community">
    <p>Format :</p>
    <img src="public\ressources\image\steamexample1.png" alt="steamExample" />
    <p>OU</p>
    <img src="public\ressources\image\steamexample2.png" alt="steamExample" />
    <input type="file" name="avatar" class="avatar_update_profil">
    <input type="submit" id="connexionSubmit" value="Envoyer" class="btn_login second">



</form>

<a href="index.php?action=modifyPassword">Modifier mon mot de passe</a>





<?php $content=ob_get_clean() ?>

<?php require 'views/template.php' ?>