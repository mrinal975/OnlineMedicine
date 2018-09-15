<?php

Route::get('/','WellcomeController@index');
Route::get('/cat','WellcomeController@category');
Route::get('/about','WellcomeController@about');
Route::get('/news','WellcomeController@news');
Route::get('/contact','WellcomeController@contact');
Route::get('/how-to-order','WellcomeController@howorder');
Route::get('/policy','WellcomeController@policy');
Route::get('/prescription','WellcomeController@prescription');


Route::get('/login','WellcomeController@login');

//Cart Route
Route::get('/cart/add','CartController@addToCart');
Route::get('/cart/show', 'CartController@showCart');
Route::get('/cart/delete/{id}', 'CartController@deleteCartProduct');
Route::get('/cartQuantityUpdate/{id}', 'CartController@QuantityUpdate');

Route::get('/session','PaymentController@session_check');

//checkout
Route::get('/checkout','CheckoutController@index');

//customer register
Route::post('/checkout/sign-up','CheckoutUser@customerRegister');
Route::post('/checkout/sign-in','CheckoutUser@customerLogin');



//shipping information Route
Route::get('/checkout/shipping','ShippingController@showShippingForm');
Route::post('/checkout/save-shipping','ShippingController@saveShipingInfo');

//Payment Route
Route::get('/checkout/payment','PaymentController@showPaymentForm');
Route::post('/checkout/save-payment','PaymentController@saveOrderInfo');
Route::get('/checkout/my-home','PaymentController@paymentConfired');

//prescription-upload Route
Route::get('/prescription-upload','PrescriptionController@prescription')->name('prescription-upload');
Route::post('/prescription','PrescriptionController@uploadprescripton')->name('prescription');
Route::get('/user/Prescription','PrescriptionController@userPrescription')->name('');


//product Single Page Route
Route::get('/single-Product/{id}','SingleProductController@showSingleProduct')->name('prescription-upload');
//Category
Route::get('/category/{id}','CategoryController@viewCategory');
//subcategory
Route::get('/category/{cat}/subcategory/{subcat}','SingleProductController@viewSubCategory');

//AdminPanel  Authentication
Route::get('adminpanel/login','Admin\LoginController@showLoginForm')->name('adminpanel.login');
Route::POST('admin/login','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset')->name('admin.password.request');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::POST('adminpanel/signout','Admin\LoginController@logout')->name('adminpanel.signout');
//
Route::get('/home','LoginController@home')->name('home');

Auth::routes();





Route::group(['middleware' =>'auth'], function () {
/// Payment For purchase
    Route::get('/payment/complete/{id}','PaymentVerificationController@finalpaymentform')->name('finalpayment');
    Route::post('/payment/complete','PaymentVerificationController@finalpaymentstore');
    // Order of customer to watch Customer 
    Route::get('/user/order','WellcomeController@viewCustomerOrder');
    //customer receive Product
    Route::get('/product/receive/{id}','PaymentVerificationController@receiveProduct');
    Route::get('/view/orderdetails/{id}','PaymentVerificationController@orderdetails');
    
});


Route::group(array('prefix' =>'/adminpanel'),function() {
    Route::group(['middleware' => ['auth:admin']], function () {
//Admin Panel Home Page
        Route::get('/','WellcomeController@admin')->name('adminpanel');

//Category Route
        Route::get('/category/add', 'CategoryController@createCategory');
        Route::post('/category/save','CategoryController@storeCategory');
        Route::get('/category/manage','CategoryController@manageCategory');        
        Route::get('/category/edit/{id}','CategoryController@editCategory');
        Route::post('/category/update','CategoryController@updateCategory');
        Route::get('/category/delete/{id}','CategoryController@deleteCategory');

//Sub-category Processing Route
        Route::post('/data/users/catgory','CategoryController@processcategory')->name('dataProcessingcategory');


//sub-category Route
        Route::get('/sub-category/add', 'SubcategoryController@createSubCategory');
        Route::post('/sub-category/save','SubcategoryController@storeSubCategory');
        Route::get('/sub-category/manage','SubcategoryController@manageSubCategory');

        Route::get('/sub-category/edit/{id}','SubcategoryController@editSubCategory');
        Route::post('/sub-category/update','SubcategoryController@updateSubCategory');
        Route::get('/sub-category/delete/{id}','SubcategoryController@deleteSubCategory');
        //Sub-category Processing Route
        Route::post('/data/users','SubcategoryController@processSubcat')->name('dataProcessing');


//Product Route
        Route::get('/product/add','ProductController@createProduct');
        Route::post('/product/save','ProductController@storeProduct');
        Route::get('/product/manage','ProductController@manageProduct');
        Route::get('/product/edit/{id}','ProductController@editProduct');
        Route::get('/product/view/{id}','ProductController@viewProduct');
        Route::post('/product/update','ProductController@updateProduct');
        Route::get('/product/delete/{id}','ProductController@deleteProduct');
//Product Processing Route
        Route::post('/data/product','ProductController@processProduct')->name('dataProcessingProduct');



//Order Route
        Route::get('/new/order','OrderManage@viewnewOrder')->name('/new/order');
        Route::get('/order/delivered/{id}','OrderManage@deliveringOrder');
        Route::get('/delivered/order','OrderManage@devilered');
        Route::get('/order/delete/{id}','OrderManage@deleteorder');
        Route::get('/order/delete/delever/page/{id}','OrderManage@cancelorder');
        Route::get('/order/delete/delever/{id}','OrderManage@cancelsell');
        Route::get('/order/delivered/view/{id}','OrderManage@viewproductinformation');
        Route::get('/order/detailview/{id}','OrderManage@detailorderview');
        Route::get('/sell/detailview/{id}','OrderManage@detailsellview');

        //Order Status
        Route::get('/dailysell','OrderManage@datewisedata')->name('o');

//new prescription
        Route::get('/new/prescription','PrescriptionController@viewnewprescription');
        Route::get('/Manage/prescription','PrescriptionController@manageprescription');
        Route::get('/prescription/delete/{id}','PrescriptionController@deleteprescription');
        Route::get('/prescription/view/{id}','PrescriptionController@singleprescriptionview');

//prescription Processing Route
        Route::post('/data/prescription','PrescriptionController@processprescription')->name('dataProcessingPrescription');
        

//FrontEnd Information
        Route::get('/new/information','informationController@createNewInformation');
        Route::post('/new/information/store','informationController@storeNewInformation');
        Route::get('/Manage/information','informationController@manageInformation');
        Route::get('/information/Manage/hideorshow/{id}','informationController@changestatus');
        Route::get('/information/delete/{id}','informationController@deleteInfo');

//Gateway Information
        Route::get('/new/gateway','GatewayController@createNewInformation');
        Route::post('/new/gateway/store','GatewayController@storeNewInformation');
        Route::get('/manage/gateway','GatewayController@manageInformation');
        Route::get('/gateway/hideorshow/{id}','GatewayController@changestatus');
        Route::get('/gateway/delete/{id}','GatewayController@deleteInfo');


        Route::get('/home', function () {
            return view('admin.home');
        });
        Route::get('/aa', function () {
            return 'baba loknath';
        });


    });
});

Route::get('/home', 'HomeController@index')->name('home');
//Auto Complete
Route::post('/autocomplete/fetch','AutocompleteController@fetch')->name('autocomplete.fetch');

Route::get('/NotFound','WellcomeController@pagenotfound')->name('NotFound');
//
Route::get('/uniquerandom', 'WellcomeController@uniquerandom')->name('home');