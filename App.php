<?php

// require 'controller/controller.php';
namespace Leenk;

use \Leenk\Controller\Controller;
use \Exception;


class App
{
    private $controller; 

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function run()
    {
      try{

        if (isset($_GET['action'])) {

            if($_GET['action'] == 'connect'){
                $this->controller->loginView();
            }
            elseif($_GET['action'] == 'subscribe'){
                $this->controller->subscribeView();
            }
            elseif($_GET['action'] == "leenking"){
               
                $this->controller->attemptToSubscribe();
            }
            elseif ($_GET['action'] == "login") {
                $username = $_POST['idUser'];
                $password = $_POST['pwd_user'];
                $this->controller->attemptToLogin($username, $password);

            }
            elseif ($_GET['action'] == "logOut"){
                unset($_SESSION['user']);
                header('Location: ../index.php');
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
            elseif($_GET['action'] == "appLeenk"){
                $this->controller->index();
            }
            elseif($_GET['action'] == "updateProfil"){

                $this->controller->updateProfilUser($_SESSION['user']['nickname_user']);
            }
            elseif($_GET['action'] == "confirmUpdateProfil"){
                $nickname=$_POST['nickname_user'];
                $email=$_POST['email'];
                $typeOf=$_POST['typeOf'];
                $steamId=$_POST['steamId_user'];

                $img=$_FILES['avatar']['name'];
                $img_tmp=$_FILES['avatar']['tmp_name'];
              
                $this->controller->confirmUpdateProfil($nickname,$email,$typeOf,$steamId,$_SESSION['user']['nickname_user'],$img,$img_tmp);
            }elseif($_GET['action'] == "modifyPassword"){
                require 'views/formModifyPassword.php';
            }elseif($_GET['action'] == "updatePassword"){
                $actualPassword=$_POST['actualPassword'];
                $newPassword=$_POST['newPassword'];
                $this->controller->modifyPassword($actualPassword,$newPassword);
            }
            elseif($_GET['action'] == "editBgUser"){
            }
            elseif($_GET['action'] == 'test'){
                require 'views/phpinfo.php';
            }
            elseif($_GET['action'] == "testPic"){

                require "views/testView.php";

            }elseif($_GET['action'] == "editBackground"){
                $this->controller->updateBgUser($_GET['id']);
            }elseif($_GET['action'] == "forgetPwd"){
                require 'views/profil/forgetPwdView.php';
            }elseif($_GET['action'] == "getLogsBack"){
                $mail=htmlspecialchars($_POST['email_recovery']);
                $this->controller->sendMailRecovery($mail);
            }elseif($_GET['action'] == "updatePwdFromRecovery"){
                $token=$_GET['token'];
                require 'views/profil/pwdRecovery.php';
            }
            elseif($_GET['action'] == "updatePwdFinal"){
                $pwd=htmlspecialchars($_POST['newPassword']);
                $token=$_GET['token'];
                $this->controller->updatePwdFinal($pwd,$token);
            }
        } else {   

            // $this->controller->index();
            require 'views/preIndex.php';
        }
        } catch (Exception $e){
        $error=$e->getMessage();
        require 'views/errorView.php';
        }}};
    





// TO DO -



// RegExp JS / PHP 

// Modal selection BG profil/user. 

// CSS checking Update profil // Leenking

// Commentary *

// UPDATE on Desc Profil