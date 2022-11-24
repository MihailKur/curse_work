<?php

$id_video = $_GET['id_video'];
$connect = mysqli_connect('db:3306', 'root', '123456', 'curse');
$video_comment = mysqli_query($connect, "SELECT * FROM comments WHERE id_video_comment = $id_video");

