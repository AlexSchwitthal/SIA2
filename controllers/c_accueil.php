<?php
  $categories = $pdo->getCategorie();
  $categoriesDesNews = $pdo->getLibelleCategoriesNews();
  $lesNews = $pdo->getNews();
  include("views/news/v_affichageNews.php");
?>
