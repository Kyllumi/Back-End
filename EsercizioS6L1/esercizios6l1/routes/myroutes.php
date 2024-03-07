<?php

use Illuminate\Support\Facades\Route;

$data = [
    [
        'id' => 1,
        'name' => 'Davide',
        'surname' => 'Sanna',
        'age' => 30
    ],
    [
        'id' => 2,
        'name' => 'Da',
        'surname' => 'Sa',
        'age' => 30
    ],
    [
        'id' => 3,
        'name' => 'D',
        'surname' => 'S',
        'age' => 25
    ]
];


Route::get('/elenco', function () {
    $data1 = new stdClass();
    $data1->id = 1;
    $data1->name = 'giorgio';
    $data1->surname = 'rossi';
    $data1->age = 30;

    $data2 = new stdClass();
    $data2->id = 2;
    $data2->name = 'paolo';
    $data2->surname = 'verdi';
    $data2->age = 12;

    $data3 = new stdClass();
    $data3->id = 3;
    $data3->name = 'fuffa';
    $data3->surname = 'guru';
    $data3->age = 104;

    return view('elenco', ['data' => [$data1, $data2, $data3]]);
});

Route::get('/crea', function () {
    return view('crea');
});

Route::get('/modifica', function () {
    return view('modifica');
});

Route::get('/elimina', function () {
    return view('elimina');
});

Route::get('/singola/{id}/{name}/{surname}/{age}', function ($id, $name, $surname, $age) {
    $data1 = new stdClass();
    $data1->id = $id;
    $data1->name = $name;
    $data1->surname = $surname;
    $data1->age = $age;

    return view('singola', ['data' => $data1]);
});

