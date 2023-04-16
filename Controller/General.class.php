<?php

namespace App\Controller;

use App\Core\View;
use  App\Model\Article;

class General{

    public function home()
    {
        $article = new Article();
        $articles = $article->select();
        $view = new View("home");
        $view->assign("articles",$articles);
    }
}

