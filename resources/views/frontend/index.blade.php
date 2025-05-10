@extends('frontend.main')
@section('title', 'Home Page')
@section('content')
<!-- Carousel Start -->
<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{asset('frontend/img/carousel-1.jpg')}}" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            WELCOME TO FLYWAY VISAS</h4>
                        <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp"
                            data-wow-delay="0.3s">Harnessing the power of Skilled Immigration</h1>
                        <!-- <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  -->
                        </p>
                        <a class="btn rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s"
                            href="#">More Details</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/img/carousel-2.jpg')}}" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            WELCOME TO FLYWAY VISAS</h5>
                        <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp"
                            data-wow-delay="0.3s">Where Skills Meet Opportunity.</h1>
                        <!-- <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  -->
                        </p>
                        <a class="btn rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s"
                            href="#">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon wow fadeInLeft" style="background-color: #f68712;"
                data-wow-delay="0.2s" aria-hidden="false"></span>
            <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon wow fadeInRight" style="background-color: #f68712;"
                data-wow-delay="0.2s" aria-hidden="false"></span>
            <span class="visually-hidden-focusable">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded">
                    <img src="{{asset('frontend/img/about-2.png')}}" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                    <img src="{{asset('frontend/img/about-3.jpg')}}" class="img-fluid w-100 border-bottom border-5 border-primary"
                        style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                </div>
            </div>
            <div class="col-xl-8 wow fadeInRight" data-wow-delay="0.3s">
                <h5 class="sub-title pe-3">About the company</h5>
                <h1 class="display-5 mb-3">We help Making your dream into Reality.</h1>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-globe"></i></div>
                                <div class="wptb-item--holder">
                                    <h5 class="wptb-item--title">Migrate</h5>
                                    <p>Immigrate as an individual or with family through skilled Migration
                                        Programmes...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="fa fa-graduation-cap"></i></div>
                                <div class="wptb-item--holder">
                                    <h5 class="wptb-item--title">Study</h5>
                                    <p>Apply for Study Visas with us and make your dreams come true...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="fa fa-briefcase"></i></div>
                                <div class="wptb-item--holder">
                                    <h5 class="wptb-item--title">Work</h5>
                                    <p>Work and Settle with family in the country you dream to migrate...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="fa fa-business-time"></i></div>
                                <div class="wptb-item--holder">
                                    <h5 class="wptb-item--title">Business Setup in UAE Free Zones
                                    </h5>
                                    <p>Set up your business in UAE Free Zones and thrive!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="fa fa-globe-europe"></i></div>
                                <div class="wptb-item--holder">
                                    <h5 class="wptb-item--title">Europe Citizenship by Investment</h5>
                                    <p>European Citizenship by Investment for global freedom, security, and a better
                                        life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wptb-item--button">
                    <a href="#" class="btn">
                        <span class="btn-wrap">
                            <span class="btn rounded-pill text-white py-2 px-4 wow fadeInUp text-white">About
                                More</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- About End -->

<!-- Counter Facts Start -->
<div class="container-fluid counter-facts py-4">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-passport" style="color: #f68712;"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Visa Categories</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">31</span>
                            <h4 class="mb-0" style="font-weight: 600; color: #f68712; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-users" style="color: #f68712;"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Team Members</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">377</span>
                            <h4 class="mb-0" style="font-weight: 600; color: #f68712; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-user-check" style="color: #f68712;"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Visa Process</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">4.9</span>
                            <h4 class="mb-0" style="font-weight: 600; color: #f68712; font-size: 25px;">K</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-handshake" style="color: #f68712;"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Success Rates</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">98</span>
                            <h4 class="mb-0" style="font-weight: 600; color: #f68712; font-size: 25px;">%</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Facts End -->

