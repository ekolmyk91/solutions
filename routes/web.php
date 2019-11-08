<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes(['register' => false]);
//Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::prefix('dashboard')->group(function () {
    Route::get('members', 'Front\MemberController@index');
});

Route::view('/{path?}', 'app');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/users',                                  'Admin\AdminUsersController@indexUser');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});


/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/members',                                'Admin\MembersController@index');
    Route::get('/admin/members/create',                         'Admin\MembersController@create');
    Route::post('/admin/members',                               'Admin\MembersController@store');
    Route::get('/admin/members/{member}/edit',                  'Admin\MembersController@edit')->name('admin/members/edit');
    Route::post('/admin/members/bulk-destroy',                  'Admin\MembersController@bulkDestroy')->name('admin/members/bulk-destroy');
    Route::post('/admin/members/{member}',                      'Admin\MembersController@update')->name('admin/members/update');
    Route::delete('/admin/members/{member}',                    'Admin\MembersController@destroy')->name('admin/members/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/departments',                            'Admin\DepartmentsController@index');
    Route::get('/admin/departments/create',                     'Admin\DepartmentsController@create');
    Route::post('/admin/departments',                           'Admin\DepartmentsController@store');
    Route::get('/admin/departments/{department}/edit',          'Admin\DepartmentsController@edit')->name('admin/departments/edit');
    Route::post('/admin/departments/bulk-destroy',              'Admin\DepartmentsController@bulkDestroy')->name('admin/departments/bulk-destroy');
    Route::post('/admin/departments/{department}',              'Admin\DepartmentsController@update')->name('admin/departments/update');
    Route::delete('/admin/departments/{department}',            'Admin\DepartmentsController@destroy')->name('admin/departments/destroy');
});