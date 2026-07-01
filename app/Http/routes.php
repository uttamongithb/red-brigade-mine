<?php
// ===========================
// Authentication Routes
// ===========================
// Login routes (registration disabled for security — admin-only site)
Route::get('/login', 'Auth\AuthController@showLoginForm');
Route::post('/login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');

// Password reset routes
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

// ===========================
// Public Routes (GET only)
// ===========================
Route::get('/', 'MainController@index');

// Compatibility redirects
Route::get('/main-admin/login', function(){
    return redirect('/login');
});
Route::post('/main-admin/login', 'Auth\AuthController@login');
Route::get('/admin', function(){
	return redirect('/admin/viewnews');
});

Route::get('/about', 'MainController@about');
Route::get('/research', 'MainController@research');
Route::get('/ethics', 'MainController@ethics');
Route::get('/ourteam', 'MainController@ourteam');
Route::get('/achievements', 'MainController@achievements');
Route::get('/collaborations', 'MainController@collaborations');
Route::get('/skills', 'MainController@skills');
Route::get('/event', 'MainController@event');
Route::get('/previous-work', 'MainController@previouswork');
Route::get('/upcoming-work', 'MainController@upcomingwork');
Route::get('/education', 'MainController@education');
Route::get('/gallery', 'MainController@gallery');
Route::get('/blog', 'MainController@blog');
Route::get('/singleblog/{slug}', 'MainController@singleblog');
Route::get('/singlework/{id}', 'MainController@singlework')->where('id', '[0-9]+');
Route::get('/singleproduct/{slug}', 'MainController@singleproduct');
Route::get('/singleservice/{slug}', 'MainController@singleservice');
Route::get('/ourworkpdf', 'MainController@ourworkpdf');
Route::get('/product', 'MainController@product');
Route::get('/service', 'MainController@service');

// Public form submissions (GET to show, POST to submit)
Route::get('/donate', 'MainController@donate');
Route::post('/donate', 'MainController@donate');
Route::get('/contact', 'MainController@contact');
Route::post('/contact', 'MainController@contact');
Route::get('/enquiry', 'MainController@enquiry');

// Payment routes
Route::get('/payumoney/{id}', 'MainController@payumoney')->where('id', '[0-9]+');
Route::post('/paysuccess', 'MainController@paysuccess');
Route::post('/failure', 'MainController@failure');

