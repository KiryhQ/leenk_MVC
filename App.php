<?php

// require 'controller/controller.php';
namespace Leenk;

use \Leenk\Controller\Controller;


class App
{
    private $controller; 

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function run()
    {
        if (isset($_GET['action'])) {

            if($_GET['action'] == 'connect'){
                $this->controller->loginView();
            }
            elseif($_GET['action'] == 'subscribe'){
                $this->controller->subscribeView();
            }
            elseif($_GET['action'] == "leenking"){
                $nickname=htmlspecialchars($_POST['nickname_user']);
                $pwd=htmlspecialchars($_POST['pwd']);
                $pwdHash=password_hash($pwd, PASSWORD_DEFAULT);
                $email=htmlspecialchars($_POST['email']);
                $typeOf=$_POST['typeOf'];
                $steamId=$_POST['steamId_user'];
                $this->controller->attemptToSubscribe($nickname, $pwdHash, $email,$typeOf,$steamId);
            }
            elseif ($_GET['action'] == "login") {
                $username = $_POST['idUser'];
                $password = $_POST['pwd_user'];
                $this->controller->attemptToLogin($username, $password);

            }
            elseif ($_GET['action'] == "logOut"){
                unset($_SESSION['user']);
                header('Location: index.php');
            }
            elseif($_GET['action'] == "checkMyProfil"){
               
                $req = $this->controller->userGame($_SESSION['user']['id_user']);
            }
            elseif($_GET['action'] == "addGameToUser"){
                $this->controller->addGameToUser($_GET['id_game'], $_SESSION['user']['id_user']);
            }
            elseif($_GET['action'] == "deleteGameFromUser"){
                $this->controller->deleteGame($_GET['id_game'],$_SESSION['user']['id_user']);
            }
            elseif($_GET['action'] == "post_userView"){
                $content=htmlspecialchars($_POST['post_user']);
                $this->controller->addPost($_SESSION['user']['id_user'], $content);
            }
            elseif($_GET['action']== "viewGame"){
                 $this->controller->checkGame($_GET['id_game']);
            }
            elseif($_GET['action'] == "viewOthersProfil"){
                $this->controller->anotherUserGame($_GET['id_user'],$_GET['name']);

            }
            elseif($_GET['action'] == "searchGame"){
                $this->controller->searching($_POST['searchbar']);
            }
            elseif($_GET['action']=="testSearch"){
                $this->controller->testSearch();
            }
            elseif($_GET['action'] == "addToFavorite"){
                $this->controller->addToFavorite($_GET['id_game'], $_SESSION['user']['id_user']);
            
            }
            elseif($_GET['action'] == "deleteGameFromUserFav"){
                $this->controller->deleteFromFav($_GET['id_game'],$_SESSION['user']['id_user']);
            }
            elseif($_GET['action'] == "alertFromUser"){
                $this->controller->addAlertFromUser($_GET['id']);
            }
            elseif($_GET['action'] == "checkGamesList"){
                $this->controller->getGamesOrdered();
            }
        } else {   

            $this->controller->index();

        }
    }
}
