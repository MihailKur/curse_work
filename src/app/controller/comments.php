<?php
include "../model/comment.php";
session_start();
if ($_SESSION['user']) {
    $id_user_comment = $_SESSION['user']['id'];
    $comment = $_POST['comment'];
    $id_video_comment = $_POST['id_video'];

    makeComment($id_user_comment, $comment, $id_video_comment);
    header("Location: ../view/video_player.php?id_video=$id_video_comment");

}else {
    header("Location: ../view/index.php");
}