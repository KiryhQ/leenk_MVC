<?php

namespace Leenk\Controller;

use \Leenk\Modele\CardManager;
use \Leenk\Modele\GroupManager;
use \Leenk\Modele\UserManager;
use \PDO;
use \Exception;

// require 'Modele/userManager.php';
// require 'Modele/cardManager.php';
// require 'Modele/groupManager.php';

class Controller
{

    private $userManager;
    private $cardManager;
    private $groupManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
        $this->cardManager = new CardManager();
        $this->groupManager = new GroupManager();
    }

    public function index()
    {
        $req = $this->cardManager->cardPick();
        $alert = $this->userManager->getAlert();
        require 'views/indexView.php';
    }
    public function loginView()
    {

        require 'views/profil/loginView.php';
    }
    public function subscribeView()
    {
        require 'views/profil/subscribeView.php';
    }
    public function attemptToSubscribe()
    {
        $nickname=htmlspecialchars($_POST['nickname_user']);
        $pwd=htmlspecialchars($_POST['pwd']);
        $pwdHash=password_hash($pwd, PASSWORD_DEFAULT);
        $email=htmlspecialchars($_POST['email']);
        $typeOf=$_POST['typeOf'];
        $steamId=htmlspecialchars($_POST['steamId_user']);

        $req=$this->userManager->checkingValidUsername($nickname);
        $count=$req->rowCount();

        if ($count == 0 ){
           if (preg_match("/^[a-zA-Z0-9]*$/i", $nickname) 
            && preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[a-z]{2,4}$/", $email) 
            && preg_match("/^[a-zA-Z0-9_-]{5,20}$/", $pwd)){
           
        
            $this->userManager->subscribing($nickname, $pwdHash, $email, $typeOf, $steamId);
        } else {
            header("Location: subscribe&error=unvalidForm");
        }} else{
            header("Location: subscribe&error=unvalidUsername");
        }
        
        require 'views/profil/loginView.php';
    }
    public function attemptToLogin($param1, $param2)
    {

        $req = $this->userManager->checkingUser($param1);

        $donnees = $req->fetch();

        
        if ((password_verify($param2, $donnees['pwd_user'])) && ($param1 == $donnees['nickname_user'])) {
            $_SESSION['user'] = $donnees;
            $this->index();

        } else {
            header('Location: connect&error=loginFailed');
        }

    }
    public function updateProfilUser($param)
    {
        $req = $this->userManager->updateProfil($param);
        require 'views/profil/updateProfil.php';
    }
    public function confirmUpdateProfil($param1, $param2, $param3, $param4, $param5, $param6, $param7)
    {
        if (isset($param6)) {

            $nom = "public/ressources/avatar/{$param1}.png";
            $resultat = move_uploaded_file($param7, $nom);
            $_SESSION['user']['avatar_user'] = $nom;
        }
        
        
        $req = $this->userManager->confirmUpdateProfil($param1, $param2, $param3, $param4, $param5, $nom);

        $req = $this->userManager->checkingUser($param1);
        $donnees = $req->fetch();
        $_SESSION['user'] = $donnees;

        $this->userGame($_SESSION['user']['id_user']);

    }
    public function userGame($param)
    {
        $req = $this->userManager->getUserGames($param);
        $fav = $this->userManager->getUserFavGame($param);
        $test = $this->userManager->getPost($_SESSION['user']['id_user']);

        require 'views/profil/profilView.php';
    }

    public function anotherUserGame($param, $param2)
    {
        $reqGames = $this->userManager->getUserGames($param);
        $test = $this->userManager->getPost($param);
        $fav = $this->userManager->getUserFavGame($param);
        $req = $this->userManager->checkingUser($param2);

        require 'views/profil/otherProfilView.php';
    }
    public function addGameToUser($param1, $param2)
    {
        $this->userManager->addingGame($param1, $param2);
        $this->getGamesOrdered();
        // $this->index();
    }
    public function deleteGame($param1, $param2)
    {
        $this->userManager->deletingGame($param1, $param2);
        $this->userGame($_SESSION['user']['id_user']);
    }
    public function addPost($param1, $param2)
    {
        $this->userManager->createPost($param1, $param2);
        $_SESSION['user']['post_value'] = 1;

        $this->userGame($_SESSION['user']['id_user']);

    }
    public function checkGame($param)
    {
        $req = $this->cardManager->getGame($param);
        $whoplay = $this->cardManager->whoPlaysIt($param);
        require 'views/games/gameView.php';
    }
    public function searching($param1)
    {

        $result = $this->cardManager->getResultType($param1);

        $count = $result->rowCount();

        if ($count == 0) {

            $result = $this->cardManager->getResult($param1);
            $reCount = $result->rowCount();

            if ($reCount == 1) {
                require 'views/games/searchGameView.php';
            } elseif ($reCount == 0) {

                $resultUser = $this->userManager->getResult($param1);
                $reCount = $resultUser->rowCount();

                if($reCount == 0){
                    // throw new Exception('BAM');
                    require 'views/errorSearch.php';
                }else{
                     $donnees = $resultUser->fetch();

                $reqGames = $this->userManager->getUserGames($donnees['id_user']);
                $test = $this->userManager->getPost($donnees['id_user']);
                $fav = $this->userManager->getUserFavGame($donnees['id_user']);
                $req = $this->userManager->checkingUser($param1);
                require 'views/profil/otherProfilView.php';
                }
               
            }

        } elseif ($count !== 0) {

            require 'views/games/searchTypeView.php';
        } else {

            $this->index();
        }

    }
    public function testSearch()
    {
        $resultGame = $this->cardManager->encodeGame();
        $donneesGame = $resultGame->fetchAll(PDO::FETCH_ASSOC);

        $donneesGameArray = array("Jeux" => $donneesGame);

        $resultTypeGame = $this->cardManager->encodeCardType();
        $donneesTypeGame = $resultTypeGame->fetchAll(PDO::FETCH_ASSOC);

        $donneesTypeGameArray = array("Type" => $donneesTypeGame);

        $resultUser = $this->userManager->encodeUserNickname();
        $donneesUser = $resultUser->fetchAll(PDO::FETCH_ASSOC);

        $donneesUserArray = array("Joueur" => $donneesUser);

        $donneesArray = $donneesUserArray + $donneesGameArray + $donneesTypeGameArray;

        // $jsonOpen= fopen('public/json/searchGame.json', 'w');
        // $jsonWrite= fwrite($jsonOpen, json_encode($donneesArray));

        $jsonEncodeSearch = json_encode($donneesArray);

        $jsonEncodeSearch = str_replace(array("name_game", "nickname_user", "typeOf"), array("name", "name", "name"), $jsonEncodeSearch);

        require 'public/json/searchGame.php';

    }
    public function addToFavorite($param1, $param2)
    {
        $fav = $this->cardManager->addToFavorite($param1, $param2);

        $this->userGame($param2);
    }
    public function deleteFromFav($param1, $param2)
    {
        $delFav = $this->userManager->deleteFromFav($param1, $param2);

        $this->userGame($param2);
    }
    public function addAlertFromUser($param)
    {
        $req = $this->userManager->addAlert($param);
        $this->userGame($param);
    }
    public function getGamesOrdered()
    {
        $req = $this->cardManager->getGamesOrdered();

        require 'views/games/gamesListViewTest.php';
    }
    public function modifyPassword($actualPassword, $newPassword)
    {

        $req = $this->userManager->checkingUser($_SESSION['user']['nickname_user']);

        $donnees = $req->fetch();

        if ((password_verify($actualPassword, $donnees['pwd_user']))) {

            $newPwdHashed = password_hash($newPassword, PASSWORD_DEFAULT);

            $this->userManager->modifyPassword($newPwdHashed, $_SESSION['user']['nickname_user']);

            $this->userGame($_SESSION['user']['id_user']);

        } else {
            require "views/testView.php";
        }

    }
    public function updateBgUser($id){
        $this->userManager->updateBgProfilPage($id,$_SESSION['user']['nickname_user']);
   
        $req = $this->userManager->checkingUser($_SESSION['user']['nickname_user']);
        $donnees = $req->fetch();
        $_SESSION['user'] = $donnees;
        $this->userGame($_SESSION['user']['id_user']);

    }
    public function sendMailRecovery($mail){
        $token=sha1(uniqid(rand()));

        $this->userManager->recoveryPwd($token,$mail);

        $to = $mail;
        $headers = 'Content-type: text/html; charset=utf-8\r\n';
        $subject = 'Leenk | Reinitialisation de votre mot de passe';
        $message ='Bonjour ! <br/>
        Afin de reinitialiser votre mot de passe, 
        merci de cliquer sur le lien ci-dessous.
        <a href="http://leenk.eu/app/updatePwdFromRecovery&token='.$token.'">Reinitialiser mon mot de passe</a>';
        
        $headers .= 'From: quentin.dereumauxpro@gmail.com' . "\r\n" .
        'Reply-To: quentin.dereumauxpro@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
        $this->index();
    }
    public function updatePwdFinal($pwd,$token){
        $pwdHash=password_hash($pwd, PASSWORD_DEFAULT);
        $this->userManager->updatePwdFinal($pwdHash,$token);

        require 'views/profil/loginView.php';
    }

}
