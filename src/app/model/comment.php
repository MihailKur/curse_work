<?php
function makeComment($id_user_comment,$comment,$id_video_comment){
    $connect = mysqli_connect('db:3306', 'root', '123456', 'curse');
    mysqli_query($connect, "INSERT INTO `comments` (`id_comment`, `comment`, `id_user_comment`, `id_video_comment`) 
                                VALUES (NULL, '$comment', '$id_user_comment', '$id_video_comment')");
}
