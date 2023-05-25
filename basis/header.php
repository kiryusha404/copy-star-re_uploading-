<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <title>Copy Star</title>
</head>
<body>
    <div class="general">
        <header>
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="logo"></a>
            </div>
            <div class="navig">
            <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.php">О нас</a>
                <a href="catalog.php">Каталог</a>
                <a href="location.php">Где нас найти?</a>
                <a href="entrance.php">Войти</a>
                <a id="menu" href="#" class="icon">&#9776;</a>
            </div>
        </nav>
        </div>
        </header>
        <?php 
         $copystar = mysqli_connect("localhost", "root", "root", "copy_star");
        ?>
        <div class="main">
            <div class="contents">