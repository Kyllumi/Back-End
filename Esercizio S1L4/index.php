<?php

require_once 'config.php';


$mysqli = new mysqli($config['host'], $config['user'], $config['password']);

// var_dump($mysqli);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}

if (!$mysqli->query("CREATE DATABASE IF NOT EXISTS `Esercizio S1L4`")) {
    die($mysqli->connect_error);
}  // Verfico se il DB esiste e se non esiste lo crea


$mysqli->query("USE `Esercizio S1L4`"); // Se il DB esiste allora lo uso



// Crea la tabella
$sql = 'CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    age INT(3) UNSIGNED NOT NULL)';

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}


// Inserisco i dati di un utente
// $sql = 'INSERT INTO users (name, surname, email, age) VALUES ("Edward", "Pitt", "pitt@me.com", 50)';

// if (!$mysqli->query($sql)) {
//     die($mysqli->connect_error);
// } else {
//     echo "Utente creato";
// }


// Modifico i dati
$sql = "UPDATE users SET name = 'Brad' WHERE id = 1";

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
} else {
    // echo "Utente modificato";
}


// Elimino un utente
$sql = "DELETE FROM users WHERE id = 4";

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
} else {
    // echo "Utente eliminato";
}



// Visualizzo i dati degli utenti
$sql = "SELECT * FROM users";
$result = [];
$res = $mysqli->query($sql); // Mi ritorno i dati

if ($res) {
    // var_dump($res);
    while ($row = $res->fetch_assoc()) {
        $result[] = $row;
        // array_push($result, $row);
    }

    print_r($result);
}

foreach ($result as $key => $value) {
    echo '<p>' . $value['id'] . '<br>' . $value['name'] . '<br>' . $value['surname'] . '<br>' . $value['email'] . '<br>' . $value['age'] . '<p>';
   
}

?>