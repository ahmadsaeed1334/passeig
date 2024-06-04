<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LanguageController;
use App\Livewire\Admin\Abouts\AboutFeatures\AboutFeatures;
use App\Livewire\Admin\Abouts\Abouts;
use App\Livewire\Admin\Abouts\Teams\Teams;
use App\Livewire\Admin\Categories\Categories;
use App\Livewire\Admin\ContestCards\ContestCards;
use App\Livewire\Admin\Settings\Settings;
use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Footers\Footers;
use App\Livewire\Admin\Giveaway\Giveaway;
use App\Livewire\Admin\Giveaway\GiveawaySpecifications\GiveawaySpecifications;
use App\Livewire\Admin\Home\Features\Features;
use App\Livewire\Admin\Home\HeroBanner;
use App\Livewire\Admin\Home\HowToPlays;
use App\Livewire\Admin\Home\Overviews\Overviews;
use App\Livewire\Admin\Home\Supports\Supports;
use App\Livewire\Admin\Home\Testimonials\Testimonials;
use App\Livewire\Admin\Language\LanguageManager;
use App\Livewire\Admin\Logs\LogViewer;
use App\Livewire\Admin\Mail\Maileditor;
use App\Livewire\Admin\WalletManager\WalletManager;
use App\Livewire\Admin\Messenger\Messenger;
use App\Livewire\Admin\News\News;
use App\Livewire\Admin\Pages\AffiliatePartners\AffiliatePartners;
use App\Livewire\Admin\Pages\Affiliats\Affiliats;
use App\Livewire\Admin\Pages\BuyTickets\BuyTickets;
use App\Livewire\Admin\Pages\Faqs\Faqs;
use App\Livewire\Admin\Pages\Faqs\FaqsCategories;
use App\Livewire\Admin\Pages\HowItWorks\HowItWorks;
use App\Livewire\Admin\Pages\Partners\Partners;
use App\Livewire\Admin\Pages\TermsConditions\TermsConditions;
use App\Livewire\Admin\Pages\TopAffiliates\TopAffiliates;
use App\Livewire\Admin\Settings\Backups;
use App\Livewire\Admin\Staff\Permissions;
use App\Livewire\Admin\Staff\Roles;
use App\Livewire\Admin\Staff\Staff;
use App\Livewire\Admin\DepositRequests\DepositRequests;
use App\Livewire\FrontEnd\Pages\AboutSection;
use App\Livewire\FrontEnd\Pages\AffiliateSingle;
use App\Livewire\FrontEnd\Pages\Blogs;
use App\Livewire\FrontEnd\Pages\BlogsSingle;
use App\Livewire\FrontEnd\Pages\Cart;
use App\Livewire\FrontEnd\Pages\CheckOut;
use App\Livewire\FrontEnd\Contact\Contact;
use App\Livewire\FrontEnd\Contests\Contests;
use App\Livewire\FrontEnd\Contests\ContestsDetailsTwo;
use App\Livewire\FrontEnd\Contests\ContestDetailsOne;
use App\Livewire\FrontEnd\Pages\Faq;
use App\Livewire\FrontEnd\Pages\Page404;
use App\Livewire\FrontEnd\Pages\HowWork;
use App\Livewire\FrontEnd\Contests\LotteryDetails;
use App\Livewire\FrontEnd\Contests\LotteryDetailsTwo;
use App\Livewire\FrontEnd\Pages\TermsCondition;
use App\Livewire\FrontEnd\Partial\Navbar;
use App\Livewire\FrontEnd\Pages\UserPannel\UserInfo;
use App\Livewire\FrontEnd\Pages\UserPannel\UserLottery;
use App\Livewire\FrontEnd\Pages\UserPannel\UserPanel;
use App\Livewire\FrontEnd\Pages\UserPannel\UserReferral;
use App\Livewire\FrontEnd\Pages\UserPannel\UserTransaction;
use App\Livewire\FrontEnd\Partial\Header;
use App\Livewire\FrontEnd\Partial\LoginModal;
use App\Livewire\FrontEnd\Partial\SignUpModal;
use App\Livewire\FrontEnd\WinnerDetails\WinnerDetails;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\RedirectIfAdminAccessAttempt;
use App\Http\Middleware\RouteNotFoundExceptionHandler;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\EmailVerificationController;

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

// Email verification routes
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// Route::middleware('auth')->group(function () {
//     Route::get('/email/verify', function () {
//         return view('auth.verify-email');
//     })->middleware('auth')->name('verification.notice');

//     Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//         $request->fulfill();
//         return redirect('/');
//     })->middleware(['auth', 'signed'])->name('verification.verify');

//     Route::post('/email/resend', function (Request $request) {
//         $request->user()->sendEmailVerificationNotification();
//         return back()->with('message', 'Verification link sent!');
//     })->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
// });

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::impersonate();

