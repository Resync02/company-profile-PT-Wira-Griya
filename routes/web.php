
<?php

use App\Http\Controllers\ContactInquiryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

    Route::get('/', function () {return view('pages.home');})->name('home');
    Route::view('/about-us', 'pages.about')->name('about');
    Route::view('/news', 'pages.news')->name('news');
    Route::view('/contact-us', 'pages.contact')->name('contact');
    Route::post('/contact-us', [ContactInquiryController::class, 'store'])->middleware('throttle:5,1')->name('contact.submit');
    // News listing page.
    // Each news detail is stored as its own Blade file:
    // resources/views/pages/news/{slug}.blade.php
    Route::get('/news/{slug}', function (string $slug) {
        $view = 'pages.news.' . $slug;

        abort_unless(View::exists($view), 404);

        return view($view);
    })
        ->where('slug', '[a-z0-9]+(?:-[a-z0-9]+)*')
        ->name('news.show');

    // Upcoming Events listing page.
    Route::view('/events', 'pages.upcoming-events')->name('events.index');

    // Each event detail is stored as its own Blade file:
    // resources/views/pages/upcoming-events/{slug}.blade.php
    Route::get('/events/{slug}', function (string $slug) {
        $view = 'pages.upcoming-events.' . $slug;

        abort_unless(View::exists($view), 404);

        return view($view);
    })
        ->where('slug', '[a-z0-9]+(?:-[a-z0-9]+)*')
        ->name('events.show');
    Route::view('/product', 'pages.product')->name('product.index');
    Route::view('/product/coating-painting','pages.main-product.coating-painting')->name('product.coating-painting');
    Route::view('/product/coating-painting/robotic-painting','pages.main-product.sub-product.coating-painting.robotic-painting')->name('product.coating-painting.robotic-painting');
    Route::view('/product/coating-painting/hand-guns', 'pages.main-product.sub-product.coating-painting.hand-guns')->name('product.coating-painting.hand-guns');
    Route::view('/product/coating-painting/automatic-guns', 'pages.main-product.sub-product.coating-painting.automatic-guns')->name('product.coating-painting.automatic-guns');
    Route::view('/product/coating-painting/powder-coating', 'pages.main-product.sub-product.coating-painting.powder-coating')->name('product.coating-painting.powder-coating');
    Route::view('/product/coating-painting/paint-supply', 'pages.main-product.sub-product.coating-painting.paint-supply')->name('product.coating-painting.paint-supply');
    Route::view('/product/coating-painting/mixing-color-change', 'pages.main-product.sub-product.coating-painting.mixing-color-change')->name('product.coating-painting.mixing-color-change');

    Route::view('/product/hoist-crane','pages.main-product.hoist-crane')->name('product.hoist-crane');
    Route::view('/product/hoist-crane/electric-chain-hoist','pages.main-product.sub-product.hoist-crane.electric-chain-hoist')->name('product.hoist-crane.electric-chain-hoist');
    Route::view('/product/hoist-crane/heavy-duty-hoist','pages.main-product.sub-product.hoist-crane.heavy-duty-hoist')->name('product.hoist-crane.heavy-duty-hoist');
    Route::view('/product/hoist-crane/wire-rope-hoist','pages.main-product.sub-product.hoist-crane.wire-rope-hoist')->name('product.hoist-crane.wire-rope-hoist');

    Route::view('/product/industrial-machinery','pages.main-product.industrial-machinery')->name('product.industrial-machinery');
    Route::view('/product/industrial-machinery/powder-material-handling', 'pages.main-product.sub-product.industrial-machinery.powder-material-handling')->name('product.industrial-machinery.powder-material-handling');
    Route::view('/product/industrial-machinery/tube-filling-sealing', 'pages.main-product.sub-product.industrial-machinery.tube-filling-sealing')->name('product.industrial-machinery.tube-filling-sealing');
    Route::view('/product/industrial-machinery/packaging-solutions', 'pages.main-product.sub-product.industrial-machinery.packaging-solutions')->name('product.industrial-machinery.packaging-solutions');
    Route::view('/product/industrial-machinery/mixing-process-system', 'pages.main-product.sub-product.industrial-machinery.mixing-process-system')->name('product.industrial-machinery.mixing-process-system');
    Route::view('/product/industrial-machinery/solid-dosage-system', 'pages.main-product.sub-product.industrial-machinery.solid-dosage-system')->name('product.industrial-machinery.solid-dosage-system');
    Route::view('/product/industrial-machinery/liquid-filling-capping', 'pages.main-product.sub-product.industrial-machinery.liquid-filling-capping')->name('product.industrial-machinery.liquid-filling-capping');
    Route::view('/product/industrial-machinery/labeling-end-of-line-automation', 'pages.main-product.sub-product.industrial-machinery.labeling-end-of-line-automation')->name('product.industrial-machinery.labeling-end-of-line-automation');

    Route::view('/product/solvent-cleaner','pages.main-product.solvent-cleaner')->name('product.solvent-cleaner');
    Route::view('/product/odor-control','pages.main-product.odor-control')->name('product.odor-control');