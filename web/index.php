<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 09.04.2016
 * Time: 15:47
 */
    session_start();
include ("func_menu.php");
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <!-- Bootstrap-->

    <link href = "css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
    if (empty($_SESSION['login']) or empty($_SESSION['id'])){
        //bootstrap menu
        $array1=[['index.php','Главная страница'],['feedback.php','Обратная связь']];
        echo menu($array1);

         echo "
       
   
    <div class=\"navbar-header\">
   
    <form role=\"form\" action=\"testreg.php\" method=\"post\">
    <div class=\"form-group\">
    <label for=\"login\">Введите логин</label><input type=\"text\" name=\"login\" class=\"form-control\" id=\"login\">
    </div>
    <div class=\"form-group\">
    <label for=\"password\">Введите пароль</label><input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\">
    </div>
          <button type=\"submit\" class=\"btn btn-success\">Войти</button>
   
    <a href=\"reg.php\">Зарегистрироваться</a>
    </form>
    </div>";
}
else
{
$a = "Вы вошли на сайт, как ".$_SESSION['login'];

    //bootstrap menu
    $array2=[['index.php','Главная страница'],['pars.php', 'Погода'],['feedback.php','Обратная связь'],['list_feedback.php','Список отзывов']];
    echo menu($array2);
    echo "
               
               
           <h3> $a</h3>
              <form role=\"form\" action=\"exit.php\" method=\"SESSION\">
<br>
<button type=\"submit\" class=\"btn btn-danger\">Выйти</button>
</form>";
}
?>
</body>
</html>


