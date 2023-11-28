@extends('layout.layout')

@section('title','Blog-Detalhes')

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
                        <h1 class="breadcumb-title">Detalhes do Blog</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li><a href="{{ url('/blog') }}">BLOG</a></li>
                            <li class="active">DETALHES DO BLOG</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="blog-single">
                        <div class="blog-thumb">
                            <img src="{{ asset('img/blog/blog_details1_1.png') }}" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('/blog-detalhes') }}"><i class="far fa-clock"></i>25 DE JUNHO DE 2023</a>
                                <a href="{{ url('/blog') }}"><i class="far fa-user"></i>POST POR: ADMIN</a>
                            </div>
                            <h2 class="blog-title">Estratégias para maximizar seus treinos</h2>
                            <p class="mb-30">Os membros da nossa equipe de academia não são apenas apaixonados por fitness, mas também por promover um senso de comunidade em nossa academia. Eles criam um ambiente caloroso e inclusivo onde os membros se sentem bem-vindos, apoiados e conectados. Eles organizam atividades em grupo, desafios e eventos que unem nossos membros, incentivando a camaradagem, a competição amigável e o apoio mútuo.
                            </p>
                            <p>Entendemos que cada indivíduo é único, com objetivos, habilidades e preferências diferentes. Os membros da nossa equipe de ginástica se destacam em fornecer uma abordagem personalizada para sua jornada de condicionamento físico. Eles reservam um tempo para ouvir, avaliar e personalizar seus treinos e programas para garantir que estejam alinhados com seus objetivos e adequados ao seu estilo de vida. Esta atenção personalizada permite um condicionamento físico mais eficaz e gratificante</p>
                            <blockquote>
                                <p>Oferecemos opções de assinatura com desconto para estudantes e idosos que desejam priorizar sua saúde</p>
                                <cite>William Benjamin</cite>
                                <span class="desig">Autor Principal</span>
                            </blockquote>
                            <p class="mb-30">Nossa associação padrão fornece acesso às nossas instalações da academia durante o horário normal de funcionamento. Esta opção é ideal para quem prefere treinos independentes e deseja usufruir de nossos equipamentos e comodidades de última geração. Para aqueles que buscam uma experiência elevada na academia, nossa assinatura premium oferece vantagens e vantagens adicionais. Juntamente com o acesso a todas as nossas instalações de academia, os membros premium desfrutam de privilégios exclusivos, como reservas de aulas prioritárias, serviço de toalhas gratuito e acesso a programas de treinamento ou workshops especializados.</p>
                            <p class="mb-35">Compreendemos a importância do condicionamento físico para toda a família. Nossa opção de associação familiar permite que vários membros da família se unam em uma única associação, tornando-a uma opção econômica. Esta opção incentiva um estilo de vida saudável e ativo para todos na sua casa.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="thumb mb-sm-0 mb-30">
                                        <img src="{{ asset('img/blog/blog_details1_2.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="thumb">
                                        <img src="{{ asset('img/blog/blog_details1_3.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <p class="mt-35">Oferecemos opções de assinatura com desconto para estudantes e idosos que desejam priorizar sua saúde e preparo físico. Essas associações especializadas são projetadas para tornar o condicionamento físico acessível e acessível para esses grupos específicos. Se você estiver visitando a região ou quiser trazer um amigo para se exercitar, oferecemos passes diários e passes para convidados. Estas opções permitem o acesso temporário às nossas instalações de ginásio e dão-lhe a oportunidade de experimentar o que Fitmas tem para oferecer.</p>
                        </div>
                        <div class="share-links clearfix ">
                            <span class="share-links-title">Tags:</span>
                            <div class="tagcloud">
                                <a href="blog.html">CONSELHO</a>
                                <a href="blog.html">AJUSTAR</a>
                                <a href="blog.html">AUTOR</a>
                                <a href="blog.html">FAMÍLIA</a>
                            </div>
                        </div>
                        <div class="blog-author bg-smoke2">
                            <div class="auhtor-img">
                                <img src="{{ asset('img/blog/blog-author.png') }}" alt="Blog Author Image">
                            </div>
                            <div class="media-body">
                                <h3 class="author-name"><a href="team-details.html">William Benjamin</a></h3>
                                <span class="author-desig">Autor</span>
                                <p class="author-text">Oferecemos opções de assinatura com desconto para estudantes e idosos que desejam priorizar sua saúde e preparo físico. Estes especializados em associações são projetados</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-wrap">
                        <h2 class="blog-inner-title">3 Comentários</h2>
                        <ul class="comment-list">
                            <li class="comment-item">
                                <div class="post-comment">
                                    <div class="comment-avater">
                                        <img src="{{ asset('img/blog/blog_comment1.png') }}" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 DE JUNHO DE 2023</span>
                                        <h3 class="name">Daniel Adam</h3>
                                        <p class="text">Capacite de forma colaborativa o comércio eletrônico multifuncional para aplicações potenciais. Produza perfeitamente mercados plug-and-play em cenários sinérgicos.</p>
                                        <div class="reply_and_edit">
                                            <a href="{{ url('/blog-detalhes') }}" class="reply-btn">Responder <i class="far fa-reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="comment-item">
                                        <div class="post-comment">
                                            <div class="comment-avater">
                                                <img src="{{ asset('img/blog/blog_comment2.png') }}" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 DE JUNHO DE 2023</span>
                                                <h3 class="name">Zenelia Lozhe</h3>
                                                <p class="text">Capacite de forma colaborativa o comércio eletrônico multifuncional para aplicações em potencial e produtividade sem esforço</p>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="reply-btn">Responder <i class="far fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comment-item">
                                <div class="post-comment">
                                    <div class="comment-avater">
                                        <img src="{{ asset('img/blog/blog_comment3.png') }}" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 DE JUNHO DE 2023</span>
                                        <h3 class="name">John Smith</h3>
                                        <p class="text">Capacite de forma colaborativa o comércio eletrônico multifuncional para aplicações potenciais. Produza perfeitamente mercados plug-and-play em cenários sinérgicos.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details.html" class="reply-btn">Responder <i class="far fa-reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Comment Form -->
                        <div class="comment-form bg-smoke2 mb-30">
                            <div class="form-title">
                                <h3 class="blog-inner-title"> Deixe uma resposta</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Seu nome" class="form-control style-white">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Endereço de email" class="form-control style-white">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Deixe sua mensagem" class="form-control style-white"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="btn">Obtenha uma cotação</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Comment end -->

                </div>

                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Postagens recentes</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url('/blog-detalhes') }}"><img src="{{ asset('img/blog/recent-post1.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ url('/blog-detalhes') }}">Estratégias Essenciais Para Maximizar Seu</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ url('/blog') }}blog.html">25 DE JUNHO DE 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url('/blog-detalhes') }}"><img src="{{ asset('img/blog/recent-post2.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ url('/blog-detalhes') }}blog-details.html">
                                            Treinamento Funcional Na Sua Rotina...</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ url('/blog') }}">25 DE JUNHO DE 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url('/blog-detalhes') }}"><img src="{{ asset('img/blog/recent-post3.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ url('/blog-detalhes') }}">Conselhos Sobre Dicas De Nutrição Para Frequentadores De Academia</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ url('/blog') }}">25 DE JUNHO DE 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li>
                                    <a href="{{ url('/blog') }}"><i class="fa-solid fa-arrow-right"></i>Treinamento de boxe</a>
                                </li>
                                <li>
                                    <a href="{{ url('/blog') }}"><i class="fa-solid fa-arrow-right"></i>Aula de musculação
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/blog') }}"><i class="fa-solid fa-arrow-right"></i>Aula de Meditação</a>
                                </li>
                                <li>
                                    <a href="{{ url('/blog') }}"><i class="fa-solid fa-arrow-right"></i>Treinamento de ioga mental</a>
                                </li>
                                <li>
                                    <a href="{{ url('/blog') }}"><i class="fa-solid fa-arrow-right"></i>Classe Corporal CrossFit</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_gallery">
                            <h3 class="widget_title">Galeria de Projetos</h3>
                            <div class="insta-feed">
                                <a href="{{ url('/blog') }}"><img src="{{ asset('img/widget/widget1-1.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('img/widget/widget1-2.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('img/widget/widget1-3.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('img/widget/widget1-4.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('img/widget/widget1-5.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('img/widget/widget1-6.png') }}" alt="img">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                <a href="{{ url('/blog') }}">CONSELHO</a>
                                <a href="{{ url('/blog') }}">AJUSTAR</a>
                                <a href="{{ url('/blog') }}">AUTOR</a>
                                <a href="{{ url('/blog') }}">FAMÍLIA</a>
                                <a href="{{ url('/blog') }}">VIVABEM</a>
                                <a href="{{ url('/blog') }}">SAÚDE/a>
                                <a href="{{ url('/blog') }}">FITNESS</a>
                                <a href="{{ url('/blog') }}">ACADEMIA</a>
                                <a href="{{ url('/blog') }}">JUÍZ</a>
                                <a href="{{ url('/blog') }}">SOLUÇÃO</a>
                                <a href="{{ url('/blog') }}">TREINAMENTO</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection

