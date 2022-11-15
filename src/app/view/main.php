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
<div class="videos_on_page">
    <?php
    $format = "../view/video_player.php?id_video=%u";
    while ($video = mysqli_fetch_assoc($res_video)){?>
        <a href="<?=sprintf($format, $video['id_video'])?>"><img src="../uploads/<?=$video['img_video']?>" width="440px" height="248px"></a>
        <p><?=$video['login']?></p>
        <?php
    }
    ?>
</div>
</body>
</html>