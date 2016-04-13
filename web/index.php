<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 09.04.2016
 * Time: 15:47
 */

  
    session_start();
    ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
</head>
<body>
<h2>Главная страница</h2>
<form action="testreg.php" method="post">

   
    <p>
        <label>Ваш логин:<br></label>
        <input name="login" type="text" size="15" maxlength="15">
    </p>


   

    <p>

        <label>Ваш пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
    </p>

   

    <p>
        <input type="submit" name="submit" value="Войти">

      
        <br>
      
        <a href="reg.php">Зарегистрироваться</a>
    </p></form>
<br>
<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    
    echo "Вы вошли на сайт, как гость";
    echo "<br><a href=\"feedback.php\"><br>Обратная связь</a>";
}
else
{

    
    echo "Вы вошли на сайт, как ".$_SESSION['login'];
    echo "<br><a href=\"pars.php\"><br>Погода</a>";
    echo "<br><a href=\"feedback.php\">Обратная связь</a>";
}
?>
</body>
</html>