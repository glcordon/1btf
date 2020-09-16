<?php



Route::get('/', 'WelcomeController@index');
Auth::routes();
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Tests
    Route::resource('tests', 'TestController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    Route::get('billing', 'BillingController@index')->name('billing.index');
    Route::post('billing/checkout', 'BillingController@checkout')->name('billing.checkout');
    Route::post('billing/check-discount', 'BillingController@checkDiscount')->name('billing.checkDiscount');
    Route::get('cancel', 'BillingController@cancel')->name('billing.cancel');
    Route::get('resume', 'BillingController@resume')->name('billing.resume');
    Route::get('payment_methods/default/{paymentMethod}', 'PaymentMethodController@markDefault')->name('payment_methods.default');
    Route::resource('payment_methods', 'PaymentMethodController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
Route::get('qrcode', function () {
    $url = 'http://localhost/' . auth()->user()->secondary_id;
    return QrCode::size(450)
        ->backgroundColor(255, 255, 255)
        ->generate($url);
});

Route::get('/qr-scan/{qr?}','QrScanController@index')->name('qrscan');
Route::post('/submit-story','QrScanController@add')->name('qrscan');
