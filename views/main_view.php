<?php 
    foreach ($lastObject->fetchall() as $rows) { ?>
        <div class="mainLogo" style="background: url('images/<?= $rows['image'];?>'); background-size: cover; background-position: center;">
            <h1><?= $rows['title']?></h1>
            <span><?= $rows['announce']?></span>
        </div>
    <?php }?> 
    <div class="tag"><h1>Новости</h1></div>
    <main>
        <?php 
            foreach ($res->fetchall() as $row) { ?>
            <div class="news">
                <span id='date'><?= $row['fd']?></span>
                <h2><?= $row['title'],'<br>';?></h2>
                <p><?= $row['announce']?></p>
                <a href="/test/pages/news.php?id=<?= $row['id']?>" id='button'>Подробнее 
                    <img id='arrowBrand' src="images/arrowBrand.png" alt="">
                    <img id='arrowWhite' src="images/arrowWhite.png" alt="">
                </a>
            </div> 
        <?php }?> </main>