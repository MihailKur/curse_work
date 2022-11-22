<?php
$user_id = $_SESSION['user']['id'];
$connect = mysqli_connect('db:3306', 'root', '123456', 'curse');
$user_video = mysqli_query($connect, "SELECT * FROM videos WHERE id_user = $user_id");