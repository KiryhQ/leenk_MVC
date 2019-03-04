<?php

namespace Leenk\Modele;

use \Leenk\Modele\Manager;


// require_once('./Modele/Manager.php');


class CardManager extends Manager
{

    public function cardPick(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM games ORDER BY RAND() LIMIT 7');
       
        return $req;
    }
    public function getGame($param){
        $db = $this->dbConnect();
        $req= $db->prepare('SELECT * FROM games WHERE id_game=(:id)');
        $req->execute(array(
            "id" => $param
        ));

        return $req;
    }
    public function whoPlaysIt($param){
        $db=$this->dbConnect();
        $whoplay= $db->prepare('SELECT * FROM play INNER JOIN games ON play.id_game=games.id_game INNER JOIN user ON play.id_user=user.id_user WHERE play.id_game=(:id)');
        $whoplay->execute(array(
            "id" => $param
        ));
        return $whoplay;
    }
    public function getResult($param1){
        $db=$this->dbConnect();

        $result= $db->prepare('SELECT * FROM games WHERE name_game=(:name)');
        $result->execute(array(
            "name" => $param1
        ));
        $count = $result->rowCount();
        return $result;
    }
    public function encodeGame(){
        $db=$this->dbConnect();

        $reqGame=$db->query('SELECT name_game FROM games');

        return $reqGame;
    }
    public function encodeCardType(){
        $db=$this->dbConnect();

        $reqGame=$db->query('SELECT typeOf FROM games');

        return $reqGame;

    }
    public function getResultType($param1){
        $db=$this->dbConnect();

        $reqGame=$db->prepare('SELECT * FROM games WHERE typeOf=(:type)');
        $reqGame->execute(array(
            "type" => $param1
        ));

        return $reqGame;
    }
    public function addToFavorite($param1,$param2){

        $db=$this->dbConnect();

        $favreq=$db->prepare('INSERT INTO favorite(id_user, id_game) VALUES((:id_user), (:id_game))');
        $favreq->execute(array(
            "id_user" => $param2,
            "id_game" => $param1
        ));

        return $favreq;
    }
    public function getGamesOrdered(){
        $db= $this->dbConnect();

        $req = $db->query('SELECT * FROM games ORDER by typeOf, name_game');

        return $req;
    }
}