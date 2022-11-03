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
        <form action="include/signin.php" method="post">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="text" name="password" placeholder="Введите пароль">
            <button class="but_reg" type="submit">Войти в аккаунт</button>
            <p>
                Нет аккаунта? - <a href="reg.php">можете зарегестрироваться тут</a>
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