<?php 
        setcookie('user', $user['name'], time() - 900, "/");
        header('Location: /');
?>