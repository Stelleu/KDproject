<?php

namespace App\Core;


abstract class SQL
{
    private $pdo;
    private $table;
    public function __construct()
    {
        try{
            //Connexion à la base de données
            $this->pdo = new \PDO( DBDRIVER.":host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME ,DBUSER , DBPWD );
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\Exception $e){
            die("Erreur SQL".$e->getMessage());
        }
        $this->table = "article";

    }

    public function selectAll(): array
    {
        $sql = "SELECT * FROM ".$this->table. " ORDER BY LastMod ";
        $queryPrepared = $this->pdo->prepare($sql);
        $queryPrepared->execute();
        return $queryPrepared->fetchAll();
    }
}
