
@extends('layout.layout')

@section('title','Blog')

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
                        <h1 class="breadcumb-title">Nosso Blog</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">PÁGINA DO BLOG</li>
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
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_s2_1.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('/blog') }}">15 DE JUNHO DE 2023</a>
                                <a href="{{ url('/blog') }}">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/blog-detalhes') }}">Dominando as máquinas: um guia para iniciantes em equipamentos de ginástica</a></h3>
                            <a href="{{ url('/blog-detalhes') }}" class="link-btn style2"><i class="fas fa-arrow-right"></i>LER MAIS</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_s2_2.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('/blog') }}">15 DE JUNHO DE 2023</a>
                                <a href="{{ url('/blog') }}">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/blog-detalhes') }}">Dominando a academia: estratégias essenciais para maximizar seus treinos</a></h3>
                            <a href="{{ url('/blog-detalhes') }}" class="link-btn style2"><i class="fas fa-arrow-right"></i>LER MAIS</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_s2_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('/blog') }}">15 DE JUNHO DE 2023</a>
                                <a href="{{ url('/blog') }}">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/blog-detalhes') }}">Quebrando a barreira do suor: aceite o desafio do condicionamento físico na Vivabem</a></h3>
                            <a href="{{ url('/blog-detalhes') }}" class="link-btn style2"><i class="fas fa-arrow-right"></i>LER MAIS</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_s2_4.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('/blog') }}">15 DE JUNHO DE 2023</a>
                                <a href="{{ url('/blog') }}">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/blog-detalhes') }}">Abasteça sua jornada de condicionamento físico: dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                            <a href="{{ url('/blog-detalhes') }}" class="link-btn style2"><i class="fas fa-arrow-right"></i>LER MAIS</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_s2_5.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('/blog') }}">15 DE JUNHO DE 2023</a>
                                <a href="{{ url('/blog') }}">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/blog-detalhes') }}">Liberte o seu atleta interior: descubra o seu verdadeiro potencial no Vivabem</a></h3>
                            <a href="{{ url('/blog-detalhes') }}" class="link-btn style2"><i class="fas fa-arrow-right"></i>LER MAIS</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog/blog_s2_6.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('/blog') }}">15 DE JUNHO DE 2023</a>
                                <a href="{{ url('/blog') }}">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/blog-detalhes') }}">Abasteça sua jornada de condicionamento físico: dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                            <a href="{{ url('/blog-detalhes') }}" class="link-btn style2"><i class="fas fa-arrow-right"></i>LER MAIS</a>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="{{ url('/blog') }}">1</a></li>
                            <li><a href="{{ url('/blog') }}">2</a></li>
                            <li><a href="{{ url('/blog') }}">3</a></li>
                            <li><a href="{{ url('/blog') }}"><i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Insira a palavra-chave">
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
                                            <a href="blog.html">25 DE JUNHO DE 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url('/blog-detalhes') }}"><img src="{{ asset('img/blog/recent-post2.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ url('/blog-detalhes') }}">Treinamento Funcional Na Sua Rotina...</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 DE JUNHO DE 2023</a>
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
                                            <a href="blog.html">25 DE JUNHO DE 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Treinamento de boxe</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de musculação</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Meditação</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Treinamento de ioga mental</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Classe Corporal CrossFit</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_gallery">
                            <h3 class="widget_title">Galeria de Projetos</h3>
                            <div class="insta-feed">
                                <a href="blog.html"><img src="{{ asset('img/widget/widget1-1.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="{{ asset('img/widget/widget1-2.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="{{ asset('img/widget/widget1-3.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="{{ asset('img/widget/widget1-4.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="{{ asset('img/widget/widget1-5.png') }}" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="{{ asset('img/widget/widget1-6.png') }}" alt="img">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags populares</h3>
                            <div class="tagcloud">
                                <a href="{{ url('/blog') }}">CONSELHO</a>
                                <a href="{{ url('/blog') }}">AJUSTAR/a>
                                <a href="{{ url('/blog') }}">AUTOR</a>
                                <a href="{{ url('/blog') }}">FAMÍLIA</a>
                                <a href="{{ url('/blog') }}">Vivabem</a>
                                <a href="{{ url('/blog') }}">SAÚDE</a>
                                <a href="{{ url('/blog') }}">FITNESS</a>
                                <a href="{{ url('/blog') }}">ACADEMIA</a>
                                <a href="{{ url('/blog') }}">JUIZ</a>
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
