<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjasList=[
        ["name"=>"mario", "skill"=>75, "id"=>"1"],
        ["name"=>"luigi", "skill"=>45, "id"=>"2"],
    ];

    return view('ninjas.index',["greeting"=>"hello", "ninjas"=> $ninjasList]); // do not put $ninjasList in " "
});

// Route wilcards

Route::get('/ninjas/{id}', function ($id) {
    $ninjasList=[
        ["name"=>"mario", "skill"=>75, "id"=>"1"],
        ["name"=>"luigi", "skill"=>45, "id"=>"2"],
    ];
    // fetch recod with id
    return view('ninjas.show',["id"=>$id]);
});