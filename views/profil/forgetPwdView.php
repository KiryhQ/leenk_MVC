<?php $title="Identifiant oublié" ?>

<?php ob_start() ?>


<h2 style="width:100%; text-align:center;color:#ff8f00;margin-top:5%">Identifiant oublié</h2>


    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <form action="index.php?action=getLogsBack" auto-complete="off"  class="d-flex justify-content-center login_form" method="post">
                <input type="text" class="form_input_login height_class login_input" name="email_recovery" placeholder="Saississez votre Email">
                <input type="submit" class="btn_login" value="Envoyez"></form>
        </div>
    </div>


<?php $content=ob_get_clean() ?>

<?php require 'views/template.php' ?>