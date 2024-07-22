<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/bolt', function () {
    return view('bolt');
});
Route::get('/mygarage/bolt', function () {
    return view('bolt');
});

Route::get('/drive', function () {
    return view('drive');
});
Route::get('/price-comparison', function () {
    return view('price_comparison');
});


// USE CASES
Route::get('/car-subscription', function () {
    return view('use_cases.car_subscription');
});
Route::get('/fleet-management', function () {
    return view('use_cases.fleet_management');
});
Route::get('/workshop-management', function () {
    return view('use_cases.workshop_management');
});
Route::get('/auto-financing', function () {
    return view('use_cases.auto_financing');
});
Route::get('/logistics-supply-chain', function () {
    return view('use_cases.logistics_supply_chain');
});

// Route::get('/lending', function () {
//     return view('use_cases.lending');
// });
// Route::get('/logistics-and-delivery', function () {
//     return view('use_cases.logistics_delivery');
// });
// Route::get('/insurance', function () {
//     return view('use_cases.insurance');
// });


// PRODUCTS
Route::get('/online-tracking', function () {
    return view('products.online_tracking');
});
Route::get('/geo-fence', function () {
    return view('products.geo_fence');
});
Route::get('/historical-data', function () {
    return view('products.historical_data');
});
Route::get('/alerts', function () {
    return view('products.alerts');
});
Route::get('/speed-monitoring', function () {
    return view('products.speed_monitoring');
});
Route::get('/reporting-and-analytics', function () {
    return view('products.reporting_analytics');
});

// SERVICES
Route::get('/integrated-payment-services', function () {
    return view('services.integrated_payment_services');
});
Route::get('/iot-telemetry-services', function () {
    return view('services.iot_telemetry_services');
});
Route::get('/cross-integration', function () {
    return view('services.cross_integration');
});



// CONTACT US
Route::get('/contact-us', function () {
    return view('contact_us');
}); 
Route::post('/contact-us', [ContactController::class, 'submit'])->name('submit.contact');


Route::view('/api','index');
Route::view('error','error');
Route::view('authenticate','authentication');


// BLOG 
Route::view('/rent-it-out-from-monday-friday', 'blog-posts/rent_it_out_from_monday_friday');
Route::view('/premium-car-subscription-model', 'blog-posts/premium_car_subscription_model');
Route::view('/earn-extra-from-your-car', 'blog-posts/earn_extra_from_your_car');
Route::view('/earn-leasing-out-your-vehicle', 'blog-posts/earn_leasing_out_your_vehicle');


// AUTO FINANCE
Route::view('/hire-purchase-for-mini-buses', 'auto-finance-posts/hire_purchase_for_mini_buses');
Route::view('/growth-for-car-dealership', 'auto-finance-posts/growth_for_car_dealership');
Route::view('/why-sell-your-old-vehicle', 'auto-finance-posts/why_sell_your_old_vehicle');