@extends('frontend.main')
@section('title', 'HomePage')
@section('content')
<!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="{{asset('frontend/img/hero/h1_hero.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <p data-animation="fadeInUp" data-delay=".6s">Professional lawyers</p>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">We will fight<br>
                                        for you like a friend </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="{{asset('frontend/img/gallery/services_details.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <p data-animation="fadeInUp" data-delay=".6s">Best lawyers</p>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">We will fight<br>
                                        for you like a friend </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Legal Practice Area start -->
        <div class="legal-practice-area py-5">
            <div class="container">
                <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-70">
                            <h2>Legal Practice Area.</h2>
                        </div>
                    </div>
                </div>
                <!-- single items -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-practice mb-30">
                            <div class="practice-img">
                                <img src="{{asset('frontend/img/legal/legal_1.jpg')}}" alt="">

                                <!-- "practice-icon-->
                                <div class="practice-icon">
                                    <i class="flaticon-care"></i>
                                </div>
                            </div>
                            <div class="practice-caption">
                                <h4><a href="#">Family</a></h4>
                                <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-practice mb-30">
                            <div class="practice-img">
                                <img src="{{asset('frontend/img/legal/legal_2.jpg')}}" alt="">

                                <!-- "practice-icon-->
                                <div class="practice-icon">
                                    <i class="flaticon-care"></i>
                                </div>
                            </div>
                            <div class="practice-caption">
                                <h4><a href="#">Criminal Law</a></h4>
                                <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-practice mb-30">
                            <div class="practice-img">
                                <img src="{{asset('frontend/img/legal/legal_3.png')}}" alt="">

                                <!-- "practice-icon-->
                                <div class="practice-icon">
                                    <i class="flaticon-care"></i>
                                </div>
                            </div>
                            <div class="practice-caption">
                                <h4><a href="#">Insurance Law</a></h4>
                                <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Legal Practice Area End-->

        <!-- About Law Start-->
        <div class="about-low-area about-bg about-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <!-- section tittle -->
                        <div class="section-tittle section-tittle-l mb-50">
                            <h2>About Lawyer Firm</h2>
                        </div>
                        <div class="about-caption mb-100">
                            <p>ABC is the Best Law Firm in Nepal comprised of the Best Lawyers in
                                Nepal providing expert legal services. With the growing need for specialized legal
                                services for a wide range of business and private endeavors, we provide legal advice and
                                assistance best suited to the immediate and long-term requirements of corporate and
                                commercial business of Nepal. .</p>
                            <!-- Counter Up -->
                            <div class="count-clients">
                                <div class="single-counter text-center">
                                    <span class="counter">250</span>
                                    <p>Happy Clients</p>
                                </div>
                                <div class="single-counter text-center">
                                    <span class="counter">920</span>
                                    <p>Wining Case</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img f-left">
                                <img src="{{asset('frontend/img/about/about-low-front.jpg')}}" alt="">
                            </div>
                            <div class="about-back-img f-right d-none d-md-block">
                                <img src="{{asset('frontend/img/about/about-low-back.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Law End-->

        <!-- Contact form Start -->
        <div class="contact-form bg-height pb-130" data-background="{{asset('frontend/img/about/contact_bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle-f text-center mb-50">
                                        <h2>Free Consultation</h2>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="email" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select2">
                                                <option value="">Health Law</option>
                                                <option value="">Insurance Law</option>
                                                <option value="">Divorce</option>
                                                <option value="">Criminal Law</option>
                                                <option value="">Property</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="Email" name="subject" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-30">
                                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="submit-btn2" type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact form End -->

        <!-- Recent-case-area Start -->
        <section class="recent-case-area py-5">
            <div class="container">
                <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-70">
                            <h2>Recent Case Studies</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Vehicle Accident</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false"> Health Law</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                        href="#nav-contact" role="tab" aria-controls="nav-contact"
                                        aria-selected="false">Insurance Law </a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last"
                                        role="tab" aria-controls="nav-contact" aria-selected="false"> Bankruptcy</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_1.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Accidental</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Car Accident Insurance Critical Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_2.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Divorce</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Legal Separation & Devorce Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_3.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Study</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Boys Case Study Critical Family Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card two -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_2.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Devorce</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Legal Separation & Devorce Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_1.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Accidental</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Car Accident Insurance Critical Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_3.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Study</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Boys Case Study Critical Family Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card three -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_3.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Study</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Boys Case Study Critical Family Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_1.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Accidental</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Car Accident Insurance Critical Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_2.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Devorce</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Legal Separation & Devorce Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card foure -->
                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_2.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Devorce</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Legal Separation & Devorce Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_1.png')}}" alt="">
                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Accidental</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Car Accident Insurance Critical Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-practice mb-30">
                                    <div class="practice-img">
                                        <img src="{{asset('frontend/img/legal/legal_3.png')}}" alt="">

                                        <!-- "practice-icon-->
                                        <div class="practice-icon">
                                            <span>Study</span>
                                        </div>
                                    </div>
                                    <div class="practice-caption2">
                                        <h4>Boys Case Study Critical Family Case</h4>
                                        <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor
                                            incididunt ut labore.</p>
                                        <a href="" class="read-more1">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Recent-case-area End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area py-5" data-background="{{asset('frontend/img/testmonial/testi_bg.png')}}">
            <div class="container pt-5">
                <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle section-tittle-testi text-center mb-45">
                            <h2>Words From Clients</h2>
                        </div>
                    </div>
                </div>
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style mb-5">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                            <img src="{{asset('frontend/img/testmonial/Homepage_testi_1.png')}}" alt="">
                                            <span>ASDF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                            <img src="{{asset('frontend/img/testmonial/Homepage_testi_1.png')}}" alt="">
                                            <span>ABC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                            <img src="{{asset('frontend/img/testmonial/Homepage_testi_1.png')}}" alt="">
                                            <span>XYZ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Team Mates Start -->
        <div class="teams-area py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle section-tittle-f text-center mb-70">
                            <h2>Team Mates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-teams text-center">
                            <div class="team-img">
                                <img src="{{asset('frontend/img/team/team_1.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <h4><a href="#">Raman Shrestha</a></h4>
                                <span>Senior Lawyer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-teams text-center">
                            <div class="team-img">
                                <img src="{{asset('frontend/img/team/team_2.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <h4><a href="#">Raja Stha</a></h4>
                                <span>Professional Lawyer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-teams text-center">
                            <div class="team-img">
                                <img src="{{asset('frontend/img/team/team_3.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <h4><a href="#">Jeevan vai</a></h4>
                                <span>Top Rated Lawyer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Mates End-->

        <!-- Want To Work Start -->
        <!-- <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption">
                            <h2>Get Your Answer In Just 5 Minutes</h2>
                            <p>Checking your loan options does not affect your credit score!s</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-md-4">
                        <div class="wantToWork-btn f-right">
                            <a href="#" class="btn btn-ans">Get started <i class="ti-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Want To Work End -->
@endsection