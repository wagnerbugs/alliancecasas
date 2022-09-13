@extends('layouts.site')

@section('metaHead')

{{-- Generic meta tags --}}
<title>Madeira de lei | Alliance Casas Pré Fabricadas</title>
<meta name="description" content="O que é madeira de lei. Neste artigo detalhamos sobre madeira de lei, origem, tipos, cores e muitas outras informações">
<meta name="keywords" content="madeira de lei">

{{-- Og meta tags --}}
<meta property="og:title" content="Madeira de lei | Alliance Casas Pré Fabricadas" />
<meta property="og:description" content="O que é madeira de lei. Neste artigo detalhamos sobre madeira de lei, origem, tipos, cores e muitas outras informações" />
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="Madeira de lei | Alliance Casas Pré Fabricadas" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image" content="https://alliancecasas.com/images/logo-1.png" />
<meta property="og:image:secure_url" content="https://alliancecasas.com/images/logo-1.png" />

{{-- Article meta tags --}}
<meta property="article:publisher" content="https://www.facebook.com/alliancecasasprefabricadas/" />

{{-- Config seo tag --}}
<link rel="canonical" href="{{ URL::current() }}" />

@endsection

@section('codeHead')
@endsection

@section('codeBody')
@endsection

@section('codeFoot')
@endsection

