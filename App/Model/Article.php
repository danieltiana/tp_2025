<?php
// Afficahage 
namespace App\Model;

use App\Model\Database;

class Article
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    public function all()
   {
    $sql = "SELECT * FROM article";
    $req = $this ->db->query($sql);
    $article = $req -> fetchAll();
    return $article;
   } 
//    insertion 
public function create($titre,$description,$photo)

{
    $sql = "INSERT INTO  article(titre, description,image) VALUES (?,?,?)";
    $req = $this ->db->prepare($sql);
    $req-> execute([$titre,$description,$photo]); 
    return true;
}
}