// Route::get('/', function () {
//     return view('welcome');
// });
      /*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');
// Route::post('forgot-password', function () {
//     return view('auth.forgot-password');
// })->middleware('guest')->name('password.request');
// Route::middleware([
//     'auth',
//     'verified'
// ])->group(function () {
//     Route::get('admin/dashboard', function () {
//         return redirect()->to('admin/dashboard');
//     });

Route::middleware(['auth', 'verified' , 'admin.attempt'])->group(function () {
    // Route::get('/', Dashboard::class);
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
    Route::get('/admin/hero-banner', HeroBanner::class)->name('admin/hero-banner');
    Route::get('/admin/how-to-play', HowToPlays::class)->name('admin/how-to-play');
    Route::get('/admin/overview', Overviews::class)->name('admin/overview');
    Route::get('/admin/features', Features::class)->name('admin/features');
    Route::get('/admin/testimonials', Testimonials::class)->name('admin/testimonials');
    Route::get('/admin/supports', Supports::class)->name('admin/supports');
    Route::get('/admin/about', Abouts::class)->name('admin/about');
    Route::get('/admin/aboutfeature', AboutFeatures::class)->name('admin/aboutfeature');
    Route::get('/admin/teams', Teams::class)->name('admin/teams');
    Route::get('/admin/affiliats', Affiliats::class)->name('admin/affiliats');
    Route::get('/admin/howitwork', HowItWorks::class)->name('admin/howitwork');
    Route::get('/admin/affiliatePartners', AffiliatePartners::class)->name('admin/affiliatePartners');
    Route::get('/admin/topAffiliates', TopAffiliates::class)->name('admin/topAffiliates');
    Route::get('/admin/buyTickets', BuyTickets::class)->name('admin/buyTickets');
    Route::get('/admin/faqs', Faqs::class)->name('admin/faqs');
    Route::get('/admin/faqs/faqs-categories', FaqsCategories::class)->name('admin/faqs/faqs-categories');
    Route::get('/admin/partner', Partners::class)->name('admin/partner');
    Route::get('/admin/contestcard', ContestCards::class)->name('admin/contestcard');
    Route::get('/admin/categories', Categories::class)->name('admin/categories');
    Route::get('/admin/giveaway-specifications', GiveawaySpecifications::class)->name('admin/giveaway-specifications');
    Route::get('/admin/terms-conditions', TermsConditions::class)->name('admin/pages/terms-conditions');
    Route::get('/admin/footers', Footers::class)->name('admin/footers');
    Route::get('/admin/wallet-manager', WalletManager::class)->name('admin/wallet-manager');

    Route::get('/admin/deposit-requests', DepositRequests::class)->name('admin/deposit-requests');

    //  Giveawaye
    Route::get('/admin/giveaway', Giveaway::class)->name('admin/giveaway');
    // End  Giveawaye
});
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
    Route::fallback(function() {
        return response()->view('livewire.front-end.pages.page404', [], 404);
    });
// });
/*
|--------------------------------------------------------------------------
| Front End Routes
|--------------------------------------------------------------------------
|
*/
// Route::get('/', function () { return view('welcome');});
Route::get('/contests', Contests::class)->name('front-end/contests');
Route::get('/contest-details-one/{giveawayId?}', ContestDetailsOne::class)->name('front-end/contest-details-one');
Route::get('/contest-details-two', ContestsDetailsTwo::class)->name('front-end/contest-details-two');
Route::get('/lottery', LotteryDetails::class)->name('front-end/lottery-details');
Route::get('/lottery-detail-two', LotteryDetailsTwo::class)->name('front-end/lottery-details-two');
Route::get('/winner', WinnerDetails::class)->name('front-end/winner-details');
Route::get('/about', AboutSection::class)->name('front-end/about-section');
Route::get('/affiliate', AffiliateSingle::class)->name('front-end/affiliate-single');
Route::get('/how-work', HowWork::class)->name('front-end/how-work');
Route::get('/user-panel', UserPanel::class)->name('front-end/user-panel');
Route::get('/user-info', UserInfo::class)->name('front-end/user-info');
Route::get('/user-lottery', UserLottery::class)->name('front-end/user-lottery');
Route::get('/user-referral', UserReferral::class)->name('front-end/user-referral');
Route::get('/user-transaction', UserTransaction::class)->name('front-end/user-transaction');
Route::get('/contact', Contact::class)->name('front-end/contact');
Route::get('/blog', Blogs::class)->name('front-end/blogs');
Route::get('/blog-single', BlogsSingle::class)->name('front-end/blogs-single');
Route::get('/cart', Cart::class)->name('front-end/cart');
Route::get('/chectout', CheckOut::class)->name('front-end/check-out');
Route::get('/faq', Faq::class)->name('front-end/faq');
Route::get('/404', Page404::class)->name('front-end/page404');
Route::get('/', Navbar::class)->name('front-end/navbar');
Route::get('/signup', SignUpModal::class)->name('front-end/signup');
Route::get('/login-modal', LoginModal::class)->name('front-end/login-modal');
Route::get('/front-end/terms-condition', TermsCondition::class)->name('front-end/pages/terms-condition');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('view');
Route::get('/blog-home', [PostController::class, 'home'])->name('home');
Route::post('/email/verify', [EmailVerificationController::class, 'verify'])->name('email.verify');

// Route::get('/home', [BlogsController::class, 'home'])->name('home');
// Route::get('/post/{post}', 'BlogsController@show')->name('post.show');
// Route::get('/category/{category}', 'BlogsController@byCategory')->name('category.show');
// Route::get('/search', 'BlogsController@search')->name('search');
// Route::fallback(function() {
//     return response()->view('livewire.front-end.pages.page404', [], 404);
// });