@extends('layouts.site')

@section('metaHead')

{{-- Generic meta tags --}}
<title>Vale a pena comprar casa de madeira? | Alliance Casas Pré Fabricadas</title>
<meta name="description" content="Vale a pena comprar casa de madeira? Conforto, valor acessível e durabilidade: negócio perfeito para quem quer o melhor para si">
<meta name="keywords" content="madeira de lei">

{{-- Og meta tags --}}
<meta property="og:title" content="Vale a pena comprar casa de madeira? | Alliance Casas Pré Fabricadas" />
<meta property="og:description" content="Vale a pena comprar casa de madeira? Conforto, valor acessível e durabilidade: negócio perfeito para quem quer o melhor para si" />
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="Vale a pena comprar casa de madeira? | Alliance Casas Pré Fabricadas" />
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
                    <h3 class="custom-carousel-caption-title-1 text-white mb-4 font-65">Vale a pena comprar casa de madeira?</h3>
                    <nav class="breadcrumb rounded-0 bg-transparent align-items-center px-0">
                        <a class="breadcrumb-item text-uppercase text-white font-TitilliumWeb-SemiBold" href="{{ route('site.index') }}">Início</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.duvidas') }}">Dúvidas</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.madeira') }}">Investir em casa de madeira</a>
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
                    <h3 class="font-calibri-bold font-50 text-black mb-3 d-table w-100">Vale a pena comprar casa de madeira?</h3>
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
                            <p class="text-center blog-item-date-ele-1 font-AvenirLTStd-Heavy font-50 text-white flex-column line-height-1 d-inline-flex flex-wrap justify-content-center text-center">02<span class="font-17 font-AvenirLTStd-Medium">Agosto</span></p>
                            <p class="blog-item-date-ele-2 font-26 font-AvenirLTStd-Medium text-white text-center d-table h-100">2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="mb-4 font-30 mt-5 first-letter-big font-AvenirLTStd-Medium blog-item-content-p" data-aos="fade-in" data-aos-delay="250">Conforto, valor acessível e durabilidade: negócio perfeito para quem quer o melhor para si.</p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium mt-5" data-aos="fade-in" data-aos-delay="350">Além dos pontos positivos da qualidade do material, as casas feitas por madeira de lei são ótimas opções para quem almeja conquistar a casa própria por um valor acessível.</p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Quando se trata de uma residência pré-fabricada, a situação fica ainda melhor: o cliente receberá tudo pronto entre três e dez meses, sendo o custo até 60% menor do que um imóvel de alvenaria. </p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Mas não para por aí. A realidade é que, quando procuramos por uma moradia, um dos objetivos principais é ter paz e aconchego. Se é isso que procura, uma ótima notícia: achou! Esse tipo de casa passa toda a sensação de conforto, pois a madeira tem uma cor quente e remete ao campo e à natureza.</p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Sem contar que madeira é um ótimo isolador térmico, logo, é perfeita para quem não gosta de frio, nem de muito calor, pois a temperatura do local é neutra. </p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Além disso, fique sabendo que a residência pode ficar para os netos dos seus filhos. Isso porque, por se tratar da madeira de lei como material principal, a casa pode durar centenas de anos. </p>
        <br>
        <p class="font-30 blog-item-content-p font-AvenirLTStd-Medium">Ou seja, se você quer ter conforto, valor acessível e durabilidade, sem dúvidas encontrou a opção certeira. </p>
        <br>
        <div class="share-holder-1 clearfix d-flex flex-wrap align-items-center my-5" data-aos="fade-up" data-aos-delay="350">
            <p class="font-AvenirLTStd-Medium font-28 text-black text-uppercase line-height-1 mr-4">compartilhe</p>
            <div class="sharethis-inline-share-buttons"></div>
        </div>
    </div>
</div>

@endsection
