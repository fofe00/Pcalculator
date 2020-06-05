<?php

    Route::get('calculator', function(){
        echo 'Hello from the calculator package!';
    });

    Route::get('add/{a}/{b}', 'Ainix\Calculator\CalculatorController@add');
    Route::get('subtract/{a}/{b}', 'Ainix\Calculator\CalculatorController@subtract');