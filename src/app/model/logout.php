<?php

session_start();
function user_logout(){

    unset($_SESSION['user']['id']);
    unset($_SESSION['user']['full_name']);
    unset($_SESSION['user']['image']);
    unset($_SESSION['user']['login']);
    unset($_SESSION['user']['email']);
}