<?php
$servername = "127.0.0.1";
$username = "root";
$password = "masalov";
$dbName = "first";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать БД";
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL
  )";

if(!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Users";
}
?>
