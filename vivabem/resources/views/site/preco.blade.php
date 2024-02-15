@extends('layout.layout')

@section('title','Pricing')

@section('conteudo')

     <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Pricing Plan</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">PRICING PLAN</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Pricing plan Area
    ==============================-->
    <div class="pricing-area space">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="sub-title">Pricing Plan</h3>
                <h2 class="sec-title">Our Pricing Plan</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Basic Membership</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/month</span>
                        </h4>
                        <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 trainings</li>
                                <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                                <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                                <li><i class="far fa-check-circle"></i>Free parking</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Choose This Plan</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pricing-card_active">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Standard Membeship</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/month</span>
                        </h4>
                        <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 trainings</li>
                                <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                                <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                                <li><i class="far fa-check-circle"></i>Free parking</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Choose This Plan</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Ultimate Membership</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/month</span>
                        </h4>
                        <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 trainings</li>
                                <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                                <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                                <li><i class="far fa-check-circle"></i>Free parking</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Choose This Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Make An Appointment</span>
                            <h2 class="sec-title text-white">Get a Free Consultancy
                                Right Now Here!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Make Appointment</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Need Help?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Blog Posts
                </span>
                <h2 class="sec-title">Read Our Latest Articles</h2>
            </div>
            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_1.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Nutrition Tips and Advice for Gym Goers</a></h3>
                            <p class="blog-text">These specialized memberships are designed to make fitness accessible and affordable for these specific...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_2.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                            <p class="blog-text">If you're visiting the area or want to bring a friend along for a workout, we offer day passes and guest passes...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_3.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Offer discounted options for students seniors</a></h3>
                            <p class="blog-text">We understand the importance of fitness for the whole family. Our family option allows multiple family...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_1.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Nutrition Tips and Advice for Gym Goers</a></h3>
                            <p class="blog-text">These specialized memberships are designed to make fitness accessible and affordable for these specific...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_2.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                            <p class="blog-text">If you're visiting the area or want to bring a friend along for a workout, we offer day passes and guest passes...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_3.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Offer discounted options for students seniors</a></h3>
                            <p class="blog-text">We understand the importance of fitness for the whole family. Our family option allows multiple family...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   

@endsection
