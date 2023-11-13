<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

Route::get('/set_language/{lang}', 'Controller@setLanguage')->name('set_language');

Auth::routes([
    'register' => false,
]);

// Auth::routes();
Route::get('/', 'SumaController@index')->name('home');
Route::get('/servicios', 'SumaController@servicios')->name('suma.servicios');
Route::get('/equipo', 'SumaController@equipo')->name('equipo');
Route::get('/clientes', 'SumaController@clientes')->name('suma.clientes');
Route::get('/contacto', 'SumaController@contacto')->name('suma.contacto');
Route::get('/politica', 'SumaController@politica')->name('suma.politica');

Route::group(['middleware' => ['auth'], 'prefix' => 'erp'], function () {
    Route::get('/', 'ErpController@index')->name('erp.index');
    Route::get('/admin','AdminController@index')->name('admin_dashboard')->middleware(['admin']);
    Route::group(['prefix' => 'empresas'], function () {
        require __DIR__ .'/empresas.php';
    });

    Route::resource('user', 'UserController')->middleware('admin');
    Route::get('profile', 'UserController@profile')->name('user.profile');
    Route::post('profile', 'UserController@update_avatar')->name('user.updateavatar');
    Route::group(['middleware' => ['admin'],'prefix' => 'userEmpresa'], function () {
        require __DIR__ .'/empresasAsociadas.php';
    });

    Route::resource('genero', 'GeneroController');
    Route::get('generos', 'GeneroController@listing');

    // pongo metodo any en lugar de fallback porque tambien acepta POST, DELETE y fallback() solo GET
    Route::any('{any}', function () {
        throw new NotFoundHttpException();
    })->where('any','.*');
});

// Route::fallback(function() {
//     throw new NotFoundHttpException();
//     // return response()->view('welcome', [], 302);
// });

