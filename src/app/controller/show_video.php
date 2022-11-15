<?php

    $connect = mysqli_connect('db:3306', 'root','123456', 'curse');
    $res_video = mysqli_query($connect, "SELECT * FROM videos INNER JOIN users ON videos.id_user = users.id ORDER BY id_video DESC");

    include '../view/main.php';