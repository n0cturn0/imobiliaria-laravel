
@extends('layout.dashboard')
@section('lancamentolist')
   


<div>
    <section class="section section-lg bg-default">
        <div class="container">

          <div class="row row-30">
               @foreach($etiquetas as $etiqueta)
                <div class="col-md-6 col-lg-4">
                        <!-- Box Modern-->
                        <a href="{{ url('lancamento-novo/'.$etiqueta->id) }}">     <article class="box-modern"><span  class="icon box-modern-icon fl-bigmug-line-circular220"></span>
                        <div class="box-modern-main">
                        <h4 class="box-modern-title">{{ $etiqueta->nome_lancamento }}</h4>
                        </div>
                        </article> </a>
                        <div class="mt-40">
                       
                        <a class="button button-primary button-circle" style="min-width: 180px" href="{{ url('apagar-lance/'.$etiqueta->id) }}">Apagar {{ $etiqueta->nome_lancamento }}</a>  
                    </div>
                </div>
                @endforeach
            </div>



            <div class="row row-10">
            
            </div>
        </div>
    </section>



    

</div>
@endsection