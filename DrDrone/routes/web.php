<?php

use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/homepage','HomeController@index')->name('homepage')->middleware('auth');
Route::post('/dateWeather','HomeController@dateWeather')->name('dateWeather')->middleware('auth');



/////Proje Route Ayarları
Route::get('/projectadd','project\projectAddController@projectAddShow')->name('projectAdd')->middleware('auth');
Route::post('/projectadd','project\projectAddController@projectAddPost')->name('projectAddPost')->middleware('auth');

Route::get('/projectlist','project\projectListController@projectListShow')->name('projectList')->middleware('auth');
Route::get('/projectupdate/{id}','project\projectListController@projectUpdatePage')->name('projectupdate')->middleware('auth');
Route::post('/projectupdate/{id}','project\projectListController@projectUpdatePagePost')->name('projectupdaePost')->middleware('auth');
Route::post('/projectdelete/{id}','project\projectListController@projectDeletePost')->name('projectdeletePost')->middleware('auth');







