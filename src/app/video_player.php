<?php
    $get_video_name = $_GET['video_name'];

    $connect = mysqli_connect('db:3306', 'root','123456', 'curse');
    $query = "SELECT * FROM videos WHERE videos.name_video = %s";
    $video_path = mysqli_query($connect, sprintf($query, $get_video_name));

    $video_arr = mysqli_fetch_assoc($video_path);
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
            <?php
            if ($_SESSION['user']){
                echo '<li><a href="logout.php" class="menu-list-item">Выйти из аккаунта</a></li>';
                echo '<li><a href="cabinet.php" class="menu-list-item">Личный кабинет</a></li>';
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
<div class="video_watch">
    <video src="<?=$video_arr['video_name']?>" controls></video>
</div>
</body>
