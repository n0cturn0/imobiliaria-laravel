@extends('layout.dashboard')
@section('lancamento-edita-images')
    

<section class="section section-md bg-gray-12 oh text-center">
    <div class="container isotope-wrap">
      <!-- Isotope Filters-->
      <div class="isotope-filters isotope-filters-line">
        <ul class="isotope-filters-list" id="isotope-filters">
          <li><a class="active"><h2>{{$etiqueta->nome_lancamento}}<h2></a></li>
       
        </ul>
      </div>
      <!-- Isotope Content-->
      <div class="isotope row row-50" data-isotope-layout="fitRows">
        @foreach ($fotos as $item)
            
       
        <div class="col-sm-6 col-md-4 isotope-item" data-filter="for-sale">
          <a href="{{url('lancamento-destacarimagen/'.$item->id)}}">   <span  class="icon box-modern-icon fl-bigmug-line-circular220"></span> </a>
          <!-- Product Modern--><div class="product-modern" href="#">
            <div class="product-modern-media">
              <figure class="product-modern-figure"><img class="product-modern-image" src="{{asset('storage/lancamentos/'.$item->foto_name)}}" alt="" width="370" height="230"/>
              </figure>
              <div class="product-modern-overlay"></div>
            </div>
            <div class="product-modern-caption">
              <a href="{{url('lancamento-apagarimagem/'.$item->id)}}">  <span  class="icon box-modern-icon fl-bigmug-line-recycling10"></span></a>
                
            </div></div>
        </div>
       
        @endforeach
        
        
       
       
      </div>
    </div>
    

    <a href="{{url('lancamento-novo/'.$etiqueta->id)}}" class="button button-circle button-default-outline button-shadow" style="min-width: 180px">Voltar</a>
  </section>
  @endsection