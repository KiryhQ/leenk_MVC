<?php $title="Connexion" ?>

<?php ob_start(); ?>

<main class="login_padding">
        <div id="form_login" class="form_style">

            <form action="index.php?action=login" auto-complete="off"  id="logintoform" method="post">


                <input type="text" id="idUser" name="idUser" class="form_input_login height_class"
                    placeholder="Nom d'utilisateur" />


                <input type="password" name="pwd_user" class="form_input_login height_class" id="pwd_login"
                    placeholder="Mot de passe" />

                <input type="submit" class="btn_login" id="style_btn_login" value="Connexion">


                <div>
                    <a id="style_link_register" href="index.php?action=subscribe">S'inscrire</a>
                </div>

                <div id="result"></div>
    </main>

<?php $content=ob_get_clean() ?>

<?php require 'views/template.php' ?>
