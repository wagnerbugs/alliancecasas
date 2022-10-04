@extends('layouts.site')

@section('metaHead')

{{-- Generic meta tags --}}
<title>Sobre nós | Alliance Casas Pré Fabricadas</title>
<meta name="description" content="Uma breve história sobre a Alliance e conheça nossa missão e valores.">
<meta name="keywords" content="casa de madeira, casa pré fabricada, madeira de lei">

{{-- Og meta tags --}}
<meta property="og:title" content="Sobre nós | Alliance Casas Pré Fabricadas" />
<meta property="og:description" content="Uma breve história sobre a Alliance e conheça nossa missão e valores." />
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="Alliance" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image" content="https://alliancecasas.com.br/images/og.jpg" />
<meta property="og:image:secure_url" content="https://alliancecasas.com.br/images/og.jpg" />

{{-- Article meta tags --}}
<meta property="article:publisher" content="https://www.facebook.com/alliancecasasprefabricadas/" />

@endsection

@section('codeHead')
@endsection

@section('codeBody')
@endsection

@section('codeFoot')
@endsection

@section('content')

<div class="inner-page-header clearfix position-relative">
    <img src="images/fundo-topo.jpeg" alt="classic realtors" class="object-fit-cover w-100 h-100" />
    <div class="inner-page-header-caption-holder clearfix position-absolute">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-6 clearfix inner-page-header-caption-col clearfix inner-page-header-caption-col-left pb-5 mb-5" data-aos="fade-in" data-aos-delay="450">
                    <p class="custom-carousel-caption-subtitle text-uppercase mb-3 text-white">Nossa história de sucesso</p>
                    <h3 class="custom-carousel-caption-title-1 text-white mb-4 font-65">Alliance</h3>
                    <nav class="breadcrumb rounded-0 bg-transparent align-items-center px-0">
                        <a class="breadcrumb-item text-uppercase text-white font-TitilliumWeb-SemiBold" href="{{ route('site.index') }}">Início</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.sobre') }}">Sobre nós</a>
                    </nav>
                </div>
                <div class="col-md-6 clearfix inner-page-header-caption-col clearfix inner-page-header-caption-col-left align-items-end d-flex">
                    <a href="javascript:" class="lets-talk-holder clearfix bg-green-1 row p-4 mb-0 text-decoration-none" data-aos="fade-up" data-aos-delay="450">
                        <div class="col-xl-10 col-sm-10 clearfix lets-talk-holder-col lets-talk-holder-col-left">
                            <h3 class="text-uppercase text-white font-22 font-Brandon_med mb-3">Vamos conversar?!</h3>
                            <p class="font-18 font-Brandon_med text-white opacity-0-7 letter-space-1">Nós temos a melhor proposta para você.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about us section -->
<div class="section about-section clearfix py-5 my-5">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="col-md-6 about-section-col about-section-col-has-img clearfix" data-aos="fade-in" data-aos-delay="100" data-aos-duration="900">
                <div class="about-section-col-has-img-inner clearfix w-100 overflow-hidden position-relative">
                    <img src="{{ asset('images/alliance-sobre.webp') }}" alt="Alliance Casas Pré-fabricadas - Sobre nós" class="img-fluid object-fit-cover h-100" />
                </div>
            </div>
            <div class="col-md-6 about-section-col about-section-col-right clearfix pl-md-4" data-aos="fade-in" data-aos-delay="200" data-aos-duration="900">
                {{-- <h2class="title-5font-48font-Poppins-Mediumtext-blackfont-weight-bold"data-aos="fade-in">Breverelato</h2> --}}
                <span class="divider-green-2 mb-5 mt-3"></span>
                <video width="100%" controls>
                    <source src="videos/sobre.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

