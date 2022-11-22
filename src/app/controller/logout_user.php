<?php

require '../model/logout.php';

user_logout();
header('Location: show_video.php');
