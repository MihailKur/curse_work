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
<div class="download">
    <div class="download_block">
        <form action="../controller/video_controller.php" class="form_video_download" method="post" enctype="multipart/form-data">
            <label>Название видео</label>
            <input type="text" name="name_video" placeholder="Введите название видео">
            <label>Добавьте фото превью</label>
            <input type="file" name="img_video">
            <label>Загрузите видео</label>
            <input type="file" name="video" class="input_video">
            <input type="submit" value="Submit" class="input_video_button">
        </form>
        <p class="mess">
            <?php
            if (isset($_SESSION['message'])){
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
            ?>
        </p>
    </div>
</div>
<div class="button_back">
    <a href="../controller/show_video.php"><button class="button_back_click">Вернуться назад</button></a>
</div>
</body>
</html>