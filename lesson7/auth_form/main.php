<?php


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <a href="#">Страница 1</a>
    <a href="#">Страница 2</a>

    <a href="logout.php">Выйти</a> <!--отображать авторизованным-->

    <a id="open_modal">Войти</a> <!--отображать неавторизованным-->
</nav>

<!--модальное окно-->
<div class="modal">

    <p id="errors"></p>

    <form action="formHandler.php" name="auth_form">
        <p><input class="validate" type="text" name="login" placeholder="логин"></p>
        <p><input class="validate" type="password" name="password" placeholder="пароль"></p>
        <p>
            <input type="submit" value="Отправить">
            <input id="cancel" type="button" value="Отмена">
        </p>
    </form>

</div>

<h3>Страница доступна всем пользователям</h3>

<!--подключать только для авторизованных пользователей-->
  <script src="js/form.js"></script>


</body>
</html>