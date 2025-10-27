<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['jobs'=>[['title'=>'Director','salary'=>'$50,000'], ['title'=>'Programmer','salary'=>'$10,000'],['title'=>'Designer','salary'=>'$40,000']],

       ]);
});

Route::get('/about', function () {
    return view('jobs');
});

Route::get('/contacts', function () {
    return view('contact');
});
Route::get('/jobs', function () {
    return view('jobs',['jobs'=>[['title'=>'Director','salary'=>'$50,000'], ['title'=>'Programmer','salary'=>'$10,000'],['title'=>'Designer','salary'=>'$40,000']],

    ]);
});

