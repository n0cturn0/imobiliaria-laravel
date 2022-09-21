@extends('layout.dashboard')
@section('lancamento-image')
<div>
    <section class="section-xs bg-white">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Properties</a></li>
            <li class="active">Single Property</li>
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
                <div class="slick-slider-price">$5000\mo</div>
                <div class="slick-slider carousel-parent" id="parent-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-fade="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                  <div class="item"><img src="{{asset('images/imagem_indisponivel.png')}}" alt="" width="763" height="443"/>
                  </div>
                  {{-- <div class="item"><img src="images/single-property-2-763x443.jpg" alt="" width="763" height="443"/>
                  </div>
                  <div class="item"><img src="images/single-property-3-763x443.jpg" alt="" width="763" height="443"/>
                  </div>
                  <div class="item"><img src="images/single-property-4-763x443.jpg" alt="" width="763" height="443"/>
                  </div>
                  <div class="item"><img src="images/single-property-5-763x443.jpg" alt="" width="763" height="443"/>
                  </div>
                  <div class="item"><img src="images/single-property-6-763x443.jpg" alt="" width="763" height="443"/>
                  </div> --}}
                </div>
                <div class="slick-slider carousel-child" id="child-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="4" data-lg-items="4" data-xl-items="5" data-slide-to-scroll="1" data-for="#parent-carousel">
                  <div>
                    <div class="slick-slide-inner" style="background-image: url(images/single-property-1-763x443.jpg);"></div>
                  </div>
                  {{-- <div>
                    <div class="slick-slide-inner" style="background-image: url(images/single-property-2-763x443.jpg);"></div>
                  </div>
                  <div>
                    <div class="slick-slide-inner" style="background-image: url(images/single-property-3-763x443.jpg);"></div>
                  </div>
                  <div>
                    <div class="slick-slide-inner" style="background-image: url(images/single-property-4-763x443.jpg);"></div>
                  </div>
                  <div>
                    <div class="slick-slide-inner" style="background-image: url(images/single-property-5-763x443.jpg);"></div>
                  </div>
                  <div>
                    <div class="slick-slide-inner" style="background-image: url(images/single-property-6-763x443.jpg);"></div>
                  </div> --}}
                </div>
              </div>
              <div class="features-block">
                <div class="features-block-inner">
                  <div class="features-block-item">
                    <ul class="features-block-list">
                      <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                      <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                      <li><span class="icon mdi mdi-vector-square"></span><span>480 Sq Ft</span></li>
                      <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                    </ul>
                  </div>
                  <div class="features-block-item"><a class="link link-1" href="#"><span class="icon mdi mdi-heart-outline"></span>Add to Favorites</a></div>
                </div>
              </div>
              <p>Choose this property if you are looking for a modern house near the ocean shore. With 2 bathrooms and 2 bedrooms as well as a single garage, it is a perfect option for a small family.</p>
              <p>This home has been completely renovated within the past year and features amazing views and sunsets of the local lake, solid wood cabinets (and loads of them), granite counters with colored glass backsplash,  sliding glass doors across the entire family room allowing beautiful views of the lake etc. Its affordable price serves as a great bonus for a family looking for an opportunity to save money on Miami real estate.</p>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate">
                  <div class="card-header" id="accordion1-heading-1" role="tab">
                    <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true"><span>Address</span>
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse show" id="accordion1-collapse-1" role="tabpanel" aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
                    <div class="card-body">
                      <div class="layout-1">
                        <dl class="list-terms-inline">
                          <dt>Address:</dt>
                          <dd>Biscayne Blvd</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>State/County:</dt>
                          <dd>Florida</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>City:</dt>
                          <dd>Miami</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Zip:</dt>
                          <dd>8322</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Country:</dt>
                          <dd>United States</dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>Area:</dt>
                          <dd>Lake Worth</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate">
                  <div class="card-header" id="accordion2-heading-1" role="tab">
                    <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion2-collapse-1" aria-controls="accordion2-collapse-1" aria-expanded="true"><span>Features</span>
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse show" id="accordion2-collapse-1" role="tabpanel" aria-labelledby="accordion2-heading-1" data-parent="#accordion2">
                    <div class="card-body">
                      <ul class="list-marked-2 layout-2">
                        <li>2 Stories</li>
                        <li>Basketball Court</li>
                        <li>Lawn</li>
                        <li>Gym</li>
                        <li>Fireplace</li>
                        <li>Sprinklers</li>
                        <li>Private Space</li>
                        <li>Balcony</li>
                        <li>Laundry</li>
                        <li>Ocean View</li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <!-- Bootstrap collapse-->
              
              <div class="block-group-item">
                <h3>Property Map</h3>
                <div class="google-map-container mt-20" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-icon="images/gmap_marker_mini.png" data-icon-active="images/gmap_marker_mini_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]" data-zoom="5">
                  <div class="google-map google-map-1"></div>
                  <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow" data-description="9870 St Vincent Place, Glasgow, DC 45 Fr 45."></li>
                  </ul>
                </div>
              </div>
              <!-- Post Share and Links-->
              <div class="blog-post-solo-footer mt-20">
                <div class="blog-post-solo-footer-left">
                  <ul class="blog-post-solo-footer-list">
                    <li><span class="icon mdi mdi-clock"></span><a href="#">February 10, 2021</a></li>
                  </ul>
                </div>
                <div class="blog-post-solo-footer-right">
                  <ul class="blog-post-solo-footer-list-1">
                    <li><span>Share this post</span></li>
                    <li>
                      <ul class="list-inline-1">
                        <li><a class="icon link-default fa-facebook" href="#"></a></li>
                        <li><a class="icon link-default fa-twitter" href="#"></a></li>
                        <li><a class="icon link-default fa-google-plus" href="#"></a></li>
                        <li><a class="icon link-default fa-pinterest-p" href="#"></a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              
              
            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="row row-50">
                <div class="col-md-6 col-lg-12">
                  <div class="block-info">
                    
                    
                      <form method="post" action="{{ route('upload')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-button">
                        <input type="hidden" name="id" value="{{$id}}">
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