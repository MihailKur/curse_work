<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form_auth">
        <form action="" method="">
            <label>Логин</label>
            <input type="text" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="text" placeholder="Введите пароль">
            <button class="but_reg">Войти в аккаунт</button>
            <p>
                Нет аккаунта? - <a href="#">можете зарегестрироваться тут</a>
            </p>
            <p class="mess">
                <?php
                    if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                ?>
            </p>
        </form>
    </div>
</body>
</html>