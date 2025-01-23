<?php
namespace App\Controller;

class HomeController extends Controller
{
    public function __construct() {
       
    }

    public function index()
    {
        return $this->render("Home/pages/home");
        exit();
    }
}