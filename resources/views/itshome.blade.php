@extends('layout.main')
@section('itshome')
    <section class="section section-lg bg-default">
        <div class="container">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="4" data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="30" data-autoplay="true" data-autoplay-speed="3000" data-mouse-drag="false">
               @foreach ($data['lancamentos'] as $item)
                {{-- <a href="{{url('detalhada/'.$item->id)}}" class="link-corporate" href="#"><img src="storage/empreendimento/{{$item->banner_lancamento}}" alt="" width="192" height="54"/></a> --}}
                <a href="{{url('for-empreendimento/'.$item->id)}}" class="link-corporate" href="#"><img src="storage/empreendimento/{{$item->banner_lancamento}}" alt="" width="192" height="54"/></a>
                @endforeach
            </div>
        </div>
    </section>


    <section class="section">
        <div class="range">
            <div class="cell-xl-6_lg box-1-cell height-fill context-dark">
                <div class="box-1-bg-shape"><img class="box-1-bg-image" src="images/bg-shape-1.svg" alt=""></div>
                <div class="cell-inner box-1-outer">
                    <div class="box-1">
                        <h2>Faça uma busca da sua nova casa</h2>
                        <form class="rd-form" method="POST"  action="{{route('buscalancamento')}}">
                            @csrf
                            <div class="row row-x-20 row-20">
                                <div class="col-sm-6 col-lg-12 col-xl-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="cidade" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Escolha a cidade" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            @foreach ($data['cidades'] as $item)
                                            <option value="{{$item->cidade}}">{{$item->cidade}}</option>
                                            @endforeach
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="bairro" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Bairro" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            @foreach ($data['bairro'] as $item)
                                            <option value="{{$item->bairro}}">{{$item->bairro}}</option>
                                            @endforeach
                                           
                                            
            
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-6 col-xl-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="tipo" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Tipo do imóvel" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="0">Apartamento</option>
                                            <option value="1">Casa Térrea</option>
                                            <option value="2">Sobrado</option>
                                            <option value="3">Casa Condomínio</option>
                                            <option value="4">Sobrado Condomínio</option>
                                            <option value="5">Terreno</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-6 col-xl-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="banheiro" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Banheiros" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                         
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-6 col-xl-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="quarto" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Quartos" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                           
                                        </select>
                                    </div>
                                </div>

                                

                            </div>
                            {{-- gear slider range value to php 
                                https://viblo.asia/p/20-css-javascript-price-range-slider-examples-XL6lAv1m5ek
                                https://www.webslesson.info/2018/03/make-price-range-slider-using-jquery-with-php-ajax.html
                                https://www.youtube.com/watch?v=IOZVPj-zAkQ&ab_channel=CodexWorld
                                https://www.youtube.com/watch?v=1ph9xwx0F0s&ab_channel=EasyCode-Sardar
                                https://www.codexworld.com/price-range-slider-jquery-ajax-php-mysql/
                                https://www.youtube.com/watch?v=xHfqRYRAgZw&t=915&ab_channel=WebJourney
                                --}}
                            {{-- <div class="rd-range-outer">
                                <p class="rd-range-caption">Preço (R$)</p>
                                <!-- RD Range-->
                                
                                <div class="rd-range" data-min="50" data-max="10000" data-start="[50, 10000]" data-step="10" data-tooltip="true" data-min-diff="100"></div>
                              
                            </div> --}}
                            {{-- <div class="rd-range-outer">
                                <p class="rd-range-caption">Área Construída</p>
                                <!-- RD Range-->
                                <div class="rd-range" data-min="70" data-max="20000" data-start="[70, 20000]" data-step="10" data-tooltip="true" data-min-diff="100"></div>
                            </div> --}}
                            <div class="layout-5">
                                <div class="layout-5-item layout-5-item_primary">

                                </div>
                                <div class="layout-5-item">
                                    <button class="button button-secondary-outline" type="submit">Encontrar minha casa</button>
                                   
                                   </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cell-xl-6_sm height-fill">
                <div class="box-2">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="1" data-xl-items="2" data-dots="false" data-nav="false" data-nav-custom="#owl-outer-nav" data-loop="true" data-margin="30" data-autoplay="true" data-autoplay-speed="3500" data-stage-padding="0" data-mouse-drag="false">
                        @foreach ($data['destaques'] as $item)

                        <a href="{{url('detalhada/'.$item->id_lancamento)}}" class="product-corporate context-dark" href="single-property.html" style="background-image: url(storage/lancamentos/{{$item->foto_name}});">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">{{$item->cidade}}, {{$item->bairro}}</h3>
                                    <h4 class="product-corporate-info">{{$item->suite}} Suíte(s) -  {{$item->garagem}} Vaga(s) de Garagem</h4>
                                    <h4 class="product-corporate-info">{{$item->banheiro}} Banheiro(s) - {{$item->quarto}} Quarto(s)</h4>
                                </div>
                            </div></a>
                            @endforeach
                       
                        </div>
                    <div class="box-2-footer">
                        <div class="box-2-footer-inner">
                            <h3>Nossos Destaques</h3>
                            <div class="owl-outer-nav" id="owl-outer-nav">
                                <button class="owl-arrow owl-arrow-prev"><span class="icon fl-budicons-free-left161"></span><span>Anterior</span></button>
                                <button class="owl-arrow owl-arrow-next"><span>Próxima</span><span class="icon fl-budicons-free-right163"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Icon List-->

    <!-- Featured Properties-->
    <section class="section section-lg bg-gray-12">
        <div class="container">
            <div class="layout-4">
                <h2 class="heading-decoration-1"><span class="heading-inner">Ajudamos você a a realizar o seu sonho!!</span></h2>

            </div>
            <div class="row row-50">
                @foreach ($data['imoveis'] as $item)
                    
                
                <div class="col-md-6 col-lg-4">
                    <!-- Product Classic-->
                    <article class="product-classic">
                        <div class="product-classic-media">
                            <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                            <a href="{{url('imoveldetalha/'.$item->id)}}">    <img src="storage/fotos/{{$item->foto_name}}" alt="" width="480" height="287"/> </a>
                             
                            </div>
                            <div class="product-classic-price"><span>R$ {{$item->valor}}</span></div>
                        </div>
                        <h4 class="product-classic-title"><a href="single-property.html">{{$item->estado}}, {{$item->cidade}}</a></h4>
                        <div class="product-classic-divider"></div>
                        <ul class="product-classic-list">
                            <li><span class="icon mdi mdi-vector-square"></span><span>{{$item->metrosconst}} Metros Contruído</span></li>
                            <li><span class="icon hotel-icon-10"></span><span>{{$item->banheiro}} Banheiro(s)</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>{{$item->quarto}} Quarto (s)</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>{{$item->suite}} Suíte (s)</span></li>
                            <li><span class="icon hotel-icon-26"></span><span>{{$item->garagem}} Vaga (s) Garagem</span></li>
                        </ul>
                    </article>
                </div>
                @endforeach
                {{-- <div class="col-md-6 col-lg-4">
                    <!-- Product Classic-->
                    <article class="product-classic">
                        <div class="product-classic-media">
                            <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"><img src="images/featured-properties-05-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-06-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-07-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-08-480x287.jpg" alt="" width="480" height="287"/>
                            </div>
                            <div class="product-classic-price"><span>$2500\mo</span></div>
                        </div>
                        <h4 class="product-classic-title"><a href="single-property.html">923 Folsom St, San Francisco</a></h4>
                        <div class="product-classic-divider"></div>
                        <ul class="product-classic-list">
                            <li><span class="icon mdi mdi-vector-square"></span><span>535 Sq Ft</span></li>
                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>3 Bedrooms</span></li>
                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                        </ul>
                    </article>
                </div> --}}
                {{-- <div class="col-md-6 col-lg-4">
                    <!-- Product Classic-->
                    <article class="product-classic">
                        <div class="product-classic-media">
                            <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"><img src="images/featured-properties-09-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-10-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-11-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-12-480x287.jpg" alt="" width="480" height="287"/>
                            </div>
                            <div class="product-classic-price"><span>$5000\mo</span></div>
                        </div>
                        <h4 class="product-classic-title"><a href="single-property.html">623 Willow Rd, Dallas</a></h4>
                        <div class="product-classic-divider"></div>
                        <ul class="product-classic-list">
                            <li><span class="icon mdi mdi-vector-square"></span><span>530 Sq Ft</span></li>
                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                            <li><span class="icon hotel-icon-26"></span><span>2 Garages</span></li>
                        </ul>
                    </article>
                </div> --}}
                {{-- <div class="col-md-6 col-lg-4">
                    <!-- Product Classic-->
                    <article class="product-classic">
                        <div class="product-classic-media">
                            <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"><img src="images/featured-properties-13-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-14-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-15-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-16-480x287.jpg" alt="" width="480" height="287"/>
                            </div>
                            <div class="product-classic-price"><span>$9340\mo</span></div>
                        </div>
                        <h4 class="product-classic-title"><a href="single-property.html">225 Maywood Dr, San Francisco</a></h4>
                        <div class="product-classic-divider"></div>
                        <ul class="product-classic-list">
                            <li><span class="icon mdi mdi-vector-square"></span><span>430 Sq Ft</span></li>
                            <li><span class="icon hotel-icon-10"></span><span>1 Bathroom</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>1 Bedroom</span></li>
                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                        </ul>
                    </article>
                </div> --}}
                {{-- <div class="col-md-6 col-lg-4">
                    <!-- Product Classic-->
                    <article class="product-classic">
                        <div class="product-classic-media">
                            <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"><img src="images/featured-properties-17-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-18-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-19-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-20-480x287.jpg" alt="" width="480" height="287"/>
                            </div>
                            <div class="product-classic-price"><span>$5000\mo</span></div>
                        </div>
                        <h4 class="product-classic-title"><a href="single-property.html">2888 Bush St, San Francisco</a></h4>
                        <div class="product-classic-divider"></div>
                        <ul class="product-classic-list">
                            <li><span class="icon mdi mdi-vector-square"></span><span>570 Sq Ft</span></li>
                            <li><span class="icon hotel-icon-10"></span><span>3 Bathrooms</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                        </ul>
                    </article>
                </div> --}}
                {{-- <div class="col-md-6 col-lg-4">
                    <!-- Product Classic-->
                    <article class="product-classic">
                        <div class="product-classic-media">
                            <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"><img src="images/featured-properties-21-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-22-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-23-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-24-480x287.jpg" alt="" width="480" height="287"/>
                            </div>
                            <div class="product-classic-price"><span>$4563\mo</span></div>
                        </div>
                        <h4 class="product-classic-title"><a href="single-property.html">275 Lake Ave, Chicago</a></h4>
                        <div class="product-classic-divider"></div>
                        <ul class="product-classic-list">
                            <li><span class="icon mdi mdi-vector-square"></span><span>630 Sq Ft</span></li>
                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>3 Bedrooms</span></li>
                            <li><span class="icon hotel-icon-26"></span><span>2 Garages</span></li>
                        </ul>
                    </article>
                </div> --}}
                <div class="col-12 text-center"><a class="button button-primary" href="{{url('list-all-imovel')}}">Ver todas nossos imóveis</a></div>
            </div>
        </div>
    </section>
    <!-- Counters-->

    <!-- Categories-->

    <!-- What People Say-->

    <!-- Agents-->
    <section class="section section-lg bg-default">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Nossos Agentes!</span></h2>
            <div class="row row-30">
                
                   
                <?php if(empty($data['corretores'])){  echo "Nenhum corretor cadastrado";} else { ?>
                @foreach ($data['corretores'] as $item)
               <div class="col-sm-6 col-lg-3">
                <!-- Block Agent--><a class="block-agent" href=""><img src="storage/corretor/{{$item->corretor_foto}}" alt="" width="540" height="460"/>
                <div class="block-agent-body">
                    <h3 class="block-agent-title">{{$item->corretor_nome}}</h3>
                    
                   <a href="https://wa.me/5567992809899?text=Ol%C3%A1%20Estou%20enviando%20essa%20mensagem%20atrav%C3%A9s%20do%20site">" <p> <img width="91" height="31" src="{{asset('images/zap.jpg')}}"> FALE COMIGO! </a>
                </div></a>
                </div>
                @endforeach
             <?php } ?>
                
              
                
               
                    
                    
               
            </div>
        </div>
    </section>

    <!-- FAQ-->

    <!-- Latest Blog Posts-->

    <!-- Page Footer-->
    <!-- Pre footer section-->
    <section class="section section-md bg-gray-31 context-dark">
        <div class="container">
            <div class="row row-40 justify-content-lg-between">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item">
                        <span class="heading-square-item"></span>Últimos imóveis</h3>
                        <?php
                        if(empty(($data['footer_lancamento'])))    
                        {
                        echo 'Nemhum imóvel para exibir';
                        } else { ?>
                        @foreach ($data['footer_lancamento'] as $item)      
                        <a class="post-minimal" href="{{url('detalhada/'.$item->etiquetaid)}}">
                                     
                     <div class="post-minimal-image">
                        <img src="{{asset('storage/banner/'.$item->capa)}}" alt="" width="161" height="136"/>
                        </div>
                        <div class="post-minimal-body">
                        <div class="post-minimal-title"><span>{{$item->nome_lancamento}}</span></div>
                        <div class="post-minimal-text"><span>{{$item->nome_empreedimento}}</span></div>
                        </div></a>
                        @endforeach 
                        <?php  } ?>



                       

                        
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 col-bordered">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Oi! Fale Conosco</h3>
                    <div class="link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon"><span class="icon icon-1 mdi mdi-phone"></span><a href="tel:#">+55 (67) 99280-9899</a></div>
                    <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-2 mdi mdi-email-outline"></span><a href="mailto:#">contato@itshomeimobiliaris.com.br</a></div>
                    {{-- <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-3 mdi mdi-map-marker"></span><a href="#">3015 Grand Ave, Coconut<br style="line-height: 0"> Grove,Merrick Way, FL 12345</a></div> --}}
                </div>
                <div class="col-lg-4">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Receba nossa promoções</h3>

                    <form class="rd-form rd-mailform rd-form-inline-1" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" disabled  id="subscribe-form--email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="subscribe-form--email">Seu e-mail</label>
                        </div>
                        <div class="form-button">
                            <button class="button button-primary button-square" type="submit">Inscrever-se</button>
                        </div>
                    </form>
                    <ul class="list-inline-1">
                        <li><a class="icon fa-facebook" href="https://www.facebook.com/itshomeimobiliariaoficial"></a></li>
                        {{-- <li><a class="icon fa-twitter" href="#"></a></li>
                        <li><a class="icon fa-google-plus" href="#"></a></li>
                        <li><a class="icon fa-pinterest-p" href="#"></a></li> --}}
                        <li><a class="icon fa-instagram" href="https://instagram.com/itshomeimobiliaria"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page footer-->
    
@endsection


