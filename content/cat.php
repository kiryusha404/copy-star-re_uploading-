    <?php
        $push = 'SELECT * FROM category';
        $cat = mysqli_query($copystar, $push);
    ?>
<div class="prod">
<h1 class="p_name">Наши товары</h1>
<select id="category" onchange="run()">
<option value="0" >Все</option>
<?php 
    while($row = mysqli_fetch_array($cat)){
?>
    <option value="<?php echo $row["id_cat"]; ?>" ><?php echo $row["category"]; ?></option>
<?php 
    }
?>
</select>
</div>
<script>
    var value=0;
    function run() {
        value = document.getElementById("category").value;
        
    }
    console.log(value);
</script>
<?php /*
if (is_int($_GET['value']))
{
    echo  $_GET['value'];
    exit();
}
else
{
    echo '<script type="text/javascript">';
    echo 'document.location.href="' . $_SERVER['REQUEST_URI'] . '?u_name=" + value';
    echo '</script>';
    exit();} */
?>


    <?php
        if($_GET['value']==0){
        $push = 'SELECT id_cat, id_pr, img, model, name, price FROM product';
        $res = mysqli_query($copystar, $push);}
    ?>


<div class="tovar">
                <?php 
                if (isset($res)){
                while($row = mysqli_fetch_array($res)){
                ?>
                    <a href="#" class="nav_pr"><div class="pr_item">
                        <img src="<?php echo $row["img"]; ?>"  alt="product">
                        <p class="info_t"><?php echo $row["name"]; ?> <?php echo $row["model"]; ?></p>
                        <p  class="info_t">Цена: <?php echo $row["price"]; ?></P>
                    </div></a>
                <?php 
                    }
                }
                ?>
</div>

