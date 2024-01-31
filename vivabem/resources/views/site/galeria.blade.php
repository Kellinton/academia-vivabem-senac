@extends('layout.layout')

@section('title','Gallery')

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
                        <h1 class="breadcumb-title">Our Gallery</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">GALLERY</li>
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
            <div class="row gy-30">
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_1.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_1.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_2.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_2.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_3.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_3.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_4.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_4.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_5.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_5.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_6.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_6.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_7.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_7.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_8.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_8.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/portfolio1_9.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/portfolio1_9.png" alt="portfolio">
                    </div>
                </div>
            </div>
            <div class="pagination justify-content-center">
                <ul>
                    <li><a href="blog.html">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html">3</a></li>
                    <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
