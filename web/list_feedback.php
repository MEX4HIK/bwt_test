
<?php
include("func_menu.php");
$array2=[['index.php','Главная страница'],['pars.php', 'Погода'],['feedback.php','Обратная связь'],['list_feedback.php','Список отзывов']];
echo menu($array2);
?>
<html>
<meta charset="utf-8">
<head>
    <title>Список отзывов</title>
    <!-- Bootstrap-->

    <link href = "css/bootstrap.css" rel="stylesheet">
    <link href = "css/style.css" rel="stylesheet">
</head>
<body>
<h2>Список отзывов</h2>
<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 14.04.2016
 * Time: 15:47
 */

// Соединиться с сервером БД
include ("bd.php");




// Выполнить запрос

$result = $conn->query('SELECT * FROM feedback ');

if ( count($result) ) {
    foreach($result as $myrow) {
        // Вывести значения столбцов Name и Message  (который является теперь массивом $row)
        echo '<p>Пользователь -  '.$myrow['name'].'.<br> Отзыв -  '.$myrow['message'].'</p>';


    }}
?>
</body>
</html>