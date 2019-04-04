<?php $title="Connexion" ?>

<?php ob_start(); ?>
<?php if(isset($_GET['error']) AND $_GET['error'] == "loginFailed") { ?>

<p style="color:red; font-weight:Bold;text-align:center">Nom d'utilisateur ou Mot de passe incorrect</p>
<?php } ?>

<div class="row form_login_main">
    <div class="col-md-12 d-flex justify-content-center" >  

            <form action="app/login" auto-complete="off"  class="d-flex justify-content-center login_form" method="post">

                <h2 style="width:100%; text-align:center;color:#ff8f00">Connectez vous !</h2>
                <input type="text" id="idUser" name="idUser" class="form_input_login height_class login_input"
                    placeholder="Nom d'utilisateur" />


                <input type="password" name="pwd_user" class="form_input_login height_class login_input" id="pwd_login"
                    placeholder="Mot de passe" />

                <input type="submit" class="btn_login" id="style_btn_login" value="Connexion">


                <div id="style_link_register">
                    <p> <a  href="index.php?action=subscribe">S'inscrire</a></p>
                    <a href="index.php?action=forgetPwd">Nom d'utilisateur ou mot de passe oublié</a>
                </div>

                
    </div>
</div>
<?php $content=ob_get_clean() ?>

<?php require 'views/template.php' ?>
