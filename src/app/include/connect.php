<?php
    $connect = mysqli_connect('db:3306', 'root','123456', 'curse');

    if (!$connect){
        die('Error connect');
    }
