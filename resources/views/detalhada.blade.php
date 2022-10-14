@extends('layout.main')
@section('detalhada')
<section class="breadcrumbs-custom bg-image context-dark" data-opacity="37" style="background-image: url(images/breadcrumbs-bg-06-1922x427.jpg);">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">401 Biscayne Boulevard, Miami</h2>
    </div>
  </section>
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
                @foreach ($data['lancamento'] as $item)
                <div class="item"><img src="{{asset('storage/lancamentos/'.$item->foto_name)}}" alt="" width="763" height="443"/>
                </div>  
                @endforeach
                
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
                @foreach ($data['lancamento'] as $item)
                <div>
                <div class="slick-slide-inner" style="background-image: url({{asset('storage/lancamentos/'.$item->foto_name)}});"></div>
              </div>
              @endforeach
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
          
         
          <!-- Post Share and Links-->
          
          
          
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="row row-50">
         
             
            </div> 
            <div class="col-md-6 col-lg-12">
              <article class="block-callboard">
                <div class="block-callboard-body">
                  <h3 class="block-callboard-title">Request a Showing</h3>
                  <!-- RD Mailform-->
                  <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-20">
                      <div class="col-12">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                          <label class="form-label" for="contact-name">Your Name</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="contact-email">E-mail</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                          <label class="form-label" for="contact-phone">Phone</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <label class="form-label" for="contact-message">Message</label>
                          <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="button button-block button-secondary" type="submit">Send message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </article>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section> 
@endsection