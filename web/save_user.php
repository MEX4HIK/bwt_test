<html>
<meta charset="utf-8">
<!-- Bootstrap-->

<link href = "css/bootstrap.css" rel="stylesheet">

</html>
<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 09.04.2016
 * Time: 19:42
 */
if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);}}
if (isset($_POST['last_name'])) { $last_name = $_POST['last_name']; if ($last_name == '') { unset($last_name);}}
if (isset($_POST['sex'])) { $sex = $_POST['sex'];  }
if (isset($_POST['date'])) { $date = $_POST['date'];  }
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);}}
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);}}
if (isset($_POST['password'])) { $password = $_POST['password']; if ($password =='') { unset($password);} }

//Форма для проверки валидации на стороне сервера
echo "<html>
    <form action=\"save_user.php\" method=\"post\">
    <label>Ваше имя:<br></label>
    <input name=\"name\" type=\"text\" size=\"15\" maxlength=\"15\">
    <input type=\"submit\" name=\"submit\" value=\"Проверка\">
</form>
</html>";

//Валидация на стороне сервера
if (isset($_POST['name']))
{
    if (empty($_POST['name'])) {
        echo "Введите имя!<br>";

    }
    else {echo "Вы ввели имя<br>";}
}

if ( empty($name) or empty($last_name)  or empty($email) or empty($login) or empty($password))
{
    echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!<br>");

}
else {
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $last_name = stripslashes($last_name);
    $last_name = htmlspecialchars($last_name);
    $sex = stripslashes($sex);
    $sex = htmlspecialchars($sex);
    $date = stripslashes($date);
    $date = htmlspecialchars($date);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $name = trim($name);
    $last_name = trim($last_name);
    $sex = trim($sex);
    $date = trim($date);
    $email = trim($email);
    $login = trim($login);
    $password = trim($password);


    include("bd.php");

    $result = $conn->query("SELECT id FROM reg WHERE login=" . $conn->quote($login));
    if ( count($result) ) {
        foreach($result as $myrow) {

        }
    } else {
        echo "Yes";
    }
    if (!empty($myrow['id'])) {
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин. <a href='reg.php'>Вернуться к регистрации</a>");
    }

    $result2 = $conn->query("INSERT INTO reg (name,last_name,sex,date,email,login,password) VALUES('$name','$last_name','$sex','$date','$email','$login','$password')");


    if ($result2) {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    } else {
        echo "Ошибка! Вы не зарегистрированы.";
    }


}
?>

