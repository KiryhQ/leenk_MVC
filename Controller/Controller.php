<?php

namespace Leenk\Controller;

use \Leenk\Modele\cardManager;
use \Leenk\Modele\groupManager;
use \Leenk\Modele\userManager;
use \PDO;

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

        require 'views/loginView.php';
    }
    public function subscribeView()
    {
        require 'views/subscribeView.php';
    }
    public function attemptToSubscribe($param1, $param2, $param3, $param4, $param5)
    {
        $this->userManager->subscribing($param1, $param2, $param3, $param4, $param5);
        require 'views/loginView.php';
    }
    public function attemptToLogin($param1, $param2)
    {

        $req = $this->userManager->checkingUser($param1);

        $donnees = $req->fetch();

        if ((password_verify($param2, $donnees['pwd_user'])) && ($param1 == $donnees['nickname_user'])) {
            $_SESSION['user'] = $donnees;
            $this->index();

        } else {
            header('Location: index.php?action=connect');
        }

    }
    public function userGame($param)
    {
        $req = $this->userManager->getUserGames($param);
        $fav = $this->userManager->getUserFavGame($param);
        $test = $this->userManager->getPost($_SESSION['user']['id_user']);

        require 'views/profilView.php';
    }

    public function anotherUserGame($param, $param2)
    {
        $reqGames = $this->userManager->getUserGames($param);
        $test = $this->userManager->getPost($param);
        $req = $this->userManager->checkingUser($param2);

        require 'views/otherProfilView.php';
    }
    public function addGameToUser($param1, $param2)
    {
        $this->userManager->addingGame($param1, $param2);
        $this->index();
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

        header('Location: index.php?action=checkMyProfil');

    }
    public function checkGame($param)
    {
        $req = $this->cardManager->getGame($param);
        $whoplay = $this->cardManager->whoPlaysIt($param);
        require 'views/gameView.php';
    }
    public function searching($param1)
    {

        $result = $this->cardManager->getResultType($param1);

        $count = $result->rowCount();

        if ($count == 0) {

            $result = $this->cardManager->getResult($param1);
            $reCount = $result->rowCount();

            if ($reCount == 1) {
                require 'views/searchGameView.php';
            } elseif ($reCount == 0) {

                $resultUser = $this->userManager->getResult($param1);

                $donnees = $resultUser->fetch();

                $reqGames = $this->userManager->getUserGames($donnees['id_user']);
                $test = $this->userManager->getPost($donnees['id_user']);
                $req = $this->userManager->checkingUser($param1);
                require 'views/otherProfilView.php';
            }

        } elseif ($count !== 0) {

            require 'views/searchTypeView.php';
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

        require 'views/gamesListViewTest.php';
    }

}
