<?php

Route::get('/', 'HomeController@index');

Route::get('/pilihhp', 'HomeController@pilihHp');
Route::get('/sethp/{text}', 'HomeController@setHp');
Route::post('/settipe', 'HomeController@setTipe');

Route::get('/infomat/{id}', 'MatiController@info');
Route::get('/infohid/{id}', 'HidupController@info');

Route::get('/delsess', 'HomeController@deleteSession');
Route::get('/hapushp', 'HomeController@hapusHp');

Route::get('/diaghidup', 'HidupController@index');
Route::get('/diagmati', 'MatiController@index');

Route::get('/diagmati/{id}', 'MatiController@diagnosa');
Route::get('/diaghidup/{id}', 'HidupController@diagnosa');

Route::get('/solmati/{text}', 'MatiController@solmati');
Route::get('/solhidup/{text}', 'HidupController@solhidup');
