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
    <hr>
<div class="profile">
    <div class="profile_data">
        <form>
            <img src="../<?=$_SESSION['user']['image']?>" class="user_image_profile">
            <label class="profile_data">Ваши фамилия и имя</label>
            <input value="<?=$_SESSION['user']['full_name']?>">
            <label class="profile_data">Ваш логин</label>
            <input value="<?=$_SESSION['user']['login']?>">
            <label class="profile_data">Ваш Email</label>
            <input value="<?=$_SESSION['user']['email']?>">
        </form>

    </div>
</div>
</body>