<?php
session_start();

//print_r($_SESSION);
$contacts = [];
if (isset($_SESSION['contacts'])) {
    $contacts = $_SESSION['contacts'];
}


session_write_close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" action="gestione.php" enctype="multipart/form-data" class="my-3">
            <div class="row g-3">
                <div class="col-sm">
                    <input type="text" class="form-control" placeholder="Firstname..." name="firstname">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" placeholder="Lastname..." name="lastname">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" placeholder="City..." name="city">
                </div>
                <div class="col-sm">
                    <input type="tel" class="form-control" placeholder="Phone..." name="phone">
                </div>
                <div class="col-sm">
                    <input type="email" class="form-control" placeholder="Email..." name="email">
                </div>
                <div class="col-sm">
                    <button type="submit" class="btn btn-dark">Add Contact</button>
                </div>
            </div>
        </form>
        <hr />
        <div class="my-3">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">City</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($contacts) {
                        foreach ($contacts as $key => $contact) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $key + 1 ?>
                                </th>
                                <td>
                                    <?= $contact['Firstname'] ?>
                                </td>
                                <td>
                                    <?= $contact['Lastname'] ?>
                                </td>
                                <td>
                                    <?= $contact['City'] ?>
                                </td>
                                <td>
                                    <?= $contact['Phone'] ?>
                                </td>
                                <td>
                                    <?= $contact['Email'] ?>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>