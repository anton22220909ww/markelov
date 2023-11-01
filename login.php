<?php

$login = $_POST['login'];
$pass = $_POST['pass'];

$pass = md5($pass."ss11sdf4");

$mysql = new mysqli('localhost', 'j99960gf_1', 'Qw12123', 'j99960gf_1');


$result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
'$login' AND `pass` = '$pass'");
$user = $result ->fetch_assoc();
if(count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: /');
?>