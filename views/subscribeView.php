<?php $title = "Leenkez-vous !" ?>

<?php ob_start(); ?>

<main>
        <form action="index.php?action=leenking" auto-complete="off"  method="post" class="form_style">

            <!-- <h3 class="title_form">Leenkons-nous !</h3> -->
            <h3 class="title_form">Leenkez-vous !</h3>
            <input type="text" class="form_input_login height_class" name="nickname_user" placeholder="Saisissez votre pseudonyme"
                required>    
            <input type="password" class="form_input_login height_class" id="pwd" name="pwd"
                placeholder="Saisissez votre mot de passe" required>

            <input type="password" class="form_input_login height_class" id="pwd_confirm" name="pwd"
                placeholder="Confirmer votre mot de passe" required>

                <input type="email" class="form_input_login height_class" name="email"
                placeholder="Saisissez votre adresse e-mail" required>

                <p id="question_form_sub">Vous êtes un joueur : </p>

                <label for="typeOf">Solo </label>
                <input type="radio" name="typeOf" value="Solo">

                <label for="typeOf">En groupe </label>
                <input type="radio" name="typeOf" value="En groupe">

                <input type="text" class="form_input_login height_class" name="steamId_user" placeholder="URL Steam Community">
                <p>Format :</p>
                <img src="public\ressources\image\steamexample1.png" alt="steamExample">
                <p>OU</p>
                <img src="public\ressources\image\steamexample2.png" alt="steamExample">

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

        });
    </script>

<?php $content=ob_get_clean(); ?>

<?php require 'views/template.php' ?>