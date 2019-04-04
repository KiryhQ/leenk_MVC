

<?php $title="Votre Recherche" ?>

<?php ob_start(); ?>

<div style="height:45vh;">

<h2 class="title_search" style="margin:5% 0">Votre recherche : </h2>


<p style="color:white;text-align:center;font-size:22px; margin-bottom:5%">Désolé, aucun résultat pour votre recherche</p>


</div>






<?php $content= ob_get_clean(); ?>
<?php require 'views/template.php' ?>
