<?php

use App\Livewire\Front\AboutUs;
use App\Livewire\Front\HomePage;
use App\Livewire\Admin\News\News;
use App\Livewire\Front\SingleBlog;
use App\Livewire\Admin\Blogs\Blogs;
use App\Livewire\Admin\Staff\Roles;
use App\Livewire\Admin\Staff\Staff;
use App\Livewire\Admin\Home\Banners;
use App\Livewire\Front\Appointments;
use App\Livewire\Front\SingleService;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Logs\LogViewer;
use App\Livewire\Admin\Mail\Maileditor;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\Settings\Backups;
use App\Livewire\Admin\User\UserProfile;
use App\Livewire\Admin\Partners\Partners;
use App\Livewire\Admin\products\Products;
use App\Livewire\Admin\Services\Services;
use App\Livewire\Admin\Settings\Settings;
use App\Livewire\Admin\Staff\Permissions;
use App\Http\Controllers\FooterController;
use App\Livewire\Admin\Home\Abouts\Abouts;

use App\Livewire\Front\Blogs as Frontblog;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Messenger\Messenger;
use App\Livewire\Front\Products as Product;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PassionsController;
use App\Http\Controllers\ServicesController;
use App\Livewire\Admin\Blogs\BlogsCategories;
use App\Livewire\Admin\Categories\Categories;
use App\Livewire\Admin\Products\ProductsForm;
use App\Http\Controllers\Auth\LoginController;
use App\Livewire\Admin\Products\ProductTitles;
use App\Livewire\Admin\Products\ProductUpdate;
use App\Http\Controllers\AppointmentController;
use App\Livewire\Admin\Language\LanguageManager;
use App\Http\Controllers\ServicesTitleController;
use App\Livewire\Front\Services as FrontServices;
use App\Http\Controllers\ServicesCategoryController;
use App\Http\Controllers\AppointmentServiceController;
use App\Livewire\Admin\AppointmentView\AppointmentView;
use App\Livewire\Front\ProfileEdit;
use App\Livewire\Front\UserAppointments;
use App\Livewire\Front\UserDashboard;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\RevSliderController;
use App\Http\Controllers\ProvideController;
use App\Http\Controllers\BestServiceController;
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



