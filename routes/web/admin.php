<?php


use Illuminate\Support\Facades\Route;

Route::get('/' , function(){
   return view('admin.index');
});


Route::resource('users' ,'User\UserController');
Route::get('/user/{user}/profile' , 'User\UserController@profile')->name('users.profile');
Route::get('/user/{user}/permissions' , 'User\PermissionController@create')->name('users.permissions')->middleware('can:staff-users-permissions');
Route::post('/user/{user}/permissions' , 'User\PermissionController@store')->name('users.permissions.store')->middleware('can:staff-users-permissions');

Route::resource('permissions' ,'PermissionController');
Route::resource('roles' ,'RoleController');
Route::resource('products' ,'ProductController');
Route::resource('products.gallery' , 'ProductGalleryController');
Route::resource('sliders', 'SliderController');
Route::resource('contents', 'ContentController');
Route::resource('categories', 'CategoryController');
Route::resource('galleries', 'GalleryController');
Route::resource('galleries.image' , 'GalleryImageController');
Route::resource('portfolios' , 'PortfolioController');
Route::resource('categoriesportfolio' , 'CategoryPortfolioController');
Route::resource('portfolios.gallery' , 'PortfolioGalleryController');
Route::resource('testimonials' , 'TestimonialController');
Route::resource('agents' , 'AgentController');
Route::resource('services' , 'ServiceController');
Route::resource('categoriesservice' , 'CategoryServiceController');
Route::resource('consults' , 'ConsultController');
Route::resource('categoriesmodule' , 'CategoryModuleController');
Route::resource('modules' , 'ModuleController');


Route::post('attribute/values' , 'AttributeController@getValues');

Route::get('comments/unapproved' , 'CommentController@unapproved')->name('comments.unapproved');

Route::resource('comments' ,'CommentController');

Route::resource('categoriesproduct' , 'CategoryProductController');

