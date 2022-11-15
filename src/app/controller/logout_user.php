<?php

require '../model/logout.php';

user_logout();
header('Location: ../view/main.php');
