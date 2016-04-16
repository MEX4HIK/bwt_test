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
    <!-- Bootstrap-->

    <link href = "css/bootstrap.css" rel="stylesheet">
    <link href = "css/style.css" rel="stylesheet">
</head>
<body>

<!-- <div class="container">
     <div class="row">
         <h2>Главная страница</h2>
         <div class="navbar navbar.inverse">
             <div class="container">
                 <div class="navbar-header">

                 </div>
                 <div class="collapse navbar-collapse" id="responsiv-menu">
                     <ul class="nav navbar-nav">
                         <li>  -->


<?php

/*выход пользователя из сессии */
if (isset($_REQUEST['submitData']))
{session_start();
    unset($_SESSION['password']);
    unset($_SESSION['login']);
    unset($_SESSION['id']);//    уничтожаем переменные в сессиях
    exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");;}//в этом примере по нажатии кнопки выводится текст, может быть любой код.
?>


<?php

if (empty($_SESSION['login']) or empty($_SESSION['id'])){
    echo "<html>
        
     
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
    </div>



</html>";
}


if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    

    //bootstrap menu
    echo "<html>
    <div class=\"container\">
     <div class=\"row\">
         <h2>Главная страница</h2>
         Вы вошли на сайт, как гость
         <div class=\"navbar navbar-inverse\">
             <div class=\"container\">
                 <div class=\"navbar-header\">
                 
                 </div>
                 <div class=\"collapse navbar-collapse\" id=\"responsiv-menu\">
                     <ul class=\"nav navbar-nav\">
                      <li> <br><a href=\"feedback.php\"><br>Обратная связь</a>
                  </ul> 
                  </div>
                  
                  </div>
                  </div>
                  </div>
                  </div>
    </html>";

    //echo "<br><a href=\"feedback.php\"><br>Обратная связь</a>";
}
else
{

$a = "Вы вошли на сайт, как ".$_SESSION['login'];

    //bootstrap menu
   echo "<html>
    <div class=\"container\">
     <div class=\"row\">
         <h2>Главная страница</h2>
         $a
         <div class=\"navbar navbar-inverse\">
             <div class=\"container\">
                 <div class=\"navbar-header\">
                 
                 </div>
                 <div class=\"collapse navbar-collapse\" id=\"responsiv-menu\">
                     <ul class=\"nav navbar-nav\">
                      <li> <br><a href=\"pars.php\"><br>Погода</a>
                      <li> <br><a href=\"feedback.php\"><br>Обратная связь</a>
                      <li> <br><a href=\"list_feedback.php\"><br>Список отзывов</a>
                </ul> 
                  </div>
                  </div>
                  
                  </div>
                  <form><br>
                  <!--Форма выхода пользователя-->
                   <input type=\"submit\" name=\"submitData\" value=\"Выход\" >
                   </form>
                  </div>
                  </div>
    </html>";



   /* echo "<br><a href=\"pars.php\"><br>Погода</a>";
    echo "<br><a href=\"feedback.php\">Обратная связь</a>";
    echo "<br><a href=\"list_feedback.php\">Список отзывов</a>";*/


}
?>

</body>
</html>


