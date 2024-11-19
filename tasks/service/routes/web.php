<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        "tasks" => [
            ["id" => "ea01d5bc-ff27-416a-b11f-a6bdb766a539", "user_id" => "54e28f51-77ca-4746-b66e-f3abaa4171b9", "status" => 0, "content" => "Prendre rdv chez le médecin", "createdAt" => "2024-11-11 11:11:11"],
            ["id" => "3181c359-00af-4a50-8aef-e321e2df8474", "user_id" => "54e28f51-77ca-4746-b66e-f3abaa4171b9", "status" => 0, "content" => "Aller à la pharmacie", "createdAt" => "2024-11-11 11:11:11"],
            ["id" => "49d495a7-eb89-42d3-b978-7ace0ec4e5e4", "user_id" => "54e28f51-77ca-4746-b66e-f3abaa4171b9", "status" => 1, "content" => "Sortir le chien", "createdAt" => "2024-11-11 11:11:11", "completedAt" => "2024-11-20 10:00:00"],
            ["id" => "7f5fe45a-4c5b-412c-ad07-c18faab22423", "user_id" => "5bbc5b01-ed3f-48de-b86e-985d46480b89", "status" => 0, "content" => "Sortir les poubelles", "createdAt" => "2024-11-11 11:11:11"],
        ]
    ]);
    //return view('welcome');
});
