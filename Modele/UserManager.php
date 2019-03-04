<?php
// require_once('./Modele/Manager.php');


namespace Leenk\Modele;

use \Leenk\Modele\Manager;


class UserManager extends Manager
{

    public function subscribing($param1, $param2, $param3,$param4,$param5){
   
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO user(nickname_user, pwd_user,email_user,typeOf_user,steamId_user) VALUES (:nom,:pwd,:mail,:typeOf,:steamId)');
            $req->execute(array(
                'nom' => $param1,
                'pwd' => $param2,
                'mail' => $param3,
                'typeOf' =>$param4,
                'steamId' => $param5
            ));
        
            return $req;

    }
    public function checkingUser($param1){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE nickname_user =:nom');
        $req->execute(array(
            "nom" => $param1
        ));
        
        return $req;
    }
    public function getUserGames($param){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM play INNER JOIN games ON play.id_game=games.id_game WHERE id_user =(:id)');
        $req->execute(array(
            "id" => $param
        ));

        return $req;
    }   
    public function addingGame($param1, $param2){
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO play(id_user, id_game) VALUES ((:id_user),(:id_game))');
        $req->execute(array(
            "id_game" =>$param1,
            "id_user" =>$param2
        ));
    }
    public function deletingGame($param1,$param2){
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM play WHERE id_game=(:idgame) AND id_user=(:iduser)');
        $req->execute(array(
            "idgame"=>$param1,
            "iduser"=>$param2
        ));
    }
    public function createPost($param1,$param2){
        $db = $this->dbConnect();
        $req=$db->prepare('INSERT INTO post(content_post, id_user) VALUES ((:content),(:id))');
        $req->execute(array(
            "content" => $param2,
            "id" => $param1
        ));

        $postUpdate=$db->prepare('UPDATE user set post_value=1 WHERE id_user =(:id)');
        $postUpdate->execute(array(
            "id"=> $param1
        ));
    }
    public function getPost($param1){
        $db= $this->dbConnect();
        $req= $db->prepare('SELECT * from post where id_user=(:id)');
        $req->execute(array(
            "id" => $param1
        ));
        return $req;
    }
    public function encodeUserNickname(){
        $db=$this->dbConnect();

        $req= $db->query('SELECT nickname_user FROM user');

        return $req;
    }
    public function getResult($param1){
        $db=$this->dbConnect();

        $req= $db->prepare('SELECT * FROM user WHERE nickname_user=(:nom)');
        $req->execute(array(
            "nom" => $param1
        ));

        return $req;

    }
    public function getUserFavGame($param){
        $db=$this->dbConnect();

        $fav= $db->prepare('SELECT * FROM favorite INNER JOIN games on favorite.id_game=games.id_game WHERE id_user=(:id)');
        $fav->execute(array(
            "id" => $param
        ));

        return $fav;
    }
    public function deleteFromFav($param1, $param2){
            $db = $this->dbConnect();
            $req = $db->prepare('DELETE FROM favorite WHERE id_game=(:idgame) AND id_user=(:iduser)');
            $req->execute(array(
                "idgame"=>$param1,
                "iduser"=>$param2
            ));
    }
    public function addAlert($param){
        $db = $this->dbConnect();

        $req= $db->prepare('INSERT INTO alert(id_user) VALUES ((:id))');
        $req->execute(array(
            "id" => $param
        ));
    }
    public function getAlert(){
        $db = $this->dbConnect();

        $req = $db->query('SELECT nickname_user,name_game,user.id_user,games.id_game, id_alert FROM alert 
                           INNER JOIN user ON alert.id_user=user.id_user
                           INNER JOIN favorite ON favorite.id_user= user.id_user 
                           INNER join games ON games.id_game=favorite.id_game');
        
        return $req;
    }
}