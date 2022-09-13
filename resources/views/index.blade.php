@extends('layouts.site')

@section('metaHead')

{{-- Generic meta tags --}}
<title>Alliance Casas Pré Fabricadas</title>
<meta name="description" content="Alliance casas pré fabricadas">
<meta name="keywords" content="casa de madeira, casa pré fabricada, madeira de lei">

{{-- Og meta tags --}}
<meta property="og:title" content="Alliance Casas Pré Fabricadas" />
<meta property="og:description" content="Alliance Casas Pré Fabricadas" />
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="Alliance" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image" content="https://alliancecasas.com.br" />
<meta property="og:image:secure_url" content="https://alliancecasas.com.br" />

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

<!-- banner -->
<div class="banner-section clearfix">
    <div class="owl-carousel owl-theme owl-carousel-home">
        <!-- owl item -->
        <div class="item top-banner-item">
            <div class="top-video-banner-holder w-100 h-100" style="background:#000;">
                <img src="images/fundo-topo.jpg" alt="classic realtors" class="object-fit-cover w-100 h-100" />
            </div>
            <div class="custom-carousel-caption-holder clearfix position-absolute w-100 h-100 d-flex flex-wrap align-items-end">
                <div class="container clearfix">
                    <div class="custom-carousel-caption-1 clearfix position-relative">
                        <p class="custom-carousel-caption-subtitle text-uppercase mb-3 text-white">casas pré fabricadas</p>
                        <h3 class="custom-carousel-caption-title-1 text-white mb-4">OBRA COMPLETA, <br>DO INÍCIO AO FIM</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- owl item -->
        <div class="item top-banner-item">
            <div class="top-video-banner-holder w-100 h-100" style="background:url(images/Home-Page_01_01.webp)">
                <video width="1280" class="top-banner-video" loop>
                    <source src="videos/video-1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="custom-carousel-caption-holder clearfix position-absolute w-100 h-100 d-flex flex-wrap align-items-end">
                <div class="container clearfix">
                    <div class="custom-carousel-caption-1 clearfix position-relative">
                        <p class="custom-carousel-caption-subtitle text-uppercase mb-3 text-white">Casa no campo</p>
                        <h3 class="custom-carousel-caption-title-1 text-white mb-4">+ UM SONHO<br> REALIZADO</h3>
                        <div class="mainBannerPlayIcon">
                            <a href="javascript:" class="home-top-video-player-btn"><span><i class="fas fa-play"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- intro services section -->
<div class="top-content-section section clearfix">
    <div class="container clearfix">
        <div class="title-1-holder clearfix mb-md-5 mb-3 pb-md-5">
            <h2 class="title-1 text-uppercase" data-aos="fade-in"><span class="text-black-50">Nossos </span>diferenciais</h2>
        </div>
        <div class="row clearfix top-content-row">
            <div class="col-md-3 clearfix top-content-section-col">
                <div class="top-content-section-col-inner clearfix" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="top-content-col-number">1</h3>
                    <h6 class="top-content-col-title text-uppercase">Madeira de Altíssima Qualidade</h6>
                    <span class="devider-square-1"></span>
                    <p>As madeiras nobres, mais conhecidas como 'madeiras de lei' são espécies de árvores que possuem mais durabilidade que as comuns, além de maior resistência ao ataque de fungos e doenças, bem como contra umidade e cupins. Entre as madeiras nobres utilizadas nas casas da Alliance estão as espécies grápia, itaúba, angelim e peroba.</p>

                </div>
            </div>
            <div class="col-md-3 clearfix top-content-section-col">
                <div class="top-content-section-col-inner clearfix" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="top-content-col-number">2</h3>
                    <h6 class="top-content-col-title text-uppercase">Projetos Personalizados</h6>
                    <span class="devider-square-1"></span>
                    <p>As casas de madeira da Alliance são projetadas de forma exclusiva para cada cliente. Você escolhe o tamanho do seu projeto e nossa equipe se encarrega de realizar o seu sonho com cada detalhe.</p>

                </div>
            </div>
            <div class="col-md-3 clearfix top-content-section-col">
                <div class="top-content-section-col-inner clearfix" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="top-content-col-number">3</h3>
                    <h6 class="top-content-col-title text-uppercase">Obra Completa</h6>
                    <span class="devider-square-1"></span>
                    <p>Sem pegadinhas e sem preocupação: com a Alliance, sua casa é feita completa, desde o alicerce até o acabamento. Hidráulica, elétrica, forro... entregamos seu lar pronto para morar.</p>

                </div>
            </div>
            <div class="col-md-3 clearfix top-content-section-col">
                <div class="top-content-section-col-inner clearfix" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="top-content-col-number">4</h3>
                    <h6 class="top-content-col-title text-uppercase">Rapidez</h6>
                    <span class="devider-square-1"></span>
                    <p>Executamos mais de 35 obras simultaneamente. Nossa equipe é extremamente competente, o que permite lhe entregar com agilidade seu novo lar. Em 2021, a Alliance realizou o sonho de 140 famílias.</p>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- my achieves section -->
