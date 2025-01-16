<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Model\Article;


class ArticleController extends Controller
{
    private $articleModel;
    public function __construct()
    {
        $this->articleModel = new Article();
    }

    // public function a()
    // {
    //     
    // }

    public function index()
    {
        $articles = $this->articleModel->all();
        $this->render("Home/Article/liste", ["articles" => $articles]);
    }
}
