<?php

Route::get('add/{a}/{b}', 'Hijraf\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Hijraf\Calculator\CalculatorController@subtract');