<?php 
$dbNews = new PDO("mysql:host=localhost;dbname=mySite;charset=utf8;", "root", "");
 
class MainModel {
    

    public function getLastNews($dbNews , $limit) {
        $lastObject = $dbNews->prepare("SELECT id,title,announce,image FROM news ORDER BY date ASC LIMIT ?");
        $lastObject -> bindValue(1, $limit-3, PDO::PARAM_INT);
        $lastObject -> execute();
        
        return $lastObject;
    }

    public function getNews($dbNews , $limit, $page) {
    
        $res = $dbNews->prepare("SELECT id,title,announce,DATE_FORMAT(date,\"%d.%m.%Y\") AS fd FROM news ORDER BY date DESC LIMIT ? , ?");
        
        $res -> bindValue(1,($page-1)*$limit,PDO::PARAM_INT );
        $res -> bindValue(2, $limit, PDO::PARAM_INT);
        $res -> execute();
        return $res;
    }

    public function getCountAllNews($dbNews) {
        $countNews = $dbNews->prepare("SELECT count(*) FROM news");
        $countNews->execute();
        $result = $countNews->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

$getNewsModel = new MainModel();

$getLastNewsModel = new MainModel();

$getCountNews = new MainModel();

require 'controllers/main_controller.php';