<!-- Services Start -->
<div class="container-fluid service overflow-hidden pt-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title px-3">Visa Categories</h5>
            </div>
            <h1 class="display-5 mb-4">Enabling Your Immigration Successfully</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
                sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="{{asset('frontend/img/service-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="service-btn text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Europe Work Permit Visa</a>
                                </div>
                                <a class="btn bg-light text-black rounded-pill py-3 px-5 mb-4" href="#">Explore
                                    More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#">
                                    <h4 class="text-white mb-4 py-3">Europe Work Permit Visa</h4>
                                </a>
                                <div class="px-4">
                                    <p class="text-white mb-4">Flyway Visas is your expert Europe work permit
                                        consultants in Dubai. Get professional assistance for your Europe work
                                        permit visa and consulting needs..</p>
                                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="{{asset('frontend/img/service-2.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="service-btn text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Canada Work Permit Visa</a>
                                </div>
                                <a class="btn bg-light text-black rounded-pill py-3 px-5 mb-4" href="#">Explore
                                    More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#">
                                    <h4 class="text-white mb-4 py-3">Canada Work Permit Visa</h4>
                                </a>
                                <div class="px-4">
                                    <p class="text-white mb-4">Looking for Canada work permit consultants in Dubai?
                                        Flyway Visas is the best Canada work visa consultants in Dubai for Canada
                                        work permit visas.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                        href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="{{asset('frontend/img/service-3.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="service-btn text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Luxembourg Citizenship By Investment</a>
                                </div>
                                <a class="btn bg-light text-black rounded-pill py-3 px-5 mb-4" href="#">Explore
                                    More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#">
                                    <h4 class="text-white mb-4 py-3">Luxembourg Citizenship By Investment</h4>
                                </a>
                                <div class="px-4">
                                    <p class="text-white mb-4">Luxembourg Citizenship by Investment: Invest
                                        €500,000+ in a Luxembourg business for at least 5 years to gain citizenship
                                        and secure EU residency benefits.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                        href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="{{asset('frontend/img/service-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="service-btn text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Belgium Citizenship by Investment</a>
                                </div>
                                <a class="btn bg-light text-black rounded-pill py-3 px-5 mb-4" href="#">Explore
                                    More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#">
                                    <h4 class="text-white mb-4 py-3">Belgium Citizenship by Investment</h4>
                                </a>
                                <div class="px-4">
                                    <p class="text-white mb-4">Flyway Visas offers Belgium citizenship by investment
                                        & Belgium residency by investment. Enjoy quality life, business
                                        opportunities, & high living standards.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                        href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="{{asset('frontend/img/service-2.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="service-btn text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Canada Skilled Immigration</a>
                                </div>
                                <a class="btn bg-light text-black rounded-pill py-3 px-5 mb-4" href="#">Explore
                                    More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#">
                                    <h4 class="text-white mb-4 py-3">Canada Skilled Immigration</h4>
                                </a>
                                <div class="px-4">
                                    <p class="text-white mb-4">Thinking of immigrating to Canada using your skills?
                                        Flyway Visas, Canada immigration consultants in Dubai, will guide you for
                                        Canada skilled immigration.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                        href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="{{asset('frontend/img/service-3.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="service-btn text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Australia Skilled Immigration</a>
                                </div>
                                <a class="btn bg-light text-black rounded-pill py-3 px-5 mb-4" href="#">Explore
                                    More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#">
                                    <h4 class="text-white mb-4 py-3">Australia Skilled Immigration</h4>
                                </a>
                                <div class="px-4">
                                    <p class="text-white mb-4">Flyway Visas is the best Australia Immigration
                                        Consultants in Dubai. Get expert guidance on Australia skilled immigration
                                        program. Contact us today
                                    </p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                        href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Features Start -->
<div class="container-fluid features overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title px-3">Why Choose Us</h5>
            </div>
            <h1 class="display-5 mb-4">Reasons To Choose Us</h1>
            <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-atlas fa-4x"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Quality Immigration Service</h5>
                        <p class="mb-3">Our team of seasoned professionals is dedicated to ensuring your transition
                            is smooth, efficient, and tailored to your unique needs.</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fa fa-users fa-4x"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">100% Satisfaction</h5>
                        <p class="mb-3">Experience our commitment to 100% satisfaction service, where your needs are
                            not just met, but exceeded at every turn.</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fa fa-handshake fa-4x"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Expert Support Panel</h5>
                        <p class="mb-3">Trust in our experts to provide you with the insights, resources, and
                            strategies you need to achieve your goals and navigate your journey with confidence.</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-users fa-4x"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Direct Interviews</h5>
                                <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div> -->
            <div class="col-12">
                <a class="btn text-white rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More
                    Features</a>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Countries We Offer Start -->
