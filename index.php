<?php


namespace Leenk;
use Leenk\App;

require "vendor/autoload.php";

session_start(); // Faire le plus tôt possible (Dans le routeur en général). Ainsi la session est présente sur tout le site.



$app= new App();

$app->run(); 