// ===========================
// Admin Routes (auth + admin middleware)
// ===========================
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    /* Our Work (Events) */
    Route::get('/addnews', 'ServiceController@addnews');
    Route::post('/addnews', 'ServiceController@addnews');
    Route::get('/viewnews', 'ServiceController@viewnews');
    Route::get('/editnews/{id}', 'ServiceController@editnews')->where('id', '[0-9]+');
    Route::post('/editnews/{id}', 'ServiceController@editnews')->where('id', '[0-9]+');
    Route::post('/deletenews/{id}', 'ServiceController@deletenews')->where('id', '[0-9]+');

    /* Blog */
    Route::get('/addblog', 'ServiceController@addblog');
    Route::post('/addblog', 'ServiceController@addblog');
    Route::get('/viewblog', 'ServiceController@viewblog');
    Route::get('/editblog/{id}', 'ServiceController@editblog')->where('id', '[0-9]+');
    Route::post('/editblog/{id}', 'ServiceController@editblog')->where('id', '[0-9]+');
    Route::post('/deleteblog/{id}', 'ServiceController@deleteblog')->where('id', '[0-9]+');

    /* Slider */
    Route::get('/addslider', 'ServiceController@addslider');
    Route::post('/addslider', 'ServiceController@addslider');
    Route::get('/viewslider', 'ServiceController@viewslider');
    Route::post('/popularslider/{id}/{status}', 'ServiceController@popularslider')->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editslider/{id}', 'ServiceController@editslider')->where('id', '[0-9]+');
    Route::post('/editslider/{id}', 'ServiceController@editslider')->where('id', '[0-9]+');
    Route::post('/deleteslider/{id}', 'ServiceController@deleteslider')->where('id', '[0-9]+');
    Route::post('/multiSlider', 'ServiceController@multiSlider');

    /* Services */
    Route::get('/addservice', 'ServiceController@addservice');
    Route::post('/addservice', 'ServiceController@addservice');
    Route::get('/viewservice', 'ServiceController@viewservice');
    Route::post('/popularservice/{id}/{status}', 'ServiceController@popularservice')->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editservice/{id}', 'ServiceController@editservice')->where('id', '[0-9]+');
    Route::post('/editservice/{id}', 'ServiceController@editservice')->where('id', '[0-9]+');
    Route::post('/deleteservice/{id}', 'ServiceController@deleteservice')->where('id', '[0-9]+');
    Route::post('/multiServices', 'ServiceController@multiServices');

    /* Product */
    Route::get('/addproduct', 'ServiceController@addproduct');
    Route::post('/addproduct', 'ServiceController@addproduct');
    Route::get('/viewproduct', 'ServiceController@viewproduct');
    Route::post('/popularproduct/{id}/{status}', 'ServiceController@popularproduct')->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editproduct/{id}', 'ServiceController@editproduct')->where('id', '[0-9]+');
    Route::post('/editproduct/{id}', 'ServiceController@editproduct')->where('id', '[0-9]+');
    Route::post('/deleteproduct/{id}', 'ServiceController@deleteproduct')->where('id', '[0-9]+');
    Route::post('/multiProduct', 'ServiceController@multiProduct');

    /* Testimonial / Team */
    Route::get('/addtestimonial', 'ServiceController@addtestimonial');
    Route::post('/addtestimonial', 'ServiceController@addtestimonial');
    Route::get('/viewtestimonial', 'ServiceController@viewtestimonial');
    Route::post('/populartestimonial/{id}/{status}', 'ServiceController@populartestimonial')->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/edittestimonial/{id}', 'ServiceController@edittestimonial')->where('id', '[0-9]+');
    Route::post('/edittestimonial/{id}', 'ServiceController@edittestimonial')->where('id', '[0-9]+');
    Route::post('/deletetestimonial/{id}', 'ServiceController@deletetestimonial')->where('id', '[0-9]+');
    Route::post('/multiTestimonial', 'ServiceController@multiTestimonial');

    /* Enquiry */
    Route::get('/enquiry', 'ServiceController@enquiry');
    Route::post('/deleteEnquiry/{id}', 'ServiceController@deleteEnquiry')->where('id', '[0-9]+');

    /* Gallery */
    Route::get('/addgallery', 'ServiceController@addgallery');
    Route::post('/addgallery', 'ServiceController@addgallery');
    Route::get('/viewgallery', 'ServiceController@viewgallery');
    Route::post('/populargallery/{id}/{status}', 'ServiceController@populargallery')->where(['id' => '[0-9]+', 'status' => '[0-1]']);
    Route::get('/editgallery/{id}', 'ServiceController@editgallery')->where('id', '[0-9]+');
    Route::post('/editgallery/{id}', 'ServiceController@editgallery')->where('id', '[0-9]+');
    Route::post('/deletegallery/{id}', 'ServiceController@deletegallery')->where('id', '[0-9]+');
    Route::post('/multiGallery', 'ServiceController@multiGallery');

    /* Strategy Pillar */
    Route::get('/addstrategy', 'ServiceController@addstrategy');
    Route::post('/addstrategy', 'ServiceController@addstrategy');
    Route::get('/viewstrategy', 'ServiceController@viewstrategy');
    Route::get('/editstrategy/{id}', 'ServiceController@editstrategy')->where('id', '[0-9]+');
    Route::post('/editstrategy/{id}', 'ServiceController@editstrategy')->where('id', '[0-9]+');
    Route::post('/deletestrategy/{id}', 'ServiceController@deletestrategy')->where('id', '[0-9]+');
    Route::post('/statusstrategy/{id}/{status}', 'ServiceController@statusstrategy')->where(['id' => '[0-9]+', 'status' => '[0-1]']);

    /* Education Cards */
    Route::get('/addeducation', 'ServiceController@addeducation');
    Route::post('/addeducation', 'ServiceController@addeducation');
    Route::get('/vieweducation', 'ServiceController@vieweducation');
    Route::get('/editeducation/{id}', 'ServiceController@editeducation')->where('id', '[0-9]+');
    Route::post('/editeducation/{id}', 'ServiceController@editeducation')->where('id', '[0-9]+');
    Route::post('/deleteeducation/{id}', 'ServiceController@deleteeducation')->where('id', '[0-9]+');

    /* Skills Cards */
    Route::get('/addskills', 'ServiceController@addskills');
    Route::post('/addskills', 'ServiceController@addskills');
    Route::get('/viewskills', 'ServiceController@viewskills');
    Route::get('/editskills/{id}', 'ServiceController@editskills')->where('id', '[0-9]+');
    Route::post('/editskills/{id}', 'ServiceController@editskills')->where('id', '[0-9]+');
    Route::post('/deleteskills/{id}', 'ServiceController@deleteskills')->where('id', '[0-9]+');

    /* Profile */
    Route::get('/edit-profile', 'DashboardController@editprofile');
    Route::post('/updateprofile-profile', 'DashboardController@updateprofile');

    /* Categories (if used) */
    Route::get('/addcategory', 'ServiceController@addcategory');
    Route::post('/addcategory', 'ServiceController@addcategory');
    Route::get('/addsubcategory', 'ServiceController@addsubcategory');
    Route::post('/addsubcategory', 'ServiceController@addsubcategory');
    Route::get('/editsubcategory/{id}', 'ServiceController@editsubcategory')->where('id', '[0-9]+');
    Route::post('/editsubcategory/{id}', 'ServiceController@editsubcategory')->where('id', '[0-9]+');
    Route::get('/viewsubcategories', 'ServiceController@viewsubcategories');
    Route::post('/deletesubcategory/{id}', 'ServiceController@deletesubcategory')->where('id', '[0-9]+');
    Route::post('/mul_delete_subcat', 'ServiceController@mul_delete_subcat');

    /* Active Users */
    Route::get('/listing-of-active-users', 'RegisteruserController@listingofactiveusers');
});

// Admin dashboard routes (separate prefix)
Route::group(['prefix' => 'main-admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/allmembers', 'DashboardController@allmembers');
    Route::post('/blockuser/{id}', 'DashboardController@blockuser')->where('id', '[0-9]+');
    Route::post('/activateuser/{id}', 'DashboardController@activateuser')->where('id', '[0-9]+');
});

?>
