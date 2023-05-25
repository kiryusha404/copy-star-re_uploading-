<?php
    $push = 'SELECT id_pr, img from product ORDER BY `product`.`id_pr`  DESC limit 4';
    $res = mysqli_query($copystar, $push);
?>
<div class="new">
    <h1>Новинки</h1>
    <div class="itcss">
        <div class="itcss__wrapper">
            <div class="itcss__items">
                <?php 
                while($row = mysqli_fetch_array($res)){
                ?>
                <div class="itcss__item">
                    <a href="#"><img src="<?php echo $row["img"]; ?>" alt="product" class="img_slider"> </a>
                </div>
                <?php 
                    }
                ?>
            </div>
            <a class="itcss__control itcss__control_prev" href="#" role="button" data-slide="prev"></a>
            <a class="itcss__control itcss__control_next" href="#" role="button" data-slide="next"></a>
        </div>
    </div>
</div>
<div class="about_us">
    <h1>О нас</h1>
    <p>В нашем интернет магазине большой выбор копировальной техники. У нас есть не только обычные сканеры, но и многое другое. Будем рады если вы посмотрите наш ассортимент</p>
</div>

<script defer src="js/slider.js"></script>
