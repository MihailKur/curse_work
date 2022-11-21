<?php

include "../controller/check_user.php";
    session_start();
        $connect = mysqli_connect('db:3306', 'root', '123456', 'curse');

        $login = $_POST['login'];
        $password = md5($_POST['password']);
        checkUser($connect, $login, $password);