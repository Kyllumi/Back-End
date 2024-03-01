<?php
# include -> include una porzione di codice di un altro file, se il file non c'è verrà generato un Warning ma la pagina verrà visualizzata comunque
# include_once -> include una porzione di codice di un altro file, solo una volta per ogni pagina, se il file non c'è verrà generato un Warning
# require -> include una porzione di codice di un altro file, se il file non c'è verrà generato un Fatal Error e la pagina non verrà visualizzata
# require_once ->  include una porzione di codice di un altro file, solo una volta per ogni pagina, se il file non c'è verrà generato un Fatal Error 
?>


<?php

$config = [
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
    'mysql_password' => ''
];

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password']
);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}
# else { var_dump($mysqli);}

// Creo il mio DB
$sql = 'CREATE DATABASE IF NOT EXISTS userdb;';
if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

// Seleziono il DB
$sql = 'USE s5l1;';
$mysqli->query($sql);

// Creo la tabella
$sql = 'CREATE TABLE IF NOT EXISTS usertab ( 
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL, 
        lastname VARCHAR(255) NOT NULL, 
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL 
    )';
if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

// Inserisco dati in una tabella
// $sql = "INSERT INTO usertab (name, lastname, email, password) VALUES ('Giorgio', 'Giorgi', 'g.giorgi@gmail.com', '12345');";
// if (!$mysqli->query($sql)) {
//     echo ($mysqli->connect_error);
// } else {
//     echo 'Record aggiunto con successo!!!';
// }

// Leggo dati da una tabella
$sql = 'SELECT * FROM usertab;';
$result = [];
$res = $mysqli->query($sql); // return un mysqli result
if ($res) { // Controllo se ci sono dei dati nella variabile $res
    //var_dump($res);
    while ($row = $res->fetch_assoc()) { // Trasformo $res in un array associativo
        // $result[] = $row; // estraggo ogni singola riga che leggo dal DB e la inserisco in un array
        array_push($result, $row); // estraggo ogni singola riga che leggo dal DB e la inserisco in un array
    }
}

var_dump($result);


// Elimino un dato dalla tabella
// $sql = 'DELETE FROM usertab WHERE id = 1;';
/* if(!$mysqli->query($sql)) { echo($mysqli->connect_error); }
else { echo 'Record eliminato con successo!!!';} */


// Modifico un dato nella tabella
// $sql = "UPDATE usertab SET age = 26, email = 'test@gmail.com' WHERE id = 6;";
// if (!$mysqli->query($sql)) {
//     echo ($mysqli->connect_error);
// } else {
//     echo 'Record aggiornato con successo!!!';
// }

?>