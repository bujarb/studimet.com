<?php

Route::prefix('admin')->group(function () {

    Route::get('/',[
        'uses'=>'AdminController@getAdminDashboard',
        'as'=>'admin-index'
    ]);

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

Route::get('admin/univerities/edit/{name}',[
  'uses'=>'AdminController@getAdminEditUniversity',

  'as'=>'admin-edit-university'
]);

Route::get('admin/courses',[
    'uses'=>'AdminController@getAdminCoursesIndex',

    'as'=>'admin-course-index'
]);

Route::get('admin/my/courses',[
    'uses'=>'AdminController@getMyAdminCourses',

    'as'=>'admin-my-course-index'
]);

Route::get('admin/courses/create',[
    'uses'=>'AdminController@getAdminCourseCreate',

    'as'=>'admin-course-create'
]);

Route::get('admin/courses/view/{name}',[
    'uses'=>'AdminController@adminViewCourse',

    'as'=>'admin-view-course'
]);

Route::get('admin/courses/edit/{name}',[
    'uses'=>'AdminController@getAdminCourseEdit',

    'as'=>'admin-edit-course'
]);

Route::post('admin/courses/update/{course}',[
    'uses'=>'AdminController@adminUpdateCourse',

    'as'=>'admin-course-update'
]);

// Routes for cities
Route::get('admin/cities',[
  'uses'=>'AdminController@getAdminCitiesIndex',

  'as'=>'admin-city-index'
]);

Route::post('admin/cities/insert',[
  'uses'=>'AdminController@adminInsertCity',

  'as'=>'admin-city-insert'
]);

Route::post('admin/cities/update/{id}',[
  'uses'=>'AdminController@adminUpdateCity',

  'as'=>'admin-city-update'
]);

Route::post('admin/cities/{name}/delete',[
  'uses'=>'AdminController@adminCityDelete',
  'as'=>'admin-city-delete'
]);

Route::get('admin/cities/create',[
  'uses'=>'AdminController@getAdminCitiesCreate',

  'as'=>'admin-city-create'
]);

Route::get('usearch',[
  'uses' => 'AdminController@searchUser',
  'as' => 'usearch'
]);

// Routes for permissions and roles
Route::get('admin/permissions&roles',[
  'uses'=>'AdminController@getAdminPermissionRoleIndex',

  'as'=>'admin-permissionrole-index'
]);

//End of admin routes


Route::post('comparison/add/{course}',[
  'uses'=>'CourseController@addToComparison',
  'as'=>'add-to-comparison'
]);

Route::post('comparison/remove/{course}',[
  'uses'=>'CourseController@removeFromComparison',
  'as'=>'remove-from-comparison'
]);

Route::get('wishlist/add/{course}',[
  'uses'=>'CourseController@addToWishList',
  'as'=>'add-to-wishlist'
]);

Route::post('wishlist/delete/{course}',[
  'uses'=>'CourseController@removeFromWishList',
  'as'=>'remove-from-wishlist'
]);

Route::get('wishlist',[
  'uses'=>'CourseController@getUserWithList',
  'as'=>'get-user-wishlist'
]);

Route::get('comparisons/',[
  'uses'=>'CourseController@getComparissionView',
  'as'=>'get-comparisons-view'
]);

Route::get('/',[
    'uses'=>'PagesController@getIndex',
    'as'=>'home'
]);

Route::get('country/{country}/',[
    'uses'=>'PagesController@getCountryIndex',
    'as'=>'country-home'
]);

Route::get('/providers/account',[
    'uses'=>'PagesController@getProvidersLandingPage',
    'as'=>'providers-home'
]);

Route::get('inserttosession/{country}',[
    'uses'=>'PagesController@insertIntoSession',
    'as'=>'inserttosession'
]);

// No middleware routes
Route::get('search',[
    'uses' => 'SearchController@autoCompleteDiscipline',
    'as' => 'search-discipline'
]);


Route::get('university/{name}',[
    'uses'=>'UniversityController@viewUni',
    'as'=>'view-university'
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
