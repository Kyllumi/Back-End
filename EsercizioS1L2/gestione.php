<?php

#$_POST
// var_dump($_POST);


var_dump($_REQUEST);

echo '<h1> ' . $_REQUEST['inputName'] . ' ' . $_REQUEST['inputSurname'] . '</h1>';



session_start();
$_SESSION['utente'] = $_REQUEST['inputName'] . ' ' . $_REQUEST['inputSurname'];
session_write_close();

var_dump($_SESSION);


header('location: sessione.php');

?>