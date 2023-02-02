<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>

<!-- Форма реєстрації -->

    <form action="model/onRegister.php" method="post" enctype="multipart/form-data">
        <label>Прізвище</label><input type="text" name="lastname" placeholder="Введіть своє прізвище" required>
        <label>Ім'я</label><input type="text" name="firstname" placeholder="Введіть своє ім'я" required>
        <label>Пошта</label><input type="email" name="email" placeholder="Введіть свій email" required>
        <label>Дата народження</label><input type="date" name="birthday" placeholder="Введіть дату народження" required>
        <label>Моб. телефон</label><input type="tel" name="telephone"  pattern="(+380)-[1-9]{2}-[0-9]{3}-[0-9]{4}" required placeholder="Введіть номер у форматі (+380)-11-111-1111">
        <label>Паспорт</label><input type="text" name="passport" placeholder="Введіть дані паспорта у форматі СЕРІЯ номер" required>
        <label>Зображення профілю</label><input type="file" name="avatar">
        <label>Логін</label><input type="text"  name="login" placeholder="Задайте свій логін" required>
        <label>Пароль</label><input type="password" name="password" placeholder="Введіть свій пароль" required>
        <label>Підтвердження паролю</label><input type="password" name="password_confirm" id="confirm_password" placeholder="Підтвердіть свій пароль" required>
        <button type="submit">Зареєструватись</button>
        <?php
        // require_once ('model/onRegister.php');
        if (isset($_SESSION['message'])){echo '<p class="m_s_g">'.$_SESSION['message'].'</p>'; unset ($_SESSION['message']);}
        ?>
        <p>
            Якщо у вас є обліковий запис - <a href="index.php">авторизуйтесь</a>
        </p>



    </form>

</body>
</html>