<!-- contact row section -->
<div class="section contact-section clearfix mb-5">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="col-md-6 clearfix contact-section-col d-inline-flex flex-wrap" data-aos="fade-up">
                <div class="col-md-3 contact-section-innercol contact-section-innercol-left">
                    <div class="contact-section-innercol-icon-holder clearfix bg-black d-flex align-items-center justify-content-center">
                        <img src="images/no-worries.png" alt="support-24" />
                    </div>
                </div>
                <div class="col-md-9 contact-section-innercol contact-section-innercol-right pl-md-4">
                    <h4 class="font-TitilliumWeb-Bold text-uppercase text-black mb-3 font-40">Missão</h4>
                    <p class="font-AvenirLTStd-Medium opacity-0-8 font-black font-24">Temos como proposta realizar sonhos. Atendendo diretamente a necessidade de nosso cliente, cuidando de todos os detalhes para tornar toda a experiência de construção da casa própria com todo o respeito e dedicação.</p>
                </div>
            </div>
            <div class="col-md-6 clearfix contact-section-col d-inline-flex flex-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-3 contact-section-innercol contact-section-innercol-left">
                    <div class="contact-section-innercol-icon-holder clearfix bg-black d-flex align-items-center justify-content-center">
                        <img src="images/no-worries.png" alt="support-24" />
                    </div>
                </div>
                <div class="col-md-9 contact-section-innercol contact-section-innercol-right pl-md-4">
                    <h4 class="font-TitilliumWeb-Bold text-uppercase text-black mb-3 font-40">Valores</h4>
                    <p class="font-AvenirLTStd-Medium opacity-0-8 font-black font-24">Nossos valores estão em cada detalhe da empresa. Seja na escolha dos materiais que utilizaremos nas obras quanto nos profissionais que compõem nossa equipe. Dedicamos-nos em todos os detalhes e focamos na exatidão.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- properties slider section -->
