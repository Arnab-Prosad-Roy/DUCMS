@extends('master')
@section('title', 'Home | DUCMS')
@section('mainContent')
<div class="section">
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="about_img"> 
                	<img src="{{asset('public/frontend/assets/images/about_img2.jpg')}}" alt="about_img2" /> 
                </div>
          	</div>
          	<div class="col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="about_section pl-lg-3">
              		<div class="heading_s1"> 
                    	<span class="sub_heading">About Us</span>
                		<h2>We're one of the best places to Explore And Learn With Fun</h2>
              		</div>
              		<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
              		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur quibusdam enim expedita sed nesciunt incidunt accusamus adipisci officia libero laboriosam!</p>
              		<a class="btn btn-dark" href="#">Read More</a> 
                </div>
			</div>
		</div>
	</div>
</div>
<!-- END SECTION ABOUT -->

<!-- START SECTION APPLY COURSE-->
<div class="section background_bg bg_blue" data-img-src="{{asset('public/frontend/assets/images/pattern_bg1.png')}}">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 heading_apply_form heading_light">
					<h2>Register now</h2>
                </div>
                <p class="text-white leads">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>
                <a href="#" class="btn btn-tran-light">Contact Us</a>
                <a href="#" class="btn btn-tran-border">Already Apply</a>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="bg-white apply_form radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
					<div class="heading_s1">
						<h3>Apply Online Courses</h3>
					</div>
                	<form>
                        <div class="form-group">
                            <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                        </div>
                        <div class="form-group">
                            <input required="required" placeholder="Enter Phone No *" class="form-control" name="phone" type="tel">
                        </div>
                        <div class="form-group">
                            <div class="custom_select">
                                <select class="form-control">
                                    <option value="">Select Course</option>
                                    <option value="1">Course1</option>
                                    <option value="2">Course2</option>
                                    <option value="3">Course3</option>
                                    <option value="4">Course4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" title="Submit Your Message!" class="btn btn-default btn-block" name="submit" value="Submit">Register Now</button>
                        </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION APPLY COURSE --> 

