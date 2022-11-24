<?php
    echo "<link rel='stylesheet' href='/css/validation.css'>";

        $login = filter_var(trim($_POST['login']),
        FILTER_UNSAFE_RAW);

        $pass = filter_var(trim($_POST['pass']),
        FILTER_UNSAFE_RAW);


        $pass = md5($pass."hgchgckhgcjh506h");


        require "../blocks/connect.php";

        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

        $user = $result->fetch_assoc();
        if( $user == 0) {
            // echo "Такой пользователь не найден";
            echo "<p class='warning'>Такой пользователь не найден. Попробуйте еще раз.<span>Чтобы выйти нажмите <a href='/exit.php'>здесь</a>.</span></p>";
            exit();
        }
        
        setcookie('user', $user['name'], time() + 900, "/");
    
        $mysql->close();
    
        header('Location: /');
        exit();
?>