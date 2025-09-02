<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjasList=[
        ["name"=>"mario", "skill"=>75, "id"=>"1"],
        ["name"=>"luigi", "skill"=>45, "id"=>"2"],
        ["name"=>"yoshi", "skill"=>20, "id"=>"3"],
    ];

    return view('ninjas.index',["greeting"=>"hello", "ninjas"=> $ninjasList]); // do not put $ninjasList in " "
});



// Route wilcards

Route::get('/ninjas/create',function(){
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show',["id"=>$id]);
});