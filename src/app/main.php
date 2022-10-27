<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Title</title>
</head>
<body>
<div class="navbar">
    <div class="navbar-cont">
        <h1 class="logo">MegaTube</h1>
        <ul class="menu-list">
            <li><a href="main.php" class="menu-list-item">Главная страница</a></li>
            <li><a href="#" class="menu-list-item">Видео</a></li>
            <?php
            if ($_SESSION['user']){
                echo '<li><a href="#" class="menu-list-item">Выйти из аккаунта</a></li>';
            }else{
                echo '<li><a href="index.php" class="menu-list-item">Войти в аккаунт</a></li>';
                echo '<li><a href="reg.php" class="menu-list-item">Регистрация</a></li>';
            }
            ?>

        </ul>
        <a href="download_video.php" class="button">Загрузить видео</a>
    </div>
    <hr>
</div>
</body>
</html>