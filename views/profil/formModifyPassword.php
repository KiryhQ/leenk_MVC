<?php $title = "Modifier mon mot de passe" ?>

<?php ob_start(); ?>

<main>
        <form action="app/updatePassword" auto-complete="off"  method="post" class="form_style">

            <!-- <h3 class="title_form">Leenkons-nous !</h3> -->
            <h3 class="title_form">Modifier mon mot de passe</h3>
             
            <input type="password" class="form_input_login height_class" id="pwd" name="actualPassword"
                placeholder="Mot de passe actuel" required>


            <input type="password" class="form_input_login height_class" id="pwd_confirm" name="newPassword"
                placeholder="Nouveau mot de passe" required>

            <input type="password" class="form_input_login height_class" id="pwd_confirm" name="confirmNewPassword"
                placeholder="Confirmer votre nouveau mot de passe" required>


            <input type="submit" id="connexionSubmit" value="Envoyer" class="btn_login second">
        </form>
    </main>


<script>
$('#connexionSubmit').click(function(e) {

if ($('#pwd').val() !== $('#pwd_confirm').val()) {

    alert('Mot de passes différents')
    window.replace.location('form.php');
} else {
    window.replace.location('login.php');
};

});</script>

    <?php $content=ob_get_clean(); ?>

    <?php require 'views/template.php'?>