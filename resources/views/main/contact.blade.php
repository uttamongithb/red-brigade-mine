@include('includes.header')
<style>
.alert {
	background: green;
color: #fff;
}

html,
body {
    overflow-x: hidden;
    overflow-y: auto !important;
}

.contact-map {
    padding: 0 0 70px;
}

.contact-map .map-frame {
    width: 100%;
    height: 460px;
    border: 0;
    border-radius: 12px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.16);
}

.contact-map .direction-btn-wrap {
    text-align: center;
    margin-top: 18px;
}

.contact-map .direction-btn {
    display: inline-block;
    padding: 12px 24px;
    border-radius: 999px;
    background: #ff0000;
    color: #fff;
    font-weight: 600;
    letter-spacing: 0.3px;
    text-decoration: none;
    transition: all 0.25s ease;
}

.contact-map .direction-btn:hover,
.contact-map .direction-btn:focus {
    color: #fff;
    background: #d70000;
    box-shadow: 0 8px 18px rgba(215, 0, 0, 0.35);
}

.contact-section-area {
    padding: 8px 0 32px;
}

.contact-section-area .contact-page-content-area {
    padding: 18px 0 10px;
}

.contact-section-area .single-contact-info-box {
    background: linear-gradient(180deg, #ffffff 0%, #fff9f9 100%);
    border: 1px solid rgba(230, 57, 70, 0.18);
    border-radius: 22px;
    margin-bottom: 34px;
    overflow: visible;
    box-shadow: 0 16px 40px rgba(29, 53, 87, 0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.contact-section-area .single-contact-info-box:hover {
    transform: translateY(-4px);
    border-color: rgba(230, 57, 70, 0.45);
    box-shadow: 0 22px 46px rgba(29, 53, 87, 0.12);
}

.contact-section-area .single-contact-info-box .icon {
    width: 72px;
    height: 72px;
    top: -36px;
    background: linear-gradient(135deg, #ff1f1f 0%, #e63946 58%, #c82333 100%);
    box-shadow: 0 12px 28px rgba(230, 57, 70, 0.35);
    border: 5px solid #ffffff;
    font-size: 24px;
}

.contact-section-area .single-contact-info-box:hover .icon {
    box-shadow: 0 14px 34px rgba(230, 57, 70, 0.45);
    transform: translateX(-50%) scale(1.04);
}

.contact-section-area .single-contact-info-box .content {
    padding: 54px 28px 28px;
}

.contact-section-area .single-contact-info-box .content .title {
    color: #1D3557;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 12px;
}

.contact-section-area .single-contact-info-box .content .details {
    color: #5f6d7e;
    font-size: 15px;
    line-height: 1.7;
}

.contact-section-area .single-contact-info-box .content .details a {
    color: #0b66ff;
    font-weight: 600;
}

.contact-section-area .single-contact-info-box .content .details a:hover,
.contact-section-area .single-contact-info-box .content .details a:focus {
    color: #e63946;
}

.contact-section-area .col-md-12 {
    padding-left: 10px;
    padding-right: 10px;
}

.contact-section-area .contact-area .contact-bottom-inner .form-content-area {
    background: linear-gradient(180deg, #ffffff 0%, #fffaf8 100%);
    border: 1px solid rgba(29, 53, 87, 0.08);
    border-radius: 28px;
    padding: 30px 28px 34px;
    box-shadow: 0 18px 48px rgba(29, 53, 87, 0.08);
    position: relative;
    overflow: hidden;
}

.contact-section-area .contact-area .contact-bottom-inner .form-content-area::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #e63946 0%, #ff7f02 55%, #1d3557 100%);
}

.contact-section-area .contact-area .contact-bottom-inner .form-content-area .title {
    color: #1d3557;
    font-size: 30px;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 10px;
}

.contact-section-area .contact-area .contact-bottom-inner .form-content-area .title::after {
    content: "";
    display: block;
    width: 72px;
    height: 4px;
    margin: 14px auto 0;
    border-radius: 999px;
    background: linear-gradient(90deg, #e63946 0%, #ff7f02 100%);
}

.contact-section-area .contact-form-wrapper {
    margin-top: 18px;
}

.contact-section-area .contact-form-wrapper .form-element {
    margin-bottom: 16px;
}

.contact-section-area .contact-form-wrapper .input-field {
    width: 100%;
    height: 58px;
    border-radius: 14px;
    border: 1px solid rgba(29, 53, 87, 0.12);
    background: #ffffff;
    padding: 0 18px;
    color: #1d3557;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.9);
    transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
}

.contact-section-area .contact-form-wrapper .input-field.textarea {
    min-height: 150px;
    padding: 16px 18px;
    resize: vertical;
}

.contact-section-area .contact-form-wrapper .input-field::placeholder {
    color: #8b96a8;
}

.contact-section-area .contact-form-wrapper .input-field:focus {
    border-color: rgba(230, 57, 70, 0.55);
    box-shadow: 0 0 0 4px rgba(230, 57, 70, 0.12);
    outline: none;
    transform: translateY(-1px);
}

.contact-section-area .contact-form-wrapper .submit-btn {
    width: 100%;
    border: 0;
    border-radius: 16px;
    padding: 14px 20px;
    background: linear-gradient(135deg, #e63946 0%, #c82333 100%);
    color: #ffffff;
    font-size: 16px;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    box-shadow: 0 14px 28px rgba(230, 57, 70, 0.28);
    transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
}

.contact-section-area .contact-form-wrapper .submit-btn:hover,
.contact-section-area .contact-form-wrapper .submit-btn:focus {
    transform: translateY(-2px);
    box-shadow: 0 18px 34px rgba(230, 57, 70, 0.34);
    filter: brightness(1.03);
    outline: none;
}

@media only screen and (max-width: 767px) {
    .contact-map .map-frame {
        height: 320px;
    }

    .contact-section-area {
        padding-top: 0;
    }

    .contact-section-area .single-contact-info-box {
        margin-bottom: 26px;
        border-radius: 18px;
    }

    .contact-section-area .single-contact-info-box .icon {
        width: 62px;
        height: 62px;
        top: -31px;
        font-size: 21px;
    }

    .contact-section-area .single-contact-info-box .content {
        padding: 48px 18px 22px;
    }

    .contact-section-area .single-contact-info-box .content .title {
        font-size: 20px;
        margin-bottom: 8px;
    }

    .contact-section-area .single-contact-info-box .content .details {
        font-size: 14px;
    }

    .contact-section-area .contact-area .contact-bottom-inner .form-content-area {
        padding: 22px 16px 24px;
        border-radius: 20px;
    }

    .contact-section-area .contact-area .contact-bottom-inner .form-content-area .title {
        font-size: 24px;
    }

    .contact-section-area .contact-form-wrapper .input-field {
        height: 52px;
        border-radius: 12px;
    }

    .contact-section-area .contact-form-wrapper .input-field.textarea {
        min-height: 130px;
    }

    .contact-section-area .contact-form-wrapper .submit-btn {
        padding: 13px 18px;
        font-size: 15px;
    }
}
</style>
<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Contact </h2>
                    <ul class="page-list">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Breadcumb area end  -->
			<div class="col-md-12">
						<?php echo Helpers::errormessage($errors);?>
						<?php echo Helpers::flashMessage();?>
			</div>
			
			
			
	<div class="contact-section-area">
	    <div class="container">
	        <div class="row">
	            
	            
	            <div class="col-md-8">
	               <section class="contact-area"> 
	                
                    <div class="row">
                        <div class="col-lg-12">
                    <div class="contact-bottom-inner">
                        <!-- contact bottom inner -->
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="form-content-area">
                                    <!-- right content area -->
                                    <h3 class="title text-center">Get In Touch</h3>
                                    <div class="contact-form-wrapper">
				{{ Form::open(array('action' => 'MainController@contact','files' => true)) }}
				  {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-element ">
                                                        <input required type="text" id="first_name" name="name" placeholder="First Name"
                                                            class="input-field borderd">
                                                    </div>
                                                    <div class="form-element ">
                                                        <input required type="text" id="last_name" name="lastname" placeholder="Last Name"
                                                            class="input-field borderd">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-element ">
                                                        <input required type="email" id="email" name="email" placeholder="Email Address"
                                                            class="input-field borderd">
                                                    </div>
                                                    <div class="form-element ">
                                                        <input required type="tel" id="phone" name="mobile" placeholder="Phone Number"
                                                            class="input-field borderd">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea required rows="10" cols="30" id="msg" name="msg" placeholder="Your Message"
                                                        class="input-field borderd textarea"></textarea>
                                                </div>
                                            </div>
                                            <input type="submit" class="submit-btn btn-rounded" value="get a quote">
                                        </form>
                                    </div>
                                </div>
                                <!-- //.right content area -->
                            </div>
                        </div>
                    </div>
                    <!-- contact bottom inner -->
                </div>
                <!-- //.col-lg-12 -->
                    </div>
	                </section>
	            </div>
	            
	            
	            
	            
	            <div class="col-md-4">
           
                    <div class="contact-page-content-area">
                        
                        <div class="col-md-12">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Call Us</h4>
                                <span class="details"><a href="tel:+919455025746">+91-9455025746</a></span>
                                <span class="details"> </span>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-12">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                    <h4 class="title">Locate Us</h4>
                                <span class="details">P-16 Nehru Enclave Gomti Nagar Lucknow (226010), Uttar Pradesh (India)</span>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-12">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Have Question?</h4>
                                <span class="details"><a href="mailto:redbrigade.lucknow@gmail.com">redbrigade.lucknow@gmail.com</a></span>
                                
                            </div>
                     
                        </div>
                        
                    </div>
               </div>
                
                           
	            </div>
	        </div>
	    </div>
	</div>		

    
    <!-- contact area start  -->
    <section class="contact-area" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-bottom-inner">
                        <!-- contact bottom inner -->
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-center">
                                <div class="form-content-area">
                                    <!-- right content area -->
                                    <h3 class="title text-center">Get In Touch</h3>
                                    <div class="contact-form-wrapper">
				{{ Form::open(array('action' => 'MainController@contact','files' => true)) }}
				  {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-element ">
                                                        <input required type="text" id="first_name" name="name" placeholder="First Name"
                                                            class="input-field borderd">
                                                    </div>
                                                    <div class="form-element ">
                                                        <input required type="text" id="last_name" name="lastname" placeholder="Last Name"
                                                            class="input-field borderd">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-element ">
                                                        <input required type="email" id="email" name="email" placeholder="Email Address"
                                                            class="input-field borderd">
                                                    </div>
                                                    <div class="form-element ">
                                                        <input required type="tel" id="phone" name="mobile" placeholder="Phone Number"
                                                            class="input-field borderd">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea required rows="10" cols="30" id="msg" name="msg" placeholder="Your Message"
                                                        class="input-field borderd textarea"></textarea>
                                                </div>
                                            </div>
                                            <input type="submit" class="submit-btn btn-rounded" value="get a quote">
                                        </form>
                                    </div>
                                </div>
                                <!-- //.right content area -->
                            </div>
                        </div>
                    </div>
                    <!-- contact bottom inner -->
                </div>
                <!-- //.col-lg-12 -->
            </div>
            
        </div>
        
    </section>
    
 <!-- contact page conten area start -->
    <div class="contact-page-content-area" style="display:none;">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Call Us</h4>
                            <span class="details"><a href="tel:+919455025746">+91-9455025746</a></span>
                            <span class="details"> </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                                <h4 class="title">Locate Us</h4>
                            <span class="details">P-16 Nehru Enclave Gomti Nagar Lucknow (226010), Uttar Pradesh (India)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Have Question?</h4>
                            <span class="details"><a href="mailto:redbrigade.lucknow@gmail.com">redbrigade.lucknow@gmail.com</a></span>
                            
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
    <!-- contact page conten area end -->   
    
    <!-- contact area end -->
    <div class="contact-map">
        <div class="container">
            <iframe
                class="map-frame"
                src="https://www.google.com/maps?q=26.8613138,80.981621&z=18&output=embed"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                title="Red Brigade Lucknow Location"></iframe>
            <div class="direction-btn-wrap">
                <a class="direction-btn" href="https://www.google.com/maps/@26.8613138,80.981621,18.19z?entry=ttu&g_ep=EgoyMDI2MDQwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">Get Direction</a>
            </div>
        </div>
    </div>

	<!-- footer area start -->
@include('includes.footer')