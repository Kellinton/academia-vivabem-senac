@extends('layout.layout')

@section('title','Contato')

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
                        <h1 class="breadcumb-title">Contate-nos</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">CONTATE NOS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Contact Area
    ==============================-->
    <div class="contact-area space bg-smoke2">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/icon/contact-icon1.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Ligue para nós 24/7</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">+584 (25) 21453</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/icon/contact-icon2.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Faça um orçamento</span>
                            <h6 class="contact-info_text"><a href="mailto:info@Vivabem.com">info@Vivabem.com</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/icon/contact-icon3.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Estação de serviço</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">25 Hilton Street</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-sec2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14635.04992989361!2d-46.43203115!3d-23.505063149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1706034453347!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container">
        <div class="contact-form-area space-bottom">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="contact-form-thumb">
                        <img src="{{ asset('img/normal/contact1.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 bg-smoke2">
                    <div class="contact-form-wrap">
                        <div class="title-area">
                            <span class="sub-title">Contate-nos
                            </span>
                            <h2 class="sec-title">Envie-nos uma mensagem</h2>
                        </div>
                        <form action="{{ route('contato.enviar') }}" method="POST" class="contact-form" id="formContato">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="nomeContato" id="nomeContato" placeholder="Seu nome" value="{{ old('nomeContato') }}">
                                        <i class="far fa-user"></i>
                                        <div id="nomeContatoError" class="error-mensagem"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="emailContato" id="emailContato" placeholder="Endereço de email" value="{{ old('emailContato') }}">
                                        <i class="far fa-envelope"></i>
                                        <div id="emailContatoError" class="error-mensagem"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="foneContato" id="foneContato" placeholder="Seu Telefone" value="{{ old('foneContato') }}">
                                        <i class="far fa-envelope"></i>
                                        <div id="foneContatoError" class="error-mensagem"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="assuntoContato" id="assuntoContato" class="form-select style-white">
                                    <option value="{{ old('assuntoContato') }}" disabled="" selected="" hidden="">Selecione o assunto</option>
                                    <option value="Musculação">Musculação</option>
                                    <option value="LevantamentoDePeso">Levantamento de peso</option>
                                    <option value="Matrículas">Matrículas</option>
                                    <option value="Outros">Outros...</option>
                                </select>
                                <div id="assuntoContatoError" class="error-mensagem"></div>
                            </div>
                            <div class="form-group col-12">
                                <textarea placeholder="Deixe sua mensagem" name="mensContato" id="mensContato" class="form-control style-white">{{ old('mensContato') }}</textarea>
                                <div id="mensContatoError" class="error-mensagem"></div>
                            </div>

                            <div class="form-btn col-12">
                                <input type="submit" value="Enviar via e-mail" class="btn" onclick="formContato(event)">
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Siga nosso
                </span>
                <h2 class="sec-title">Feed do Instagram</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed1.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed1.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed2.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed2.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed3.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed3.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed4.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed4.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed5.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed5.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed6.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed6.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed7.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed7.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="{{ asset('img/instagram/insta_feed8.png') }}"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/instagram/insta_feed8.png') }}" alt="portfolio">
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
