<?php 
    // require('../vendor/autoload.php');
    // require('style.php');
?>

<head>
    <link rel="stylesheet" href="../styles/news.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>

<?php 
    require('header.php');
?>
<div class="divider"></div>

    <?php 
        require '../models/news_model.php';
    ?>
    
    <a href='/test/' id="arrowBack" > 
            <img id='arrowBrand' src="../images/arrowBack.png" alt="">
            Назад к новостям
        </a>

<?php
    require('footer.php');
?>