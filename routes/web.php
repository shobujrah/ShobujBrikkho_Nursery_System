<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserdetailsController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\SslCommerzPaymentController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//routes for website
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact-store',[HomeController::class,'store'])->name('contact.store');


Route::get('/search',[HomeController::class,'search'])->name('search');

Route::post('/add-to-cart/{product_id}',[HomeController::class,'addToCart'])->name('add.to.cart');
Route::get('/cart-view',[HomeController::class,'cartView'])->name('cart.view');
Route::get('/cart-item-remove/{id}',[HomeController::class,'cartItemRemove'])->name('cart.item.remove');
Route::get('/cart-clear',[HomeController::class,'clearCart'])->name('cart.clear');


Route::get('/all-products',[WebsiteProductController::class,'allProducts'])->name('website.all-products');
Route::get('/products-under-category/{categoryId}',[WebsiteProductController::class,'categoryWiseProducts'])->name('category.products');
Route::get('/product-details/{id}',[WebsiteProductController::class,'productdetails'])->name('website.product-details');

Route::get('/customer-login',[HomeController::class,'login'])->name('customer.login');
Route::post('/customer-dologin',[CustomerController::class,'dologin'])->name('customer.dologin');

// Route::get('/customer-logout',[CustomerController::class,'customerlogout'])->name('customer.logout');

Route::get('/customer-registration',[HomeController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');


Route::group(['middleware'=>'frontendAuth'],function(){
    Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
    Route::post('/place-order',[HomeController::class,'placeOrder'])->name('place.order');
    Route::get('/my-order/{id}',[HomeController::class,'myorder'])->name('my.order');
    Route::get('/my-order-view/{id}',[HomeController::class,'myorderView'])->name('my.order.view');

    Route::get('/customer-logout',[CustomerController::class,'customerlogout'])->name('customer.logout');

    Route::get('/customer-profile',[HomeController::class,'profile'])->name('customer.profile');
    Route::get('/customer-profile-edit',[HomeController::class, 'customerEdit'])->name('customer.edit');
    Route::post('/customer-profile-edit/{id}',[HomeController::class, 'customerUpdate'])->name('customer.update');
});





// SSLCOMMERZ Start
// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);//hosted checkout
// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);//easy checkout

Route::post('/success', [SslCommerzPaymentController::class, 'success'])->name('payment.success');
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END







// routes for admin
Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');

Route::post('/admin/do-login',[UserController::class,'doLogin'])->name('admin.do-login');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

            Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
            Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');


            Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');

            Route::get('/category/view/{id}',[CategoryController::class,'view'])->name('category.view');
            Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
            Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
            Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

            Route::get('/category-create-form', [CategoryController::class, 'form'])->name('category.create.form');
            Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');


            Route::get('/products', [ProductController::class, 'list'])->name('product.list');


            Route::get('/product/view/{id}',[ProductController::class,'view'])->name('product.view');
            Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
            Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
            Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

            Route::get('/product-create-form', [ProductController::class, 'form'])->name('product.create.form');
            Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');

            Route::get('/customer-details', [UserdetailsController::class, 'customerlist'])->name('customer.list'); 

            Route::get('/orders',[OrderController::class,'list'])->name('order.list');
            Route::get('/orders/view/{id}',[OrderController::class,'view'])->name('order.view');
            Route::post('/orders/assign/{id}',[OrderController::class,'assign'])->name('assign.delivery');

            Route::get('/employee',[EmployeeController::class,'list'])->name('employee.list');
            // Route::get('/delivery/order/assign',[EmployeeController::class,'assign'])->name('delivery.order.assign.list');
            // Route::get('/delivery-create-form', [EmployeeController::class, 'delivery'])->name('delivery.create.form');
            

            Route::get('/employee/view/{id}',[EmployeeController::class,'view'])->name('employee.view');
            Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
            Route::put('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
            Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');
            
            Route::get('/employee-add-form',[EmployeeController::class, 'form'])->name('employee.add.form');
            Route::post('/employee-store',[EmployeeController::class, 'store'])->name('employee.store');

            Route::get('/contact-us-info',[ContactController::class,'contact'])->name('contact.us.info');
            
            Route::get('/product/report',[ProductController::class,'report'])->name('product.report');
            Route::get('/product/report/search',[ProductController::class, 'reportSearch'])->name('product.report.search');

            Route::get('/order/report',[OrderController::class,'report'])->name('order.report');
            Route::get('/order/report/search',[OrderController::class, 'reportSearch'])->name('order.report.search');

            Route::get('/profile',[UserController::class,'profile'])->name('admin.profile');


            Route::get('/payment-details',[OrderController::class,'paymentDetails'])->name('payment.details');




});



