<?php
$request_method = $_SERVER['REQUEST_METHOD'];
if ($request_method == "GET") {
    if (!empty($_GET)) {
        $request_type = $_GET['request_method'];
        if ($request_type == "DELETE") {
            $connect = mysqli_connect('db:3306', 'root', '123456', 'curse');

            $id_video = $_GET['id_video'];
            $sql = "DELETE FROM videos WHERE id_video = $id_video";
            mysqli_query($connect, $sql);

            header("Location: ../view/your_videos.php");
        }
    }
} else if ($request_method == "POST"){
    if (!empty($_POST)){

        session_start();

        $video_name = $_FILES['video']['name'];
        $tmp_name_video = $_FILES['video']['tmp_name'];

        $img_name = $_FILES['img_video']['name'];
        $tmp_img_name = $_FILES['img_video']['tmp_name'];

        $img_upload_path = '../uploads/' . $img_name;
        move_uploaded_file($tmp_img_name, $img_upload_path);

        $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
        $video_ex_low = strtolower($video_ex);
        $allowed_ex = array("mp4", "webm", "avi");

        if (in_array($video_ex_low, $allowed_ex)) {

            $new_video_name = uniqid("video-", true) . '.' . $video_ex_low;
            $path_video_db = '../uploads/' . time() . $new_video_name;
            move_uploaded_file($tmp_name_video, $path_video_db);

        } else {

            $_SESSION['message'] = 'Видео должно быть формата: "mp4", "webm", "avi"';
            header('Location: ../view/download_video.php');

        }

        //работа с бд
        $user_id_video = $_SESSION['user']['id'];

        $connect = mysqli_connect('db:3306', 'root', '123456', 'curse');

        $name_video = $_POST['name_video'];

        $path_img_db = $_FILES['img_video']['name'];

        mysqli_query($connect, "INSERT INTO `videos` (`id_video`, `name_video`, `video_name`, `img_video`, `id_user`) 
                VALUES (NULL, '$name_video', '$path_video_db', '$path_img_db', '$user_id_video')");

        $_SESSION['message'] = 'Ваше видео успешно загруженно';
        header('Location: ../view/download_video.php');
    }
}