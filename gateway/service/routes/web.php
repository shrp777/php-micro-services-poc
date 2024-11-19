<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/auth/sign-in/', function () {
    $auth_service = "auth-nginx";
    $response = Http::post("http://$auth_service/sign-in", ["_token" => csrf_token()]);
    return response()->json($response->json(), 200);
});

Route::post('/auth/sign-up/', function () {
    $auth_service = "auth-nginx";
    $response = Http::post("http://$auth_service/sign-up", ["_token" => csrf_token()]);
    return response()->json($response->json(), 201);
});

Route::get("/auth/me/", function () {
    $auth_service = "auth-nginx";
    $response = Http::get("http://$auth_service/me");
    return response()->json($response->json());
});

Route::get('/tasks', function () {
    $tasks_service = "tasks-nginx";
    $response = Http::get("http://$tasks_service");
    return response()->json($response->json());
});