<div class="my-achieves-section section clearfix pt-4 position-relative">
    <div class="container clearfix pb-4">
        <div class="row clearfix align-items-end">
            <div class="col-sm-6 clearfix my-achieves-section-col my-achieves-section-col-right pl-5 mr-0 ml-auto order-sm-last" data-aos="fade-in">
                <h6 class="subtitle-1 text-uppercase">Sustentabilidade</h6>
                <h5 class="title-2">Madeira nobre de reflorestamento</h5>
                <h6 class="subtitle-2">Altíssima qualidade e durabilidade</h6>
            </div>
            <div class="col-sm-6 clearfix my-achieves-section-col">
                <div class="title-3-holder clearfix  mb-2" data-aos="fade-right">
                    <h2 class="title-3 text-uppercase d-inline-flex align-items-center">Madeira de lei <img src="images/long-arrow-right-black.png" alt="arrow" class="ml-4" /></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="awards-contentholder clearfix">
        <div class="container clearfix bg-black">
            <div class="awards-images-holder clearfix position-relative">
                <div class="row clearfix">
                    <div class="col-md-4 clearfix awards-info-holder-col text-md-right pt-3 pr-5">
                        <h4 class="title-4 text-uppercase text-white mb-5" data-aos="fade-up">Amostra</h4>
                        <p class="font-Pacifico-Regular font-24 text-white mb-4 awards-content" data-aos="fade-up" data-aos-delay="200">Projetos realizados:<br><span class="font-Montserrat-Medium font-31">( 382 )</span></p>
                        <p class="font-Pacifico-Regular font-24 text-white mb-4 awards-content" data-aos="fade-up" data-aos-delay="400">Em andamento:<br><span class="font-Montserrat-Medium font-31">( 17 )</span></p>
                        <span class="badge badge-pill badge-warning award-pill font-Ubuntu-M font-24 py-3 px-4" data-aos="fade-in" data-aos-delay="500">2019 - 2022</span>
                    </div>
                    <div class="col-md-8 clearfix awards-all-holder-col text-right">
                        <div class="row clearfix awards-all-holder-col-row">
                            <div class="col-6 col-sm-4 award-holder-col clearfix my-3" data-aos="fade-right">
                                <div class="award-holder-col-inner rounded d-flex flex-wrap align-items-center justify-content-center p-3 cursor-pointer h-100">
                                    <img src="images/modelo-1.jpg" alt="award" class="img-grayscale mh-100 mw-100" />
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 award-holder-col clearfix my-3" data-aos="fade-right" data-aos-delay="200">
                                <div class="award-holder-col-inner rounded d-flex flex-wrap align-items-center justify-content-center p-3 cursor-pointer h-100">
                                    <img src="images/modelo-2.jpg" alt="award" class="img-grayscale mh-100 mw-100" />
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 award-holder-col clearfix my-3" data-aos="fade-right" data-aos-delay="300">
                                <div class="award-holder-col-inner rounded d-flex flex-wrap align-items-center justify-content-center p-3 cursor-pointer h-100">
                                    <img src="images/modelo-3.jpg" alt="award" class="img-grayscale mh-100 mw-100" />
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 award-holder-col clearfix my-3" data-aos="fade-right" data-aos-delay="400">
                                <div class="award-holder-col-inner rounded d-flex flex-wrap align-items-center justify-content-center p-3 cursor-pointer h-100">
                                    <img src="images/modelo-4.jpg" alt="award" class="img-grayscale mh-100 mw-100" />
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 award-holder-col clearfix my-3" data-aos="fade-right" data-aos-delay="500">
                                <div class="award-holder-col-inner rounded d-flex flex-wrap align-items-center justify-content-center p-3 cursor-pointer h-100">
                                    <img src="images/modelo-5.jpg" alt="award" class="img-grayscale mh-100 mw-100" />
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 award-holder-col clearfix my-3" data-aos="fade-right" data-aos-delay="600">
                                <div class="award-holder-col-inner rounded d-flex flex-wrap align-items-center justify-content-center p-3 cursor-pointer h-100">
                                    <img src="images/modelo-6.jpg" alt="award" class="img-grayscale mh-100 mw-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- testimonials section -->
