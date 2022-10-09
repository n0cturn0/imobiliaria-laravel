@extends('layout.dashboard')
@section('imovel-image')
<div>
    <section class="section-xs bg-white">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <h2>
            <li class="active">@foreach ($imovel as $item)
                {{$item->titulo}}
                @endforeach
            </li></h2>
          </ul>
        </div>
       
      </section>
      <div class="divider-section"></div>
      <section class="section section-md bg-gray-12">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-7 col-xl-8">
              
              <!-- Slick Carousel-->
              <div class="slick-slider-1">
               
            
               
                <div class="slick-slider-price"><h3>R$ {{$item->valor}}</h3></div>
                
                
                <div class="slick-slider carousel-parent" id="parent-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-fade="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                 @foreach ($fotos as $item)
                 <div class="item"><img src="{{asset('storage/fotos/'.$item->foto_name)}}" alt="" width="763" height="443"/>
                 
                 </div>
                 @endforeach
                 
                  <div class="item"><img src="{{asset('images/imagem_indisponivel.png')}}" alt="" width="763" height="443"/>
                  </div>
                 
                </div>
                <div class="slick-slider carousel-child" id="child-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="4" data-lg-items="4" data-xl-items="5" data-slide-to-scroll="1" data-for="#parent-carousel">
                    @if(empty($fotos))
                        {{'Nenhuma foto cadastrada'}}
                    
                    @else
                    @foreach ($fotos as $item)
                 
                  <div>
                
                   <div class="slick-slide-inner" style="background-image: url({{asset('storage/fotos/'.$item->foto_name)}});"></div>
                    
                  </div>
                 
                  @endforeach
                  @endif
                </div>
              </div>
              @foreach ($imovel as $item)
              <div class="features-block">
                <div class="features-block-inner">
                  <div class="features-block-item">
                    <ul class="features-block-list">
                      <li><span class="icon hotel-icon-10"></span><span>{{$item->banheiro}} Banheiro(s)</span></li>
                      <li><span class="icon hotel-icon-05"></span><span>{{$item->quarto}} Quarto(s)</span></li>
                      <li><span class="icon hotel-icon-05"></span>{{$item->suite}} Suíte(s)</span></li>
                      <li><span class="icon mdi mdi-vector-square"></span><span>{{$item->metrosconst}} Metros construídos</span></li>
                      <li><span class="icon hotel-icon-26"></span><span>{{$item->garagem}} Vagas na garagem</span></li>
                    </ul>
                  </div>
               
                </div>
              </div>
              <p>{{$item->descricao}}</p>
              @endforeach
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate">
                  <div class="card-header" id="accordion1-heading-1" role="tab">
                    <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true"><span>Endereço</span>
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse show" id="accordion1-collapse-1" role="tabpanel" aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
                    <div class="card-body">
                      <div class="layout-1">
                        <dl class="list-terms-inline">
                          <dt>Rua:</dt>
                          <dd>{{$item->rua}}</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Estado:</dt>
                          <dd>{{$item->estado}}</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Cidade:</dt>
                          <dd>{{$item->cidade}}</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Bairro:</dt>
                          <dd>{{$item->bairro}}</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Rua Pavimentada</dt>
                          <dd> @if ($item->ruapavimentada == 0) Sim @else Não @endif </dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Tipo:</dt>
                          <dd>
                            <?php 
                              switch ($item->tipo) {
                                case 0:
                                  echo "Apartamento";
                                  break;
                                case 1:
                                   echo "Casa Térrea";
                                  break;
                                case 2:
                                   echo "Sobrado";
                                  break;
                                case 3:
                                   echo "Casa de Condomínio";
                                  break;
                                case 4:
                                   echo "Sobrado Condominio";
                                  break;
                                case 5:
                                   echo "Terreno";
                                default:
                                  # code...
                                  break;
                              }
                              
                              ?>

                          </dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <a href="{{url('imovel-editar/'.$item->id)}}" class="button button-primary button-circle button-shadow" style="min-width: 180px">Editar informações</a>
                  <a href="{{url('imovel-editarimagen/'.$item->id)}}" class="button button-circle button-default-outline button-shadow" style="min-width: 180px">Editar imagens</a>

                </article>
              </div>
          
              
              
            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="row row-50">
                <div class="col-md-6 col-lg-12">
                  <div class="block-info">
                   
                    
                      <form method="post" action="{{ route('uploadimovel')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-button">
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <input type="file" class="button button-block button-secondary @error('arquivo') is-invalid @enderror" required  name="arquivo[]" multiple>
                        {{-- <input type="submit" class="button button-block button-secondary" > --}}
                        <button class="button button-block button-secondary" type="submit">Enviar imagens</button>
                        <br>
                       
        
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                      </div>
                    </form>
                  </div>
                </div>
                
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
               
                
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection