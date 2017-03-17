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

use App\Definitions\FunctionsDefinition;

foreach (FunctionsDefinition::URL as $id=>$url) {
    if (FunctionsDefinition::CONTROLLER[$id] !== "" && FunctionsDefinition::CONTROLLER[$id] !== "-") {
        Route::match(['get', 'post'], $url, FunctionsDefinition::CONTROLLER[$id])->name($id);
    }
}
