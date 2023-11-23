@extends('layout.layout')

@section('title','Service')

@section('conteudo')

        <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/bg/breadcrumb-bg.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Nossos Serviços</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/home') }}">Início</a></li>
                            <li class="active">Serviços</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-area-2 space overflow-hidden">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/icon/service-icon_2-1.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('/service-details') }}">Gym Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="{{ url('/service-details') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Ler mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/icon/service-icon_2-2.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('/service-details') }}">Power Lifting</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="{{ url('/service-details') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Ler mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/icon/service-icon_2-3,svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('/service-details') }}">Body Building</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="{{ url('service-details') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Ler mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/icon/service-icon_2-4.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('/service-details') }}">Boxing Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/icon/service-icon_2-5.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('service-details') }}">Yoga Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="{{ url('/service-details') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Ler mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/icon/service-icon_2-6.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('/service-details') }}">Meditation Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="{{ url('/service-details') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Ler mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="{{ asset('img/bg/cta-bg1.png') }}">
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
                            <a href="{{ url('/about') }}" class="btn style2">Make Appointment</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Precisa de ajuda?</p>
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
                            <img src="{{ asset('img/bg/pricing-card1-bg.png') }}" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="{{ asset('img/icon/picing-icon_1-1.svg') }}" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Basic Membership</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/mês</span>
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
                        <a class="btn style2" href="{{ url('/pricing') }}">Escolher este plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pricing-card_active">
                        <div class="pricing-card_bg">
                            <img src="{{ asset('img/bg/pricing-card1-bg.png') }}" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="{{ asset('img/icon/picing-icon_1-2.svg') }}" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Standard Membeship</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/mês</span>
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
                        <a class="btn style2" href="pricing.html">Escolher este plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="{{ asset('img/bg/pricing-card1-bg.png') }}" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="{{ asset('img/icon/picing-icon_1-3.svg') }}" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Ultimate Membership</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/mês</span>
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
                        <a class="btn style2" href="{{ asset('/pricing') }}">Escolher este plano</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
