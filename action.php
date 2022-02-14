<?php

require_once 'vendor/autoload.php';

use App\classes\Product;
use App\classes\Word;

if (isset($_GET['pages'])){
    if ($_GET['pages']== 'world'){
        $news = new Product();
        $types = $news->arif($_GET['pages']);
        include 'pages/home.php';
    }
    elseif ($_GET['pages']== 'bd'){
        $news = new Product();
        $types = $news->arif($_GET['pages']);
        include 'pages/home.php';
    }
    elseif ($_GET['pages']== 'business'){
        $news = new Product();
        $types = $news->arif($_GET['pages']);
        include 'pages/home.php';
    }

}
//elseif (isset($_POST['homeBtn'])){
//
//}


