@extends('layout.main')
@section('lista-lancamento')
<section class="section section-md bg-gray-12">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-7 col-xl-8">
          <div class="row row-30">
            <div class="col-sm-12">
              <ul class="block-info-1">
                <li>
                  <div class="form-wrap-group-1">
                    
                    
                  </div>
                </li>
                
              </ul>
            </div>
            @foreach ($empreendimento as $item)
                
            
            <div class="col-sm-12">
              <div class="row row-50 row-lg-70">
                <div class="col-12">
                  <article class="product-classic product-classic-horizontal">
                    <div class="product-classic-inner">
                      <div class="product-classic-left">
                        <div class="product-classic-media">
                          <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="false">
                            <img src="{{asset('storage/banner/'.$item->banner_lancamento)}}" alt="" width="480" height="287"/>
                            
                          </div>
                          <div class="product-classic-price"><span>Lançamento</span></div>
                        </div>
                      </div>
                      <div class="product-classic-right">
                        <h4 class="product-classic-title"><a href="single-property.html">401 Biscayne Boulevard, Miami</a></h4>
                        <div class="product-classic-divider"></div>
                        <div class="product-classic-text">
                          <p>{{$item->descricao}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="product-classic-footer">
                      <ul class="product-classic-list">
                        <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                        <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                        <li><span class="icon mdi mdi-vector-square"></span><span>480 Sq Ft</span></li>
                        <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                      </ul>
                    </div>
                  </article>
                </div>
                
              </div>
            </div>
            @endforeach
            <div class="col-sm-12">
              <ul class="pagination-custom">
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="row row-50">
            
            <div class="col-md-6 col-lg-12">
              <article class="block-callboard">
                <div class="block-callboard-body">
                  <h3 class="block-callboard-title">Consultoria gratuita</h3>
                  <div class="block-callboard-divider"></div>
                  <div class="block-callboard-text">
                    <p>Se tiver alguma dúvida, fale conosco agora mesmo!</p>
                  </div>
                  <ul class="block-callboard-list">
                    <li>
                  <a href="https://wa.me/5567992809899?text=Ol%C3%A1%20Estou%20enviando%20essa%20mensagem%20atrav%C3%A9s%20do%20site" >   <img width="91" height="31" src="{{asset('images/zap.jpg')}}"><h4 class="block-callboard-title">Clique para falar conosco</h4></a>
                    </li>
                    
                  </ul>
                </div>
              </article>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
