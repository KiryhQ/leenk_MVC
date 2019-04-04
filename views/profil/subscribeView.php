<?php $title = "Leenkez-vous !"?>

<?php ob_start();?>



<div class="container-fluid" style="margin-top:2%">
<?php if(isset($_GET['error']) AND $_GET['error'] == "unvalidUsername"){ ?>
    <div class="d-flex justify-content-center" style="margin-bottom:1%"><div style="width:100px"><img style="width:100%" src="public\ressources\image\toad.png" alt="toad"></div></div>
    <p style="color:red; font-weight:Bold;text-align:center">Nom d'utilisateur déjà utilisé</p>
 <?php } ?>
<?php if(isset($_GET['error']) AND $_GET['error'] == "unvalidForm"){ ?>
<div class="d-flex justify-content-center" style="margin-bottom:1%"><div style="width:100px"><img style="width:100%" src="public\ressources\image\toad.png" alt="toad"></div></div>
    <p style="color:red; font-weight:Bold;text-align:center">Vous n'avez pas rempli les champs correctement. Référez vous aux indications suivantes : </p>
    <ul style="text-align: center;
    color: red;
    list-style-type: none;">
    <li>Votre nom de compte ne doit pas contenir de caractère spéciaux : Accents, / , <, @, $, etc.</li>
    <li>Votre mot de passe doit contenir entre 5 et 20 caractères</li>
    <li>Verifiez que votre email correspond à un email valide : Ex : leenk@leenk.com</li>
    </ul>
<?php } ?>
    <div class="row" style="text-align:center;margin-bottom:10%">
    <h3 style="width:100%;height:40px;color:#ff8f00; margin-bottom:3%;" >Leenkez-vous !</h3>   

        <div class="col-md-6 form_style_subscribe border_form">
            
            <div class="sides_form">
                <form action="app/leenking" auto-complete="off" method="post" class="form_subscribe_part" enctype="multipart/form-data">
                    <input class="height_class input_form" name="nickname_user" type="text" placeholder="Saisissez votre pseudonyme" required>
                    <input class="height_class input_form"  id="pwd" name="pwd" type="password" placeholder="Saisissez votre mot de passe" required>
                    <input class="height_class input_form" id="pwd_confirm" name="pwd" type="password" placeholder="Confirmer votre mot de passe" required>
                    <input class="height_class input_form" name="email" type="email" placeholder="Saisissez votre adresse e-mail" required>
                    <p class="label_form_sub">Vous êtes un joueur : </p>
                    <label for="typeOf">Solo </label>
                    <input class="radio_form_subscribe" name="typeOf" value="Solo" type="radio" checked="checked">
                    <label for="typeOf">En groupe </label>
                    <input class="radio_form_subscribe" name="typeOf" value="En groupe" type="radio">
                   

            </div>
        </div>



        <div class="col-md-6  form_style_subscribe" >
            <div class="sides_form" style="width:100%;">
          
            <p class="label_form_sub" for="steamId">Votre Steam :</p>
            <i class="fas fa-info-circle popUp" style="margin-left:5px;cursor:pointer;height:10px;color:#ff8f00;width:100%; margin-bottom:5px;">
                <span class="popUp_steam_info" id="Popup">Format :<br> https://steamcommunity.com/profiles/*****************/ <br> OU <br> https://steamcommunity.com/id/*****************/</span>
            </i>
                <input type="text" id="steamId" class="form_input_login height_class" name="steamId_user"
                    placeholder="Saisissez URL Steam Community">
               

            <p class="label_form_sub" for="steamId">Votre serveur Discord :</p>
                <input type="text" id="steamId" class="form_input_login height_class" name="steamId_user"
                    placeholder="Saisissez votre serveur Discord">
                

            
                
            </div>
        </div>
        <input type="submit" id="connexionSubmit" value="Envoyer" class="btn_login second_submit">
        </form>
    </div>

</div>


<script>

// A PLACER AVEC UN FICHIER SCRIPT AVEC REGEXP 
$('#connexionSubmit').click(function(e) {

    if ($('#pwd').val() !== $('#pwd_confirm').val()) {

        alert('Mot de passes différents')
        window.replace.location('form.php');
    } else {
        window.replace.location('login.php');
    };

});

   $('.popUp').mouseover(function(){
           $("#Popup").addClass('show_popUp');
       }
   )
   .mouseleave(function(){
    $("#Popup").removeClass('show_popUp');
   })


</script>

<?php $content = ob_get_clean();?>

<?php require 'views/template.php'?>