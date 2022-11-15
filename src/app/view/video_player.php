<?php
    $get_video_name = $_GET['id_video'];

    $connect = mysqli_connect('db:3306', 'root','123456', 'curse');
    $query = "SELECT * FROM videos WHERE videos.id_video = %u";
    $video_path = mysqli_query($connect, sprintf($query, $get_video_name));

    $video_arr = mysqli_fetch_assoc($video_path);
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>
<body>
<div class="navbar">
    <div class="navbar-cont">
        <h1 class="logo">MegaTube</h1>
        <ul class="menu-list">
            <li><a href="../controller/show_video.php" class="menu-list-item">Главная страница</a></li>
            <?php
            if ($_SESSION['user']){
                echo '<li><a href="../model/logout.php" class="menu-list-item">Выйти из аккаунта</a></li>';
                echo '<li><a href="../view/cabinet.php" class="menu-list-item">Личный кабинет</a></li>';
            }else{
                echo '<li><a href="../view/index.php" class="menu-list-item">Войти в аккаунт</a></li>';
                echo '<li><a href="../view/reg.php" class="menu-list-item">Регистрация</a></li>';
            }
            ?>
        </ul>
        <a href="../view/download_video.php" class="button">Загрузить видео</a>
    </div>
</div>
<div class="video_watch">
    <video src="<?=$video_arr['video_name']?>" controls></video>
</div>
</body>
