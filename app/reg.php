<?php
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
include "db.php";
$query = $connect->prepare(" SELECT * FROM users WHERE login = ? ");
$query->execute([$login]);
$user = $query->fetch();
if ($user>0){
    echo "Логин занят";
}else{
$query = $connect->prepare("INSERT INTO users (name, login, password) VALUES (?, ?, ?)");
$query->execute([$name, $login, $password]);
header("location: ../userinfo.php");
}