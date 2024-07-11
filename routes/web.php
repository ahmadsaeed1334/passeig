<?php

use App\Http\Controllers\LanguageController;
use App\Livewire\Admin\Products\ProductsForm;
use App\Livewire\Admin\Blogs\Blogs;
use App\Livewire\Front\Blogs as Frontblog;
use App\Livewire\Admin\Blogs\BlogsCategories;
use App\Livewire\Admin\Settings\Settings;
use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Home\Abouts\Abouts;
use App\Livewire\Admin\Home\Banners;
use App\Livewire\Admin\Partners\Partners;
use App\Livewire\Admin\products\Products;
use App\Livewire\Front\Products as Product;
use App\Livewire\Admin\Language\LanguageManager;
use App\Livewire\Admin\Logs\LogViewer;
use App\Livewire\Admin\Mail\Maileditor;
use App\Livewire\Admin\Categories\Categories;
use App\Livewire\Admin\Messenger\Messenger;
use App\Livewire\Admin\News\News;
use App\Livewire\Admin\Products\ProductUpdate;
use App\Livewire\Admin\Services\Services;
use App\Livewire\Front\Services as FrontServices;
use App\Livewire\Admin\Settings\Backups;
use App\Livewire\Admin\Staff\Permissions;
use App\Livewire\Admin\Staff\Roles;
use App\Livewire\Admin\Staff\Staff;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Products\ProductTitles;

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\PassionsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesTitleController;
use App\Livewire\Front\AboutUs;
use App\Livewire\Front\Appointments;
use App\Livewire\Front\HomePage;
use App\Livewire\Front\SingleService;
use App\Livewire\Front\SingleBlog;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\User\UserProfile;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin/dashboard');
//     })->name('admin/dashboard');
// });
Route::impersonate();

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth',
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return redirect()->to('admin/dashboard');
    });
    // Route::get('/', Dashboard::class);
    // Route::get('/admin/dashboard', Dashboard::class)->name('admin/dashboard');
    Route::get('/admin/messenger', Messenger::class)->name('admin/messenger');
    Route::get('/admin/staff', Staff::class)->name('admin/staff');
    Route::get('/admin/backups', Backups::class)->name('admin/backups');
    Route::get('/admin/settings', Settings::class)->name('admin/settings');
    Route::get('/admin/roles', Roles::class)->name('admin/roles');
    Route::get('/admin/permissions', Permissions::class)->name('admin/permissions');
    Route::get('/admin/news', News::class)->name('admin/news');
    Route::get('/admin/language-manager', LanguageManager::class)->name('admin/language-manager');
    Route::post('store-language-data/{lang}', [LanguageController::class, 'storeLanguageData'])->name('store-language-data');
    Route::get('/admin/logss', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('admin/logss');
    Route::get('/admin/logs', LogViewer::class)->name('admin/logs');
    Route::get('/admin/mails-editor', Maileditor::class)->name('admin/mails-editor');
    Route::get('/admin/banner', Banners::class)->name('admin/banner');
    Route::get('/admin/about', Abouts::class)->name('admin/about');
    Route::get('/admin/categories', Categories::class)->name('admin/categories');
    Route::get('/admin/products', Products::class)->name('admin/products');
    Route::get('/admin/products/create', ProductsForm::class)->name('admin.products.products-form');
    Route::get('/admin/products/update/{id}', ProductUpdate::class)->name('admin.products.update');
    Route::get('/admin/partners', Partners::class)->name('admin/partners');
    Route::get('/admin/services', Services::class)->name('admin/services');
    // Route::get('/admin/blogs', Blogs::class)->name('admin/blogs');
    Route::get('/admin/blog-categories', BlogsCategories::class)->name('admin/blog-categories');
    Route::get('admin/product-titles', ProductTitles::class)->name('admin.product-titles');
    Route::get('admin/user-profile', UserProfile::class)->name('admin/user-profile');


    Route::get("/storage-link", function () {
        Artisan::call('storage:link');
        echo 'Symlink process successfully completed';
    });
    Route::get("/clear", function () {
        Artisan::call("optimize:clear");
        return "cleared";
    });
    Route::get("/optimize", function () {
        Artisan::call("optimize");
        return "optimized";
    });
    Route::get("/view-clear", function () {
        Artisan::call("view:clear");
        return "cleared";
    });
    Route::get("/view-optimize", function () {
        Artisan::call("view:optimize");
        return "optimized";
    });
    Route::get("/route-clear", function () {
        Artisan::call("route:clear");
        return "cleared";
    });
    Route::get("/route-cache", function () {
        Artisan::call("route:cache");
        return "cached";
    });
    Route::get("/config-cache", function () {
        Artisan::call("config:cache");
        return "cached";
    });
    Route::get("/view-cache", function () {
        Artisan::call("view:cache");
        return "cached";
    });
    Route::get("/clear-compiled", function () {
        Artisan::call("cache:clear");
        return "cleared";
    });
    Route::get("/config-clear", function () {
        Artisan::call("config:clear");
        return "cleared";
    });

    Route::prefix('admin')->group(function () {
        // About Us Routes
        Route::get('aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');
        Route::get('aboutus/create', [AboutUsController::class, 'create'])->name('aboutus.create');
        Route::post('aboutus', [AboutUsController::class, 'store'])->name('aboutus.store');
        Route::get('aboutus/{about}/edit', [AboutUsController::class, 'edit'])->name('aboutus.edit');
        Route::put('aboutus/{about}', [AboutUsController::class, 'update'])->name('aboutus.update');
        Route::delete('aboutus/{about}', [AboutUsController::class, 'destroy'])->name('aboutus.destroy');
        // Our Passions Routes
        Route::get('passions', [PassionsController::class, 'index'])->name('passions.index');
        Route::get('passions/create', [PassionsController::class, 'create'])->name('passions.create');
        Route::post('passions', [PassionsController::class, 'store'])->name('passions.store');
        Route::get('passions/{passion}/edit', [PassionsController::class, 'edit'])->name('passions.edit');
        Route::put('passions/{passion}', [PassionsController::class, 'update'])->name('passions.update');
        Route::delete('passions/{passion}', [PassionsController::class, 'destroy'])->name('passions.destroy');
         // Services Routes
         Route::get('our-services', [ServicesController::class, 'index'])->name('our-services.index');
         Route::get('our-services/create', [ServicesController::class, 'create'])->name('our-services.create');
         Route::post('our-services', [ServicesController::class,'store'])->name('our-services.store');
         Route::get('our-services/{service}/edit', [ServicesController::class, 'edit'])->name('our-services.edit');
         Route::put('our-services/{service}', [ServicesController::class, 'update'])->name('our-services.update');
         Route::delete('our-services/{service}', [ServicesController::class, 'destroy'])->name('our-services.destroy');
          // Services Title Routes
          Route::get('services-title/create', [ServicesController::class, 'createTitle'])->name('our-services.titlecreate');
          Route::post('services-title', [ServicesController::class, 'storeTitle'])->name('our-services.titlestore');
          Route::get('services-title/{servicesTitle}/edit', [ServicesController::class, 'editTitle'])->name('our-services.titleedit');
          Route::put('services-title/{servicesTitle}', [ServicesController::class, 'updateTitle'])->name('our-services.titleupdate');
          Route::delete('services-title/{servicesTitle}', [ServicesController::class, 'destroyTitle'])->name('our-services.titledestroy');
        // Footers Routes
          Route::get('footer', [FooterController::class, 'index'])->name('footer.index');
             Route::get('footer/create', [FooterController::class, 'create'])->name('footer.create');
             Route::post('footer', [FooterController::class, 'store'])->name('footer.store');
             Route::get('footer/{footer}/edit', [FooterController::class, 'edit'])->name('footer.edit');
             Route::put('footer/{footer}', [FooterController::class, 'update'])->name('footer.update');
             Route::delete('footer/{footer}', [FooterController::class, 'destroy'])->name('footer.destroy');

            // Appointment Routes
            Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments.index');
            Route::get('appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
            Route::post('appointments', [AppointmentController::class, 'store'])->name('appointments.store');
            Route::get('appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
            Route::put('appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
            Route::delete('appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

            Route::resource('blogs', 'Admin\BlogController');

        });


        // Front End Pages
       });
       Route::get('/aboutus', AboutUs::class)->name('about-us');
       Route::get('/products', Product::class)->name('products');
       Route::get('/blogs', Frontblog::class)->name('blogs');
       Route::get('/services', FrontServices::class)->name('services');
       Route::get('/services/{id}', SingleService::class)->name('single-service');
       Route::get('/blogs/{id}', SingleBlog::class)->name('single-blog');
       Route::get('/appointments', Appointments::class)->name('appointments');
       Route::get('/', [HomeController::class, 'index'])->name('home');
