<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    @yield('metaHead')

    {{-- Config meta tags --}}
    <meta name="author" content="Wagner Bugs" />
    <meta name="generator" content="VSCode, Laravel, PHP 8*" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="rating" content="general" />

    {{-- Config seo tag --}}
    <link rel="canonical" href="{{ URL::current() }}" />

    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}"">
    <link rel=" manifest" href="{{ asset('site.webmanifest') }}"">

    <!-- bootstrap css -->
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- owl carousel css -->
    <link href="{{ asset('plugins/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owl-carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- aos css -->
    <link href="{{ asset('plugins/aos-master/aos.css') }}" rel="stylesheet">
    <!-- font awesome css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- template css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6322ed91560f0d00125e7715&product=sop' async='async'></script>


    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '712230143826763');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=712230143826763&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->


    @yield('codeHead')
</head>

<body class="home-page">

    @yield('codeBody')

    <!-- header -->
    <div class="header clearfix position-fixed w-100 pt-5">
        <div class="container clearfix">
            <div class="row clearfix align-items-center">

                <!-- logo -->
                <div class="col-4 col-sm-4 header-logo-holder clearfix">
                    <h1><a href="/"><img src="images/logo-1.png" alt="Alliance | Casas pr?? fabricadas" width="100" /></a></h1>
                </div>
                <!-- // logo // -->

                <div class="col-8 col-sm-8 header-nav-holder clearfix">
                    <ul class="header-nav clearfix m-0 d-flex align-items-center justify-content-end list-unstyled">

                        <li class="header-nav-li clearfix">
                            <a class="header-nav-link navigation-opener" href="javascript:">
                                <span class="header-nav-btn-line"></span>
                                <span class="header-nav-btn-line"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- navigation menu -->
    <div class="navigation-holder clearfix h-100 position-fixed">
        <div class="navigation-holder-inner clearfix">
            <div class="container clearfix">
                <div class="row cleafix h-100 overflow-hidden navigation-holder-row">
                    <div class="col-md-6 clearfix nav-section-col nav-section-col-left h-100">
                        <div class="nav-section-col-inner clearfix h-100">
                            <ul class="nav-section-ul list-unstyled clearfix h-100">
                                <li><a class="nav-section-link text-decoration-none">&nbsp;</a></li>
                                <li><a href="{{ route('site.index') }}" class="nav-section-link active text-decoration-none">In??cio</a></li>
                                <li><a href="{{ route('site.sobre') }}" class="nav-section-link text-decoration-none">Sobre n??s</a></li>
                                {{-- <li><a href="route('site.obras') }}" class="nav-section-link text-decoration-none">Casas & Projetos</a></li> --}}
                                <li><a href="{{ route('site.duvidas') }}" class="nav-section-link text-decoration-none">D??vidas</a></li>
                                <li><a href="{{ route('site.contato') }}" class="nav-section-link text-decoration-none">Fale conosco</a></li>
                                @auth
                                <li><a href="{{ route('home') }}" class="nav-section-link text-decoration-none">Painel Administrativo</a></li>
                                <li><a href="{{ route('logout') }}" class="nav-section-link text-decoration-none">Sair</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 clearfix nav-section-col nav-section-col-right">
                        <div class="nav-section-col-inner clearfix bg-green-1 p-3 p-md-5">
                            <a href="javascript:" class="text-decoration-none d-flex flex-wrap header-contact-link text-white mb-3">
                                <span class="footer-contact-link-1-img-holder text-white clearfix mr-2">
                                    <img src="images/footer-location.webp" alt="location" class="img-white-scale">
                                </span>
                                <p class="footer-contact-link-1-content header-contact-link font-AvenirLTStd-Roman font-16 text-white ">R. Pref. Helmuth Fallgatter, 160 - Joinville - SC - (47) 9 8820 9090</p>
                            </a>
                            <a href="javascript:" class="text-decoration-none d-flex flex-wrap header-contact-link text-white mb-3">
                                <span class="footer-contact-link-1-img-holder text-white clearfix mr-2">
                                    <img src="images/footer-location.webp" alt="location" class="img-white-scale">
                                </span>
                                <p class="footer-contact-link-1-content header-contact-link font-AvenirLTStd-Roman font-16 text-white ">R. Jos?? Fernando Andriani, 123 - Tijucas - SC - (47) 9 9838 6585</p>
                            </a>
                            <div class="d-flex flex-wrap clearfix footer-social-holder ml-n1 mt-5">
                                <a href="javascript:" class="footer-social-link bg-black text-white d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none mx-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="javascript:" class="footer-social-link bg-black text-white d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none mx-1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // header // -->

    @yield('content')

    <!-- footer part -->
    <div class="footer-part clearfix section position-relative">
        <img src="images/footer-back-1.webp" alt="footer" class="w-100 footer-part-grass-img" />
        <div class="top-footer-part clearfix bg-black">
            <div class="container clearfix">
                <!-- top-footer-contacts-holder -->
                <div class="top-footer-contacts-holder clearfix mx-auto row">
                    <div class="col-md-6 top-footer-contacts-holder-col top-footer-contacts-holder-col-left clearfix bg-green-2 py-4">
                        <div class="row clearfix my-1 flex-nowrap">
                            <div class="col col-md-3 col-sm-2 col-2 clearfix d-inline-flex align-items-center flex-wrap justify-content-center footer-cntct-left">
                                <div class="top-footer-contact-icon-holder rounded-circle bg-black-gradient-1 align-items-center justify-content-center d-flex flex-wrap">
                                    <i class="fas fa-map-marker-alt font-20 text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-10 col-10 clearfix d-inline-flex align-items-center flex-wrap footer-cntct-right">
                                <div class="top-footer-contact-info-holder">
                                    <h4 class="text-white font-18 font-Archivo-Regular font-weight-bold">Joinville - SC<br>R. Pref. Helmuth Fallgatter, 160<br>(47) 9 8820 9090</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 top-footer-contacts-holder-col top-footer-contacts-holder-col-right clearfix bg-green-1 py-4">
                        <div class="row clearfix my-1 flex-nowrap">
                            <div class="col col-md-3 col-sm-2 col-2 clearfix d-inline-flex align-items-center flex-wrap justify-content-center footer-cntct-left">
                                <div class="top-footer-contact-icon-holder rounded-circle bg-black-gradient-1 align-items-center justify-content-center d-flex flex-wrap">
                                    <i class="fas fa-map-marker-alt font-20 text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-10 col-10 clearfix d-inline-flex align-items-center flex-wrap footer-cntct-right">
                                <div class="top-footer-contact-info-holder">
                                    <h4 class="text-white font-18 font-Archivo-Regular font-weight-bold">Tijucas - SC<br>R. Jos?? Fernando Andriani, 123<br>(47) 9 9838 6585</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top-footer-holder -->
                <div class="footer-row-1 clearfix pb-sm-5">
                    <div class="row clearfix">
                        <div class="col-md-4 col-lg-6 clearfix footer-row-1-col">
                            <a href="javascript:" class="mb-4 text-decoration-none d-table"><img src="images/logo-1.png" alt="Alliance Casas Pr?? Fabricadas" width="155" /></a>
                            <p class="font-30 font-Brandon_reg font-weight-bold text-white footer-logo-sub-title">Casas pr?? fabricadas</p>
                            <h4 class="font-40 font-Brandon_reg font-weight-bold mb-4 text-gradient-green-1 footer-contact-number-1">(47) 9 8820 9090</h4>
                            <p class="font-20 opacity-0-5 font-Brandon_reg text-white">Uma casa no campo, praia ou cidade?<br>Quem sabe um sobrado?</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 clearfix footer-row-1-col">
                            <p class="font-30 font-Brandon_reg font-weight-bold text-white">Links ??teis</p>
                            <span class="divider-green-1 mt-2"></span>
                            <ul class="list-unstyled mt-5 footer-links-ul">
                                <li><a href="{{ route('site.index') }}" class="active text-decoration-none footer-nav-link-1">In??cio</a></li>
                                <li><a href="{{ route('site.contato') }}" class="text-decoration-none footer-nav-link-1">Contato</a></li>
                                <li><a href="{{ route('site.privacidade') }}" class="text-decoration-none footer-nav-link-1">Pol??tica de privacidade</a></li>
                                <li><a href="{{ route('site.termos') }}" class="text-decoration-none footer-nav-link-1">Termos e condi????es de uso</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 clearfix footer-row-1-col">
                            <p class="font-30 font-Brandon_reg font-weight-bold text-white">D??vidas?!</p>
                            <span class="divider-green-1 mt-2"></span>
                            <ul class="list-unstyled mt-5 footer-links-ul">
                                <li><a href="{{ route('site.madeira') }}" class="text-decoration-none footer-nav-link-1">O que ?? madeira de lei?</a></li>
                                <li><a href="{{ route('site.investir') }}" class="text-decoration-none footer-nav-link-1">Vale a pena comprar casa de madeira?</a></li>
                            </ul>
                            <div class="d-flex flex-wrap clearfix footer-social-holder ml-n1">
                                <a href="https://www.facebook.com/alliancecasasprefabricadas" class="footer-social-link bg-green-1 text-white d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none mx-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/alliancecasas" class="footer-social-link bg-green-1 text-white d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none mx-1"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.instagram.com/alliancecasastijucas" class="footer-social-link bg-green-1 text-white d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none mx-1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-footer-part clearfix py-4">
            <div class="container clearfix">
                <div class="footer-row-2 clearfix">
                    <div class="row clearfix">
                        <div class="col-sm-6 col-md-4 col-lg-6 clearfix footer-row-2-col">
                            <a href="javascript:" class="text-decoration-none d-flex flex-wrap footer-contact-link-1">
                                <span class="footer-contact-link-1-img-holder clearfix mr-2">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <p class="footer-contact-link-1-content font-AvenirLTStd-Roman font-16">R. Pref. Helmuth Fallgatter, 160</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 clearfix footer-row-2-col">
                            <a href="javascript:" class="text-decoration-none d-flex flex-wrap footer-contact-link-1">
                                <span class="footer-contact-link-1-img-holder clearfix mr-2">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                                <p class="footer-contact-link-1-content font-AvenirLTStd-Roman font-16">(47) 9 8820 9090</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 clearfix footer-row-2-col">
                            <a href="mailto:#" class="text-decoration-none d-flex flex-wrap footer-contact-link-1">
                                <span class="footer-contact-link-1-img-holder clearfix mr-2">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <p class="footer-contact-link-1-content font-AvenirLTStd-Roman font-16">contato@alliancecasas.com.br</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="last-footer-part clearfix bg-black">
            <div class="container clearfix">
                <div class="footer-row-3 clearfix py-5">
                    <div class="row clearfix">
                        <div class="col-md-8 clearfix footer-row-3-col">
                            <p class="footer-copy-content font-AvenirLTStd-Roman font-16">Imagens @ por <a href="javascript:" class="text-white">Alliance Incomporadora. LTD.</a> Todos os direitos reservados.</p>
                        </div>
                        <div class="col-md-4 clearfix footer-row-3-col">
                            <p class="footer-copy-content font-AvenirLTStd-Roman font-16 float-md-right">Desenvolvimento <a href="https://jornalrazao.com" class="text-white">Ag??ncia JR.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Back to top button -->
    <a href="javascript:" id="to-top" class=""><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    <!-- jquery js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
    <!-- aos js -->
    <script src="{{ asset('plugins/aos-master/aos.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('plugins/swiper-4.4.6/js/swiper.min.js') }}"></script>
    <!-- template custom js -->
    <script src="{{ asset('js/cr-template.js') }}"></script>

    @yield('codeFoot')

</body>

</html>
