<?php
echo "<link rel='stylesheet' href='/css/validation.css'>";

    $login = filter_var(trim($_POST['login']),
    FILTER_UNSAFE_RAW);
    $name = filter_var(trim($_POST['name']),
    FILTER_UNSAFE_RAW);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_UNSAFE_RAW);

    if (mb_strlen($login) < 4 || mb_strlen($login) > 90) {
        echo "<p class='warning'>Недопустимая длина логина. <br /> Длина логина от 4 до 90 символов. <span>Чтобы выйти нажмите <a href='/exit.php'>здесь</a>.</span></p>";
        exit();
    }    
    else if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
        echo "<p class='warning'>Недопустимая длина имени. <br /> Длина имени от 2 до 50 символов. <span>Чтобы выйти нажмите <a href='/exit.php'>здесь</a>.</span></p>";
        exit();
    }    
    else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 12) {
        // echo 'недопустимая длина пароля ( от 6 - 12 символов)';
        echo "<p class='warning'>Недопустимая длина пароля. <br /> Длина пароля от 6 до 12 символов. <span>Чтобы выйти нажмите <a href='/exit.php'>здесь</a>.</span></p>";
        exit();
    }    

    $pass = md5($pass."hgchgckhgcjh506h");


    require "../blocks/connect.php";

    $mysql ->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: /');
    exit();
?>
