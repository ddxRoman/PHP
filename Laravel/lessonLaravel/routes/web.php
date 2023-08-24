<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () { // Тут мы берем ЮРЛ about и в него вписываем шаблон Эбаут из папки ресурс/вьювс
    return view(view:'about');// ШАблон мы сами там создали
});
 