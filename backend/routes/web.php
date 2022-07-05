<?php

use App\Models\User;
use GuzzleHttp\Promise\Create;
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

    // User::create([
    //     'name' => 'Ufuk Uçar - Docker içinden geldi',
    //     'email' => 'ufkucar@gmail.com',
    //     'password' => bcrypt('123456')

    // ]);
    return view('welcome');
});