<div class="testimonials-section section clearfix">
    <div class="container clearfix">
        <div class="title-1-holder clearfix mb-3 pb-md-5">
            <h2 class="title-1 text-uppercase" data-aos="fade-in"><span class="text-black-50">Alguns </span>Depoimentos</h2>
        </div>
    </div>
    <div class="bg-grey-2 clearfix">
        <div class="container clearfix">
            <div class="creative-testimonials-holder1 clearfix row clearix mx-0">
                <div class="col-md-3 creative-testimonials-holder1-col clearfix px-0 order-md-last">
                    <div class="creative-testimonials-holder1-col-inner creative-testimonials-1-caption-holder-pb-extra clearfix position-relative w-100 h-100 p-4 clearfix d-flex flex-wrap flex-column">
                        <p class="font-Brandon_bld font-24 text-black line-height-1-2" data-aos="fade-in">Já temos<br><span class="font-48 font-Brandon_reg text-green-1 font-weight-bold">382</span><br>famílias felizes.</p>
                        <p class="font-18 font-Brandon_bld text-black opacity-0-6 mb-0 mt-auto" data-aos="fade-up" data-aos-delay="100">Realizando sonhos em curtíssimo tempo.</p>
                    </div>
                </div>
                <div class="col-md-6 creative-testimonials-holder1-col clearfix px-0">
                    <div class="creative-testimonials-holder1-col-inner clearfix bg-creame-pattern position-relative creative-testimonials-holder1-col-inner-shadow1 h-100" data-aos="fade-in">
                        <img src="images/antonio.png" alt="testimonials" class="creative-testimonials-img float-right mh-100 mw-100" />
                        <div class="creative-testimonials-1-caption-holder w-100 h-100 p-4 position-absolute clearfix text-white d-flex flex-wrap flex-column">
                            <a href="javascript:" class="btn btn-play-green-1 text-decoration-none rounded-circle shadow p-2 d-flex align-items-center justify-content-center testimonial-player"><i class="fas fa-play text-white font-20"></i></a>
                            <div class="clearfix mb-0 mt-auto">
                                <p class="font-18 font-AvenirLTStd-Roman mb-4 text-white">"Fiquei surpreso com o prazo estabelecido e mais surpreso ao entregarem antes do tempo. Ficou perfeito".</p>
                                <h4 class="creative-testimonial-1-username text-white font-20 font-Brandon_med mb-2">Antônio</h4>
                                <h6 class="creative-testimonial-1-location text-white font-15 font-AvenirLTStd-Medium">Florianópolis, SC</h6>
                            </div>
                        </div>

                        <div class="testimonials-video-holder position-absolute clearfix w-100 h-100 overflow-hidden">
                            <video class='video-js' loop>
                                <source src='videos/depoimento-4.mp4' type='video/mp4'>
                                <p class='vjs-no-js'>
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href='https://videojs.com/html5-video-support/'>supports HTML5 video</a>
                                </p>
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 creative-testimonials-holder1-col clearfix px-0">
                    <div class="creative-testimonials-holder1-col-inner clearfix bg-creame-color position-relative creative-testimonials-holder1-col-inner-shadow2 h-100" data-aos="fade-in" data-aos-delay="400">
                        <img src="images/antonio.png" alt="testimonials" class="creative-testimonials-img float-right mh-100 mw-100" />
                        <div class="creative-testimonials-1-caption-holder creative-testimonials-1-caption-holder-pb-extra w-100 h-100 p-4 position-absolute clearfix text-white d-flex flex-wrap flex-column">
                            <a href="javascript:" class="btn btn-play-green-1 text-decoration-none rounded-circle shadow p-2 d-flex align-items-center justify-content-center testimonial-player"><i class="fas fa-play text-white font-20 "></i></a>
                            <div class="clearfix mb-0 mt-auto">
                                <h4 class="creative-testimonial-1-username text-white font-20 font-Brandon_med mb-2">Antonio</h4>
                                <h6 class="creative-testimonial-1-location text-white font-15 font-AvenirLTStd-Medium">Tijucas, SC</h6>
                            </div>
                        </div>
                        <div class="testimonials-video-holder position-absolute clearfix w-100 h-100 overflow-hidden">
                            <video class='video-js' loop>
                                <source src='videos/depoimento-2.mp4' type='video/mp4'>
                                <p class='vjs-no-js'>
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href='https://videojs.com/html5-video-support/'>supports HTML5 video</a>
                                </p>
                            </video>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container clearfix">
        <div class="creative-testimonials-holder1 clearfix row clearix mx-0">
            <div class="col-md-1 creative-testimonials-holder1-col clearfix px-0">
            </div>
            <div class="col-md-3 creative-testimonials-holder1-col clearfix px-0">
                <div class="creative-testimonials-holder1-col-inner clearfix bg-grey-1 position-relative" data-aos="fade-in" data-aos-delay="100">
                    <img src="images/dona-laura.png" alt="testimonials" class="creative-testimonials-img float-right mh-100 mw-100" />
                    <div class="creative-testimonials-1-caption-holder w-100 h-100 p-4 position-absolute clearfix text-white d-flex flex-wrap flex-column">
                        <a href="javascript:" class="btn btn-play-green-1 text-decoration-none rounded-circle shadow p-2 d-flex align-items-center justify-content-center testimonial-player"><i class="fas fa-play text-white font-20"></i></a>
                        <div class="clearfix mb-0 mt-auto">
                            <h4 class="creative-testimonial-1-username text-white font-20 font-Brandon_med mb-2">Laura</h4>
                            <h6 class="creative-testimonial-1-location text-white font-15 font-AvenirLTStd-Medium">Joinville, SC</h6>
                        </div>
                    </div>
                    <div class="testimonials-video-holder position-absolute clearfix w-100 h-100 overflow-hidden">

                        <video class='video-js' loop>
                            <source src='videos/depoimento-3.mp4' type='video/mp4'>
                            <p class='vjs-no-js'>
                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href='https://videojs.com/html5-video-support/'>supports HTML5 video</a>
                            </p>
                        </video>
                    </div>

                </div>
            </div>
            <div class="col-md-8 creative-testimonials-holder1-col clearfix px-0 mt-n145">
                <div class="creative-testimonials-holder1-col-inner clearfix bg-blue-pattern position-relative creative-testimonials-holder1-col-inner-shadow3" data-aos="fade-in" data-aos-duration="250">
                    <img src="images/dona-laura.png" alt="testimonials" class="creative-testimonials-img float-right mh-100 mw-100" />
                    <div class="creative-testimonials-1-caption-holder w-100 h-100 p-4 position-absolute clearfix text-white d-flex flex-wrap flex-column">
                        <a href="javascript:" class="btn btn-play-green-1 text-decoration-none rounded-circle shadow p-2 d-flex align-items-center justify-content-center testimonial-player"><i class="fas fa-play text-white font-20"></i></a>
                        <div class="clearfix mb-0 mt-auto">
                            <p class="font-18 font-AvenirLTStd-Roman mb-4 text-white">Minha famílie e eu somos gratos pela escolha que fizemos. Pessoal super atencioso e talentoso. </p>
                            <h4 class="creative-testimonial-1-username text-white font-20 font-Brandon_med mb-2">Laura </h4>
                            <h6 class="creative-testimonial-1-location text-white font-15 font-AvenirLTStd-Medium">Passo Fundo, RS</h6>
                        </div>
                    </div>
                    <div class="testimonials-video-holder position-absolute clearfix w-100 h-100 overflow-hidden">

                        <video class='video-js' loop>
                            <source src='videos/depoimento-1.mp4' type='video/mp4'>
                            <p class='vjs-no-js'>
                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href='https://videojs.com/html5-video-support/'>supports HTML5 video</a>
                            </p>
                        </video>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- top featured homes section -->
