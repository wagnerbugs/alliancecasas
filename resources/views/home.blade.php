@extends('layouts.app')

@section('content')
<div class="mt-5"></div>
<div class="section faq-slider-tabs-section clearfix mt-5">
    <div class="container clearfix px-md-0">
        <div class="tab-content">
            <div id="faq-tab-1" class="container tab-pane active px-md-0"><br>
                {{-- <h3class="text-blackfont-42font-Poppins-SemiBoldmb-2text-centermt-3mt-md-5">.</h3> --}}
                <p class="opacity-0-5 font-Brandon_med font-32 text-dark text-center mb-5">Contatos realizados pelo site</p>

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
                                <p>{{ \Carbon\Carbon::parse($contato->created_at)->diffForHumans() }}</p>
                                <p><i class="fs fa-square-envelope"></i> {{ $contato->email }}</p>
                                <p><strong>{{ $contato->message }}</strong></p>
                                <form action="{{ route('contact.destroy', $contato->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o contato?')"> Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