@section('content')
<div class="inner-page-header clearfix position-relative">
    <img src="images/fundo-topo.jpg" alt="classic realtors" class="object-fit-cover w-100 h-100" />
    <div class="inner-page-header-caption-holder clearfix position-absolute">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-6 clearfix inner-page-header-caption-col clearfix inner-page-header-caption-col-left pb-5 mb-5" data-aos="fade-in" data-aos-delay="450">
                    <p class="custom-carousel-caption-subtitle text-uppercase mb-3 text-white">Fique por dentro</p>
                    <h3 class="custom-carousel-caption-title-1 text-white mb-4 font-65">Madeira de lei</h3>
                    <nav class="breadcrumb rounded-0 bg-transparent align-items-center px-0">
                        <a class="breadcrumb-item text-uppercase text-white font-TitilliumWeb-SemiBold" href="{{ route('site.index') }}">Início</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.duvidas') }}">Dúvidas</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.madeira') }}">Madeira de lei</a>
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
<!-- blogs section -->
<div class="section blogs-section clearfix d-table w-100">
    <div class="container clearfix">
        <div class="blogs-item clearfix mt-5">
            <div class="blogs-item-header clearfix" data-aos="fade-in" data-aos-delay="350">
                <div class="blogs-item-header-1 position-relative clearfix d-flex flex-wrap align-items-center my-3">
                    <h3 class="blogs-item-header-letter bg-green-3 p-2 w-75 h-75 font-50 font-calibri-bold text-white text-uppercase text-center line-height-1">A</h3>
                    <p class="font-AvenirLTStd-Medium font-28 text-black pl-4 bg-white pr-4">- Alliance</p>
                </div>
                <div class="blogs-item-header-2 position-relative clearfix d-flex flex-wrap align-items-center">
                    <h3 class="font-calibri-bold font-50 text-black mb-3 d-table w-100">O que é madeira de lei?</h3>
                    <div class="blog-item-header-2-subtitle-holder d-flex flex-wrap mb-4">
                        <p class="font-AvenirLTStd-Medium text-black font-22 mr-5"><span class="opacity-0-6">por</span> <strong>Alliance</strong></p>
                        <p class="font-AvenirLTStd-Medium font-22 opacity-0-5 text-black mr-5"><i class="fas fa-chart-line"></i> 2.9K visualizações</p>
                        <p class="font-AvenirLTStd-Medium font-22 opacity-0-5 text-black"><i class="far fa-clock"></i> 4 minutos de leitura</p>
                    </div>
                </div>
            </div>
            <div class="blog-item-body position-relative clearfix">
                <div class="blog-item-img-holder clearfix position-relative"> <img src="images/madeira-de-lei.jpg" alt="property" class="object-fit-cover w-100 h-100" />
                    <div class="blog-item-img-content-holder clearfix position-absolute top-0 left-0 w-100 h-100 d-flex flex-wrap align-items-start">
                        <div class="blog-item-share-holder clearfix" data-aos="fade-down" data-aos-delay="350"> <i class="fab fa-facebook-square font-18 text-white mb-3"></i> <i class="fab fa-instagram font-18 text-white mb-3"></i>
                            <p class="text-uppercase font-18 text-white font-AvenirLTStd-Heavy blog-item-share-title line-height-1">Compartilhe</p>
                        </div>
                        <div class="blog-item-date-holder clearfix position-relative overflow-hidden" data-aos="fade-left" data-aos-delay="350">
                            <p class="text-center blog-item-date-ele-1 font-AvenirLTStd-Heavy font-50 text-white flex-column line-height-1 d-inline-flex flex-wrap justify-content-center text-center">01<span class="font-17 font-AvenirLTStd-Medium">Agosto</span></p>
                            <p class="blog-item-date-ele-2 font-26 font-AvenirLTStd-Medium text-white text-center d-table h-100">2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="mb-4 font-30 mt-5 first-letter-big font-AvenirLTStd-Medium blog-item-content-p" data-aos="fade-in" data-aos-delay="250">AS madeiras de lei, também chamadas de madeiras nobres, são aqueles tipos de madeira que possuem uma grande resistência e qualidade. </p>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium" data-aos="fade-in" data-aos-delay="350">Essas madeiras possuem uma densidade maior, sendo mais pesadas e consequentemente elas têm uma maior durabilidade. Diferente dos tipos comuns, as madeiras nobres são muito resistentes a ataques de fungos, cupins e outros agentes deteriorantes, como a umidade.</p>
        <br>

        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium mt-5" data-aos="fade-in" data-aos-delay="350">Além disso, a madeira de lei tem uma maior duração do que as outras. Por esse motivo, tende a ser mais cara.</p>
        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Características</span> da madeira de lei</h4>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">As árvores que dão origem à madeira de lei são chamadas de árvores nativas, e o crescimento delas é lento. Para se tornarem duras, resistentes e de qualidade, esse tipo de madeira precisa ser antigo.</p>
        <br>
        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Partes</span> da madeira de lei</h4>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">As madeiras de lei possuem pouca distinção entre o alburno, a parte branca e macia da madeira, e o cerne, a camada mais escura e dura. Com o passar do tempo, é natural que o alburno diminua, dando lugar ao cerne. A madeira, então, fica mais dura, escura e menos quebradiça.</p>
        <br>
        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Durabilidade</span> da madeira de lei</h4>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">A durabilidade das madeiras nobres é grande devido a produção de certas substâncias químicas no cerne, que protegem o tronco do ataque de insetos, fungos, cupins, brocas e outras pragas naturais. A madeira de lei maciça é aquela que está inteira, não com camadas ou com buracos interiores.</p>
        <br>
        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Cor</span> da madeira de lei</h4>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Quanto à coloração, a madeira de lei tem tons marcantes. Dependendo da espécie, a madeira pode apresentar tons de bege-amarelado, amarelo, vermelho e marrom escuro. Essa madeira possui, na maioria das vezes, uma superfície lisa e lustrosa, com acabamento refinado.</p>
        <br>
        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Por que o nome </span> madeira de lei?</h4>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">O termo madeira de lei foi criado na época do Brasil Colonial. Com a vinda da família real de D. João VI ao Brasil, ainda no início da exploração portuguesa, foi determinado que algumas espécies de árvores só poderiam ser derrubadas com a permissão por lei por parte da Coroa.</p>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Assim, essas espécies foram denominadas madeiras de lei.</p>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">A madeira era utilizada principalmente na construção de navios, embarcações e móveis. A primeira árvore a entrar nessa categoria foi o pau-brasil, em uma tentativa de impedir que fosse contrabandeada por navios espanhóis, franceses e ingleses que aportavam na costa do país.</p>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Depois da independência, as regras da Coroa portuguesa deixaram de ser cumpridas, mas o termo madeira de lei continuou a ser utilizado para designar as espécies mais resistentes e valiosas. Confira algumas delas a seguir.</p>

        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Exemplos </span> de madeira de lei?</h4>
        <div class="row clearfix" data-aos="fade-in" data-aos-delay="350">
            <div class="col-md-6 clearfix">
                <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Com a ampliação do termo madeira de lei, houve um aumento no número de espécies que entram nessa classificação. Hoje em dia, as madeiras de lei estão mais relacionadas com o poder comercial, relativo à dureza e resistência. Veja agora quais espécies são madeiras de lei.</p>
            </div>
            <div class="col-md-6 clearfix">
                <ul class="list-unstyled blog-content-ul-1">
                    <li>
                        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Acaiacá (Cedro-rosa);</p>
                    </li>
                    <li>
                        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Andiroba;</p>
                    </li>
                    <li>
                        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Angelim-Vermelho (Fevero-Ferro);</p>
                    </li>
                    <li>
                        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Ipê e Ipê-Felpudo;</p>
                    </li>
                    <li>
                        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Imbuia;</p>
                    </li>
                    <li>
                        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Peroba-Rosa;</p>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Usos</span> da madeira de lei</h4>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">A madeira de lei pode ser utilizada de diversas formas. Os principais usos são para construção civil, em portas, janelas e escadas, para construção naval, para confecção de móveis pesados e de luxo e para a confecção de instrumentos musicais, como o violão.</p>

        <div class="share-holder-1 clearfix d-flex flex-wrap align-items-center my-5" data-aos="fade-up" data-aos-delay="350">
            <p class="font-AvenirLTStd-Medium font-28 text-black text-uppercase line-height-1">compartilhe</p>
            <div class="share-holder-1-inner clearfix flex-grow-1 ml-md-5">
                <div class="share-holder-1-icons-holder clearfix bg-white d-table ml-auto mr-0 z-index-1 position-relative"> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-fb"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-twtr"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-gp"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-linkedin"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-pin"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-4"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-tumblr"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-2"></a> <a href="javascript:" class="share-holder-1-icon share-holder-1-icon-3"></a> </div>
            </div>
        </div>
    </div>
</div>

@endsection
