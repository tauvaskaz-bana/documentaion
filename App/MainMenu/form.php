<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>Форма Авторизации/Регистрации</title>-->
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <?php
      if($_COOKIE['user'] == ''):  
    ?>
    <div class="col">
        <h1>Форма авторизации</h1>
        <form action="http://sys2/auth.php" method="post">
            <input type="text" class="form-control"
             name="login" id="login" placeholder="Введите логин"><br>
             <input type="password" class="form-control"
             name="pass" id="pass" placeholder="Введите пароль"><br>
             <button class="btn btn-success" type="submit">Войти</button>
        </form>
    </div>
    <div class="col">
        <h1>Форма регистрации</h1>
        <form action="http://sys2/check.php" method="post">
            <input type="text" class="form-control"
             name="login" id="login" placeholder="Введите логин"><br>
             <input type="text" class="form-control"
             name="name" id="name" placeholder="Введите имя"><br>
             <input type="password" class="form-control"
             name="pass" id="pass" placeholder="Введите пароль"><br>
             <button class="btn btn-success" type="submit">Зарегистрировать</button>
        </form>
    </div>
    <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>.<br> Чтобы выйти нажмите <a href="/exit.php">здесь</a></p>

    <?php endif;?>
</body>
</html>