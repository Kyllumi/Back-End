<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center">Benvenuto nella pagina di registrazione</h1>

        <form class="w-50 mx-auto mt-4" method="POST" action="gestione.php">
            <div class="mb-3">
                <label for="inputName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputName" name="inputName">
            </div>
            <div class="mb-3">
                <label for="inputSurname" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="inputSurname" name="inputSurname">
            </div>
            <div class="mb-3">
                <label for="inputAddress" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" id="inputAddress">
            </div>
        
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>