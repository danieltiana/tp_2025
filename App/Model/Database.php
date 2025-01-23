<?php
namespace App\Model;

use PDO;
use PDOException;

class Database extends PDO
{
     private static $instance=null;

    public function __construct()
    {
        
            $dsn = "mysql:host=localhost;dbname=blogy";
            $username = "root";
            $pass="";

        try {
        parent:: __construct($dsn, $username, $pass);
            $this ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "erreur de connexion".$e->getMessage();
        }

    }
    public  static function getInstance()
    {
        if(self::$instance===null){
            self::$instance = new self();

        }
        return self:: $instance;
    }
}