<div class="container-fluid country overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
            <div class="sub-style">
                <h5 class="sub-title px-3">COUNTRIES WE OFFER</h5>
            </div>
            <h1 class="display-5 mb-4">Immigration & visa services following Countries</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
                sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="{{asset('frontend/img/country-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="{{asset('frontend/img/brazil.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Brazil</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="{{asset('frontend/img/country-2.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="{{asset('frontend/img/india.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">india</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="{{asset('frontend/img/country-3.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="{{asset('frontend/img/usa.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">New York</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="{{asset('frontend/img/country-4.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="{{asset('frontend/img/italy.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Italy</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a class="btn  rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More
                    Countries</a>
            </div>
        </div>
    </div>
</div>
<!-- Countries We Offer End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial overflow-hidden pb-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title px-3">OUR CLIENTS RIVIEWS</h5>
            </div>
            <h1 class="display-5 mb-4">What Our Clients Say</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
                sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitati eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="img">
                    </div>
                    <div class="my-auto">
                        <h5>Person Name</h5>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitati eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="{{asset('frontend/img/testimonial-2.jpg')}}" alt="img">
                    </div>
                    <div class="my-auto">
                        <h5>Person Name</h5>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitati eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="{{asset('frontend/img/testimonial-3.jpg')}}" alt="img">
                    </div>
                    <div class="my-auto">
                        <h5>Person Name</h5>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Training Start -->
<div class="container-fluid training overflow-hidden bg-light py-4">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title px-3">CHECK OUR TRAINING</h5>
            </div>
            <h1 class="display-5 mb-4">Get the Best Coacing Service Training with Our Travisa</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
                sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="{{asset('frontend/img/training-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">IELTS</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content rounded-bottom p-4">
                        <a href="#">
                            <h4 class="text-white">IELTS Coaching</h4>
                        </a>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="{{asset('frontend/img/training-2.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">TOEFL</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content rounded-bottom p-4">
                        <a href="#">
                            <h4 class="text-white">TOEFL Coaching</h4>
                        </a>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="{{asset('frontend/img/training-3.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">PTE</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content rounded-bottom p-4">
                        <a href="#">
                            <h4 class="text-white">PTE Coaching</h4>
                        </a>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="{{asset('frontend/img/training-4.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">OET</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content rounded-bottom p-4">
                        <a href="#">
                            <h4 class="text-white">OET Coaching</h4>
                        </a>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a class="btn rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">View More</a>
            </div>
        </div>
    </div>
</div>
<!-- Training End -->

<!-- Contact Start -->
<div class="container-fluid contact overflow-hidden pb-5">
    <div class="container py-5">
        <div class="office pt-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title px-3">Worlwide Offices</h5>
                </div>
                <h1 class="display-5 mb-4">Explore Our Office Worldwide</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                    atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime
                    veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="{{asset('frontend/img/office-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">Dubai</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">+971564010100</a>
                            <a href="#" class="text-muted fs-5 mb-2">info@flywayvisas.com</a>
                            <p class="mb-0">Office# 236 - Al Barsha - Al Barsha 1 - Dubai - United Arab Emirates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="{{asset('frontend/img/office-1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">Canada</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">(012) 0345 6789</a>
                            <a href="#" class="text-muted fs-5 mb-2">info@flywayvisas.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States
                                of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="{{asset('frontend/img/office-3.jpg')}}" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">United Kingdom</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">01234.567.890</a>
                            <a href="#" class="text-muted fs-5 mb-2">info@flywayvisas.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States
                                of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="{{asset('frontend/img/office-4.jpg')}}" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">India</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">+123.45.67890</a>
                            <a href="#" class="text-muted fs-5 mb-2">info@flywayvisas.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States
                                of America.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection