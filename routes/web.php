<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@home')->name('home');
Route::get('/about','HomeController@about')->name('about');
// Route::get('/blog','HomeController@blog')->name('blog');
Route::get('/blog-detail','HomeController@blog_detail')->name('blog-detail');
Route::get('/contact','HomeController@contact')->name('contact');
Route::post('/contact','HomeController@post_contact')->name('contact');
Route::get('/faqs','HomeController@faqs')->name('faqs');
Route::get('/order-tracking','HomeController@order_tracking')->name('order-tracking');
Route::get('/product-single','HomeController@product_single')->name('product-single');
Route::get('/shop','HomeController@shop')->name('shop');
Route::get('/product','HomeController@product')->name('product');
Route::get('/shopping-cart','HomeController@shopping_cart')->name('shopping-cart');

Route::get('/wishlist','HomeController@wishlist')->name('wishlist');
Route::post('/wishlist/{id}','CustomerController@post_wishlist')->name('wishlist.store');
Route::delete('/wishlist/{id}','CustomerController@wishlist_destroy')->name('wishlist.destroy');

Route::get('/product-single/{slug}','HomeController@view')->name('view');

Route::get('/product-ajax/{id}','HomeController@getProductAjax')->name('product.ajax');

Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>'auth','as'=>'admin.'], function () {
    Route::get('/','AdminController@index')->name('index');
    Route::get('/comment','AdminController@list_comment')->name('comment_product.index');
    Route::delete('/comment/{id}','AdminController@cmt_pro_destroy')->name('comment_product.destroy');
    Route::get('/file','AdminController@file')->name('file');
    Route::post('/file','AdminController@upload')->name('file');
    Route::get('/logout','AdminController@logout')->name('logout');

    Route::resource('category_product', 'CategoryProductController');
    Route::resource('product', 'ProductController');
    Route::resource('user', 'UserController');
    Route::resource('attribute', 'AttributeController');
    Route::resource('attribute_value', 'AttributeValueController');
    Route::resource('tag', 'TagController');
    Route::resource('role', 'RoleController');
    Route::resource('shipping', 'ShippingController');
    Route::resource('payment', 'PaymentController');
    Route::resource('bill', 'BillController');
    Route::resource('banner', 'BannerController');
    Route::resource('config', 'ConfigController');
    Route::resource('advertisement', 'AdvertisementController');
    Route::resource('blog','BlogController');
    Route::resource('category_blog','CatBlogController');

    Route::get('/customer','AdminController@list_customer')->name('customer');
});

//Route blog customer
Route::get('/blog', 'Customer\BlogController@homeBlog')->name('blog');

//Route get blog by slug category
Route::get('/blog-category/{slug}','Customer\BlogController@getByCat')->name('blog.category');

//Route get blog by name
Route::post('/blog-category/{slug}','Customer\BlogController@search_by_name')->name('blog.name');

//Route show blog detail by slug
Route::group(['middleware' => 'filter'], function() {
    Route::get('blog-single/{slug}','Admin\BlogController@showDetailBlog')->name('user.blog');
});

// Route search blog
Route::get('blog/search', function () {
    return view('blog.search_blog');
})->name('blog.search');


route::get('admin/login','Admin\AdminController@login')->name('login');
route::post('admin/login','Admin\AdminController@post_login')->name('login');
route::get('admin/error','Admin\AdminController@error')->name('admin.error');

Route::get('/my-account/login','CustomerController@login')->name('customer.login');
Route::post('/my-account/login','CustomerController@post_login')->name('customer.login');

Route::post('/my-account/register','CustomerController@post_register')->name('customer.register');


Route::group(['prefix' => 'my-account','middleware'=>'cus'], function () {
    //Route comment

    Route::post('/blog-comment/store', 'Customer\BlogCommentController@store')->name('blog_comment.add');
    Route::post('/blog-comment/storeReply', 'Customer\BlogCommentController@replyStore')->name('blog_comment.reply');

    Route::post('/product-single/{id}','CustomerController@product_cmt_store')->name('cmt-product.store');
    Route::get('/','CustomerController@account')->name('account');
    Route::get('/order','CustomerController@order')->name('order');
    Route::get('/order-detail/{id}','CustomerController@order_detail')->name('order-detail');
    Route::get('/account-detail','CustomerController@account_detail')->name('account-detail');
    Route::put('/account-detail','CustomerController@update')->name('account-detail.update');
    Route::get('/address','CustomerController@address')->name('address');
    Route::get('/logout','CustomerController@logout')->name('customer.logout');

});

Route::group(['prefix' => 'cart'], function () {
    Route::get('view','CartController@view')->name('cart.view');
    Route::get('add/{id}','CartController@add')->name('cart.add');
    Route::get('add-single/{id}','CartController@add_single')->name('cart_single.add');
    Route::get('remove/{id}','CartController@remove')->name('cart.remove');
    Route::get('remove-list/{id}','CartController@remove_list')->name('cart.remove-list');
    Route::post('update','CartController@update')->name('cart.update');
    Route::get('clear','CartController@clear')->name('cart.clear');
});

Route::group(['prefix' => 'checkout'], function () {
    Route::get('/','CheckoutController@check_out')->name('check-out');
    Route::post('/','CheckoutController@submit_form')->name('check-out');

    Route::get('/order-received/{id}','CheckoutController@order_received')->name('order-received');
});
