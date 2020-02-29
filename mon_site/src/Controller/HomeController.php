<?php


namespace App\Controller;


use App\Model\Blogpost;
use App\Model\BlogpostManager;
use App\Model\Connexion;

class HomeController
{
    public function homePage(){
        $blogpostManager = new  BlogpostManager(Connexion::getInstance());
        $blogs = $blogpostManager->list();
        var_dump($blogs);
    }
}