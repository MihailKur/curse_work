<?php

function makeUser($connect, $full_name, $login, $password, $email, $path){

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `password`, `email`, `image`) 
    VALUES (NULL, '$full_name', '$login', '$password', '$email', '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../view/index.php');

}
