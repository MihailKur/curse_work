<?php
session_start();
    $get_video_name = $_GET['id_video'];

    $connect = mysqli_connect('db:3306', 'root', '123456', 'curse');
    $query = "SELECT * FROM videos WHERE videos.id_video = %u";
    $video_path = mysqli_query($connect, sprintf($query, $get_video_name));

    $video_arr = mysqli_fetch_assoc($video_path);

    $res_video = mysqli_query($connect, "SELECT * FROM videos INNER JOIN users ON videos.id_user = users.id ORDER BY id_video DESC");
    $video = mysqli_fetch_assoc($res_video);
