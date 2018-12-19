<?php

Route::group(['middleware' => 'web', 'prefix' => 'bouncemanagement', 'namespace' => 'Modules\BounceManagement\Http\Controllers'], function()
{
    Route::get('/', 'BounceManagementController@index');
});