<div class="top-featured-home-section section clearfix">
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

<!-- properties slider section -->
<div class="properties-slider-section clearfix section">
    <div class="container clearfix">
        <div class="owl-nav properties-slider-1-nav d-inline-flex flex-wrap align-items-center float-right mr-n2">
            <button type="button" class="owl-prev properties-slider-1-prev bg-transparent border-0 px-2"><img src="images/long-arrow-left-black.png" alt="HTML Template"></button>
            <button type="button" class="owl-next properties-slider-1-next bg-transparent border-0 px-2"><img src="images/long-arrow-right-black.png" alt="HTML Template"></button>
        </div>
    </div>
    <div class="properties-slider-1-holder clearfix mt-5">
        <div class="properties-slider-1 owl-carousel">
            <div class="item properties-slider-1-item" data-aos="fade-up">
                <div class="properties-slider-1-item-inner clearfix">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/1.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Tijucas - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Terra Nova</h4>
                            <p class="font-AvenirLTStd-Medium properties-slider-1-content mb-3">Madeira Imbuia</p>
                            <a class="font-AvenirLTStd-Medium properties-slider-1-link" href="javascript:">Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item properties-slider-1-item" data-aos="fade-up" data-aos-delay="100">
                <div class="properties-slider-1-item-inner clearfix">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/2.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Joinville - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Atiradores</h4>
                            <p class="font-AvenirLTStd-Medium properties-slider-1-content mb-3">Madeira Grapia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item properties-slider-1-item" data-aos="fade-up" data-aos-delay="200">
                <div class="properties-slider-1-item-inner clearfix">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/3.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Blumenau - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Bairro Rural</h4>
                            <p class="font-AvenirLTStd-Medium properties-slider-1-content mb-3">Madeira Peroba</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item properties-slider-1-item" data-aos="fade-up" data-aos-delay="300">
                <div class="properties-slider-1-item-inner clearfix">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/4.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Coqueiros - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Bairro Universitário</h4>
                            <p class="font-AvenirLTStd-Medium properties-slider-1-content mb-3">Madeira Pinheiro</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item properties-slider-1-item" data-aos="fade-up" data-aos-delay="400">
                <div class="properties-slider-1-item-inner clearfix">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/5.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">Morro Grande - SC</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Bairro Rural</h4>
                            <p class="font-AvenirLTStd-Medium properties-slider-1-content mb-3">Madeira Imbuia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item properties-slider-1-item" data-aos="fade-up" data-aos-delay="500">
                <div class="properties-slider-1-item-inner clearfix">
                    <div class="properties-slider-1-img-holder clearfix">
                        <img src="images/1.webp" alt="property" class="object-fit-cover h-100 w-100" />
                    </div>
                    <div class="properties-slider-1-cntnt-holder clearfix">
                        <div class="properties-slider-1-cntnt-holder-inner clearfix">
                            <p class="properties-slider-1-price text-black font-15 font-TitilliumWeb-Bold mb-3">$72,000,000</p>
                            <h4 class="font-28 font-Archivo-Medium mb-3 properties-slider-1-title">Bairro Agro</h4>
                            <p class="font-AvenirLTStd-Medium properties-slider-1-content mb-3">Madeira Imbuia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- logo slider -->
<div class="logos-slider-section clearfix my-5">
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
