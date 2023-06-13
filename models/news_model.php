<?php
$dbNews = new PDO("mysql:host=localhost;dbname=mySite;charset=utf8;", "root", "");

class NewsModel {
    
    public function getOneNews($dbNews, $limit, $idNews) {
        $res = $dbNews->prepare("SELECT image,id,title,content,announce,DATE_FORMAT(`date`,\"%d.%m.%Y\") AS fd FROM news ORDER BY 'date' DESC LIMIT ? , ?");
        $res -> bindValue(1,($idNews-1)*$limit,PDO::PARAM_INT );
        $res -> bindValue(2, $limit, PDO::PARAM_INT);
        $res -> execute();
      
        return $res;
    }

}

$resGetOneNews = new NewsModel();

require '../controllers/news_controller.php';