<!-- START SECTION COURSES-->
<div class="section pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                  <h2>Our Courses</h2>
                </div>
            	<p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="{{asset('public/frontend/assets/images/course_img1.jpg')}}" alt="course_img1"/></a>
                    </div>
                  	<div class="courses_info">
                        <div class="rating_stars"> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star-outline"></i> 
                            <span>4.0</span> 
                        </div>
                    	<h5 class="courses_title"><a href="#">Learn Adobe CS5 with Master Collection Course</a></h5>
                        <div class="courses_teacher"> 
                            <a href="#"><img src="{{asset('public/frontend/assets/images/user1.jpg')}}" alt="user1"><span>Anna Brooks</span></a> 
                        </div>
                        <div class="courses_footer">
                            <ul class="courses_meta">
                                <li><a href="#" ><i class="ti-user"></i><span>31</span></a></li>
                                <li><a href="#"><i class="ti-time"></i><span>1 hr 30 min</span></a></li>
                            </ul>
                            <div class="courses_price"> Price <span>$22</span> </div>
                        </div>
                  	</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="{{asset('public/frontend/assets/images/course_img2.jpg')}}" alt="course_img2"/></a>
                    </div>
                  	<div class="courses_info">
                        <div class="rating_stars"> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star-outline"></i> 
                            <span>4.0</span> 
                        </div>
                    	<h5 class="courses_title"><a href="#">Learn Adobe CS5 with Master Collection Course</a></h5>
                        <div class="courses_teacher"> 
                            <a href="#"><img src="{{asset('public/frontend/assets/images/user2.jpg')}}" alt="user2"><span>Alden Smith</span></a> 
                        </div>
                        <div class="courses_footer">
                            <ul class="courses_meta">
                                <li><a href="#" ><i class="ti-user"></i><span>31</span></a></li>
                                <li><a href="#"><i class="ti-time"></i><span>2 hr 30 min</span></a></li>
                            </ul>
                            <div class="courses_price"> Price <span>$53</span> </div>
                        </div>
                  	</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="{{asset('public/frontend/assets/images/course_img3.jpg')}}" alt="course_img3"/></a>
                    </div>
                  	<div class="courses_info">
                        <div class="rating_stars"> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star-outline"></i> 
                            <span>4.0</span> 
                        </div>
                    	<h5 class="courses_title"><a href="#">Learn Adobe CS5 with Master Collection Course</a></h5>
                        <div class="courses_teacher"> 
                            <a href="#"><img src="{{asset('public/frontend/assets/images/user3.jpg')}}" alt="user3"><span>Mark Marley</span></a> 
                        </div>
                        <div class="courses_footer">
                            <ul class="courses_meta">
                                <li><a href="#" ><i class="ti-user"></i><span>31</span></a></li>
                                <li><a href="#"><i class="ti-time"></i><span>1 hr 30 min</span></a></li>
                            </ul>
                            <div class="courses_price"> Price <span>$40</span> </div>
                        </div>
                  	</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="{{asset('public/frontend/assets/images/course_img4.jpg')}}" alt="course_img4"/></a>
                    </div>
                  	<div class="courses_info">
                        <div class="rating_stars"> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star-outline"></i> 
                            <span>4.0</span> 
                        </div>
                    	<h5 class="courses_title"><a href="#">Learn Adobe CS5 with Master Collection Course</a></h5>
                        <div class="courses_teacher"> 
                            <a href="#"><img src="{{asset('public/frontend/assets/images/user4.jpg')}}" alt="user4"><span>James Lana</span></a> 
                        </div>
                        <div class="courses_footer">
                            <ul class="courses_meta">
                                <li><a href="#" ><i class="ti-user"></i><span>31</span></a></li>
                                <li><a href="#"><i class="ti-time"></i><span>2 hr 30 min</span></a></li>
                            </ul>
                            <div class="courses_price"> Price <span>$32</span> </div>
                        </div>
                  	</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="{{asset('public/frontend/assets/images/course_img5.jpg')}}" alt="course_img5"/></a>
                    </div>
                  	<div class="courses_info">
                        <div class="rating_stars"> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star-outline"></i> 
                            <span>4.0</span> 
                        </div>
                    	<h5 class="courses_title"><a href="#">Learn Adobe CS5 with Master Collection Course</a></h5>
                        <div class="courses_teacher"> 
                            <a href="#"><img src="{{asset('public/frontend/assets/images/user5.jpg')}}" alt="user5"><span>Nemo Enimson</span></a> 
                        </div>
                        <div class="courses_footer">
                            <ul class="courses_meta">
                                <li><a href="#" ><i class="ti-user"></i><span>31</span></a></li>
                                <li><a href="#"><i class="ti-time"></i><span>1 hr 30 min</span></a></li>
                            </ul>
                            <div class="courses_price"> Price <span>$26</span> </div>
                        </div>
                  	</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="{{asset('public/frontend/assets/images/course_img6.jpg')}}" alt="course_img6"/></a>
                    </div>
                  	<div class="courses_info">
                        <div class="rating_stars"> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star"></i> 
                            <i class="ion-android-star-outline"></i> 
                            <span>4.0</span> 
                        </div>
                    	<h5 class="courses_title"><a href="#">Learn Adobe CS5 with Master Collection Course</a></h5>
                        <div class="courses_teacher"> 
                            <a href="#"><img src="{{asset('public/frontend/assets/images/user6.jpg')}}" alt="user6"><span>Lissa Castro</span></a> 
                        </div>
                        <div class="courses_footer">
                            <ul class="courses_meta">
                                <li><a href="#" ><i class="ti-user"></i><span>31</span></a></li>
                                <li><a href="#"><i class="ti-time"></i><span>2 hr 30 min</span></a></li>
                            </ul>
                            <div class="courses_price"> Price <span>$49</span> </div>
                        </div>
                  	</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION COURSES--> 

<!-- START SECTION COUNTER -->
<div class="section background_bg counter_wrap bg_blue fixed_bg" data-img-src="{{asset('public/frontend/assets/images/pattern_bg1.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-book"></i>
                	<h3 class="counter_text"><span class="counter" data-from="0" data-to="280" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                	<p>Courses</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="box_counter counter_white text-center"> <i class="flaticon-student"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="1350" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                	<p>Students</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-teacher"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="200" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                    <p>Qualified Staff</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-trophy"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="150" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                    <p>Awards win</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION COUNTER --> 

