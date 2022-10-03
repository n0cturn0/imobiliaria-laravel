@extends('layout.dashboard')
@section('corretores-list')


<section class="section section-lg bg-default">
    <div class="container">
        <h2 class="heading-decoration-1"><span class="heading-inner">Nossos Agentes!</span></h2>
        <div class="row row-30">
            @foreach ($corretores as $item)
            <div class="col-sm-6 col-lg-3">
               <a href="{{ url('apaga-corretor/'.$item->id)}}"> <h4 class="block-agent-title">APAGAR AGENTE</h4> </a>
                <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img src="storage/corretor/{{$item->corretor_foto}}" alt="" width="540" height="460"/>
                    <div class="block-agent-body">
                        <h3 class="block-agent-title">{{$item->corretor_nome}}</h3>
                        <p>Certified Real Estate Broker</p>
                    </div></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection