<?php

Route::prefix('admin')->middleware('admin')->group(function () {

    // Admin dashboard route
    Route::get('/','AdminController@getAdminDashboard')->name('admin.index');

    // InstitutionController Routes
    Route::resource('institution', 'InstitutionController');

    // CourseController Routes
    Route::resource('course', 'CourseController',['except'=>'index']);
    Route::get('course/university/{inst_id}', 'CourseController@index')->name('course.index');

    // CityController Routes
    Route::resource('city', 'CityController');

    // UserController Routes
    Route::resource('user', 'UserController',['except'=>['create','edit','update','store']]);

    // DisciplineDegreeController Routes
    Route::get('discipline&degree', 'DisciplineDegreeController@index')->name('discipline&degree.index');
    Route::post('discipline/store', 'DisciplineDegreeController@storeDiscipline')->name('discipline.store');
    Route::post('degree/store', 'DisciplineDegreeController@storeDegree')->name('degree.store');
    Route::post('discipline/update/{id}', 'DisciplineDegreeController@updateDiscipline')->name('discipline.update');
    Route::post('degree/update/{id}', 'DisciplineDegreeController@updateDegree')->name('degree.update');
    Route::post('discipline/delete/{id}', 'DisciplineDegreeController@destroyDiscipline')->name('discipline.destroy');
    Route::post('degree/delete/{id}', 'DisciplineDegreeController@destroyDegree')->name('degree.destroy');
});

// The bad page error route
Route::get('error','ErrorController@noaccess')->name('bad.page');

// Comparisons routes
Route::prefix('comparison')->middleware('auth:user')->group(function(){
  Route::post('add/{course_id}','ComparisonController@add')->name('comparison.add');
});


Route::get('/',[
    'uses'=>'PagesController@getIndex',
    'as'=>'home'
]);

Route::get('/providers/account',[
    'uses'=>'PagesController@getProvidersLandingPage',
    'as'=>'providers-home'
]);


// No middleware routes
Route::get('search',[
    'uses' => 'SearchController@autoCompleteDiscipline',
    'as' => 'search-discipline'
]);

Route::get('course/{name}',[
  'uses'=>'CourseController@viewCourse',
  'as'=>'view-course'
]);

Route::get('results',[
    'uses'=>'SearchController@filter',
    'as'=>'search-res'
]);


// Auth routes
Auth::routes();
Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin-login-form');
Route::post('admin/login','Auth\AdminLoginController@login')->name('admin-login');
Route::get('logout','Auth\LoginController@logout')->name('logout');

// Social network login routes
Route::get('login/{service}', 'Auth\SocialLoginController@redirectToProvider')->name('social.login');
Route::get('login/{google}/callback', 'Auth\SocialLoginController@handleProviderCallback');
