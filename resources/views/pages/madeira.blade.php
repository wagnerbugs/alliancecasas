@extends('layouts.site')

@section('metaHead')

{{-- Generic meta tags --}}
<title>O que é madeira de lei? | Alliance Casas Pré Fabricadas</title>
<meta name="description" content="O que é madeira de lei. Neste artigo detalhamos sobre madeira de lei, origem, tipos, cores e muitas outras informações">
<meta name="keywords" content="madeira de lei">

{{-- Og meta tags --}}
<meta property="og:title" content="Madeira de lei | Alliance Casas Pré Fabricadas" />
<meta property="og:description" content="O que é madeira de lei. Neste artigo detalhamos sobre madeira de lei, origem, tipos, cores e muitas outras informações" />
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="Madeira de lei | Alliance Casas Pré Fabricadas" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image" content="https://alliancecasas.com.br/images/og.jpg" />
<meta property="og:image:secure_url" content="https://alliancecasas.com.br/images/og.jpg" />

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
    <img src="images/fundo-topo.jpeg" alt="Alliance Casas Pré Fabricadas" class="object-fit-cover w-100 h-100" />
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
                    <h3 class="blogs-item-header-letter bg-green-3 p-2 w-75 h-75 font-50 font-calibri-bold text-white text-uppercase text-center line-height-1">*</h3>
                    <p class="font-AvenirLTStd-Medium font-28 text-black pl-4 bg-white pr-4">- Alliance</p>
                </div>
                <div class="blogs-item-header-2 position-relative clearfix d-flex flex-wrap align-items-center">
                    <h3 class="font-calibri-bold font-50 text-black mb-3 d-table w-100">O que é madeira de lei?</h3>
                    <div class="blog-item-header-2-subtitle-holder d-flex flex-wrap mb-4">
                        <p class="font-AvenirLTStd-Medium text-black font-22 mr-5"><span class="opacity-0-6">por</span> <strong>Alliance</strong></p>
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
        <p class="mb-4 font-30 mt-5 first-letter-big font-AvenirLTStd-Medium blog-item-content-p" data-aos="fade-in" data-aos-delay="250">Beleza, resistência e qualidade. Esses são os principais adjetivos que podem ser utilizados quando se traz a definição de 'madeira de lei'.</p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium mt-5" data-aos="fade-in" data-aos-delay="350">Também conhecidas como “madeiras nobres”, elas são procuradas por terem maior durabilidade, já que são mais densas. Outro diferencial que chama a atenção dos compradores é a resistência a ataques de fungos e agentes deteriorantes, como a umidade. </p>
        <h4 class="font-40 text-black font-Poppins-Bold letter-space-minus-1 my-5 blog-details-subtitle-1" data-aos="fade-in" data-aos-delay="350"><span class="text-green-3">Beleza, resistência e qualidade: </span> o material pode durar centenas de ano</h4>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Segundo especialistas, no caso de uma residência feita com esse material estar em um terreno infestado de cupins, não há motivos de preocupação. A casa não será afetada. </p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Além da qualidade comprovada, neste caso, o livro pode ser julgado pela capa. Com cores marcantes e superfície lisa, o material também chama a atenção pela beleza. </p>
        <br>
        <div class="row clearfix" data-aos="fade-in" data-aos-delay="350">
            <div class="col-md-6 clearfix">
                <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Veja os exemplos:</p>
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
                    <li>
                        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Graípa</p>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Falando em resistência, saiba que o material pode durar centenas de anos. De fato, madeira de lei é uma ótima opção àqueles que querem construir um imóvel com valor acessível e qualidade.</p>

        <div class="share-holder-1 clearfix d-flex flex-wrap align-items-center my-5" data-aos="fade-up" data-aos-delay="350">
            <p class="font-AvenirLTStd-Medium font-28 text-black text-uppercase line-height-1 mr-4">compartilhe</p>
            <div class="sharethis-inline-share-buttons"></div>
        </div>
    </div>
</div>

@endsection
