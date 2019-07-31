<?php


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

// Importado
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    // $users = User::get();//Datos de la Base de Datos
    $users = User::orderBy('id', 'DESC')->take(5)->get();//Datos de la Base de Datos que ordene el ID de forma descendente y que solo muestre 5
    // return ['Lynda', 'Isabella', 'Marco', 'Abel', 'Diana']; //Array estático
    return $users;
});
