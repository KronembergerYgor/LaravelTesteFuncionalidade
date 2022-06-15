<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Site\LoginController;

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


Route::get('/', ['uses'=>'App\Http\Controllers\Site\HomeController@index'])->name('home.index');

Route::name("site.login")->group(function(){
    Route::get('/login', ['uses'=>'App\Http\Controllers\Site\LoginController@index']);
});

Route::prefix('/login')->group(function(){

    Route::name("site.login.entrar")->group(function(){
        Route::Post('/entrar', ['uses'=>'App\Http\Controllers\Site\LoginController@entrar']);
    });

    Route::name("site.login.sair")->group(function(){
        Route::get('/sair', ['uses'=>'App\Http\Controllers\Site\LoginController@sair']);
    });

});

Route::group(['middleware'=>'auth'],function(){

    Route::prefix('admin')->group(function(){
    
        Route::name('admin.cursos')->group(function(){
            Route::get('/cursos', ['uses'=>'App\Http\Controllers\Admin\CursoController@index']);
        });
    
        Route::prefix('cursos')->group(function(){
    
            Route::name('admin.cursos.adiconar')->group(function(){
                Route::get('/adicionar', ['uses'=>'App\Http\Controllers\Admin\CursoController@adicionar']);
            });
    
            Route::name('admin.cursos.salvar')->group(function(){
                Route::post('/salvar', ['uses'=>'App\Http\Controllers\Admin\CursoController@salvar']);
            });
    
            Route::name('admin.cursos.editar')->group(function(){
                Route::get('/editar/{id}', ['uses'=>'App\Http\Controllers\Admin\CursoController@editar']);
            });
    
            Route::name('admin.cursos.atualizar')->group(function(){
                Route::put('/atualizar/{id}', ['uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);
            });
    
            Route::name('admin.cursos.deletar')->group(function(){
                Route::get('/deletar/{id}', ['uses'=>'App\Http\Controllers\Admin\CursoController@deletar']);
            });
    
        });
    
    });


});

