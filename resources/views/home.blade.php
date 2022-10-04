@extends('layouts.app')

@section('content')

<div class="section faq-slider-tabs-section clearfix">
    <div class="container clearfix px-md-0">
        <div class="tab-content">
            <div id="faq-tab-1" class="container tab-pane active px-md-0"><br>
                <h3 class="text-black font-42 font-Poppins-SemiBold mb-2 text-center mt-3 mt-md-5 text-white">.</h3>
                <p class="opacity-0-5 font-Brandon_med font-32 text-dark text-center mb-5 text-white">.</p>
                <div id="accordion" class="faq-slider-tab-accordion">
                    @foreach ($contatos as $contato)
                    <div class="card mb-4 overflow-hidden">
                        <div class="card-header p-0">
                            <a class="card-link faq-card-link position-relative font-30 font-AvenirLTStd-Medium text-black d-table w-100 d-flex flex-wrap align-items-start" data-toggle="collapse" href="#collapse-{{ $contato->id }}">
                                <span class="faq-card-link-content flex-grow-0"><i class="fas fa-circle-user"></i>{{ $contato->name }} <i class="fas fa-square-phone"></i> {{ $contato->tel }}</span>
                                <img src="images/right-arrow-2.png" alt="arrow" class="faq-card-link-img mt-2" />
                            </a>
                        </div>
                        <div id="collapse-{{ $contato->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" data-parent="#accordion">
                            <div class="card-body">
                                <p><i class="fs fa-square-envelope"></i> {{ $contato->email }}</p>
                                <p>{{ $contato->message }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
