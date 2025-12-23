<?php

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\backend\ActivitiesController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CertificateController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\LogoPartnerController;
use App\Http\Controllers\backend\NewsBlogController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\StrategicPartnersController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\frontend\ClientController;
use App\Http\Controllers\LocalLangController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

/*================================================================================
                                @@ Route Fronted
=================================================================================*/
Route::get("/", [ClientController::class, 'index'])->name('home');
Route::get("/about", [ClientController::class, 'about'])->name('about');
Route::get('/prodcut', [ClientController::class,'product'])->name('product');
Route::get('/team', [ClientController::class,'team'])->name('team');
Route::get('/activities', [ClientController::class,'activities'])->name('activities');
Route::get('/event', [ClientController::class,'event'])->name('event');
Route::get('/news', [ClientController::class,'news'])->name('news');
Route::get('/publication', [ClientController::class,'publication'])->name('publication');
Route::get('/career', [ClientController::class,'career'])->name('career');

// Send Message to telegram
Route::post('/send-order', [ClientController::class, 'sendOrder'])->name('send.order');
// Local for switch language
Route::get('locale/{locale}', [LocalLangController::class, 'setLocale'])->name('locale');

Route::get('/contact', [ClientController::class,'contact'])->name('contact');
// Give user can download pdf or get pdf
Route::get('/download-pdf', function () {
    $file = storage_path('app/public/slider-2.pdf');
    return response()->download($file, 'kaksekor.pdf');
})->name('download.pdf');
  Route::get('/product/{id}/pricing-rules', [ProductController::class, 'getPricingRules']);

/*================================================================================
                                @@ Route Backend
=================================================================================*/
//=========================================== Profile View and Update=============================
Route::get('/admin/profile', [AuthController::class,'profile'])->name('profile')->middleware('auth');
Route::post('/admin/submit_profile',[AuthController::class,'submitUpdateUser'])->name('submit.update.profile');
// ==== Route Loing and Register ====
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/submit/register', [AuthController::class,'submitRegister'])->name('submit.register');
Route::post('/submit/login', [AuthController::class,'submitLogin'])->name('submit.login');
// ==== Route Logout ====
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/submit/logout',[AuthController::class,'submitLogout'])->name('logout.submit');


