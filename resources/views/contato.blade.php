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
                    <p class="custom-carousel-caption-subtitle text-uppercase mb-3 text-white">Mantenha contato</p>
                    <h3 class="custom-carousel-caption-title-1 text-white mb-4 font-65">Fale conosco</h3>
                    <nav class="breadcrumb rounded-0 bg-transparent align-items-center px-0">
                        <a class="breadcrumb-item text-uppercase text-white font-TitilliumWeb-SemiBold" href="{{ route('site.index') }}">Início</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.contato') }}">Fale Conosco</a>
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
<!-- contact form section -->

<div class="contact-us-page-contact-form-section section clearfix">
    <div class="container clearfix bg-light">
        <div class="contact-us-page-contact-form-title-holder mx-auto py-5">
            <h4 class="font-30 font-AvenirLTStd-Heavy font-weight-bold text-black mb-2">Vamos agendar uma <strong class="text-green-2">Visita?</strong></h4>
            <p class="font-20 font-Montserrat-SemiBold text-black opacity-0-8">Entre em contato pelo formulário abaixo. Retornaremos o mais breve possível.</p>
        </div>
    </div>
    <div class="container clearfix mt-4">
        <div class="contact-us-page-contact-form-content-holder mx-auto py-4">
            <form action="#!" name="submitQueryForm" method="post" class="submit-query-form">
                <div class="row clearfix">
                    <div class="col-md-12 clearfix mt-3">
                        <div class="form-group clearfix bg-dark rounded about-contact-form-group">
                            <div class="about-contact-form-group-icon-holder"> <i class="fa fa-user text-green-2"></i> </div>
                            <div class="about-contact-form-group-input-holder">
                                <input class="form-control bg-transparent border-0" name="name" type="text" required placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 clearfix mt-3">
                        <div class="form-group clearfix bg-dark rounded about-contact-form-group">
                            <div class="about-contact-form-group-icon-holder"> <i class="fa fa-envelope-open text-green-2"></i> </div>
                            <div class="about-contact-form-group-input-holder">
                                <input class="form-control bg-transparent border-0" name="email" type="email" required placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 clearfix mt-3">
                        <div class="form-group clearfix bg-dark rounded about-contact-form-group">
                            <div class="about-contact-form-group-icon-holder"> <i class="fas fa-phone-square text-green-2"></i> </div>
                            <div class="about-contact-form-group-input-holder">
                                <input class="form-control bg-transparent border-0" name="tel" type="tel" required placeholder="Telefone">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 clearfix about-contact-form-textarea-col mt-3">
                        <div class="form-group clearfix bg-dark rounded about-contact-form-group">
                            <div class="about-contact-form-group-icon-holder"> <i class="fa fa-question-circle text-green-2"></i> </div>
                            <div class="about-contact-form-group-input-holder">
                                <textarea class="form-control bg-transparent border-0" name="message" placeholder="Como podemos ajudar?" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 formalerts">
                    </div>
                    <div class="col-md-4 clearfix mt-3">
                        <div class="form-group clearfix p-0 mb-0">
                            <input type="submit" name="submit_query" class="letter-space-1 font-TitilliumWeb-SemiBold text-uppercase btn-green-1 btn bg-green-1 border border-success rounded px-5 py-3 font-20 text-white" value="Enviar contato">
                        </div>
                    </div>
                    <div class="col-md-8 clearfix d-inline-flex align-items-center flex-wrap mt-3">
                        <div class="customchecknputGroup">
                            <input id="option1" name="option1" type="checkbox" required>
                            <label for="option1" class="text-dark font-21">Aceito receber contato por e-mail <a href="javascript:" class="text-dark"><u>Saiba mais</u></a></label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
