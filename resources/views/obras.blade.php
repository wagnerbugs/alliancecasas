@extends('layouts.site')

@section('metaHead')

{{-- Generic meta tags --}}
<title>Alliance Casas Pré Fabricadas</title>
<meta name="description" content="Alliance Casas Pré Fabricadas. Especialista em casa pré fabricadas com madeira de lei.">
<meta name="keywords" content="casa de madeira, casa pré fabricada, madeira de lei">

{{-- Og meta tags --}}
<meta property="og:title" content="Alliance Casas Pré Fabricadas" />
<meta property="og:description" content="Alliance Casas Pré Fabricadas. Especialista em casa pré fabricadas com madeira de lei." />
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="Alliance" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image" content="https://alliancecasas.com.br/images/og.jpg" />
<meta property="og:image:secure_url" content="https://alliancecasas.com.br/images/og.jpg" />

{{-- Article meta tags --}}
<meta property="article:publisher" content="https://www.facebook.com/jornalrazao/" />

@endsection

@section('codeHead')
@endsection

@section('codeBody')
@endsection

@section('codeFoot')
@endsection

@section('content')
<!-- inner page banner -->
<div class="inner-page-header clearfix position-relative">
    <img src="images/fundo-topo.jpg" alt="classic realtors" class="object-fit-cover w-100 h-100" />
    <div class="inner-page-header-caption-holder clearfix position-absolute">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-6 clearfix inner-page-header-caption-col clearfix inner-page-header-caption-col-left pb-5 mb-5" data-aos="fade-in" data-aos-delay="450">
                    <p class="custom-carousel-caption-subtitle text-uppercase mb-3 text-white">Sonhos realizados</p>
                    <h3 class="custom-carousel-caption-title-1 text-white mb-4 font-65">Algumas obras realizadas</h3>
                    <nav class="breadcrumb rounded-0 bg-transparent align-items-center px-0">
                        <a class="breadcrumb-item text-uppercase text-white font-TitilliumWeb-SemiBold" href="{{ route('site.index') }}">Início</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.obras') }}">Obras</a>
                    </nav>
                </div>
                <div class="col-md-6 clearfix inner-page-header-caption-col clearfix inner-page-header-caption-col-left align-items-end d-flex">
                    <a href="javascript:" class="lets-talk-holder clearfix bg-green-1 row p-4 mb-0 text-decoration-none" data-aos="fade-up" data-aos-delay="450">
                        <div class="col-md-10 clearfix lets-talk-holder-col lets-talk-holder-col-left">
                            <h3 class="text-uppercase text-white font-22 font-Brandon_med mb-3">Vamos conversar?!</h3>
                            <p class="font-18 font-Brandon_med text-white opacity-0-7 letter-space-1">Nós temos a melhor proposta para você.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- top content section -->
