<?php

    $db = 'forms';
    $config = [
        'mysql_host' => 'localhost',
        'mysql_user' => 'root',
        'mysql_password' => ''
    ];

    $mysqli = new mysqli(
        $config['mysql_host'],
        $config['mysql_user'],
        $config['mysql_password']);

    if($mysqli->connect_error) { die($mysqli->connect_error); } 

    // Creo il mio DB
    $sql = 'CREATE DATABASE IF NOT EXISTS ' . $db;
    if(!$mysqli->query($sql)) { die($mysqli->connect_error); }

    // Seleziono il DB
    $sql = 'USE ' . $db;
    $mysqli->query($sql);

    // Creo la tabella users
    $sql = 'CREATE TABLE IF NOT EXISTS inputs ( 
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL, 
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL 
    )';
    if(!$mysqli->query($sql)) { die($mysqli->connect_error); }

    // Leggo dati da una tabella
    $sql = 'SELECT * FROM inputs;';
    $res = $mysqli->query($sql); // return un mysqli result
        // Inserisco dati in una tabella
        // $sql = 'INSERT INTO inputs (username, email, password) 
        //     VALUES ("Giorgio", "g.g@mail.com", "123456")';
        // if(!$mysqli->query($sql)) { echo($mysqli->connect_error); }
        // else { echo 'Record aggiunto con successo!!!';}
