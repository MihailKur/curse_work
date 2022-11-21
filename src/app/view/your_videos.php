<?php
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
                echo '<li><a href="../controller/logout_user.php" class="menu-list-item">Выйти из аккаунта</a></li>';
                echo '<li><a href="../view/cabinet.php" class="menu-list-item">Личный кабинет</a></li>';
                echo '<li><a href="../view/your_videos.php" class="menu-list-item">Ваши видео</a></li>';
            }else{
                echo '<li><a href="../view/index.php" class="menu-list-item">Войти в аккаунт</a></li>';
                echo '<li><a href="../view/reg.php" class="menu-list-item">Регистрация</a></li>';
            }
            ?>
        </ul>
        <a href="../view/download_video.php" class="button">Загрузить видео</a>
    </div>
</div>
<div>
    <?php
    $user_id = $_SESSION['user']['id'];
    $connect = mysqli_connect('db:3306', 'root', '123456', 'curse');
    $user_video = mysqli_query($connect, "SELECT * FROM videos WHERE id_user = $user_id");
    ?>
    <div class="videos_on_page">
    <?
    while ($videos = mysqli_fetch_assoc($user_video)){?>
        <div class="video">
        <img src="../uploads/<?=$videos['img_video']?>" width="440px" height="248px">
        <p><?=$videos['name_video']?></p>
        <form action="../controller/video_controller.php" method="GET">
            <input type="hidden" value="<?=$videos['id_video']?>" name="id_video">
            <input type="hidden" value="DELETE" name="request_method">
            <button>Delete</button>
        </form>
        </div>
    <?
    }
    ?>
    </div>
</div>