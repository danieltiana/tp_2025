<?php

namespace App\Model;

// use App\Model\Database;

class Article
{
    private $db;
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function All()
    {
        $sql = "SELECT * FROM article";
        $req = $this->db->query($sql);
        $article = $req->fetchAll();
        return $article();
    }

    public function insert($titre, $description, $photo)
    {
        $sql = "INSERT INTO article(titre, description, photo) VALUES (?,?,?)";
        $req = $this->db->prepare($sql);
        $req->execute([$titre, $description, $photo]);
        return true;
    }
}
