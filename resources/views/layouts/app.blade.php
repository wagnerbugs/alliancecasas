<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Alliance Casas Pré Fabricadas. Uma empresa focada no bem estar e qualidade de vida dos nossos clientes. Pois na Alliance o seu sonho é o nosso sonho também." />
    <meta name="keywords" content="casa pre fabricada, casa de madeira, casa no campo, chale, madeira de lei, madeira nobre, peroba, graipa, pinhos" />

    <!-- AGUARADANDO HOMOLOGAÇÃO -->
    <meta name="robots" content="noindex,nofollow" />

    <meta property="og:title" content="Alliance | Casas pré fabricadas" />
    <meta property="og:description" content="Alliance Casas Pré Fabricadas. Uma empresa focada no bem estar e qualidade de vida dos nossos clientes. Pois na Alliance o seu sonho é o nosso sonho também." />
    <meta property="og:image" content="images/logo-1.png" />
    <title>Alliance | Casas pré fabricadas</title>

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

    @yield('metaHead')

    @yield('codeHead')
</head>

<body class="home-page">

    @yield('codeBody')

    <!-- header -->
    <div class="header clearfix position-fixed w-100 pt-5 headerblack">
        <div class="container clearfix">
            <div class="row clearfix align-items-center">

                <!-- logo -->
                <div class="col-4 col-sm-4 header-logo-holder clearfix">
                    <a href="/"><img src="images/logo-1.png" alt="Alliance | Casas pré fabricadas" width="100" /></a>
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
                                <p class="footer-contact-link-1-content header-contact-link font-AvenirLTStd-Roman font-16 text-white ">Suporte técnico (48) 9 8806 1915</p>
                            </a>
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
        <div class="last-footer-part clearfix bg-black">
            <div class="container clearfix">
                <div class="footer-row-3 clearfix py-5">
                    <div class="row clearfix">
                        <div class="col-md-8 clearfix footer-row-3-col">
                            <p class="footer-copy-content font-AvenirLTStd-Roman font-16">Imagens @ por <a href="javascript:" class="text-white">Alliance Incomporadora. LTD.</a> Todos os direitos reservados.</p>
                        </div>
                        <div class="col-md-4 clearfix footer-row-3-col">
                            <p class="footer-copy-content font-AvenirLTStd-Roman font-16 float-md-right">Desenvolvimento <a href="https://jornalrazao.com" class="text-white">Agência JR.</a></p>
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
