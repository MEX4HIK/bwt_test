
<html>
<meta charset="utf-8">
<link href = "css/bootstrap.css" rel="stylesheet">
</html>
<?php

/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 17.04.2016
 * Time: 17:50
 */

session_start();
unset($_SESSION['password']);
unset($_SESSION['login']);
unset($_SESSION['id']);//    уничтожаем переменные в сессиях
exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
// отправляем пользователя на главную страницу.
?>