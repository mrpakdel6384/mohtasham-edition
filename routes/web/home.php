<?php


use App\Category;
use App\CategoryPortfolio;
use App\CategoryService;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', 'HomeController@index');

Auth::routes(['verify'=>true]);


Route::get('/auth/google','Auth\GoogleAuthController@redirect')->name('auth.google');
Route::get('/auth/google/callback','Auth\GoogleAuthController@callback');

Route::get('/auth/token','Auth\AuthTokenController@getToken')->name('two_factor_auth.token');
Route::post('/auth/token','Auth\AuthTokenController@postToken');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/secret' , function(){
   return 'secret';
})->middleware(['auth','password.confirm']);

Route::middleware('auth')->prefix('profile')->namespace('Profile')->group(function(){
    Route::get('/','IndexController@index')->name('profile');
    Route::post('/','UserDetailController@store')->name('profile.create');

    Route::get('twofactor','TwoFactorAuthController@managetwofactor')->name('profile.2fa.manage');
    Route::post('twofactor','TwoFactorAuthController@postmanagetwofactor');

    Route::get('twofactor/phone' ,'TokenAuthController@getPhoneVerify')->name('profile.getphoneverify');
    Route::post('twofactor/phone' ,'TokenAuthController@postPhoneVerify');

    Route::post('/{profileId}/follow', 'IndexController@followUser')->name('user.follow');
    Route::post('/{profileId}/unfollow', 'IndexController@unFollowUser')->name('user.unfollow');




});

Route::middleware('auth')->group(function(){
    Route::post('payment' , 'PaymentController@payment')->name('cart.payment');
    Route::get('payment/callback','PaymentController@callback')->name('payment.callback');
});



Route::get('products' , 'ProductController@index')->name('products');
Route::get('products/category/{categoryproduct}' , 'ProductController@category')->name('product.blog');
Route::get('products/{product}' , 'ProductController@single')->name('products.single');



Route::post('comments' , 'HomeController@comment')->name('send.comment');
Route::post('commentsajax' , 'HomeController@commentajax')->name('send.commentajax');



Route::post('cart/add/{product}' ,'CartController@addToCart' )->name('cart.add');
Route::get('cart' ,'CartController@cart' );
Route::patch('cart/quantity/change' , 'CartController@quantityChange');
Route::delete('cart/delete/{cart}' , 'CartController@deleteFromCart')->name('cart.destroy');



Route::get('/blog' ,'ContentController@all')->name('content.all');
Route::get('/blog/{category}' ,'ContentController@index')->name('content.blog');
Route::get('/show/{category}/{content}' ,'ContentController@show')->name('content.single');

Route::get('/service/{categoryservice}' ,'ServiceController@index')->name('front.service.single');

Route::get('/services/{category}' ,'CategoryPortfolioController@service')->name('portfolio.service');
Route::get('/portfolio/blog/{category}' ,'CategoryPortfolioController@index')->name('portfolio.blog');
Route::get('portfolio/{portfolio}' ,'PortfolioController@index')->name('portfolio.show.single');


Route::get('/consult' ,'ConsultController@index')->name('consult');
Route::post('/consult' ,'ConsultController@store');

Route::get('/contact' ,'ContactController@index')->name('contact');
Route::post('/contact' ,'ContactController@store');

Route::get('/agents' ,'AgentController@index')->name('agents');
Route::get('/priceestimation' , 'HomeController@priceestimation')->name('priceestimation');
Route::post('/priceestimation' , 'HomeController@getpricerequest');


Route::get('/sitemap','SitemapController@index');
Route::get('/sitemap-articles','SitemapController@articles')->name('sitemap.articles');
Route::get('/sitemap-portfolio','SitemapController@portfolio')->name('sitemap.portfolio');
Route::get('/sitemap-category-portfolio','SitemapController@categoryPortfolio')->name('sitemap.category.portfolio');


View::composer(['*'],function($view){
        $shareservices = CategoryService::all();
        $sharecategories = Category::all();
        $sharecategoryPortfolios = CategoryPortfolio::latest()->get();
        $sharecontents =  Content::latest()->take(2)->get();
    $view->with(compact('shareservices','sharecategoryPortfolios','sharecategories','sharecontents'));
});