<!-- START SECTION EVENTS-->
<div class="section pb_70">
	<div class="container">
        <div class="row justify-content-center">
        	<div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                    <h2>Upcoming events</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        	</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="event_img"> 
                    	<img src="{{asset('public/frontend/assets/images/event_img1.jpg')}}" alt="event_img1">
                        <div class="event_dt radius_all_5">
                        	<h5><span>May, 16</span> 2020 </h5>
                        </div>
                    </div>
                    <div class="event_info">
                        <h5 class="event_title"><a href="#">New Sessions For Graphics Design Interface</a></h5>
                        <ul class="event_meta">
                        	<li><i class="ti-time"></i><span>09:00 AM</span></li>
                        	<li><i class="ti-location-pin"></i><span>New York City</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="event_img"> 
                        <img src="{{asset('public/frontend/assets/images/event_img2.jpg')}}" alt="event_img2">
                        <div class="event_dt radius_all_5">
                            <h5><span>May, 16</span> 2020 </h5>
                        </div>
                    </div>
                    <div class="event_info">
                        <h5 class="event_title"><a href="#">New Sessions For Graphics Design Interface</a></h5>
                        <ul class="event_meta">
                            <li><i class="ti-time"></i><span>09:00 AM</span></li>
                            <li><i class="ti-location-pin"></i><span>New York City</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="event_img"> 
                    	<img src="{{asset('public/frontend/assets/images/event_img3.jpg')}}" alt="event_img3">
                        <div class="event_dt radius_all_5">
                        	<h5><span>May, 16</span> 2020 </h5>
                        </div>
                    </div>
                    <div class="event_info">
                        <h5 class="event_title"><a href="#">New Sessions For Graphics Design Interface</a></h5>
                        <ul class="event_meta">
                            <li><i class="ti-time"></i><span>09:00 AM</span></li>
                            <li><i class="ti-location-pin"></i><span>New York City</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<!-- END SECTION EVENTS--> 

<!-- START SECTION VIDEO -->
<div class="section background_bg overlay_bg_70 fixed_bg" data-img-src="{{asset('public/frontend/assets/images/video_bg.jpg')}}">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup">
                    	<span class="ripple"><i class="ion-play"></i></span>
                    </a>
                    <div class="video_text animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="text_default">Watch Our Latest Video</span>
                        <h2>Let's Take a Small Tour From Video Tutorial For Our Campus</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION VIDEO -->

<!-- START SECTION TEAM -->
<div class="section pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                  <h2>Our Team Members</h2>
                </div>
            	<p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
			<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="team_box team_style2 radius_all_10">
					<div class="team_img"> 
                    	<img src="{{asset('public/frontend/assets/images/team_img1.jpg')}}" alt="team_img1">
                        <ul class="social_icons social_white">
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
                          	<li><a href="#"><i class="ion-social-twitter"></i></a></li>
                          	<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                          	<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
					</div>
                  	<div class="team_content">
                        <div class="team_title">
							<h5>Anders Stone</h5>
							<span>Professor</span> 
                        </div>
                    </div>
                </div>
            </div>
          	<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="team_box team_style2 radius_all_10">
                    <div class="team_img"> 
                        <img src="{{asset('public/frontend/assets/images/team_img2.jpg')}}" alt="team_img2">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                	</div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5>Laura Martin</h5>
                            <span>Accounting</span> 
                        </div>
                    </div>
                </div>
          	</div>
          	<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
            	<div class="team_box team_style2 radius_all_10">
            		<div class="team_img"> 
            			<img src="{{asset('public/frontend/assets/images/team_img3.jpg')}}" alt="team_img3">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
            		</div>
            		<div class="team_content">
                    <div class="team_title">
                        <h5>Adam Smith</h5>
                        <span>Ceo & Architer</span> 
                    </div>
				</div>
			</div>
          </div>
			<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
            	<div class="team_box team_style2 radius_all_10">
            		<div class="team_img"> 
                    	<img src="{{asset('public/frontend/assets/images/team_img4.jpg')}}" alt="team_img4">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
            		</div>
            		<div class="team_content">
            			<div class="team_title">
            				<h5>Bruce Flores</h5>
            				<span>Accounting</span> 
            			</div>
            		</div>
            	</div>
          	</div>
        </div>
	</div>
</div>
<!-- END SECTION TEAM --> 

