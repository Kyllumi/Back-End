<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    setlocale(LC_TIME, 'it_IT');
    echo date('l j F Y') . '<br>';

    $serieA = [
        'Squadre' => ['Roma', 'Milan', 'Juventus'],
        'Formazione' => ['Roma' => ['Mirante', 'Karsdorp', 'Mancini', 'Ibanez', 'Calafiori', 'Cristante', 'Veretout', 'Zaniolo', 'Pellegrini', 'Mkhitaryan', 'Tammy Abraham'], 'Milan' => ['Szczesny', 'Gatti', 'Bremer', 'Danilo', 'Cuadrado', 'Locatelli', 'Rabiot', 'Kostic', 'Di Maria', 'Kean', 'Chiesa'], "Juventus" => ["Szczesny", "Danilo", "De Ligt", "Chiellini", "Alex Sandro", "McKennie", "Bentancur", "Rabiot", "Chiesa", "Morata", "Dybala"]],
        'Partite' => ['Roma-Milan', 'Milan-Juventus', 'Roma-Juventus'],
    ];

    for ($i = 0; $i < count($serieA['Squadre']); $i++) {
        print 'Squadra: ' . $serieA['Squadre'][$i] . '<br>';
    }

    for ($i = 0; $i < count($serieA['Partite']); $i++) {
        print 'Questa è la partita che si è disputata: ' . $serieA['Partite'][$i] . '<br>';
    }

    foreach ($serieA as $key => $value) {
        print $key . '<br>';
        if ($key == 'Formazione') {
            foreach ($value as $key2 => $value2) {
                print '<strong>' . 'Squadra: ' . $key2 . '</strong>' . '<br>';
                foreach ($value2 as $key3 => $value3) {
                    print $value3 . '<br>';
                }
            }
        }
    }

    ?>




</body>

</html>