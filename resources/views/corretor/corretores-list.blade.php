@extends('layout.dashboard')
@section('corretores-list')


<section class="section section-lg bg-default">
    <div class="container">
        <h2 class="heading-decoration-1"><span class="heading-inner">Nossos Agentes!</span></h2>
        <div class="row row-30">
            <div class="col-sm-6 col-lg-3">
                <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img src="images/agents-01-540x460.jpg" alt="" width="540" height="460"/>
                    <div class="block-agent-body">
                        <h3 class="block-agent-title">Michael Rutter</h3>
                        <p>Certified Real Estate Broker</p>
                    </div></a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img src="images/agents-02-540x460.jpg" alt="" width="540" height="460"/>
                    <div class="block-agent-body">
                        <h3 class="block-agent-title">Janet Richmond</h3>
                        <p>Residential Real Estate Broker</p>
                    </div></a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img src="images/agents-03-540x460.jpg" alt="" width="540" height="460"/>
                    <div class="block-agent-body">
                        <h3 class="block-agent-title">Sam Wilson</h3>
                        <p>Real Estate Broker</p>
                    </div></a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img src="images/agents-04-540x460.jpg" alt="" width="540" height="460"/>
                    <div class="block-agent-body">
                        <h3 class="block-agent-title">Mary Peterson</h3>
                        <p>Real Estate Broker</p>
                    </div></a>
            </div>
        </div>
    </div>
</section>
@endsection