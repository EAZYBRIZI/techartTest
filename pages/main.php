<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Document</title>
</head>

<body>
    
    <?php
        require './pages/header.php'; 
        require 'models/main_model.php';

        
    ?>
    <?php 
        
        $url = intval(substr($_SERVER['REQUEST_URI'], -1));
        

        $minusOne = $url - 1;
        $plusOne = $url + 1;
        $countNews = intval((implode($result)));

        if ($url == 1 and $url < $countNews) {
            $minusOne = $url;
            $url += 1;
            $plusOne = $url + 1;
        } elseif ($url * 4  >= $countNews) {
            $minusOne = $url - 2;
            $url -= 1;
            $plusOne = $url + 1;
            $style = 'none';
        }
        
    ?>

    <nav>
        <div class="navBoobles">
            <a href='/test/index.php?page=<?= $minusOne?>' ><?= $minusOne?></a>
            <a href='/test/index.php?page=<?= $url?>' ><?= $url?></a>
            <a href='/test/index.php?page=<?= $plusOne?>' ><?= $plusOne?></a>
            <a style='display: <?= $style?>' href='/test/index.php?page=<?= $url + 1?>' id="arrowNav" >
                <img id='arrowBrand' src="images/arrowBrand.png" alt="">
                <img id='arrowWhite' src="images/arrowWhite.png" alt="">
            </a>
        </div>
    </nav>

    <?php require('pages/footer.php'); ?>
</body>
</html>