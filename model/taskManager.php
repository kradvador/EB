<?php
/**
 * Created by PhpStorm.
 * User: leboe
 * Date: 04/04/2019
 * Time: 10:58
 */
//appel de la variabke DB issue de database.php qui lance la cbx
//excution de la requete avec passage du resultat dans un array

class taskManager extends database
{

    public function getlog()
    {
        new database();
        $db=$this->getDb();

        $query="SELECT * FROM admin";
        $req=$db->prepare($query);
        $req->execute();
        while($row=$req->fetch(PDO::FETCH_ASSOC)){
            $contact=array(
                'login'=>$row['login'],
                'password'=>$row['password'],

            );
            $contacts[]=$contact;

        }


        return $contacts;

    }

    public function setCat(){
        new database();
        $db=$this->getDb();


        $query="INSERT INTO animaux(nom, description, photo1, photo2, adopte, disparu, adoption_en, naissance) 
                VALUES ('neo', 'petit chat mignon', 'photo1', 'photo2', 'non', 'non', '2004', '2018/04/01')";
        $req=$db->prepare($query);
        $req->execute();

        print_r($req->errorCode());
        print_r($req->errorInfo());


    }


    public function setLog(){
        new database();
        $db=$this->getDb();


        $query="INSERT INTO admin(login, password) 
                VALUES ('neo', 'chat')";
        $req=$db->prepare($query);
        $req->execute();
    }

    public function checkLog() {

        new database();
        $bdd=$this->getDb();

        $verif = $bdd->prepare('SELECT COUNT(*) FROM admin WHERE password = :password AND login = :login'); // Je compte le nombre d'entrée ayant pour mot de passe et login ceux rentrés
        $verif->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
        $verif->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
        $verif->execute();
        $donnees = $verif->fetchColumn();
        $verif->closeCursor();



        return $donnees;
    }

    public function getCat () {

        new database();
        $db=$this->getDb();

        $query="SELECT * FROM animaux";
        $req=$db->prepare($query);
        $req->execute();
        while($row=$req->fetch(PDO::FETCH_ASSOC)){
            $chat=array(
                'nom'=>$row['nom'],
                'description'=>$row['description'],
                'photo1'=>$row['photo1'],
                'photo2'=>$row['photo2'],
                'adopte'=>$row['adopte'],
                'disparu'=>$row['disparu'],
                'adoption_en'=>$row['adoption_en'],
                'naissance'=>$row['naissance'],

            );
            $chats[]=$chat;

        }


        return $chats;

    }


}