<?php 
    $idNews = $_GET['id'];
    $limit = 1;

    $res = $resGetOneNews->getOneNews($dbNews, $limit, $idNews);

    require '../views/news_view.php'; ?>