@extends('layout.dashboard')
@section('lista-lancamento')
<div>
  <section class="section section-lg bg-default">
      <div class="container">
       


        <div class="row row-30">
         
          <?php if(empty($data['lancamento'])) { ?>
          <h4 class="box-modern-title">
          <?php   echo "Sem lançamento para esse empreendimento";} else { ?>
          </h4>
          @foreach($data['lancamento'] as $etiqueta)
              <div class="col-md-6 col-lg-4">
                      <!-- Box Modern-->
                      <a href="{{ url('lancamento-novo/'.$etiqueta->id) }}">     <article class="box-modern"><span  class="icon box-modern-icon fl-bigmug-line-circular220"></span>
                      <div class="box-modern-main">
                      <h4 class="box-modern-title">{{ $etiqueta->nome_lancamento }}</h4>
                      </div>
                      </article> </a>
                      <div class="mt-40">
                      <button  wire:click.prevent="remove({{$etiqueta->id}})" class="button button-primary button-circle" style="min-width: 180px">Apagar {{ $etiqueta->nome_lancamento }}</button>
                      </div>
              </div>
              @endforeach
               <?php } ?>
          </div>
         



          <div class="row row-10">
          
          </div>
      </div>
  </section>



  

</div>
@endsection
