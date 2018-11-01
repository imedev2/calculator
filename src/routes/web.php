<?php
/**
 * Created by PhpStorm.
 * User: imedev2
 * Date: 01/11/2018
 * Time: 8:58 AM
 */

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devdojo\Calculator\CalculatorController@subtract');


Route::resource('/task', 'Devdojo\Calculator\TaskController');

