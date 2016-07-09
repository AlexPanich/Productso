<?php
Route::group(['namespace' => 'AlexPanich\productso\Http\Controllers'], function () {
    Route::get('category/{slug?}', 'PrsoCategoryController@show');
});