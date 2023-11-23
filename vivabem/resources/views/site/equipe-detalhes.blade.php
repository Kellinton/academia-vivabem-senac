@extends('layout.layout')

@section('title','Team Details')

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
                        <h1 class="breadcumb-title">Team Details</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">TEAM DETAILS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Team Area
    ==============================-->
    <div class="team-area-1 space">
        <div class="container">
            <div class="single-team-details">
                <div class="team-about-card mb-40" data-bg-src="assets/img/bg/team-details-bg.png">
                    <div class="row g-lg-0">
                        <div class="col-lg-5">
                            <div class="team-about-card_img">
                                <img class="w-100" src="assets/img/team/team-details.png" alt="team image">
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="team-about-card_box">
                                <h2 class="team-about-card_title">Milano Digits</h2>
                                <h6 class="team-about-card_desig">Body Building Expert</h6>
                                <p class="team-about-card_text">Milano is a certified Body Builder with over 10 years of experience in Champion Ship And Body Building Tournament</p>
                                <div class="social-btn">
                                    <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                                <div class="row gy-30">
                                    <div class="col-lg-6">
                                        <div class="team-about-card_info">
                                            <span class="icon"><i class="fas fa-user"></i></span>
                                            <p><span>Experience </span> More Than 10 Years</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="team-about-card_info">
                                            <span class="icon"><i class="fas fa-phone"></i></span>
                                            <p><span>Phone </span> +(256) 21458-21456</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="team-about-card_info">
                                            <span class="icon"><i class="fas fa-envelope"></i></span>
                                            <p><span>Email </span> info@tronix.com</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="team-about-card_info">
                                            <span class="icon"><i class="fas fa-fax"></i></span>
                                            <p><span>Fax </span> +2568145632</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="page-subtitle">About Milano Digits</h3>
                <p>Milano is a certified network engineer with over 10 years of experience in designing and deploying network solutions. She specializes in configuring and optimizing network devices and protocols to ensure maximum performance and security. Jane has extensive experience working with Cisco and Juniper network devices and is always up-to-date with the latest networking technologies. </p>
                <p class="mb-n1">Our team has the skills and expertise to provide comprehensive and effective IT solutions for small businesses. We are committed to delivering high-quality services and building long-term partnerships with our clients.</p>
            </div>
        </div>
    </div>


@endsection