<div class="stories-section section clearfix">
    <div class="container clearfix">
        <div class="stories-section-title-holder clearfix row py-5 my-3">
            <div class="col-md-7 clearfix stories-section-title-col stories-section-title-col-left">
                <p class="text-black font-18 font-MuseoSans-700 mb-2 opacity-0-7 font-18">O que nossos clientes falam</p>
                <h5 class="font-MuseoSans-500 font-40 line-height-1"><span class="text-green-2 font-MuseoSans-700 font-weight-bold">Histórias de</span> Sucesso</h5>
            </div>
            <div class="col-md-5 clearfix stories-section-title-col stories-section-title-col-right">
                <div class="owl-nav stories-slider-holder-nav d-inline-flex flex-wrap align-items-center float-right">
                    <button type="button" class="owl-prev stories-slider-holder-prev bg-transparent border-0 px-2"><img src="images/stories-slider-arrow-left.png" alt="HTML Template"></button>
                    <button type="button" class="owl-next stories-slider-holder-next bg-transparent border-0 px-2 active"><img src="images/stories-slider-arrow-right.png" alt="HTML Template"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="stories-slider-holder container clearfix" data-aos="fade-left" data-aos-duration="900">
        <div class="owl-carousel owl-theme" id="stories-slider-1">
            <div class="item stories-slider-item clearfix">
                <div class="stories-slider-item-inner clearfix d-flex flex-wrap">
                    <div class="stories-slider-item-col stories-slider-item-col-left clearfix">
                        <div class="stories-slider-dp-holder-parent clearfix position-relative d-table">
                            <div class="stories-slider-item-dp-holder clearfix rounded-circle overflow-hidden">
                                <img src="images/dona-laura.jpg" alt="dp" class="object-fit-cover w-100 h-100" />
                            </div>
                            <i class="fas fa-quote-right stories-slider-quote-1 position-absolute text-green-2 font-46"></i>
                        </div>
                        <div class="stories-slider-dp-content-holder clearfix d-table mx-auto mw-100 mt-4">
                            <h4 class="stories-profile-title-1 font-Montserrat-SemiBold text-black font-24">Laura</h4>
                            <div class="media">
                                <img src="images/Map-Pin.png" alt="pin" class="mr-2 w-auto mt-2" width="19" height="23" />
                                <div class="media-body">
                                    <p class="font-23 font-MuseoSans-500 text-dark opacity-0-7">Joinville, SC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stories-slider-item-col stories-slider-item-col-right clearfix">
                        <div class="stories-content-holder clearfix position-relative">
                            <h4 class="text-black font-MuseoSans-700 font-42 mb-5">Escolhi a Alliance</h4>
                            <p class="font-26 font-AvenirLTStd-Medium text-black">Estive em vários lugares e a Alliance foi a melhor que eu achei. O atendimento fio muito bom.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item stories-slider-item clearfix">
                <div class="stories-slider-item-inner clearfix d-flex flex-wrap">
                    <div class="stories-slider-item-col stories-slider-item-col-left clearfix">
                        <div class="stories-slider-dp-holder-parent clearfix position-relative d-table">
                            <div class="stories-slider-item-dp-holder clearfix rounded-circle overflow-hidden">
                                <img src="images/antonio.jpg" alt="dp" class="object-fit-cover w-100 h-100" />
                            </div>
                            <i class="fas fa-quote-right stories-slider-quote-1 position-absolute text-green-2 font-46"></i>
                        </div>
                        <div class="stories-slider-dp-content-holder clearfix d-table mx-auto mw-100 mt-4">
                            <h4 class="stories-profile-title-1 font-Montserrat-SemiBold text-black font-24">Antônio</h4>
                            <div class="media">
                                <img src="images/Map-Pin.png" alt="pin" class="mr-2 w-auto mt-2" width="19" height="23" />
                                <div class="media-body">
                                    <p class="font-23 font-MuseoSans-500 text-dark opacity-0-7">Tijucas, SC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stories-slider-item-col stories-slider-item-col-right clearfix">
                        <div class="stories-content-holder clearfix position-relative">
                            <h4 class="text-black font-MuseoSans-700 font-42 mb-5">Realizando um sonho</h4>
                            <p class="font-26 font-AvenirLTStd-Medium text-black">Era um sonho meu, sempre foi, agora deu certo. Um casa para reunir a família e passar o final de semana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="network-section section clearfix my-5">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-6 network-section-col network-section-map-col clearfix">
                <p class="text-white font-18 font-MuseoSans-500 mb-2 opacity-0-7">Mais de 300 sonhos construídos</p>
                <h5 class="font-MuseoSans-700 font-40 line-height-1 text-white mb-5">Nosso <span class="text-green-2">Alcance</span></h5>
                <div class="network-section-map-img-holder clearfix">
                    <img src="images/netwrok-section-map-1.png" alt="Network" class="mw-100 network-section-map-img" />
                </div>
            </div>
            <div class="col-lg-4 col-md-6 network-section-col network-section-content-col clearfix px-md-0">
                <ul class="nav nav-tabs network-section-col-tabs mb-5 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase network-switcher" data-toggle="tab" href="#home" data-img-url="images/netwrok-section-map-1.png">Joinville</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase network-switcher" data-toggle="tab" href="#menu1" data-img-url="images/netwrok-section-map-2.png">Tijucas</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content network-section-col-tabs-content">
                    <div class="tab-pane container active bg-white show" id="home">
                        <div class="network-content-col clearfix text-center position-relative py-5 px-4">
                            <img src="images/logo-black-1.png" alt="classic realtors" class="mx-auto mb-5 mw-100" />
                            <h3 class="font-36 font-Ubuntu-M text-dark mb-4 text-center">Joinville</h3>
                            <p class=" text-center font-16 font-MuseoSans-500 text-black opacity-0-5 mb-4">R. Pref. Helmuth Fallgatter, 160 <br>(47) 9 8820 9090</p>
                            <img src="images/map-pin-1.png" alt="map" class="abs-map-pin position-absolute" />
                        </div>
                    </div>
                    <div class="tab-pane container fade bg-white" id="menu1">
                        <div class="network-content-col clearfix text-center position-relative py-5 px-4">
                            <img src="images/logo-black-1.png" alt="classic realtors" class="mx-auto mb-5 mw-100" />
                            <h3 class="font-36 font-Ubuntu-M text-dark mb-4 text-center">Tijucas</h3>
                            <p class=" text-center font-16 font-MuseoSans-500 text-black opacity-0-5 mb-4">R. José Fernando Andriani, 123<br>(47) 9 9838 6585</p>
                            <img src="images/map-pin-1.png" alt="map" class="abs-map-pin position-absolute" />
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
