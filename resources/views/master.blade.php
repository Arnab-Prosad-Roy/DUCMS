<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Templatemanja" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Educone Is Online Courses HTML5 Template.">
<meta name="keywords" content="academy, course, education, elearning, learning, education html template, university template, college template, school template, online education template, tution center template">

<!-- SITE TITLE -->
<title>@yield('title')</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/assets/images/favicon.png')}}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/animate.css')}}">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('public/frontend/assets/bootstrap/css/bootstrap.min.css')}}">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/flaticon.css')}}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{asset('public/frontend/assets/owlcarousel/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/owlcarousel/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/owlcarousel/css/owl.theme.default.min.css')}}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/magnific-popup.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/css/responsive.css')}}">

</head>

<body>

<!-- LOADER -->

<!-- END LOADER --> 

<!-- START HEADER -->
<header class="header_wrap fixed-top dark_skin main_menu_uppercase header_with_topbar">
    <div class="top-header light_skin bg_dark d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="contact_detail text-center text-lg-left">
                    	<li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                    	<li><i class="ti-email"></i><span><a href="https://templatemanja.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="096a66677d686a7d4970667c7b64686065276a6664">[email&#160;protected]</a></span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                        <ul class="header_list border_list">
                            <li><a href="{{route('login')}}" class="nav_btn"><i class="ti-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
        	<a class="navbar-brand" href="index.html"> 
            	<img class="logo_light" src="{{asset('public/frontend/assets/images/logo_light.png')}}" alt="logo"> 
                <img class="logo_dark" src="{{asset('public/frontend/assets/images/logo_dark.png')}}" alt="logo"> 
            </a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> <span class="ion-android-menu"></span> </button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
					<li><a class="nav-link active" href="#">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">About Us</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="about.html">About The Dept.</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="contact.html">Massage From The Chairmen</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">Ex-Chairmen</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="login.html">Faculty Members</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="signup.html">Ex-Faculty Members</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html">Officers & Staffs</a></li>                          
                            </ul>
                        </div>
                      </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Programes</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="about.html">UnderGraduate</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="contact.html">Massage Graduate</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">M.Phill. Programs</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="login.html">Ph.D. Programs</a></li>                        
                            </ul>
                        </div>
                      </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Students</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown"> <a class="dropdown-item menu-link dropdown-toggler" data-toggle="dropdown" href="#">Current Students</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="teacher.html">1st Year</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="teacher-detail.html">2nd Year</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="teacher-detail.html">3rd Year</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="teacher-detail.html">4th Year</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown"> <a class="dropdown-item menu-link dropdown-toggler" data-toggle="dropdown" href="#">Extra Curricuolar Activities</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery.html">Economics Career Alliance</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-masonry.html">Economics Cultural Club</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-masonry.html">Economics Study Center (ESC)</a></li>
                                        </ul>
                                    </div>
                                </li>
                          </ul>
                        </div>
                      </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">ALUMNI</a>
                        <div class="dropdown-menu">
							<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="courses.html">Notable Alumni Members</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="course-detail.html">Alumni Association</a></li>
							</ul>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">EVENTS</a>
                        <div class="dropdown-menu">
                        	<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="blog.html">Centenary</a></li>
                         	</ul>
                        </div>
                    </li>
                    <li><a class="nav-link" href="#">Contacts</a></li>
                </ul>
          	</div>
        </nav>
    </div>
</header>
<!-- END HEADER --> 

<!-- START SECTION BANNER -->
<div class="banner_section staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg_60" data-img-src="{{asset('public/frontend/assets/images/banner1.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                            	<div class="banner_content text_white">
                            		<h2 class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.2s">learn online course for the new angle</h2>
                            		<p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            		<a class="btn btn-default staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Get Started</a> 
                            		<a class="btn btn-white staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Learn More</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER--> 
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="{{asset('public/frontend/assets/images/banner2.jpg')}}">
                <div class="banner_slide_content">
                  <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-center">
                      <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                        <div class="banner_content text_white">
                          <h2 class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.2s">Start learning for success future</h2>
                          <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                          <a class="btn btn-default staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Get Started</a> 
                          <a class="btn btn-white staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Learn More</a> </div>
                      </div>
                    </div>
                  </div>
                  <!-- END CONTAINER--> 
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="{{asset('public/frontend/assets/images/banner3.jpg')}}">
                <div class="banner_slide_content">
                  <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-center">
                      <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                        <div class="banner_content text_white">
                          <h2 class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.2s">best way to learn online courses</h2>
                          <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                          <a class="btn btn-default staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Get Started</a> 
                          <a class="btn btn-white staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Learn More</a> </div>
                      </div>
                    </div>
                  </div>
                  <!-- END CONTAINER--> 
                </div>
            </div>
        </div>
    	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a> 
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a> 
    </div>
