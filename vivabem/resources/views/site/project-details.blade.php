@extends('layout.layout')

@section('title','Project Details')

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
                        <h1 class="breadcumb-title">Projects Details</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="project.html">PROJECT</a></li>
                            <li class="active">PROJECT DETAILS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Portfolio Area
    ==============================-->
    <div class="portfolio-area space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-details-single-page">
                        <div class="thumb">
                            <img src="assets/img/portfolio/portfolio_details.png" alt="portfolio">
                        </div>
                        <div class="project-details-content">
                            <div class="single-project-details-wrap">
                                <div class="icon"><i class="fas fa-gear"></i></div>
                                <div class="content-details">
                                    <h6 class="subtitle">SERVICES</h6>
                                    <h5 class="title">CrossFit Boxing, Child
                                        Fitness, Coaching</h5>
                                </div>
                            </div>
                            <div class="single-project-details-wrap">
                                <div class="icon"><i class="fas fa-user"></i></div>
                                <div class="content-details">
                                    <h6 class="subtitle">CLIENT</h6>
                                    <h5 class="title">Mr. Arora’s Family &
                                        Their Friends</h5>
                                </div>
                            </div>
                            <div class="single-project-details-wrap">
                                <div class="icon"><i class="fas fa-calendar"></i></div>
                                <div class="content-details">
                                    <h6 class="subtitle">DATE</h6>
                                    <h5 class="title">Start: 29 April, 2023 &
                                        End: 15 July, 2023</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-8 col-lg-7">
                                <h3 class="page-subtitle mt-n2 mb-25">CrossFit Boxing Challenge</h3>
                                <p class="mb-30">During the CrossFit Boxing Challenge, you'll engage in a dynamic workout regimen that incorporates elements of strength training, cardiovascular conditioning, agility, and coordination. Under the guidance of experienced coaches, you'll learn proper boxing techniques, footwork, and defensive maneuvers, all while pushing yourself through a series of intense CrossFit workouts. Each session will challenge your physical and mental resilience, building not only strength but also enhancing your endurance and mental toughness.</p>
                                <p class="mb-60">The CrossFit Boxing Challenge is designed for individuals of all fitness levels, whether you're a seasoned athlete or new to both CrossFit and boxing. Our expert trainers will customize the program to suit your abilities, gradually increasing the intensity and complexity as you progress. You'll experience the thrill of hitting the bags, honing your boxing skills, and conquering challenging CrossFit exercises like kettlebell swings, box jumps, and burpees.</p>
                                <h3 class="page-subtitle mt-n2 mb-20">The challenge of project</h3>
                                <p class="mb-30">Beyond the physical benefits, the CrossFit Boxing Challenge offers a supportive and motivating community atmosphere. You'll join a group of like-minded individuals who share a passion for pushing boundaries, cheering each other on, and celebrating victories together. The camaraderie and sense of accomplishment will keep you coming back for more, as you witness your own transformation and witness the progress of your fellow challengers.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumb2 mb-md-0 mb-40">
                                            <img src="assets/img/portfolio/portfolio_details1_1.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="thumb2">
                                            <img src="assets/img/portfolio/portfolio_details1_2.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-25 mt-30">Are you ready to embrace the CrossFit Boxing Challenge? Step into the ring, challenge your limits, and unlock a new level of strength, athleticism, and confidence. Join us today and experience the exhilaration of this one-of-a-kind fitness fusion that will leave you stronger, fitter, and ready to conquer anything that comes your way.</p>
                            </div>
                            <div class="col-xxl-4 col-lg-5">
                                <aside class="sidebar-area">
                                    <div class="widget widget_schedule">
                                        <h3 class="widget_title">Working Hours</h3>
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                Monday – Friday 1.00 – 2:00 pm
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                Saturday 8.00 – 12:00 pm
                                            </li>
                                            <li class="unavailable">
                                                <i class="far fa-clock"></i>
                                                Sunday closed
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
