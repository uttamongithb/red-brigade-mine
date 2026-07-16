<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisteruserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;

// ===========================
// Authentication Routes
// ===========================
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Password reset routes
Route::get('password/reset/{token?}', [PasswordController::class, 'showResetForm']);
Route::post('password/email', [PasswordController::class, 'sendResetLinkEmail']);
Route::post('password/reset', [PasswordController::class, 'reset']);

// ===========================
// Public Routes (GET only)
// ===========================
Route::get('/', [MainController::class, 'index']);

// Compatibility redirects
Route::get('/main-admin/login', function(){
    return redirect('/login');
});
Route::post('/main-admin/login', [AuthController::class, 'login']);
Route::get('/admin', function(){
	return redirect('/admin/viewnews');
});

Route::get('/about', [MainController::class, 'about']);
Route::get('/research', [MainController::class, 'research']);
Route::get('/ethics', [MainController::class, 'ethics']);
Route::get('/ourteam', [MainController::class, 'ourteam']);
Route::get('/achievements', [MainController::class, 'achievements']);
Route::get('/collaborations', [MainController::class, 'collaborations']);
Route::get('/skills', [MainController::class, 'skills']);
Route::get('/education', [MainController::class, 'education']);

// New Work-related Topic Pages
Route::get('/journey-combating-sexual-violence', [MainController::class, 'journey']);
Route::get('/key-programs', [MainController::class, 'keyprograms']);
Route::get('/response-to-violence', [MainController::class, 'responseviolence']);
Route::get('/gender-sensitization-awareness', [MainController::class, 'gendersensitization']);
Route::get('/leadership-community-building', [MainController::class, 'leadershipcommunity']);
Route::get('/educational-empowerment-support', [MainController::class, 'educationalsupport']);
Route::get('/economic-upliftment', [MainController::class, 'economicupliftment']);
Route::get('/covid-19-crisis-intervention', [MainController::class, 'covid']);