</div>
<!-- END SECTION BANNER --> 

<!-- START SECTION ABOUT -->
                        <!-- mainContent -->
                        @yield('mainContent')
                        <!-- mainContent -->
<!-- END SECTION BLOG --> 

<!-- START FOOTER -->
<footer class="bg_dark footer_dark">
    <div class="footer_top">
    	<div class="container">
    		<div class="row">
    			<div class="col-xl-4 col-md-8 col-sm-12">
    				<div class="widget">
    					<div class="footer_logo"> 
                        	<a href="index.html"><img src="{{asset('public/frontend/assets/images/logo_light.png')}}" alt="logo"/></a> 
                        </div>
    					<p>If you are going to use a passage of Lorem Ipsum you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
    				</div>
    				<div class="widget">
    					<h6 class="widget_title">Subscribe Our Newsletter</h6>
    					<div class="newsletter_form input_tran_white">
    						<form>
                            	<input type="text" required="" class="form-control form-control-sm rounded-input" placeholder="Enter Email">
                            	<button type="submit" title="Subscribe" class="btn btn-default btn-radius" name="submit" value="Submit">subscribe</button>
                            </form>
    					</div>
    				</div>
                    <div class="widget">
                        <ul class="social_icons social_white social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
    			</div>
                <div class="col-xl-2 col-md-4 col-sm-5">
                    <div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="#">Our services</a></li>
                            <li><a href="#">Company history</a></li>
                            <li><a href="#">Support center</a>
                            <li><a href="#">Latest Projects</a></li>
                            <li><a href="#">Our Mission</a>
                            <li><a href="#">Our Testimonials</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-7">
                    <div class="widget">
                        <h6 class="widget_title">Recent Posts</h6>
                        <ul class="widget_recent_post">
                            <li>
                                <div class="post_footer">
                                    <div class="post_img"> 
                                        <a href="#"><img src="{{asset('public/frontend/assets/images/letest_post1.jpg')}}" alt="letest_post1"></a> 
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img"> 
                                        <a href="#"><img src="{{asset('public/frontend/assets/images/letest_post2.jpg')}}" alt="letest_post2"></a> 
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img"> 
                                        <a href="#"><img src="{{asset('public/frontend/assets/images/letest_post3.jpg')}}" alt="letest_post3"></a> 
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li> 
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, New South London , UK</p>
                            </li>
                            <li> 
                                <i class="ti-email"></i> 
                                
                            </li>
                            <li> 
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
                            <li> 
                                <i class="ti-time"></i>
                                <p>Mon - Sat <strong>8:00AM - 9:30PM</strong> Sunday - CLOSED</p>
                            </li>
                        </ul>
                    </div>
                </div>
    		</div>
    	</div>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-12">
    			<div class="bottom_footer border-top-tran">
    				<div class="row">
    					<div class="col-md-6">
    						<p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by <span class="text_default">Educone</span></p>
    					</div>
                        <div class="col-md-6">
                            <ul class="list_none footer_link text-center text-md-right">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER --> 

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('public/frontend/assets/js/jquery-1.12.4.min.js')}}"></script> 
<!-- Latest compiled and minified Bootstrap --> 
<script src="{{asset('public/frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script> 
<!-- owl-carousel min js  --> 
<script src="{{asset('public/frontend/assets/owlcarousel/js/owl.carousel.min.js')}}"></script> 
<!-- magnific-popup min js  --> 
<script src="{{asset('public/frontend/assets/js/magnific-popup.min.js')}}"></script> 
<!-- waypoints min js  --> 
<script src="{{asset('public/frontend/assets/js/waypoints.min.js')}}"></script> 
<!-- parallax js  --> 
<script src="{{asset('public/frontend/assets/js/parallax.js')}}"></script> 
<!-- countdown js  --> 
<script src="{{asset('public/frontend/assets/js/jquery.countdown.min.js')}}"></script> 
<!-- jquery.countTo js  --> 
<script src="{{asset('public/frontend/assets/js/jquery.countTo.js')}}"></script> 
<!-- imagesloaded js --> 
<script src="{{asset('public/frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script> 
<!-- isotope min js --> 
<script src="{{asset('public/frontend/assets/js/isotope.min.js')}}"></script> 
<!-- jquery.appear js  --> 
<script src="{{asset('public/frontend/assets/js/jquery.appear.js')}}"></script> 
<!-- jquery.dd.min js --> 
<script src="{{asset('public/frontend/assets/js/jquery.dd.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('public/frontend/assets/js/slick.min.js')}}"></script> 
<!-- scripts js --> 
<script src="{{asset('public/frontend/assets/js/scripts.js')}}"></script>

</body>
</html>