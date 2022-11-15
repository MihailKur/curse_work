<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form_auth">
        <form class="form_auth" action="../model/signup.php" method="post" enctype="multipart/form-data">
            <label>Фамилия и имя</label>
            <input type="text" name="full_name" placeholder="Введите фамилию и имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <label>Email</label>
            <input type="text" name="email" placeholder="Введите Email">
            <label>Изображение профиля</label>
            <input type="file" name="image">
            <button class="but_reg" type="submit">Зарегистрироваться</button>
            <p>
                Уже есть аккаунт? - <a href="index.php">авторизируйтесь тут</a>
            </p>
        </form>
    </div>
</body>
</html>