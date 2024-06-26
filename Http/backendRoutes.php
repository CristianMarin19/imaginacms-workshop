<?php

use Illuminate\Routing\Router;

/** @var Router $router */
Route::prefix('/workshop')->group(function (Router $router) {
    $router->get('modules', [
        'as' => 'admin.workshop.modules.index',
        'uses' => 'ModulesController@index',
        'middleware' => 'can:workshop.modules.index',
    ]);
    $router->get('modules/{module}', [
        'as' => 'admin.workshop.modules.show',
        'uses' => 'ModulesController@show',
        'middleware' => 'can:workshop.modules.show',
    ]);
    $router->post('modules/update', [
        'as' => 'admin.workshop.modules.update',
        'uses' => 'ModulesController@update',
        'middleware' => 'can:workshop.modules.update',
    ]);
    $router->post('modules/disable/{module}', [
        'as' => 'admin.workshop.modules.disable',
        'uses' => 'ModulesController@disable',
        'middleware' => 'can:workshop.modules.disable',
    ]);
    $router->post('modules/enable/{module}', [
        'as' => 'admin.workshop.modules.enable',
        'uses' => 'ModulesController@enable',
        'middleware' => 'can:workshop.modules.enable',
    ]);

    $router->get('themes', [
        'as' => 'admin.workshop.themes.index',
        'uses' => 'ThemesController@index',
        'middleware' => 'can:workshop.themes.index',
    ]);
    $router->get('themes/{theme}', [
        'as' => 'admin.workshop.themes.show',
        'uses' => 'ThemesController@show',
        'middleware' => 'can:workshop.themes.show',
    ]);
}
);