<!-- START SECTION TESTIMONIAL -->
<div class="section bg_gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                	<h2>Our Client Say!</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
        		<div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme nav_style1" data-margin="15" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "991":{"items": "3"}}'>
        			<div class="testimonial_box">
        				<div class="author_info">
        					<div class="author_img">
                            	<img src="{{asset('public/frontend/assets/images/testi_user1.jpg')}}" alt="user" /> 
                            </div>
        					<div class="author_name">
        						<h6>Richard Clark</h6>
        						<span>CEO HR Group</span> 
                            </div>
        				</div>
       					<div class="testimonial_desc">
        					<p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
        				</div>
        			</div>
                    <div class="testimonial_box">
                        <div class="author_info">
                            <div class="author_img"> 
                                <img src="{{asset('public/frontend/assets/images/testi_user2.jpg')}}" alt="user" /> 
                            </div>
                            <div class="author_name">
                                <h6>Daisy Lana</h6>
                                <span>Designer</span> 
                            </div>
                        </div>
                        <div class="testimonial_desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="author_info">
                            <div class="author_img"> 
                                <img src="{{asset('public/frontend/assets/images/testi_user3.jpg')}}" alt="user" /> 
                            </div>
                            <div class="author_name">
                                <h6>Alden Smith</h6>
                                <span>Designer</span> 
                            </div>
                        </div>
                    <div class="testimonial_desc">
                    	<p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                    </div>
        			</div>
                    <div class="testimonial_box">
                        <div class="author_info">
                            <div class="author_img"> 
                                <img src="{{asset('public/frontend/assets/images/testi_user4.jpg')}}" alt="user" /> 
                            </div>
                            <div class="author_name">
                                <h6>John Becker</h6>
                                <span>Designer</span> 
                            </div>
                            </div>
                        <div class="testimonial_desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                        </div>
                    </div>
        		</div>
        	</div>
        </div>
    </div>
</div>
<!-- END SECTION TESTIMONIAL --> 

<!-- START SECTION BLOG -->
<div class="section pb_70">
    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
    			<div class="heading_s1 text-center">
    				<h2>Latest News</h2>
    			</div>
    			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    		</div>
    	</div>
    	<div class="row justify-content-center">
    		<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
    			<div class="blog_post blog_style1 box_shadow1">
    				<div class="blog_img"> 
                    	<a href="#"> <img src="{{asset('public/frontend/assets/images/blog_small_img1.jpg')}}" alt="blog_small_img1"> </a> 
                        <div class="post_date radius_all_5">
                        	<h5><span>May, 02</span> 2020</h5> 
                        </div>	
                    </div>
    				<div class="blog_content">
    					<div class="blog_text">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-user"></i> <span>By Admin</span></a></li>
                                <li><a href="#"><i class="ti-comments"></i> <span>2 Comment</span></a></li>
                            </ul>
                            <h5 class="blog_title"><a href="#">The Master Of Human Happiness</a></h5>
                            <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
                    	</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
    			<div class="blog_post blog_style1 box_shadow1">
    				<div class="blog_img"> 
                    	<a href="#"> <img src="{{asset('public/frontend/assets/images/blog_small_img2.jpg')}}" alt="blog_small_img2"> </a> 
                        <div class="post_date radius_all_5">
                        	<h5><span>Jan, 02</span> 2020</h5> 
                        </div>
                    </div>
    				<div class="blog_content">
    					<div class="blog_text">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-user"></i> <span>By Admin</span></a></li>
                                <li><a href="#"><i class="ti-comments"></i> <span>2 Comment</span></a></li>
                            </ul>
    						<h5 class="blog_title"><a href="#">I Must Explain To This Mistaken</a></h5>
    						<p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
    			<div class="blog_post blog_style1 box_shadow1">
    				<div class="blog_img"> 
                    	<a href="#"> <img src="{{asset('public/frontend/assets/images/blog_small_img3.jpg')}}" alt="blog_small_img3"> </a> 
                        <div class="post_date radius_all_5">
                        	<h5><span>Aug, 02</span> 2020</h5> 
                        </div>
                    </div>
    				<div class="blog_content">
    					<div class="blog_text">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-user"></i> <span>By Admin</span></a></li>
                                <li><a href="#"><i class="ti-comments"></i> <span>2 Comment</span></a></li>
                            </ul>
                            <h5 class="blog_title"><a href="#">There Anyone Who Loves Hims</a></h5>
                            <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
                        </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection