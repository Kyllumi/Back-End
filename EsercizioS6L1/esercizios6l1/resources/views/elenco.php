<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-5">Elenco di cose</h1>

    <div class="container">
        <table class="table">
            <thead>
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Surname
                </th>
                <th>
                    Age
                </th>
            </thead>

            <tbody>
                <?php foreach ($data as $key => $value) { ?>
                    <tr>
                        <td>
                            <?= $value->id ?>
                        </td>
                        <td>
                            <?= $value->name ?>
                        </td>
                        <td>
                            <?= $value->surname ?>
                        </td>
                        <td>
                            <?= $value->age ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>