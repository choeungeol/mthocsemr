<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 *  권한
 */
Route::auth();

/**
 * OAuth 인증
 */
//Github 인증
Route::get('auth/github', 'Auth\AuthController@redirectToGitHub');
Route::get('auth/github/callback', 'Auth\AuthController@handleGitHubCallback');

//Kakao 인증
Route::get('auth/kakao', 'Auth\AuthController@redirectToKakao');
Route::get('auth/kakao/callback', 'Auth\AuthController@handleKakaoCallback');

/**
 * 초기화면
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');


/**
 * 시스템관리뷰처리
 */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/', 'AdminController@getMain');

    Route::get('view/{app?}', function($app = null) {
        if ($app === null or $app == 'intro') {
            return view('app.admin.intro.intro');
        }
    });

    Route::get('view/code/{subview?}', function($subview = null) {

        if ( $subview === null ) {
            return view('app.admin.intro.intro');
        } else {
            return view('app.admin.code.' . $subview);
        }
    });
});

Route::group(['prefix' => 'receipt', 'middleware' => 'auth'], function() {

    Route::get('/', 'ReceiptController@getMain');


});

Route::group(['prefix' => 'basicbiopsy', 'middleware' => 'auth'], function() {

    Route::get('/', 'BasicBiopsyController@getMain');

    Route::get('view/{apps?}', function($apps = null) {
        if ($apps === null or $apps == 'intro') {
            return view('app.basicbiopsy.intro.intro');

        }
    });
});

Route::group(['prefix' => 'healthcare', 'middleware' => 'auth'], function() {

    Route::get('/', 'HealthcareController@getMain');

    Route::get('view/{apps?}', function($apps = null) {
        if ($apps === null or $apps == 'intro') {
            return view('app.healthcare.intro.intro');

        }
    });

});

Route::group(['prefix' => 'nurseroom', 'middleware' => 'auth'], function() {

    Route::get('/', 'NurseroomController@getMain');

    Route::get('view/{apps?}', function($apps = null) {
        if ($apps === null or $apps == 'intro') {
            return view('app.nurseroom.intro.intro');

        }
    });
});

Route::group(['prefix' => 'pharmacy', 'middleware' => 'auth'], function() {

    Route::get('/', 'PharmacyController@getMain');

    Route::get('view/{apps?}', function($apps = null) {
        if ($apps === null or $apps == 'intro') {
            return view('app.pharmacy.intro.intro');

        }
    });
});

Route::group(['prefix' => 'disease', 'middleware' => 'auth'], function() {

    Route::get('/', 'DiseaseController@getMain');

    Route::get('view/{apps?}', function($apps = null) {
        if ($apps === null or $apps == 'intro') {
            return view('app.disease.intro.intro');

        }
    });
});

/**
 * 코드그룹/코드
 */
Route::group(['prefix' => 'api', 'middleware' => 'auth'], function() {

    Route::post('/create/code-group', 'CodeGroupController@create');

    Route::post('/update/code-group', 'CodeGroupController@update');

    Route::resource('/mth-code-group', 'MthCodeGroupController');

});


