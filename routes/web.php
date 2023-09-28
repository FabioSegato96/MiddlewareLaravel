<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\PrimeiroMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/negado', function () {
    return "Acesso negado.";
})->name('negado');



//Route::get('/usuarios', 'App\Http\Controllers\UsuarioControlador@index')->name('usuarios')->middleware('primeiro');

Route::get('/usuarios', 'App\Http\Controllers\UsuarioControlador@index')->name('usuarios');
Route::get('/produtos', 'App\Http\Controllers\ProdutoControlador@index')->name('produtos');

Route::post('/login', function (Request $req) {
    
    $login_ok = false;
    $admin = false;
    switch($req->input('user')) {
        case 'Joao':
            $login_ok = $req->input(password) == "senhaJoao";
            $admin = true;
            break;
        case 'default';
            $login_ok = false;       
    }
    if ($login_ok){
        $login = ['user' => $req->input('user'), admin => true];
        $req->session()->put('login', $login);
        return response('Login ok', 200);
    }else{
        $req->session()-flush();
        return response('Erro no login', 404);
    }
})->name('login');

Route::get('/logout', function (Request $req) {
    $req->session()->flush();
    return response('Deslogado com sucesso', 200);
})->name('logout');