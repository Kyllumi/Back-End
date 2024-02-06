<?php

require_once 'config.php';

$mysqli = new mysqli($config['host'], $config['user'], $config['password']);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}


if (!$mysqli->query("CREATE DATABASE IF NOT EXISTS `Esercizio Form`")) {
    die($mysqli->connect_error);
}  // Verfico se il DB esiste e se non esiste lo crea

$sql = "USE `Esercizio Form`";
$mysqli->query($sql); // Se il DB esiste allora lo uso

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
)";

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}


$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}


$sql = "DELETE FROM users WHERE id = 1";

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
} else {
    echo "Utente eliminato";
}


header('Location: main.php');
?>