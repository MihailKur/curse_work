<?php
    session_start();

    include 'connect.php';
    $connect = mysqli_connect('db:3306', 'root','123456', 'curse');

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "login" => $user['login'],
            "image" => $user['image'],
            "email" => $user['email']
        ];
        $_SESSION['user_id'] = $user['id'];

        header('Location: ../main.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../index.php');
    }
