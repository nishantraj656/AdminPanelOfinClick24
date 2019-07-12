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
Route::middleware(['cors'])->group(function(){

// Route::post('/exam/save','API\\ExamController@save');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


    //**Exam Route */
    Route::post('/exam/save','API\ExamController@save');
    Route::post('/exam/show','API\ExamController@show');

    /**Group Route */
    Route::post('/group/save','API\GroupController@save');
    Route::post('/group/show','API\GroupController@show');

    /**Subject Route */
    Route::post('/subject/save','API\SubjectController@save');
    Route::post('/subject/show','API\SubjectController@show');

    /**Topic Route */
    Route::post('/topic/save','API\TopicController@save');
    Route::post('/topic/show','API\TopicController@show');
	
	/**Question Route */
    Route::post('/question/save','API\QuestionController@save');
	Route::get('/question/show','API\QuestionController@show');
	Route::get('/question/test','API\QuestionController@test');
   
   // Route::post('/topic/show','API\TopicController@show');

    /** */
    Route::get('/get','SubjectController@index');

});