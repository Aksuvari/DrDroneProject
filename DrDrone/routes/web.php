<?php

use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/','HomeController@index')->name('homepage')->middleware('auth');
Route::post('/dateWeather','HomeController@dateWeather')->name('dateWeather')->middleware('auth');



/////Proje Route Ayarları
Route::get('/projectadd','project\projectAddController@projectAddShow')->name('projectAdd')->middleware('auth');
Route::post('/projectadd','project\projectAddController@projectAddPost')->name('projectAddPost')->middleware('auth');

Route::get('/projectlist','project\projectListController@projectListShow')->name('projectList')->middleware('auth');







