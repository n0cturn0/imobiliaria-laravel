@extends('layout.main')
@section('itshome')
<section class="section section-md bg-gray-12 oh text-center">
    <div class="container isotope-wrap">
      <!-- Isotope Filters-->
      <div class="isotope-filters isotope-filters-line">
        <ul class="isotope-filters-list" id="isotope-filters">
          <li><a class="active" data-isotope-filter="*" href="#">All</a></li>
          <li><a data-isotope-filter="for-sale" href="#">For Sale</a></li>
          <li><a data-isotope-filter="for-rent" href="#">For Rent</a></li>
        </ul>
      </div>
      <!-- Isotope Content-->
      <div class="isotope row row-50" data-isotope-layout="fitRows">
        @foreach ($etiqueta as $item)
            
        
        <div class="col-sm-6 col-md-4 isotope-item" data-filter="for-sale">
          <!-- Product Modern--><a class="product-modern" href="single-property.html">
            <div class="product-modern-media">
              <figure class="product-modern-figure"><img class="product-modern-image" src="{{asset('storage/banner/'.$item->banner_lancamento)}}" alt="" width="370" height="230"/>
              </figure>
              <div class="product-modern-overlay"></div>
            </div>
            <div class="product-modern-caption">
              <h5 class="product-modern-title">{{$item->nome_lancamento}}</h5>
            </div></a>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>
@endsection