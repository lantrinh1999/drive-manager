<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'drive', 'namespace' => 'Api', 'as' => 'drive.'], function () {
    Route::get('/', 'DriveController@index')->name('index');

});

Route::get('dw/{idir}', function ($idir) {
    $p = explode('.', $idir);
    if (!empty($p[1])) {
        $p[1] = null;
    }
    return download($p[0], '');
})->name('dw');
