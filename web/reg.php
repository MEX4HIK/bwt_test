
<html>





    <head>
        <meta charset="utf-8">
    <title>Регистрация</title>
    </head>
    <body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">

<p>
    <label>Ваше имя:<br></label>
    <input name="name" type="text" size="15" maxlength="15">
    </p>

<p>
    <label>Ваша фамилия:<br></label>
    <input name="last_name" type="text" size="15" maxlength="25">
    </p>

<p>
        <p> Выберите ваш пол </p>
        <form>
            <select name="sex" >
                <option value="m"> Мужской </option>
                <option value="f"> Женский </option>
            </select>
        </form>
    </p>


<p>
    <label>Дата рождения:<br></label>
    <input name="data" type="date" size="15" maxlength="15">
    </p>


<p>
    <label>Ваш email:<br></label>
    <input name="email" type="email" size="15" maxlength="15">
    </p>

<p>
    <label>Ваш догин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>

        <p>

<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

<p>
    <input type="submit" name="submit" value="Зарегистрироваться">

</p></form>
    </body>
    </html>
