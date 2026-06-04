<?php
Route::get('/hard-reset-admin', function() {
    $email = 'admin@local.test';
    $password = 'Admin@1234';
    
    $user = \App\User::where('email', $email)->first();
    
    if ($user) {
        $user->password = bcrypt($password);
        $user->save();
        return "Password reset successfully for: " . $email . " | Password: " . $password;
    } else {
        \App\User::create([
            'name' => 'Admin User',
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        return "New admin user created successfully: " . $email . " | Password: " . $password;
    }
});

Route::auth();
Route::any('/', 'MainController@home');


Route::any('/', 'MainController@index');

// Compatibility redirects: map legacy admin/login and /admin to real login/dashboard
Route::get('/main-admin/login', function(){
    return redirect('/login');
});
Route::post('/main-admin/login', 'Auth\AuthController@login');
Route::any('/admin', function(){
	return redirect('/main-admin/dashboard');
});
Route::any('/about', 'MainController@about');
Route::any('/research', 'MainController@research');
Route::any('/ethics', 'MainController@ethics');
Route::any('/ourteam', 'MainController@ourteam');
Route::any('/achievements', 'MainController@achievements');
Route::any('/event', 'MainController@event');
Route::any('/gallery', 'MainController@gallery');
Route::any('/blog', 'MainController@blog');
Route::any('/singleblog/{slug}', 'MainController@singleblog');
Route::any('/singleproduct/{slug}', 'MainController@singleproduct');
Route::any('/singleservice/{slug}', 'MainController@singleservice');
Route::any('/ourworkpdf', 'MainController@ourworkpdf');
Route::any('/donate', 'MainController@donate');
Route::any('/contact', 'MainController@contact');
Route::any('/enquiry', 'MainController@enquiry');
Route::any('/product', 'MainController@product');
Route::any('/service', 'MainController@service');
Route::any('/payumoney/{id}', 'MainController@payumoney');
Route::any('/paysuccess', 'MainController@paysuccess');
Route::any('/failure', 'MainController@failure'); 
//dashboard//
/*Blog*/
Route::any('/admin/addblog', 'ServiceController@addblog')->middleware('auth');
Route::any('/admin/viewblog', 'ServiceController@viewblog')->middleware('auth');
Route::any('/admin/editblog/{id}', 'ServiceController@editblog')->middleware('auth');
														
/*Blog*/
/*News*/
Route::any('/admin/addnews', 'ServiceController@addnews')->middleware('auth');
Route::any('/admin/viewnews', 'ServiceController@viewnews')->middleware('auth');
Route::any('/admin/editnews/{id}', 'ServiceController@editnews')->middleware('auth');
														
/*News*/



Route::any('/main-admin/dashboard', 'DashboardController@index')->middleware('auth');
Route::any('/main-admin/allmembers', 'DashboardController@allmembers')->middleware('auth');
Route::any('/main-admin/blockuser/{id}', 'DashboardController@blockuser')->middleware('auth');
Route::any('/main-admin/activateuser/{id}', 'DashboardController@activateuser')->middleware('auth');
Route::any('/admin/edit-profile', 'DashboardController@editprofile')->middleware('auth');
Route::any('/admin/updateprofile-profile', 'DashboardController@updateprofile')->middleware('auth');
Route::any('/admin/listing-of-active-users', 'RegisteruserController@listingofactiveusers')->middleware('auth');
Route::any('/admin/addcategory', 'ServiceController@addcategory')->middleware('auth');
Route::any('/admin/addsubcategory', 'ServiceController@addsubcategory')->middleware('auth');
Route::any('/admin/editsubcategory/{id}', 'ServiceController@editsubcategory')->middleware('auth');
Route::any('/admin/viewsubcategories', 'ServiceController@viewsubcategories')->middleware('auth');
Route::any('/admin/deletesubcategory/{id}', 'ServiceController@deletesubcategory')->middleware('auth');
Route::any('/admin/mul_delete_subcat', 'ServiceController@mul_delete_subcat')->middleware('auth');






// Admission//


/* Slider+*/

Route::any('/admin/addslider', 'ServiceController@addslider')->middleware('auth');
Route::any('/admin/viewslider', 'ServiceController@viewslider')->middleware('auth');
Route::any('/admin/popularslider/{id}/{status}', 'ServiceController@popularslider')->middleware('auth');
Route::any('/admin/editslider/{id}', 'ServiceController@editslider')->middleware('auth');
Route::any('/admin/deleteslider/{id}', 'ServiceController@deleteslider')->middleware('auth');
Route::any('/admin/multiSlider', 'ServiceController@multiSlider');
/* Slider+*/

/* Services+*/
Route::any('/admin/addservice', 'ServiceController@addservice')->middleware('auth');
Route::any('/admin/viewservice', 'ServiceController@viewservice')->middleware('auth');
Route::any('/admin/popularservice/{id}/{status}', 'ServiceController@popularservice')->middleware('auth');
Route::any('/admin/editservice/{id}', 'ServiceController@editservice')->middleware('auth');
Route::any('/admin/deleteservice/{id}', 'ServiceController@deleteservice')->middleware('auth');
Route::any('/admin/multiServices', 'ServiceController@multiServices');

/* Services+*/

/* Product+*/
Route::any('/admin/addproduct', 'ServiceController@addproduct')->middleware('auth');
Route::any('/admin/viewproduct', 'ServiceController@viewproduct')->middleware('auth');
Route::any('/admin/popularproduct/{id}/{status}', 'ServiceController@popularproduct')->middleware('auth');
Route::any('/admin/editproduct/{id}', 'ServiceController@editproduct')->middleware('auth');
Route::any('/admin/deleteproduct/{id}', 'ServiceController@deleteproduct')->middleware('auth');
Route::any('/admin/multiProduct', 'ServiceController@multiProduct');

/* Product+*/

/* Testimonial+*/
Route::any('/admin/addtestimonial', 'ServiceController@addtestimonial')->middleware('auth');
Route::any('/admin/viewtestimonial', 'ServiceController@viewtestimonial')->middleware('auth');
Route::any('/admin/populartestimonial/{id}/{status}', 'ServiceController@populartestimonial')->middleware('auth');
Route::any('/admin/edittestimonial/{id}', 'ServiceController@edittestimonial')->middleware('auth');
Route::any('/admin/deletetestimonial/{id}', 'ServiceController@deletetestimonial')->middleware('auth');
Route::any('/admin/multiTestimonial', 'ServiceController@multiTestimonial');



/* Testimonial+*/
Route::any('/admin/enquiry/', 'ServiceController@enquiry')->middleware('auth');		
					
Route::any('/admin/deleteEnquiry/{id}', 'ServiceController@deleteEnquiry')->middleware('auth');					

/*Gallery*/
Route::any('/admin/addgallery', 'ServiceController@addgallery')->middleware('auth');
Route::any('/admin/viewgallery', 'ServiceController@viewgallery')->middleware('auth');
Route::any('/admin/populargallery/{id}/{status}', 'ServiceController@populargallery')->middleware('auth');
Route::any('/admin/editgallery/{id}', 'ServiceController@editgallery')->middleware('auth');
Route::any('/admin/deletegallery/{id}', 'ServiceController@deletegallery')->middleware('auth');
Route::any('/admin/deleteblog/{id}', 'ServiceController@deleteblog')->middleware('auth');
Route::any('/admin/multiGallery', 'ServiceController@multiGallery');																
/*Gallery*/																
?>