<div class="top-content-section properties-listing-page-section section clearfix position-relative">
    <div class="container clearfix">
        <div class="title-1-holder clearfix mb-md-5 mb-3 pb-md-5">
            <h2 class="title-1 text-uppercase" data-aos="fade-in"><span class="text-black-50">Algumas </span>Obras</h2>
        </div>
        <div class="row clearfix">
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c9.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c2.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c3.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c4.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c5.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c6.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c7.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="properties-slider-1-item col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                <div class="properties-slider-1-item-inner clearfix" onclick="location.href='property-details.html';">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/c8.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Madeira Pinos</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- top featured homes section -->
<div class="top-featured-home-section section clearfix prop-list-top-featured-home-section mb-5">
    <div class="container clearfix top-featured-home-section-header-container mb-5">
        <div class="row clearfix align-items-end">
            <div class="col-md-9 clearfix">
                <div class="title-1-holder clearfix">
                    <h2 class="title-1 text-uppercase" data-aos="fade-in"><span class="text-black-50">Top </span>Finalizados</h2>
                </div>
            </div>
            <div class="col-md-3 clearfix text-md-right">
                <div class="title-3-holder clearfix ">
                    <a href="javascript:" data-aos="fade-right" data-aos-delay="400" class="btn-link title-3 d-inline-flex align-items-center text-decoration-none text-black top-featured-prop-slider-ani-btn">Ver todos<img src="images/long-arrow-right-black.png" alt="arrow" class="ml-4"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="top-featured-home-slider-section clearfix bg-black-grey-gradient">
        <div class="container clearfix position-relative">
            <div id="sliderimg" class="owl-carousel top-featured-home-slider-img-owl" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="200">
                <div class="item active"><img src="images/1.webp" alt="classic realtors" class="object-fit-cover h-100 w-100" /></div>
                <div class="item"><img src="images/2.webp" alt="classic realtors" class="object-fit-cover h-100 w-100" /></div>
                <div class="item"><img src="images/3.webp" alt="classic realtors" class="object-fit-cover h-100 w-100" /></div>
                <div class="item"><img src="images/4.webp" alt="classic realtors" class="object-fit-cover h-100 w-100" /></div>
                <div class="item"><img src="images/5.webp" alt="classic realtors" class="object-fit-cover h-100 w-100" /></div>
            </div>
            <div id="slidercaption" class="owl-carousel top-featured-home-slider-caption-owl position-absolute shadow" data-aos="fade-up">
                <div class="item active">
                    <div class="top-featured-home-slider-caption-holder clearfix">
                        <div class="top-featured-home-slider-caption-holder-inner clearfix bg-green-2">
                            <div class="media">
                                <div class="media-body pl-3 pl-sm-4">
                                    <h4 class="font-30 text-white font-Brandon_reg font-weight-bold top-featured-home-slider-caption-title">Casa 2 pisos em Tijucas</h4>
                                    <div class="row clearfix my-3 my-sm-4">
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">214m²</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">4 Quartos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">3 Banheiros</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white font-20 top-featured-prop-content-p-1">Pequena frase falando sobre o projeto. Madeira utilizada e acabamentos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-featured-home-slider-caption-holder clearfix">
                        <div class="top-featured-home-slider-caption-holder-inner clearfix bg-green-2">
                            <div class="media">
                                <div class="media-body pl-3 pl-sm-4">
                                    <h4 class="font-30 text-white font-Brandon_reg font-weight-bold top-featured-home-slider-caption-title">Caso 2 pisos em Joinville</h4>
                                    <div class="row clearfix my-3 my-sm-4">
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">120m²</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">5 quartos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">3 banheiros</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white font-20 top-featured-prop-content-p-1">Pequena frase falando sobre o projeto. Madeira utilizada e acabamentos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-featured-home-slider-caption-holder clearfix">
                        <div class="top-featured-home-slider-caption-holder-inner clearfix bg-green-2">
                            <div class="media">
                                <div class="media-body pl-3 pl-sm-4">
                                    <h4 class="font-30 text-white font-Brandon_reg font-weight-bold top-featured-home-slider-caption-title">Casa 2 pisos em Tijucas</h4>
                                    <div class="row clearfix my-3 my-sm-4">
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">150m²</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">3 quartos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">2 banheiros</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white font-20 top-featured-prop-content-p-1">Pequena frase falando sobre o projeto. Madeira utilizada e acabamentos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-featured-home-slider-caption-holder clearfix">
                        <div class="top-featured-home-slider-caption-holder-inner clearfix bg-green-2">
                            <div class="media">
                                <div class="media-body pl-3 pl-sm-4">
                                    <h4 class="font-30 text-white font-Brandon_reg font-weight-bold top-featured-home-slider-caption-title">Casa 2 pisos em Tijucas</h4>
                                    <div class="row clearfix my-3 my-sm-4">
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">180m²</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">3 quartos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">2 banheiros</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white font-20 top-featured-prop-content-p-1">Pequena frase falando sobre o projeto. Madeira utilizada e acabamentos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-featured-home-slider-caption-holder clearfix">
                        <div class="top-featured-home-slider-caption-holder-inner clearfix bg-green-2">
                            <div class="media">
                                <div class="media-body pl-3 pl-sm-4">
                                    <h4 class="font-30 text-white font-Brandon_reg font-weight-bold top-featured-home-slider-caption-title">Casa 2 pisos em Tijucas</h4>
                                    <div class="row clearfix my-3 my-sm-4">
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">60m²</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">2 quartos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix">
                                            <div class="media top-featured-home-slider-amen-media">
                                                <div class="media-body">
                                                    <p class="text-white font-20 pl-4">1 banheiro</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-white font-20 top-featured-prop-content-p-1">Pequena frase falando sobre o projeto. Madeira utilizada e acabamentos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top-featured-home-slider-pagination-section clearfix position-absolute" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">
                <ul class="top-featured-home-slider-pagination-ul list-unstyled clearfix"></ul>
            </div>
        </div>
    </div>
</div>
<!-- logo slider -->
<div class="logos-slider-section clearfix" style="margin-top: 200px">
    <div class="container clearfix">
        <div class="owl-carousel owl-theme logos-slider" data-aos="fade-in">
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in">
                <img src="images/modelo-1.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="50">
                <img src="images/modelo-2.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="100">
                <img src="images/modelo-3.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="150">
                <img src="images/modelo-4.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="200">
                <img src="images/modelo-5.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="250">
                <img src="images/modelo-6.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="300">
                <img src="images/modelo-1.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="350">
                <img src="images/modelo-2.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="400">
                <img src="images/modelo-3.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="450">
                <img src="images/modelo-4.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="500">
                <img src="images/modelo-5.jpg" class="" alt="logo" />
            </div>
            <div class="item d-flex align-items-center justify-content-center flex-wrap h-100" data-aos="fade-in" data-aos-delay="550">
                <img src="images/modelo-6.jpg" class="" alt="logo" />
            </div>
        </div>
    </div>
</div>
@endsection
