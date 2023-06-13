<?php 
    foreach ($res->fetchall() as $row) { ?>
        <span class="road"><b>Главная</b> / <?= $row['title']?></span>
        <h1 class="title"><?= $row['title'],'<br>';?></h1>
        <span class="date"><?= $row['fd']?></span>
        <div class="openedNews">
            <div class="content">
                
                <span id='announce'><?= $row['announce']?></span>
                <span id='mainContent'><?= $row['content']?></span>
                
            </div>
            <div class="newsImage">
                <img src="../images/<?= $row['image']?>" alt="">
            </div>
        </div><?php }?>