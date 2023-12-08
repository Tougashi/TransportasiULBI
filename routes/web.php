<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;


Route::group(['middleware' => []], function () {
   Route::controller(ViewController::class)->group(function(){
    Route::get('/', 'main')->name('beranda');
   });
});