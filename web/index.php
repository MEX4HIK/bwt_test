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
if (empty($_SESSION['login']) or empty($_SESSION['id'])){
echo "<html>
    <form action=\"testreg.php\" method=\"post\">

   
    <p>
        <label>Ваш логин:<br></label>
        <input name=\"login\" type=\"text\" size=\"15\" maxlength=\"15\">
    </p>

    <p>

        <label>Ваш пароль:<br></label>
        <input name=\"password\" type=\"password\" size=\"15\" maxlength=\"15\">
    </p>
    <p>
        <input type=\"submit\" name=\"submit\" value=\"Войти\">
        <br>

        <a href=\"reg.php\">Зарегистрироваться</a>
    </p></form>

<br>
</html>";
}
?>
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

if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    
    echo "Вы вошли на сайт, как гость";
    echo "<br><a href=\"feedback.php\"><br>Обратная связь</a>";
}
else
{
    echo "Вы вошли на сайт, как ".$_SESSION['login'];
    //Форма выхода пользователя
    echo "<html>
    <form><br>
    <input type=\"submit\" name=\"submitData\" value=\"Выход\" >
    </form>
    </html>";
   echo "<html>
    <div class=\"container\">
     <div class=\"row\">
         <h2>Главная страница</h2>
         <div class=\"navbar navbar-inverse\">
             <div class=\"container\">
                 <div class=\"navbar-header\">
                 
                 </div>
                 <div class=\"collapse navbar-collapse\" id=\"responsiv-menu\">
                     <ul class=\"nav navbar-nav\">
                      <li> <br><a href=\"pars . php\"><br>Погода</a>
                      <li> <br><a href=\"feedback.php\"><br>Обратная связь</a>
                      <li> <br><a href=\"list_feedback.php\"><br>Список отзывов</a>
                </ul> 
                  </div>
                  </div>
                  </div>
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


