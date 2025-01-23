<?php

namespace App\Controller;

use App\Model\Article;
use App\Controller\Controller;

class ArcticleController extends Controller
{
   private $articleModel;
   public function __construct()
   {
      $this->articleModel = new Article();
   }

   public function Tous()
   {
      $articles = $this->articleModel->all();
      $this->render("Home/Article/liste", ["articles" => $articles]);
   }

   public function index()
   {
      $articles = $this->articleModel->all();
      $this->render("Admin/pages/admin", ["articles" => $articles]);
   }

   public function article()
   { {
         $articles = $this->articleModel->all();
         $this->render("Admin/Article/article", ["articles" => $articles]);
      }
   }

   public function create()
   {
      $this->render("Admin/Article/create", ["articles"]);
   }

   public function nouveau()
   {
      if (isset($_POST['create'])) {
         if (!empty($_POST["titre"]) and !empty($_POST["description"])) {
            $titre = $_POST["titre"];
            $description = htmlspecialchars($_POST["description"]);
            $destination = "Assets/images";
            $filename = $destination.basename($_FILES["image"]["name"]);
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $filename)){
                  $create = $this->articleModel->create($titre, $description, $filename);
                  if($create){
                     return $this->redirect("/admin/article");
                  }
            }
         }
      }
   }
}
