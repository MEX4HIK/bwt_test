<?php

session_start();

include ("func_menu.php");

if (empty($_SESSION['login']) or empty($_SESSION['id'])){
    $array1=[['index.php','Главная страница'],['feedback.php','Обратная связь']];
    echo menu($array1);

}
else {
    //bootstrap menu
    $array2 = [['index.php', 'Главная страница'], ['pars.php', 'Погода'], ['feedback.php', 'Обратная связь'], ['list_feedback.php', 'Список отзывов']];
    echo menu($array2);
}
?>

<html xmlns:h="http://www.w3.org/1999/XSL/Transform">

<head>
    <meta charset="utf-8">
    <title>Отзыв</title>
    <!-- Bootstrap-->

    <link href = "css/bootstrap.css" rel="stylesheet">
    <link href = "css/style.css" rel="stylesheet">
</head>
<body>
<h2>Отзыв</h2>
<form action="feedback.php" method="post">

    <p>
        <label>Ваше имя:<br></label>
        <input name="name" type="text" size="15" maxlength="15" required="true">

    </p>

    <p>
        <label>Ваш email:<br></label>
        <input name="email" type="email" size="15" maxlength="25" required="true">
    </p>

    <p>
        <label>Ваше сообщение:<br></label>
        <textarea name="message" rows="10" cols="40" required="true"></textarea>
    </p>

    <img src="capcha.php" alt="защитный код" >
    <br>
    <input name="capcha" type="text" size="12" maxlength="25" required="true">

<br>
    <input type="submit" name="submit" value="Оставить отзыв">

    </p></form>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 13.04.2016
 * Time: 11:27
 */

if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);}}
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);}}
if (isset($_POST['message'])) { $message = $_POST['message']; if ($message =='') { unset($message);} }


if (isset($_POST['name'])){
if ( empty($name) or empty($email)  or empty($message) )
{
    echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!<br>");

}

$name = stripslashes($name);
$name = htmlspecialchars($name);
$email = stripslashes($email);
$email = htmlspecialchars($email);
$message = stripslashes($message);
$message = htmlspecialchars($message);

$name = trim($name);
$email = trim($email);


include ("bd.php");

$result = $conn->query ("INSERT INTO feedback (name,email,message) VALUES('$name','$email','$message')");



if ($result)
{
    echo "Ваш отзыв принят! <a href='index.php'>Вернуться на главную страницу</a>";
}
else {
    echo "Ошибка!";
}}
?>