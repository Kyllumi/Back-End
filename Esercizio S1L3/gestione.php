<?php
session_start();

//var_dump($_FILES['image']);
//print_r($_REQUEST);

$contacts = isset($_SESSION['contacts']) ? $_SESSION['contacts'] : [];

$contact = [
    'Firstname' => $_REQUEST['firstname'],
    'Lastname' => $_REQUEST['lastname'],
    'City' => $_REQUEST['city'],
    'Phone' => $_REQUEST['phone'],
    'Email' => $_REQUEST['email'],
];

$_SESSION['contacts'] = [...$contacts, $contact];



$email = $_REQUEST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email  è una mail valida <br/>";
} else {
    echo "$email NON è una mail valida";
}

session_write_close();

header('Location: login.php');

?>