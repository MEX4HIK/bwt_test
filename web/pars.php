<?php
include("func_menu.php");
$array2=[['index.php','Главная страница'],['pars.php', 'Погода'],['feedback.php','Обратная связь'],['list_feedback.php','Список отзывов']];
echo menu($array2);
?>
<html>
<meta charset="utf-8">
<!-- Bootstrap-->

<link href = "css/bootstrap.css" rel="stylesheet">
<link href = "css/style.css" rel="stylesheet">

<h2>Погода в Запорожье</h2>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 11.04.2016
 * Time: 20:52
 */




//Parsing
#откуда будем парсить информацию:
$gismeteo = 'http://www.gismeteo.ua/city/daily/5093/';
$content = file_get_contents ($gismeteo);
preg_match_all ('#<div class="wsection wdata">(.*?)<div class="section bottom">#is', $content,$pogoda);
echo $pogoda[0][0];


?>




