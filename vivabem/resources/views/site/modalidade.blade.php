@extends('layout.layout')

@section('title','Modalidades')

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
                        <h1 class="breadcumb-title">Modalidades</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">NOSSOS SERVIÇOS</li>
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
                <h3 class="sub-title">PLANO DE PREÇOS</h3>
                <h2 class="sec-title">Nosso plano de preços</h2>
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
                        <h3 class="pricing-card_title">Membro Básico</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="{{ url('/modalidade') }}pricing.html">Escolha este plano</a>
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
                        <h3 class="pricing-card_title">Membro Standard</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha este plano</a>
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
                        <h3 class="pricing-card_title">Membro Ultimate</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha este plano</a>
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
                            <span class="sub-title">Marque uma consulta</span>
                            <h2 class="sec-title text-white">Obtenha uma consultoria gratuita agora mesmo aqui!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Marque uma consulta</a>
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
    Blog Area
    ==============================-->
    <section class="blog-area space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Modalidades
                </span>
                <h2 class="sec-title">Nossa lista de modalidades</h2>
            </div>
            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_1.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></h3>
                            <p class="blog-text">Treinamento com pesos para fortalecimento muscular e desenvolvimento da
                                resistência.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_2.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/aerobica') }}">Aeróbica</a></h3>
                            <p class="blog-text">Nas nossas aulas aeróbicas, vamos além do comum. Imagine-se superando seus limites, sentindo a adrenalina fluir...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/pilates') }}">Pilates</a></h3>
                            <p class="blog-text">
                                Descubra o equilíbrio perfeito entre corpo e mente em nossas aulas de Pilates. Uma prática que vai além do exercício...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_1.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/yoga') }}">Yoga</a></h3>
                            <p class="blog-text">Encontre equilíbrio e harmonia em nossas aulas de yoga. Combinando posturas, respiração e meditação...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_2.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/pilates') }}">Treinamento Funcional</a></h3>
                            <p class="blog-text">Cada exercício é cuidadosamente projetado para aprimorar a coordenação, a estabilidade e a mobilidade...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/zumba') }}">Zumba</a></h3>
                            <p class="blog-text">Mergulhe na energia contagiante de nossas aulas de Zumba. Dança, diversão e condicionamento físico...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/natacao') }}">Natação</a></h3>
                            <p class="blog-text">Aprimore suas habilidades aquáticas em nossas aulas de natação...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/artes-marciais') }}">Artes Marciais</a></h3>
                            <p class="blog-text">Explore a arte da autodefesa e a disciplina do corpo e da mente em nossas aulas de artes marciais...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/alongamento-flexibilidade') }}">Alongamento e Flexibilidade</a></h3>
                            <p class="blog-text">Explore a liberdade de movimento e a alegria de uma jornada flexível em nossas aulas de alongamento e flexibilidade...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_1_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="{{ asset('img/blog/blog_card1_bg.png') }}">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 DEZ 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POR ANDREW</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/treino-cardiovascular') }}">Treino Cardiovascular</a></h3>
                            <p class="blog-text">Entre no ritmo acelerado das nossas aulas de treino cardiovascular e prepare-se para elevar seus batimentos cardíacos em uma jornada energizante...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