Route::get('/gallery', [MainController::class, 'gallery']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/singleblog/{slug}', [MainController::class, 'singleblog']);
Route::get('/work/{slug}', [MainController::class, 'showWork']);
Route::get('/singlework/{id}', [MainController::class, 'singlework'])->where('id', '[0-9]+');
Route::get('/singleproduct/{slug}', [MainController::class, 'singleproduct']);
Route::get('/singleservice/{slug}', [MainController::class, 'singleservice']);
Route::get('/ourworkpdf', [MainController::class, 'ourworkpdf']);
Route::get('/product', [MainController::class, 'product']);
Route::get('/service', [MainController::class, 'service']);

// Public form submissions (GET to show, POST to submit)
Route::get('/donate', [MainController::class, 'donate']);
Route::post('/donate', [MainController::class, 'donate']);
Route::get('/contact', [MainController::class, 'contact']);
Route::post('/contact', [MainController::class, 'contact']);
Route::get('/enquiry', [MainController::class, 'enquiry']);

// Payment routes
Route::get('/payumoney/{id}', [MainController::class, 'payumoney'])->where('id', '[0-9]+');
Route::post('/paysuccess', [MainController::class, 'paysuccess']);
Route::post('/failure', [MainController::class, 'failure']);

// ===========================
// Admin Routes (auth + admin middleware)
// ===========================
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    /* Our Work (Events) */
    Route::get('/addnews', [ServiceController::class, 'addnews']);
    Route::post('/addnews', [ServiceController::class, 'addnews']);
    Route::get('/viewnews', [ServiceController::class, 'viewnews']);
    Route::get('/editnews/{id}', [ServiceController::class, 'editnews'])->where('id', '[0-9]+');
    Route::post('/editnews/{id}', [ServiceController::class, 'editnews'])->where('id', '[0-9]+');
    Route::post('/deletenews/{id}', [ServiceController::class, 'deletenews'])->where('id', '[0-9]+');

    /* Blog */
    Route::get('/addblog', [ServiceController::class, 'addblog']);
    Route::post('/addblog', [ServiceController::class, 'addblog']);
    Route::get('/viewblog', [ServiceController::class, 'viewblog']);
    Route::get('/editblog/{id}', [ServiceController::class, 'editblog'])->where('id', '[0-9]+');
    Route::post('/editblog/{id}', [ServiceController::class, 'editblog'])->where('id', '[0-9]+');
    Route::post('/deleteblog/{id}', [ServiceController::class, 'deleteblog'])->where('id', '[0-9]+');

    /* Slider */
    Route::get('/addslider', [ServiceController::class, 'addslider']);
    Route::post('/addslider', [ServiceController::class, 'addslider']);
    Route::get('/viewslider', [ServiceController::class, 'viewslider']);
    Route::post('/popularslider/{id}/{status}', [ServiceController::class, 'popularslider'])->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editslider/{id}', [ServiceController::class, 'editslider'])->where('id', '[0-9]+');
    Route::post('/editslider/{id}', [ServiceController::class, 'editslider'])->where('id', '[0-9]+');
    Route::post('/deleteslider/{id}', [ServiceController::class, 'deleteslider'])->where('id', '[0-9]+');
    Route::post('/multiSlider', [ServiceController::class, 'multiSlider']);

    /* Services */
    Route::get('/addservice', [ServiceController::class, 'addservice']);
    Route::post('/addservice', [ServiceController::class, 'addservice']);
    Route::get('/viewservice', [ServiceController::class, 'viewservice']);
    Route::post('/popularservice/{id}/{status}', [ServiceController::class, 'popularservice'])->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editservice/{id}', [ServiceController::class, 'editservice'])->where('id', '[0-9]+');
    Route::post('/editservice/{id}', [ServiceController::class, 'editservice'])->where('id', '[0-9]+');
    Route::post('/deleteservice/{id}', [ServiceController::class, 'deleteservice'])->where('id', '[0-9]+');
    Route::post('/multiServices', [ServiceController::class, 'multiServices']);

    /* Product */
    Route::get('/addproduct', [ServiceController::class, 'addproduct']);
    Route::post('/addproduct', [ServiceController::class, 'addproduct']);
    Route::get('/viewproduct', [ServiceController::class, 'viewproduct']);
    Route::post('/popularproduct/{id}/{status}', [ServiceController::class, 'popularproduct'])->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editproduct/{id}', [ServiceController::class, 'editproduct'])->where('id', '[0-9]+');
    Route::post('/editproduct/{id}', [ServiceController::class, 'editproduct'])->where('id', '[0-9]+');
    Route::post('/deleteproduct/{id}', [ServiceController::class, 'deleteproduct'])->where('id', '[0-9]+');
    Route::post('/multiProduct', [ServiceController::class, 'multiProduct']);

    /* Testimonial / Team */
    Route::get('/addtestimonial', [ServiceController::class, 'addtestimonial']);
    Route::post('/addtestimonial', [ServiceController::class, 'addtestimonial']);
    Route::get('/viewtestimonial', [ServiceController::class, 'viewtestimonial']);
    Route::post('/populartestimonial/{id}/{status}', [ServiceController::class, 'populartestimonial'])->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/edittestimonial/{id}', [ServiceController::class, 'edittestimonial'])->where('id', '[0-9]+');
    Route::post('/edittestimonial/{id}', [ServiceController::class, 'edittestimonial'])->where('id', '[0-9]+');
    Route::post('/deletetestimonial/{id}', [ServiceController::class, 'deletetestimonial'])->where('id', '[0-9]+');
    Route::post('/multiTestimonial', [ServiceController::class, 'multiTestimonial']);

    /* Enquiry */
    Route::get('/enquiry', [ServiceController::class, 'enquiry']);
    Route::post('/deleteEnquiry/{id}', [ServiceController::class, 'deleteEnquiry'])->where('id', '[0-9]+');

    /* Gallery */
    Route::get('/addgallery', [ServiceController::class, 'addgallery']);
    Route::post('/addgallery', [ServiceController::class, 'addgallery']);
    Route::get('/viewgallery', [ServiceController::class, 'viewgallery']);
    Route::post('/populargallery/{id}/{status}', [ServiceController::class, 'populargallery'])->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editgallery/{id}', [ServiceController::class, 'editgallery'])->where('id', '[0-9]+');
    Route::post('/editgallery/{id}', [ServiceController::class, 'editgallery'])->where('id', '[0-9]+');
    Route::post('/deletegallery/{id}', [ServiceController::class, 'deletegallery'])->where('id', '[0-9]+');
    Route::post('/multiGallery', [ServiceController::class, 'multiGallery']);

    /* Strategy Pillar */
    Route::get('/addstrategy', [ServiceController::class, 'addstrategy']);
    Route::post('/addstrategy', [ServiceController::class, 'addstrategy']);
    Route::get('/viewstrategy', [ServiceController::class, 'viewstrategy']);
    Route::get('/editstrategy/{id}', [ServiceController::class, 'editstrategy'])->where('id', '[0-9]+');
    Route::post('/editstrategy/{id}', [ServiceController::class, 'editstrategy'])->where('id', '[0-9]+');
    Route::post('/deletestrategy/{id}', [ServiceController::class, 'deletestrategy'])->where('id', '[0-9]+');
    Route::post('/statusstrategy/{id}/{status}', [ServiceController::class, 'statusstrategy'])->where(['id' => '[0-9]+', 'status' => '[0-1]']);

    /* Education Cards */
    Route::get('/addeducation', [ServiceController::class, 'addeducation']);
    Route::post('/addeducation', [ServiceController::class, 'addeducation']);
    Route::get('/vieweducation', [ServiceController::class, 'vieweducation']);
    Route::get('/editeducation/{id}', [ServiceController::class, 'editeducation'])->where('id', '[0-9]+');
    Route::post('/editeducation/{id}', [ServiceController::class, 'editeducation'])->where('id', '[0-9]+');
    Route::post('/deleteeducation/{id}', [ServiceController::class, 'deleteeducation'])->where('id', '[0-9]+');

    /* Skills Cards */
    Route::get('/addskills', [ServiceController::class, 'addskills']);
    Route::post('/addskills', [ServiceController::class, 'addskills']);
    Route::get('/viewskills', [ServiceController::class, 'viewskills']);
    Route::get('/editskills/{id}', [ServiceController::class, 'editskills'])->where('id', '[0-9]+');
    Route::post('/editskills/{id}', [ServiceController::class, 'editskills'])->where('id', '[0-9]+');
    Route::post('/deleteskills/{id}', [ServiceController::class, 'deleteskills'])->where('id', '[0-9]+');

    /* Profile */
    Route::get('/edit-profile', [DashboardController::class, 'editprofile']);
    Route::post('/updateprofile-profile', [DashboardController::class, 'updateprofile']);

    /* Categories (if used) */
    Route::get('/addcategory', [ServiceController::class, 'addcategory']);
    Route::post('/addcategory', [ServiceController::class, 'addcategory']);
    Route::get('/addsubcategory', [ServiceController::class, 'addsubcategory']);
    Route::post('/addsubcategory', [ServiceController::class, 'addsubcategory']);
    Route::get('/editsubcategory/{id}', [ServiceController::class, 'editsubcategory'])->where('id', '[0-9]+');
    Route::post('/editsubcategory/{id}', [ServiceController::class, 'editsubcategory'])->where('id', '[0-9]+');
    Route::get('/viewsubcategories', [ServiceController::class, 'viewsubcategories']);
    Route::post('/deletesubcategory/{id}', [ServiceController::class, 'deletesubcategory'])->where('id', '[0-9]+');
    Route::post('/mul_delete_subcat', [ServiceController::class, 'mul_delete_subcat']);

    /* Active Users */
    Route::get('/listing-of-active-users', [RegisteruserController::class, 'listingofactiveusers']);
});

// Admin dashboard routes (separate prefix)
Route::middleware(['auth', 'admin'])->prefix('main-admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/allmembers', [DashboardController::class, 'allmembers']);
    Route::post('/blockuser/{id}', [DashboardController::class, 'blockuser'])->where('id', '[0-9]+');
    Route::post('/activateuser/{id}', [DashboardController::class, 'activateuser'])->where('id', '[0-9]+');
});
