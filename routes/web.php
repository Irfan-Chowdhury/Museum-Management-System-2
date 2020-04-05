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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('admin-dashboard', function () {
//     return view('admin/admin_template');
// });
// Route::get('admin-dashboard/index', function () {
//     return view('admin/index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    
    // -- Admin --
    Route::get('/admin-create', 'AdminController@admin_create')->name('admin-create');
    Route::post('/admin-save', 'AdminController@admin_save')->name('admin-save');
    Route::get('/admin-list', 'AdminController@admin_list')->name('admin-list');
    Route::get('/admin-edit/{id}', 'AdminController@admin_edit')->name('admin-edit');
    Route::post('/admin-update/{id}', 'AdminController@admin_update')->name('admin-update');
    Route::get('/admin-delete/{id}', 'AdminController@admin_delete')->name('admin-delete');

    // -- Notice --
    Route::get('/notice-create','NoticeController@notice_create')->name('notice-create');
    Route::post('/notice-save','NoticeController@notice_save')->name('notice-save');
    Route::get('/notice-list','NoticeController@notice_list')->name('notice-list');
    Route::get('/notice-edit/{id}','NoticeController@notice_edit')->name('notice-edit');
    Route::post('/notice-update/{id}','NoticeController@notice_update')->name('notice-update');
    Route::get('/notice-delete/{id}','NoticeController@notice_delete')->name('notice-delete');
    Route::get('/notice-unpublished/{id}','NoticeController@notice_unpublished')->name('notice-unpublished');
    Route::get('/notice-published/{id}','NoticeController@notice_published')->name('notice-published');

    // -- Rules --
    Route::get('/rule-create','RuleController@rule_create')->name('rule-create');
    Route::post('/rule-save','RuleController@rule_save')->name('rule-save');
    Route::get('/rule-list','RuleController@rule_list')->name('rule-list');
    Route::get('/rule-edit/{id}','RuleController@rule_edit')->name('rule-edit');
    Route::post('/rule-update/{id}','RuleController@rule_update')->name('rule-update');
    Route::get('/rule-delete/{id}','RuleController@rule_delete')->name('rule-delete');
    Route::get('/rule-unpublished/{id}','RuleController@rule_unpublished')->name('rule-unpublished');
    Route::get('/rule-published/{id}','RuleController@rule_published')->name('rule-published');
    
    // -- Museum --
    Route::get('/museum-create','MuseumController@museum_create')->name('museum-create');
    Route::post('/museum-save','MuseumController@museum_save')->name('museum-save');
    Route::get('/museum-manage','MuseumController@museum_manage')->name('museum-manage');
    Route::get('/museum-edit/{id}','MuseumController@museum_edit')->name('museum-edit');
    Route::post('/museum-update/{id}','MuseumController@museum_update')->name('museum-update');
    
    // -- Schedule --
    Route::get('/schedule-create','ScheduleController@schedule_create')->name('schedule-create');
    Route::post('/schedule-save','ScheduleController@schedule_save')->name('schedule-save');
    Route::get('/schedule-manage','ScheduleController@schedule_manage')->name('schedule-manage');
    Route::get('/schedule-edit/{id}','ScheduleController@schedule_edit')->name('schedule-edit');
    Route::post('/schedule-update/{id}','ScheduleController@schedule_update')->name('schedule-update');
    
    // -- Item --
    Route::get('/item-create','ItemController@item_create')->name('item-create');
    Route::post('/item-save','ItemController@item_save')->name('item-save');
    Route::get('/item-list','ItemController@item_list')->name('item-list');
    Route::get('/item-edit/{id}','ItemController@item_edit')->name('item-edit');
    Route::post('/item-update/{id}','ItemController@item_update')->name('item-update');
    Route::get('/item-delete/{id}','ItemController@item_delete')->name('item-delete');
    
    // -- Category of Item --
    Route::get('/category-manage','CategoryController@category_manage')->name('category-manage');
    Route::post('/category-save','CategoryController@category_save')->name('category-save');
    Route::post('/category-update/{id}','CategoryController@category_update')->name('category-update');
    Route::get('/category-delete/{id}','CategoryController@category_delete')->name('category-delete');

});

