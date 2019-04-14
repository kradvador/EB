<?php
// gestion de la cbx a la base de données.
// la variable de cnx est appele ensuite dans le taskmanager

class database
{
    private $db;


    public function __construct()
    {
        try
        {
            $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_LOGIN, DB_PASSWORD);

        }
        catch(Exception $e)
        {
            die('Erreur :' .$e->getMessage());
        }

        $this->db = $db;

    }

    public function getDb()
    {
        return $this->db;
    }


}
