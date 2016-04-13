<html>
<meta charset="utf-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 13.04.2016
 * Time: 12:51
 */


session_start();
unset($_SESSION['password']);
unset($_SESSION['login']);
unset($_SESSION['id']);//    уничтожаем переменные в сессиях
exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
// отправляем пользователя на главную страницу.
?>