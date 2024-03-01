<?php

require_once 'db.php';

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

echo 'Username: ' . $username . '<br>';
echo 'Email: ' . $email . '<br>';
echo 'Password: ' . $password . '<br>';

$sql = "INSERT INTO inputs (username, email, password) 
             VALUES ('$username', '$email', '$password')";
if (!$mysqli->query($sql)) {
    echo ($mysqli->connect_error);
} else {
    echo 'Record aggiunto con successo!!!';
}


class Form
{
    public $username;
    public $email;
    private $password;


    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getCampo()
    {
        return '
        <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-3">Dati dell\'utente</h1>
    <form class="w-50 m-auto border border-primary p-3" action="index.php" method="post">
    <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" value="' . $this->username . '">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $this->email . '">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="' . $this->password . '">
  </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
        ';
    }
}

$obj = new Form($username, $email, $password);
echo $obj->getCampo();