Route::middleware(['auth'])->group(function(){

     
    // ============================================ Admin dashboard ==============================================================
    Route::get('/admin', [AdminController::class,'admin'])->name('admin');

    // ============================================ LOGO ==============================================================
    Route::get('/admin/logo', [LogoPartnerController::class,'addLogo'])->name('logo');
    Route::get('/view/logo', [LogoPartnerController::class,'viewLogo'])->name('view_logo');
    Route::post('/submit/logo', [LogoPartnerController::class,'submitLogo'])->name('submit.logo');
    // Update logo
    Route::get('/update/logo/{id}', [LogoPartnerController::class,'updateLogo'])->name('update.logo');
    Route::post('/submit/update', [LogoPartnerController::class,'submitUpdateLogo'])->name('update.submitLogo');
    // remove logo
    Route::post('/remove', [LogoPartnerController::class,'removeLogo'])->name('remove');

    // ============================================ Strategic Partners LOGO =============================================
    Route::get('/admin/strategic', [StrategicPartnersController::class,'addStrategic'])->name('strategic');
    Route::get('/view/strategic', [StrategicPartnersController::class,'viewStrategic'])->name('view_strategic');
    Route::post('/submit/strategic', [StrategicPartnersController::class,'submitStrategic'])->name('submit.strategic');
    // Update Strategic
    Route::get('/update/strategic/{id}', [StrategicPartnersController::class,'updateStrategic'])->name('update.strategic');
    Route::post('/certi/update', [StrategicPartnersController::class,'submitUpdateStrategic'])->name('update.submitStrategic');
    // remove Strategic
    Route::post('/remove/strategic', [StrategicPartnersController::class,'removeStrategic'])->name('remove.strategic');

    // ============================================ @@ Certificate ===================================================
    Route::get('/add/certi', [CertificateController::class,'addCerti'])->name('add.certi');
    Route::get('/view/certi', [CertificateController::class,'viewCertifi'])->name('view.certi');
    Route::post('/submit/certi', [CertificateController::class,'submitCertificate'])->name('submit.certi');
    // Update Certificate
    Route::get('/update/certificate/{id}', [CertificateController::class,'updateCertificate'])->name('update.certificate');
    Route::post('/update/submit_certifi', [CertificateController::class,'submitToUpdateCertificate'])->name('submit.update.certificate');
    // Romove Certificate
    Route::post('/remove/certificate', [CertificateController::class,'removeCertificate'])->name('remove.certificate');

    // ============================================ @@ Our Team ===================================================
    Route::get('/add/ourteam',[TeamController::class,'addOurTeam'])->name('add_team');
    Route::get('/view/ourteam', [TeamController::class,'viewOurTeam'])->name('view_team');
    Route::post('/submit/addteam',[TeamController::class,'submitAddOurTeam'])->name('submit.add.team');
    // Update our team
    Route::get('/update/team/{id}', [TeamController::class,'updateTeam'])->name('update.team');
    Route::post('/submit/updateteam', [TeamController::class,'submitToUpdateTeam'])->name('submit.update.team');
    // Remove our team
    Route::post('/remove/our_team', [TeamController::class,'submitToRemoveTeam'])->name('remove.our.team');
    // =========================================== @@ Activities =============================================================
    Route::get('/add/activities', [ActivitiesController::class,'addActivities'])->name('add.activities');
    Route::get('/view/activities', [ActivitiesController::class,'viewActivities'])->name('view_activities');
    Route::post('/admin/activities/add', [ActivitiesController::class, 'submitToAddActivities'])->name('admin.submitToAddactivities');
    // Edite activities
    Route::get('/edit/activities/{id}', [ActivitiesController::class,'editActivities'])->name('edit.activities');
    Route::post('edit/activities', [ActivitiesController::class,'submitToEditActivities'])->name('submit.edit.activities');
    // Remove activities
    Route::post('/remove/activities', [ActivitiesController::class,'submitToRemoveActivities'])->name('remove.submit.activities');
    // =========================================== @@ Event =============================================================
    Route::get('/add/event', [EventController::class,'addEvent'])->name('add.event');
    Route::get('/view/event', [EventController::class,'viewEvent'])->name('view_event');
    Route::post('/admin/event/add', [EventController::class, 'submitToAddeEvent'])->name('admin.submitToAddevent');
    // Edite event
    Route::get('/edit/event/{id}', [EventController::class,'editEvent'])->name('edit.event');
    Route::post('edit/event', [EventController::class,'submitToEditEvent'])->name('submit.edit.event');
    // Remove event
    Route::post('/remove/event', [EventController::class,'submitToRemoveEvent'])->name('remove.submit.event');
    // =========================================== @@ News =============================================================
    Route::get('/add/news', [NewsBlogController::class,'addNews'])->name('add.news');
    Route::get('/view/news', [NewsBlogController::class,'viewNews'])->name('view_news');
    Route::post('/admin/news/add', [NewsBlogController::class, 'submitToAddNews'])->name('admin.submitToAddNews');
    // Edite News
    Route::get('/edit/news/{id}', [NewsBlogController::class,'editNews'])->name('edit.news');
    Route::post('edit/news', [NewsBlogController::class,'submitToEditNews'])->name('submit.edit.news');
    // Remove news
    Route::post('/remove/news', [NewsBlogController::class,'submitToRemoveNews'])->name('remove.submit.news');

    // =========================================== Product =============================================================
    Route::get('/admin/product', [ProductController::class,'addProduct'])->name('addpro');
    Route::get('/product/view', [ProductController::class,'viewProduct'])->name('view_product');
    Route::post('/submit/add_product', [ProductController::class,'submitToAddProduct'])->name('submit.add.product');
    // update product
    Route::get('/edit/product/{id}', [ProductController::class,'editProduct'])->name('edit.product');
    Route::post('/submit/product', [ProductController::class,'submitToUpdateProduct'])->name('submit.update.product');
    // Remove product
    Route::post('/remove/product', [ProductController::class,'submitToRemoveProduct'])->name('remove.product');
  
});


// Send messag to telegram
// Route::post('/send-order', [OrderController::class, 'sendOrder'])->name('send.order');