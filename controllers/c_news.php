<?php

if (empty($_REQUEST['action'])) {
    $_REQUEST['action'] = 'affichageNews';
}
$action = $_REQUEST['action'];

switch ($action) {
    case 'affichageNews': {
            $categories = $pdo->getCategorie();
            $categoriesDesNews = $pdo->getLibelleCategoriesNews();
            $lesNews = $pdo->getNews();
            include("views/news/v_affichageNews.php");
            break;
        }
    case 'affichageNewsRestriction': {
            $categories = $pdo->getCategorie();
            $categoriesDesNews = $pdo->getLibelleCategoriesNews();
            $lesNews = $pdo->getNewsByCategorie($_REQUEST['id']);
            include("views/news/v_affichageNews.php");
            break;
        }
    case 'pageNews': {
          if(isset($_REQUEST['id'])) {
            $laNews = $pdo->getNewsById($_REQUEST['id']);
            include("views/news/v_pageNews.php");
          }
          else {
            $categories = $pdo->getCategorie();
            $categoriesDesNews = $pdo->getLibelleCategoriesNews();
            $lesNews = $pdo->getNews();
            include("views/news/v_affichageNews.php");
          }
          break;
    }

    case 'demandeDeconnexion': {

        break;
    }
    default : {
        $categories = $pdo->getCategorie();
        $categoriesDesNews = $pdo->getLibelleCategoriesNews();
        $lesNews = $pdo->getNews();
        include("views/news/v_affichageNews.php");
        break;
    }
}

?>
