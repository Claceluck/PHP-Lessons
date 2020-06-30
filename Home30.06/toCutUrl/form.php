<?php
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Укротитель ссылок</title>
</head>
<body>
<h3>Укроти ссылку сейчас!</h3>
<div>
    <form action="cut_handler.php" name="link_form" method="post">
        <p><input type="url" name="url" placeholder="ссылка"></p>
        <p>
            <input type="submit" value="Отправить">
        </p>
    </form>
</div>
</body>
</html>