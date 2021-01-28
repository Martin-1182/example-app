<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {

    Route::group(['middleware' => ['auth', 'verified']], function () {

        /* Route::post('/contact')->name('contact.send'); */

    });
});
