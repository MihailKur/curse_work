<?php
    session_start();

    $connect = mysqli_connect('db:3306', 'root', '123456', 'curse');

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];

    $path = 'uploads/' . time() . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path);


    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `password`, `email`, `image`) 
    VALUES (NULL, '$full_name', '$login', '$password', '$email', '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../view/index.php');


