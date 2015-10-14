<?php

Route::get('/', [
	'as' => 'index',
	'uses' => 'EmployeeController@index'
]);
