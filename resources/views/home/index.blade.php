@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
        <div class="container">
            <div class="row">
                <!-- Start about us area -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="aboutus_area wow fadeInLeft">
                        <h2 class="titile">About Us</h2>
                        <p>{!!$setting->aboutus !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="newsfeed_area wow fadeInRight">
                        <ul class="nav nav-tabs feed_tabs" id="myTab2">
                            <li class="active"><a href="#news" data-toggle="tab">News</a></li>
                            <li><a href="#notice" data-toggle="tab">Contents</a></li>
                            <li><a href="#events" data-toggle="tab">Events</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start news tab content -->
                            <div class="tab-pane fade in active" id="news">
                                <ul class="news_tab">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('assets')}}/img/news.jpg"
                                                         alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">27.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('assets')}}/img/news.jpg"
                                                         alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('assets')}}/img/news.jpg"
                                                         alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="see_all" href="#">See All</a>
                            </div>
                            <!-- Start notice tab content -->
                            <div class="tab-pane fade " id="notice">
                                <div class="single_notice_pane">
                                    @foreach($contentlist1 as $rs)
                                    <ul class="news_tab">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="">
                                                        <img class="media-object" src="{{Storage::url($rs->image)}}"
                                                             alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="{{route('content',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                                    <span class="feed_date">27.02.15</span>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Start events tab content -->
                            <div class="tab-pane fade " id="events">
                                <ul class="news_tab">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('assets')}}/img/news.jpg"
                                                         alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">27.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('assets')}}/img/news.jpg"
                                                         alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('assets')}}/img/news.jpg"
                                                         alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="see_all" href="#">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== END ABOUT US SECTION ================-->

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
        <!-- Start why us top -->
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="whyus_top">
                    <div class="container">
                        <!-- Why us top titile -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="title_area">
                                    <h2 class="title_two">Why Us</h2>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Why us top titile -->
                        <!-- Start Why us top content  -->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-desktop"></span>
                                    </div>
                                    <h3>Technology</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-users"></span>
                                    </div>
                                    <h3>Best Tutor</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-flask"></span>
                                    </div>
                                    <h3>Practical Training</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-support"></span>
                                    </div>
                                    <h3>Support</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Why us top content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End why us top -->

        <!-- Start why us bottom -->
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="whyus_bottom">
                    <div class="slider_overlay"></div>
                    <div class="container">
                        <div class="skills">
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStat" data-dimension="150" data-text="35%" data-info="" data-width="10"
                                         data-fontsize="25" data-percent="35" data-fgcolor="#999" data-bgcolor="#fff"
                                         data-icon="fa-task"></div>
                                    <h4>Repeate Learners</h4>
                                </div>
                            </div>
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStathalf2" data-dimension="150" data-text="90%" data-info=""
                                         data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999"
                                         data-bgcolor="#fff" data-icon="fa-task"></div>
                                    <h4>Success Rate</h4>
                                </div>
                            </div>
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStat2" data-dimension="150" data-text="100%" data-info="" data-width="10"
                                         data-fontsize="25" data-percent="100" data-fgcolor="#999" data-bgcolor="#fff"
                                         data-icon="fa-task"></div>
                                    <h4>Student Engagement</h4>
                                </div>
                            </div>
                            <!-- START SINGLE SKILL-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_skill wow fadeInUp">
                                    <div id="myStat3" data-dimension="150" data-text="65%" data-info="" data-width="10"
                                         data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"
                                         data-icon="fa-task"></div>
                                    <h4>Certified Courses</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End why us bottom -->
    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
        <div class="container">
            <!-- Our courses titile -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two">Our Courses</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- End Our courses titile -->
            <!-- Start Our courses content -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ourCourse_content">
                        <ul class="course_nav">
                            <li>
                                <div class="single_course">
                                    <div class="singCourse_imgarea">
                                        <img src="{{asset('assets')}}/img/course-1.jpg"/>
                                        <div class="mask">
                                            <a href="#" class="course_more">View Course</a>
                                        </div>
                                    </div>
                                    <div class="singCourse_content">
                                        <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                                        <p class="singCourse_price"><span>$20</span> Per One Month</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <div class="singCourse_author">
                                        <img src="{{asset('assets')}}/img/author.jpg" alt="img">
                                        <p>Richard Remus, Teacher</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_course">
                                    <div class="singCourse_imgarea">
                                        <img src="{{asset('assets')}}/img/course-2.jpg"/>
                                        <div class="mask">
                                            <a href="#" class="course_more">View Course</a>
                                        </div>
                                    </div>
                                    <div class="singCourse_content">
                                        <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                                        <p class="singCourse_price"><span>$20</span> Per One Month</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <div class="singCourse_author">
                                        <img src="{{asset('assets')}}/img/author.jpg" alt="img">
                                        <p>Richard Remus, Teacher</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_course">
                                    <div class="singCourse_imgarea">
                                        <img src="{{asset('assets')}}/img/course-1.jpg"/>
                                        <div class="mask">
                                            <a href="#" class="course_more">View Course</a>
                                        </div>
                                    </div>
                                    <div class="singCourse_content">
                                        <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                                        <p class="singCourse_price"><span>$20</span> Per One Month</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <div class="singCourse_author">
                                        <img src="{{asset('assets')}}/img/author.jpg" alt="img">
                                        <p>Richard Remus, Teacher</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_course">
                                    <div class="singCourse_imgarea">
                                        <img src="{{asset('assets')}}/img/course-2.jpg"/>
                                        <div class="mask">
                                            <a href="#" class="course_more">View Course</a>
                                        </div>
                                    </div>
                                    <div class="singCourse_content">
                                        <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                                        <p class="singCourse_price"><span>$20</span> Per One Month</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <div class="singCourse_author">
                                        <img src="{{asset('assets')}}/img/author.jpg" alt="img">
                                        <p>Richard Remus, Teacher</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_course">
                                    <div class="singCourse_imgarea">
                                        <img src="{{asset('assets')}}/img/course-1.jpg"/>
                                        <div class="mask">
                                            <a href="#" class="course_more">View Course</a>
                                        </div>
                                    </div>
                                    <div class="singCourse_content">
                                        <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                                        <p class="singCourse_price"><span>$20</span> Per One Month</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <div class="singCourse_author">
                                        <img src="{{asset('assets')}}/img/author.jpg" alt="img">
                                        <p>Richard Remus, Teacher</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_course">
                                    <div class="singCourse_imgarea">
                                        <img src="{{asset('assets')}}/img/course-2.jpg"/>
                                        <div class="mask">
                                            <a href="#" class="course_more">View Course</a>
                                        </div>
                                    </div>
                                    <div class="singCourse_content">
                                        <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                                        <p class="singCourse_price"><span>$20</span> Per One Month</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <div class="singCourse_author">
                                        <img src="{{asset('assets')}}/img/author.jpg" alt="img">
                                        <p>Richard Remus, Teacher</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Our courses content -->
        </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <section id="ourTutors">
        <div class="container">
            <!-- Our courses titile -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two">Our Tutors</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- End Our courses titile -->

            <!-- Start Our courses content -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ourTutors_content">
                        <!-- Start Tutors nav -->
                        <ul class="tutors_nav">
                            <li>
                                <div class="single_tutors">
                                    <div class="tutors_thumb">
                                        <img src="{{asset('assets')}}/img/author.jpg"/>
                                    </div>
                                    <div class="singTutors_content">
                                        <h3 class="tutors_name">Jame Burns</h3>
                                        <span>Technology Teacher</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                    <div class="singTutors_social">
                                        <ul class="tutors_socnav">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_tutors">
                                    <div class="tutors_thumb">
                                        <img src="{{asset('assets')}}/img/course-1.jpg"/>
                                    </div>
                                    <div class="singTutors_content">
                                        <h3 class="tutors_name">Jame Burns</h3>
                                        <span>Technology Teacher</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                    <div class="singTutors_social">
                                        <ul class="tutors_socnav">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_tutors">
                                    <div class="tutors_thumb">
                                        <img src="{{asset('assets')}}/img/author.jpg"/>
                                    </div>
                                    <div class="singTutors_content">
                                        <h3 class="tutors_name">Jame Burns</h3>
                                        <span>Technology Teacher</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                    <div class="singTutors_social">
                                        <ul class="tutors_socnav">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_tutors">
                                    <div class="tutors_thumb">
                                        <img src="{{asset('assets')}}/img/course-1.jpg"/>
                                    </div>
                                    <div class="singTutors_content">
                                        <h3 class="tutors_name">Jame Burns</h3>
                                        <span>Technology Teacher</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                    <div class="singTutors_social">
                                        <ul class="tutors_socnav">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_tutors">
                                    <div class="tutors_thumb">
                                        <img src="{{asset('assets')}}/img/author.jpg"/>
                                    </div>
                                    <div class="singTutors_content">
                                        <h3 class="tutors_name">Jame Burns</h3>
                                        <span>Technology Teacher</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                    <div class="singTutors_social">
                                        <ul class="tutors_socnav">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single_tutors">
                                    <div class="tutors_thumb">
                                        <img src="{{asset('assets')}}/img/course-1.jpg"/>
                                    </div>
                                    <div class="singTutors_content">
                                        <h3 class="tutors_name">Jame Burns</h3>
                                        <span>Technology Teacher</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                    <div class="singTutors_social">
                                        <ul class="tutors_socnav">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Our courses content -->
        </div>
    </section>
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
        <div class="container">
            <!-- Our courses titile -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h2 class="title_two">What our Student says</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- End Our courses titile -->

            <!-- Start Our courses content -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="studentsTestimonial_content">
                        <div class="row">
                            <!-- start single student testimonial -->
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single_stsTestimonial wow fadeInUp">
                                    <div class="stsTestimonial_msgbox">
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <img class="stsTesti_img" src="{{asset('assets')}}/img/author.jpg" alt="img">
                                    <div class="stsTestimonial_content">
                                        <h3>Johnathan Doe</h3>
                                        <span>Ex. Student</span>
                                        <p>Software Department</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single student testimonial -->
                            <!-- start single student testimonial -->
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single_stsTestimonial wow fadeInUp">
                                    <div class="stsTestimonial_msgbox">
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.scrambled it to make a type specimen book</p>
                                    </div>
                                    <img class="stsTesti_img" src="{{asset('assets')}}/img/author.jpg" alt="img">
                                    <div class="stsTestimonial_content">
                                        <h3>Johnathan Doe</h3>
                                        <span>Ex. Student</span>
                                        <p>Software Department</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single student testimonial -->
                            <!-- start single student testimonial -->
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single_stsTestimonial wow fadeInUp">
                                    <div class="stsTestimonial_msgbox">
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book</p>
                                    </div>
                                    <img class="stsTesti_img" src="{{asset('assets')}}/img/author.jpg" alt="img">
                                    <div class="stsTestimonial_content">
                                        <h3>Johnathan Doe</h3>
                                        <span>Ex. Student</span>
                                        <p>Software Department</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single student testimonial -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Our courses content -->
        </div>
    </section>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->
@endsection
