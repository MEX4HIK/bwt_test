<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 17.04.2016
 * Time: 16:41
 */
$args= [['index.php','Главная страница'],['feedback.php','Обратная связь'],['pars.php','Погода'],['list_feedback.php','Список отзывов']];
function menu($args)
{
    $a = "<div class=\"collapse navbar-collapse navbar-inverse\" id=\"collapse\">
             <ul class=\"nav navbar-nav\">";
    for ($i = 0; $i < count($args); $i++) {
        $a.= "<li><a href=\" " . $args[$i][0] . "\">" . $args[$i][1] . "</a></li> ";

    }
    $a.="</ul> </div>";
    return $a;
}
?>