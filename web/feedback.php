<?php

session_start();

include ("func_menu.php");

if (empty($_SESSION['login']) or empty($_SESSION['id'])){
    //bootstrap menu
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
    <title>Обратная связь</title>
    <!-- Bootstrap-->

    <link href = "css/bootstrap.css" rel="stylesheet">

</head>
<body>
<h2>Обратная связь</h2>
<form data-toggle="validator" role="form" action="feedback.php" method="post">
    <div class="navbar-header">
    <div class="form-group">
        <label for="name">Имя пользователя:</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="email" required>
    </div>
        <div class="row">
            <div class="col-xs-12">
                <label for="">Отзыв:</label>
                <textarea name="message" type="text" class="form-control" id="message"   required ></textarea>
            </div>
        </div><br>

    <img src="capcha.php" alt="защитный код">
    <div class="form-group" style="margin-top: 10px;">
        <label for="capcha">Введите символы на картинке:</label><br>
        <input name="capcha" type="text" class="form-control" id="capcha" placeholder="capcha" required>
    </div>

    <button type="submit" class="btn btn-success">Оставить отзыв</button>
    </div>
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