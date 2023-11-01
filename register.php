<?php
$login =$_POST['login'];
$name =$_POST['name'];
$pass =$_POST['pass'];


if (mb_strlen($login) < 4 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit();
} else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 50) {
    echo "Недопустимая длина пароля ( от 2 до 6 символов)";
    exit();
}

$pass = md5($pass."ss11sdf4");

$mysql = new mysqli('localhost', 'j99960gf_1', 'Qw12123', 'j99960gf_1');
$mysql->query("INSERT INTO `users`  (`login`, `pass`, `name`) 
VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Location: avtor.html');
?>