Route::middleware(['auth', 'verified', 'checkAdminAccess'])->group(function () {
    Route::get('/admin/dashboard', Dashboard::class)->name('admin/dashboard');
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
    Route::get('/admin/products/create', ProductsForm::class)->name('admin.products.products-form');
    Route::get('/admin/products/update/{id}', ProductUpdate::class)->name('admin.products.update');
    Route::get('/admin/partners', Partners::class)->name('admin/partners');
    Route::get('/admin/services', Services::class)->name('admin/services');
    Route::get('/admin/blog-categories', BlogsCategories::class)->name('admin/blog-categories');
    Route::get('admin/product-titles', ProductTitles::class)->name('admin.product-titles');
    Route::get('admin/user-profile', UserProfile::class)->name('admin/user-profile');
    Route::get('admin/appointments-view', AppointmentView::class)->name('admin/appointments-view');

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
        Route::post('our-services', [ServicesController::class, 'store'])->name('our-services.store');
        Route::get('our-services/{service}/edit', [ServicesController::class, 'edit'])->name('our-services.edit');
        Route::put('our-services/{service}', [ServicesController::class, 'update'])->name('our-services.update');
        Route::delete('our-services/{service}', [ServicesController::class, 'destroy'])->name('our-services.destroy');
        Route::get('/admin/services', Services::class)->name('admin.services');
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

        // Route::resource('blogs', 'Admin\BlogController');
        Route::get('/services/preview', [ServicesController::class, 'preview'])->name('single-service-preview');

        // Blogs Routes
        Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
        Route::get('blogs/titles/create', [BlogController::class, 'createTitle'])->name('blogs.createTitle');
        Route::post('blogs/titles', [BlogController::class, 'storeTitle'])->name('blogs.storeTitle');
        Route::get('blogs/titles/{id}/edit', [BlogController::class, 'editTitle'])->name('blogs.editTitle');
        Route::put('blogs/titles/{id}', [BlogController::class, 'updateTitle'])->name('blogs.updateTitle');
        Route::delete('blogs/titles/{id}', [BlogController::class, 'destroyTitle'])->name('blogs.destroyTitle');

        // Services Category Routes
        Route::get('services-category', [ServicesCategoryController::class, 'index'])->name('services-category.index');
        Route::get('services-category/create', [ServicesCategoryController::class, 'create'])->name('services-category.create');
        Route::post('services-category', [ServicesCategoryController::class, 'store'])->name('services-category.store');
        Route::get('services-category/{category}/edit', [ServicesCategoryController::class, 'edit'])->name('services-category.edit');
        Route::put('services-category/{category}', [ServicesCategoryController::class, 'update'])->name('services-category.update');
        Route::delete('services-category/{category}', [ServicesCategoryController::class, 'destroy'])->name('services-category.destroy');

        // Appointment Service Routes
        Route::get('appointment-services', [AppointmentServiceController::class, 'index'])->name('appointment-services.index');
        Route::get('appointment-services/create', [AppointmentServiceController::class, 'create'])->name('appointment-services.create');
        Route::post('appointment-services', [AppointmentServiceController::class, 'store'])->name('appointment-services.store');
        Route::get('appointment-services/{service}/edit', [AppointmentServiceController::class, 'edit'])->name('appointment-services.edit');
        Route::put('appointment-services/{service}', [AppointmentServiceController::class, 'update'])->name('appointment-services.update');
        Route::delete('appointment-services/{service}', [AppointmentServiceController::class, 'destroy'])->name('appointment-services.destroy');

        // Products Routes
        Route::get('products', [ProductController::class, 'index'])->name('products.index');
        Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('products', [ProductController::class, 'store'])->name('products.store');
        Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

        // Products Title Routes
        Route::get('products/create-title', [ProductController::class, 'createTitle'])->name('products.createTitle');
        Route::post('products/store-title', [ProductController::class, 'storeTitle'])->name('products.storeTitle');
        Route::get('products/edit-title/{id}', [ProductController::class, 'editTitle'])->name('products.editTitle');
        Route::put('products/update-title/{id}', [ProductController::class, 'updateTitle'])->name('products.updateTitle');
        Route::delete('products/destroy-title/{id}', [ProductController::class, 'destroyTitle'])->name('products.destroyTitle');
        //    Route::get('/appointments-book', AppointmentBook::class)->name('appointments');

               Route::get('subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');

               Route::resource('rev_slider', RevSliderController::class);

Route::prefix('experts')->group(function () {
    Route::get('/', [ExpertController::class, 'index'])->name('experts.index');

    // Expert Title
    Route::get('create-title', [ExpertController::class, 'createTitle'])->name('experts.createTitle');
    Route::post('store-title', [ExpertController::class, 'storeTitle'])->name('experts.storeTitle');
    Route::get('edit-title/{expertTitle}', [ExpertController::class, 'editTitle'])->name('experts.editTitle');
    Route::put('update-title/{expertTitle}', [ExpertController::class, 'updateTitle'])->name('experts.updateTitle');

    // Expert
    Route::get('create-expert', [ExpertController::class, 'createExpert'])->name('experts.createExpert');
    Route::post('store-expert', [ExpertController::class, 'storeExpert'])->name('experts.storeExpert');
    Route::get('edit-expert/{expert}', [ExpertController::class, 'editExpert'])->name('experts.editExpert');
    Route::put('update-expert/{expert}', [ExpertController::class, 'updateExpert'])->name('experts.updateExpert');
    Route::delete('delete-expert/{expert}', [ExpertController::class, 'destroyExpert'])->name('experts.destroyExpert');
});
Route::prefix('healths')->group(function () {
    Route::get('/', [HealthController::class, 'index'])->name('healths.index');

    // Health Title
    Route::get('create-title', [HealthController::class, 'createTitle'])->name('healths.createTitle');
    Route::post('store-title', [HealthController::class, 'storeTitle'])->name('healths.storeTitle');
    Route::get('edit-title/{healthTitle}', [HealthController::class, 'editTitle'])->name('healths.editTitle');
    Route::put('update-title/{healthTitle}', [HealthController::class, 'updateTitle'])->name('healths.updateTitle');

    // Health
    Route::get('create-health', [HealthController::class, 'createHealth'])->name('healths.createHealth');
    Route::post('store-health', [HealthController::class, 'storeHealth'])->name('healths.storeHealth');
    Route::get('edit-health/{health}', [HealthController::class, 'editHealth'])->name('healths.editHealth');
    Route::put('update-health/{health}', [HealthController::class, 'updateHealth'])->name('healths.updateHealth');
    Route::delete('delete-health/{health}', [HealthController::class, 'destroyHealth'])->name('healths.destroyHealth');
});
               Route::prefix('provides')->group(function () {
                Route::get('/', [ProvideController::class, 'index'])->name('provides.index');
                Route::get('create', [ProvideController::class, 'create'])->name('provides.create');
                Route::post('store', [ProvideController::class, 'store'])->name('provides.store');
                Route::get('edit/{provide}', [ProvideController::class, 'edit'])->name('provides.edit');
                Route::put('update/{provide}', [ProvideController::class, 'update'])->name('provides.update');
            });
            Route::prefix('best_services')->group(function () {
                Route::get('/', [BestServiceController::class, 'index'])->name('best_services.index');
                Route::get('create', [BestServiceController::class, 'create'])->name('best_services.create');
                Route::post('store', [BestServiceController::class, 'store'])->name('best_services.store');
                Route::get('edit/{bestService}', [BestServiceController::class, 'edit'])->name('best_services.edit');
                Route::put('update/{bestService}', [BestServiceController::class, 'update'])->name('best_services.update');
            });
        });
    });
        // Route::get('/download', [AboutUsController::class, 'showDownloadPage']);

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

// Front End Pages




Route::get('/', HomePage::class)->name('home-page');
Route::get('/aboutus', AboutUs::class)->name('about-us');
Route::get('/products', Product::class)->name('products');
Route::get('/blogs', Frontblog::class)->name('blogs');
Route::get('/services', FrontServices::class)->name('services');
Route::get('/services/{id}', SingleService::class)->name('single-service');
Route::get('/blogs/{id}', SingleBlog::class)->name('single-blog');
Route::get('/appointments', Appointments::class)->name('appointments');
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/profile', ProfileEdit::class)->name('profile.edit');
    Route::get('/user-appointments', UserAppointments::class)->name('user-appointments');
    Route::get('/user-dashboard', UserDashboard::class)->name('user-dashboard');
    Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');
    // Route::post('/subscribe', [HomeController::class, 'store'])->name('subscribe');

});

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');
});
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
});

// Email Verification Routes
Route::middleware('auth')->group(function () {
    Route::get('/custom/verify', [VerificationController::class, 'show'])->name('custom.verification.notice');
    Route::post('/custom/verify', [VerificationController::class, 'verify'])->name('custom.verification.verify');
    Route::post('/custom/resend', [VerificationController::class, 'resend'])->name('custom.verification.resend');
});

// Password Reset Routes
Route::middleware('guest')->group(function () {
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request.form');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email.form');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update.form');
});
