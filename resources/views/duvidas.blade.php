@extends('layouts.site')

@section('metaHead')

{{-- Generic meta tags --}}
<title>Perguntas frequentes | Alliance Casas Pré Fabricadas</title>
<meta name="description" content="Alliance casas pré fabricadas">
<meta name="keywords" content="casa de madeira, casa pré fabricada, madeira de lei">

{{-- Og meta tags --}}
<meta property="og:title" content="Perguntas frequentes | Alliance Casas Pré Fabricadas" />
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
<script>
    const element = document.body;
    function scrollTo(element) {
        document.querySelector(element).scrollIntoView({behavior:"smooth"});
    }

    document.querySelector("#chamada").addEventListener("click", function(event){
        event.preventDefault();
        scrollTo("#contato");
    })
</script>
@endsection

@section('content')
<div class="inner-page-header clearfix position-relative">
    <img src="images/fundo-topo.jpeg" alt="classic realtors" class="object-fit-cover w-100 h-100" />
    <div class="inner-page-header-caption-holder clearfix position-absolute">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-6 clearfix inner-page-header-caption-col clearfix inner-page-header-caption-col-left pb-5 mb-5" data-aos="fade-in" data-aos-delay="450">
                    <p class="custom-carousel-caption-subtitle text-uppercase mb-3 text-white">Perguntas Frequentes</p>
                    <h3 class="custom-carousel-caption-title-1 text-white mb-4 font-65">Dúvidas?!</h3>
                    <nav class="breadcrumb rounded-0 bg-transparent align-items-center px-0">
                        <a class="breadcrumb-item text-uppercase text-white font-TitilliumWeb-SemiBold" href="{{ route('site.index') }}">Início</a>
                        <a class="breadcrumb-item active text-uppercase text-green-1 font-TitilliumWeb-SemiBold" href="{{ route('site.duvidas') }}">Dúvidas</a>
                    </nav>
                </div>
                <div class="col-md-6 clearfix inner-page-header-caption-col clearfix inner-page-header-caption-col-left align-items-end d-flex">
                    <a href="#" id="chamada" class="lets-talk-holder clearfix bg-green-1 row p-4 mb-0 text-decoration-none" data-aos="fade-up" data-aos-delay="450">
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
<!-- first section -->
<div class="section faq-first-section clearfix">
    <!-- we are here to help section -->
    <div class="we-here-section clearfix">
        <div class="container clearfix">
            <div class="row clearfix" data-aos="fade-down" data-aos-delay="450" data-aos-duration="550">
                <div class="we-here-section-col we-here-section-col-left clearfix flex-grow-0 d-inline-flex align-items-center justify-content-center bg-green-3">
                    <img src="images/call-24.png" alt="We are here to help" class="" />
                </div>
                <div class="we-here-section-col we-here-section-col-right flex-grow-1 flex-basis-0 clearfix bg-black">
                    <h3 class="text-white text-uppercase font-30 font-AvenirLTStd-Heavy mb-2">Prefere conversar conosco?!</h3>
                    <p class="text-white font-22 opacity-0-8 font-Montserrat-Light">Nossa equipe está pronta para atendê-lo.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section faq-slider-tabs-section clearfix">
    <div class="container clearfix px-md-0">
        <div class="tab-content">
            <div id="faq-tab-1" class="container tab-pane active px-md-0"><br>
                <h3 class="text-black font-42 font-Poppins-SemiBold mb-2 text-center mt-3 mt-md-5">Perguntas frequentes dos nossos clientes</h3>
                <p class="opacity-0-5 font-Brandon_med font-32 text-dark text-center mb-5">Caso não encontre a sua dúvida, por favor entre em contato.</p>
                <div id="accordion" class="faq-slider-tab-accordion">
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseOne">
                                <span class="faq-card-link-content flex-grow-0">Contruir com madeira de lei ou madeira comum?</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/madeira-lei-comum.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseTwo">
                                <span class="faq-card-link-content flex-grow-0">Qual a durabilidade?</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/durabilidade.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseThree">
                                <span class="faq-card-link-content flex-grow-0">Custo-benefício (Madeira de lei ou alvenaria?)</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/custo-beneficio.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseFour">
                                <span class="faq-card-link-content flex-grow-0">E a umidade e mofo?</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/umidade.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseFive">
                                <span class="faq-card-link-content flex-grow-0">Como é viver em uma casa de madeira?</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/viver.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseFive">
                                <span class="faq-card-link-content flex-grow-0">A parte elétrica e hidráulica vocês fazem?</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/hidro-eletrico.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseFive">
                                <span class="faq-card-link-content flex-grow-0">Posso usar um projeto/sonho meu?</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/projeto-meu.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapseFive">
                                <span class="faq-card-link-content flex-grow-0">Posso usar um projeto meu que já está pronto ou tenho que adaptar?</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <video width="100%" controls>
                                    <source src="videos/projeto-pronto.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contato"></div>

<!-- you still have a question section -->
<div class="section more-contact-section clearfix pt-4 pb-5">
    <div class="container clearfix">
        <h3 class="text-black font-42 font-Poppins-SemiBold mb-2 text-center mt-3 mt-md-5">Tem alguma pergunta?</h3>
        <p class="opacity-0-5 font-Brandon_med font-32 text-dark text-center mb-md-5 max-w-738 mx-auto pb-5">Caso sua dúvida não esteja listada na nossa lista de perguntas frequentes, entre em contato.</p>
        <div class="row clearfix">
            <div class="col-md-6 more-contact-section-col more-contact-section-col-left clearfix position-relative"> <img src="images/faq-more-back-img.jpg" alt="faq" class="w-auto ml-n5" />
                <div class="position-absolute bg-white d-flex flex-wrap bg-white p-4 faq-schedule-box">
                    <div class="contact-section-innercol-icon-holder clearfix bg-green-1 d-flex align-items-center justify-content-center w-85 h-85 flex-grow-0"> <i class="far fa-clock font-46 text-white"></i> </div>
                    <div class="contact-section-innercol-cntnt-holder clearfix d-flex align-items-center justify-content-center flex-basis-0 flex-grow-1 pl-4 d-inline-flex flex-wrap ">
                        <p class="font-26 font-AvenirLTStd-Medium text-black opacity-0-6">Segunda a Sábado</p>
                        <h3 class="font-36 font-Archivo-Medium text-black opacity-0-6">8h às 18h00</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 more-contact-section-col more-contact-section-col-right clearfix position-relative">
                <div class="border border-grey-1 bg-light rounded text-center faq-cntct-bx py-5 mb-md-5 mb-3"> <i class="fas fa-phone-alt text-dark font-50 mb-5 faq-cntct-bx-icon"></i> <a href="javascript:" class="d-table w-100 text-center text-dark font-30 font-Poppins-Medium mb-1 text-decoration-none faq-cntct-bx-link">(47) 9 8820 9090</a>
                    <p class="font-30 font-AvenirLTStd-Medium text-grey-1">Sempre aguardando a sua ligação</p>
                </div>
                <div class="border border-grey-1 bg-light rounded text-center faq-cntct-bx py-5"> <i class="fas fa-envelope-open text-dark font-50 mb-5 faq-cntct-bx-icon"></i> <a href="mailto:#" class="d-table w-100 text-center text-dark font-30 font-Poppins-Medium mb-1 text-decoration-none faq-cntct-bx-link">contato@alliancecasas.com.br</a>
                    <p class="font-30 font-AvenirLTStd-Medium text-grey-1">Caso prefira, envie-nos um e-mail.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
