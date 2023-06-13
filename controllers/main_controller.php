<?php 
    $limit = 4;
    $page = $_GET['page'] ?? 1;
    
    $res = $getNewsModel->getNews($dbNews, $limit, $page);
    
    $lastObject = $getLastNewsModel->getLastNews($dbNews, $limit);

    
    

    require 'views/main_view.php'; 

    $result = $getCountNews->getCountAllNews($dbNews);


//     $page = $_GET['page'] ?? 1;
//     class MainController {
    
//     public $limit = 4;
//     public $getNewsModel;
//     public $getLastNewsModel;
    
//     public function hz() {
//         $getNewsModel = new MainModel();
//         $getLastNewsModel = new MainModel();
//     }
    
//     public function getLastObject() {
//         $getLastNews = $this->getLastNewsModel->getLastNews($dbNews, $limit);
//         return $getLastNews;
//     }

//     public function getAllNews() {
//         $getAllNews = $getNewsModel->getNews($dbNews, $limit, $page);
//         return $getAllNews;
//     }
// }

//     $lastObject = new MainController();
//     $lastObject->getLastObject();

//     $res = new MainController();
//     $res->getAllNews();

