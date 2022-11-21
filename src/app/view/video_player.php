<?php
include "../controller/video_player.php";
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
<div class="video_watch">
    <video src="<?=$video_arr['video_name']?>" controls width="1178px" height="663px"></video>
    <p class="name_video"><?=$video_arr['name_video']?></p>
    <p class="user_video"><?=$video['login']?></p>
</div>

<div class="comments">
    <h1>Оставьте свой комментарий</h1>
    <form action="" method="post">
        <div class="comments_video">
            <label class="comm">Напишите ваш комментарий</label>
            <textarea name="comment" class="textcomment" rows="3"></textarea>
        </div>
        <button class="button_back_click">Отправить</button>
    </form>
</div>
<div class="the_main_comments">

</div>
</body>
