<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users', function () {
    $name =[
        1 =>['name' => 'alex','phone'=>'123456','city'=>'penang'],
        2 =>['name' => 'alice','phone'=>'654643','city'=>'KL'],
        3 =>['name' => 'alan','phone'=>'432564','city'=>'miri'],
        4 =>['name' => 'aaron','phone'=>'897978','city'=>'kuching'],
    ];
    return view('users',[ 
        'user' => $name,
        'city' => '',
    ]);
});