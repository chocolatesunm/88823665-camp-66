<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello, World!</h1>";
});
/*route ไว้สำหรับเปลี่ยนหน้าจอ*/
Route::get("/mycontroller/{id?}", [MyController::class, 'myfunction']);
