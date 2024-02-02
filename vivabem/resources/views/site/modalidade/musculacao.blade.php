@extends('layout.layout')

@section('title','Musculação')

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
                        <h1 class="breadcumb-title">Musculação</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">DETALHES DO SERVIÇO</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-50">
                            <img src="{{ asset('img/normal/service-details1-1.png') }}" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Musculação</h2>
                            <p class="mb-30">Os boxeadores praticam exercícios cardiovasculares intensos para aumentar a resistência e a resistência. Isso inclui atividades como correr, pular corda e treinamento intervalado de alta intensidade (HIIT) para melhorar o condicionamento cardiovascular geral. Treinamento de força e potência: os boxeadores se concentram na construção de força funcional e poder explosivo para desferir socos poderosos. Isso envolve exercícios de levantamento de peso, pliometria e exercícios de peso corporal, como flexões, flexões, agachamentos e exercícios básicos.</p>
                            <p class="mb-50">Durante o CrossFit Boxing Challenge, você participará de um regime de treino dinâmico que incorpora elementos de treinamento de força, condicionamento cardiovascular, agilidade e coordenação. Sob a orientação de treinadores experientes, você aprenderá técnicas adequadas de boxe, trabalho de pés e manobras defensivas, ao mesmo tempo em que se esforça em uma série de treinos intensos de CrossFit. Cada sessão desafiará sua resiliência física e mental, construindo não apenas força, mas também aumentando sua resistência e resistência mental.</p>
                            <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                            <p>Existem vários motivos pelos quais você deve nos escolher:</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i>Diversificada gama de serviços:</h6>
                                        <p>Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i>Conhecimento e Experiência:</h6>
                                        <p>Contamos com uma equipe de profissionais de fitness altamente qualificados e experientes que se dedicam a ajudá-lo...</p>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-25 mb-50">Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                            <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                            <div class="service-page-list checklist mb-50" data-bg-src="{{ asset('img/normal/service-details1-2.png') }}">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Projetar programa de treino.</li>
                                    <li><i class="far fa-check-circle"></i>Sobrecarga progressiva.</li>
                                    <li><i class="far fa-check-circle"></i>Concentre-se na forma adequada.</li>
                                    <li><i class="far fa-check-circle"></i>Seja consistente com o treinamento.</li>
                                    <li><i class="far fa-check-circle"></i>Ajuste a ingestão de calorias conforme necessário.</li>
                                </ul>
                            </div>
                            <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Qual é o horário de funcionamento da sua academia?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Que comodidades e instalações sua academia oferece?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Você fornece serviços de treinamento pessoal?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Todos as modalidades</h3>
                            <ul>
                                <li>
                                    <a href="{{ url('/modalidade/musculacao') }}"><i class="fa-solid fa-arrow-right"></i>Musculação</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/aerobica') }}"><i class="fa-solid fa-arrow-right"></i>Aeróbica</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/pilates') }}"><i class="fa-solid fa-arrow-right"></i>Pilates</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/yoga') }}"><i class="fa-solid fa-arrow-right"></i>Yoga</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/treinamento-funcional') }}"><i class="fa-solid fa-arrow-right"></i>Treinamento Funcional</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/zumba') }}"><i class="fa-solid fa-arrow-right"></i>Zumba</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/natacao') }}"><i class="fa-solid fa-arrow-right"></i>Natação</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/artes-marciais') }}"><i class="fa-solid fa-arrow-right"></i>Artes Marciais</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/alongamento-flexibilidade') }}"><i class="fa-solid fa-arrow-right"></i>Alongamento e Flexibilidade</a>
                                </li>
                                <li>
                                    <a href="{{ url('/modalidade/treino-cardiovascular') }}"><i class="fa-solid fa-arrow-right"></i>Treino Cardiovascular</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Jornada de trabalho</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Segunda a Sexta, das 13h às 14h
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Sábado 8h – 12h
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Domingo fechado
                                </li>
                            </ul>
                        </div>
                    </aside>
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

@endsection
