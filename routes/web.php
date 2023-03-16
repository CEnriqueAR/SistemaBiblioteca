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
*/Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        /**
         *  Area
         */
        Route::group(['prefix' => 'area'], function() {
            Route::get('/', 'AreaController@index')->name('area.index');
            Route::get('/create', 'AreaController@create')->name('area.create');
            Route::post('/create', 'AreaController@store')->name('area.store');
            Route::get('/{area}/show', 'AreaController@show')->name('area.show');
            Route::get('/{area}/edit', 'AreaController@edit')->name('area.edit');
            Route::patch('/{area}/update', 'AreaController@update')->name('area.update');
            Route::delete('/{area}/delete', 'AreaController@destroy')->name('area.destroy');
        });

        /**
         *  Curso
         */
        Route::group(['prefix' => 'curso'], function() {
            Route::get('/', 'CursoController@index')->name('curso.index');
            Route::get('/create', 'CursoController@create')->name('curso.create');
            Route::post('/create', 'CursoController@store')->name('curso.store');
            Route::get('/{curso}/show', 'CursoController@show')->name('curso.show');
            Route::get('/{curso}/edit', 'CursoController@edit')->name('curso.edit');
            Route::patch('/{curso}/update', 'CursoController@update')->name('curso.update');
            Route::delete('/{curso}/delete', 'CursoController@destroy')->name('curso.destroy');
        });

        /**
         *  Categoria
         */
        Route::group(['prefix' => 'categoria'], function() {
            Route::get('/', 'CategoriaController@index')->name('categoria.index');
            Route::get('/create', 'CategoriaController@create')->name('categoria.create');
            Route::post('/create', 'CategoriaController@store')->name('categoria.store');
            Route::get('/{categoria}/show', 'CategoriaController@show')->name('categoria.show');
            Route::get('/{categoria}/edit', 'CategoriaController@edit')->name('categoria.edit');
            Route::patch('/{categoria}/update', 'CategoriaController@update')->name('categoria.update');
            Route::delete('/{categoria}/delete', 'CategoriaController@destroy')->name('categoria.destroy');
        });

        /**
         *  Libro
         */

        Route::group(['prefix' => 'libro'], function() {
            Route::get('/', 'LibroController@index')->name('libro.index');
            Route::get('/create', 'LibroController@create')->name('libro.create');
            Route::post('/create', 'LibroController@store')->name('libro.store');
            Route::get('/{libro}/show', 'LibroController@show')->name('libro.show');
            Route::get('/{libro}/edit', 'LibroController@edit')->name('libro.edit');
            Route::patch('/{libro}/update', 'LibroController@update')->name('libro.update');
            Route::delete('/{libro}/delete', 'LibroController@destroy')->name('libro.destroy');
        });


        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});
