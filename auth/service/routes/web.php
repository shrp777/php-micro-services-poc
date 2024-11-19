<?php

use Illuminate\Support\Facades\Route;

Route::get('/me', function () {
    return response()->json(["id" => "54e28f51-77ca-4746-b66e-f3abaa4171b9", "firstname" => "John", "lastname" => "Doe", "email" => "john@doe.com"], 200);
    //return view('welcome');
});

Route::post('/sign-up', function () {
    return response()->json(["access_token" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c", "refresh_token" => "0123456789"], 201);
    //return view('welcome');
});

Route::post('/sign-in', function () {
    return response()->json(["id" => "54e28f51-77ca-4746-b66e-f3abaa4171b9", "firstname" => "John", "lastname" => "Doe", "email" => "john@doe.com"], 200);
    //return view('welcome');
});
