<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-br">

<head>
    <title></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
   
    <!-- Stylesheets-->
    @livewireStyles
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,400,500,700,900">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css?ver=1.2') }}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="banter-loader">
        <div class="banter-loader__box"> </div>
        <div class="banter-loader__box"> </div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-aside-outer">
                    <div class="rd-navbar-aside">
                        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                        <ul class="rd-navbar-aside-list rd-navbar-collapse">
                            <li>
                                <div class="block-inline unit unit-spacing-xs align-items-center">
                                    <div class="unit-left"><span class="icon text-middle mdi mdi-phone"></span></div>
                                    <div class="unit-body"><a href="tel:#">67 99280-9899</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="block-inline unit unit-spacing-xs align-items-center">
                                    <div class="unit-left"><span class="icon text-middle mdi mdi-email-outline"></span></div>
                                    <div class="unit-body"><a href="mailto:#">info@itshomeimobiliaria.com.br</a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="rd-navbar-aside-item">
                            <div class="block-inline">
                                <a href="{{ url('logout') }}" class="unit unit-spacing-xs align-items-center" data-rd-navbar-toggle="#navbar-login-register"><span class="unit-left"><span class="icon text-middle mdi mdi-login">Desconectar</span></span><span class="unit-body"></span></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-its.png" alt="" width="121" height="61" srcset="images/logo-default-242x122.png 2x"/><img class="brand-logo-light" src="images/logo-inverse-121x61.png" alt="" width="121" height="61" srcset="images/logo-inverse-242x122.png 2x"/></a>
                            </div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('lancamento-list') }}">Lan??amentos</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Im??veis</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Agentes / Corretores</a>
                                </li>





                            </ul>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="28" style="background-image: url(images/breadcrumbs-bg-07-1920x420.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Its Home Imobili??ria</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">

        </div>
    </section>
    <div class="divider-section"></div>
    @yield('lancamento-create')
    @yield('lancamentolist')
    @yield('lancamentocriacao')
    @yield('lancamento-image')
    @yield('lancamento-edita-informacao')
    @yield('lancamento-edita-images')
    @yield('corretor-create')
{{--    <section class="section section-md bg-gray-12">--}}
{{--        <div class="container">--}}
{{--            <!-- RD Mailform-->--}}
{{--            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">--}}
{{--                <div class="row row-20">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="section-1 section-1-start">--}}
{{--                            <h3>Informa????es do empreendimento</h3>--}}
{{--                            <div class="row row-20 mt-20">--}}


{{--                                <div class="col-md-4">--}}
{{--                                    <div class="form-wrap">--}}
{{--                                        <input class="form-input" id="property-contato" type="text" name="contato" data-constraints="@Required">--}}
{{--                                        <label class="form-label" for="property-contato">Digite o endere??o do sites</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-12">--}}
{{--                        <div class="section-1">--}}
{{--                            <h3>Imagem do banner</h3>--}}

{{--                            <input name="gallery" name="foto" type="file" multiple="">--}}




{{--                            <div class="rd-file-drop-meta rd-file-drop-meta-1"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <button class="button button-sm button-secondary" type="submit">Cadastrar Banner</button>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--        </form>--}}
{{--</div>--}}
{{--</section>--}}
<!-- Pre footer section-->

<!-- Page footer-->
<footer class="section footer-classic context-dark bg-gray-21">
    <div class="container">
        <div class="row row-10 justify-content-sm-between">
            <div class="col-sm-6">
                <!-- Rights-->
                <p class="rights"><span>Sistema de apoio para corretores e imbili??rias</span> <span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="privacy-policy.html">Pol??tica de privacidade</a>
                </p>
            </div>
            <div class="col-sm-6 text-sm-right">
                <div class="right-1"><a href="submit-property.html"><span class="icon mdi mdi-plus"></span>Este site foi desenvolvido por Luiz Augusto</a></div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- PANEL-->




<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
{{-- <script src="{{ asset('js/3ts2ksMwXvKRuG480KNifJ2_JNM.js')}}"></script> --}}


{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.0.min.js"></script>


<script>
    $(document).ready(function(){
      $('.date').mask('00/00/0000');
      $('.time').mask('00:00:00');
      $('.date_time').mask('00/00/0000 00:00:00');
      $('.cep').mask('00000-000');
      $('.phone').mask('0000-0000');
      $('.phone_with_ddd').mask('(00) 0000-0000');
      $('.phone_us').mask('(000) 000-0000');
      $('.mixed').mask('AAA 000-S0S');
      $('.cpf').mask('000.000.000-00', {reverse: true});
      $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
      $('.money').mask('000.000.000.000.000,00', {reverse: true});
      $('.money2').mask("#.##0,00", {reverse: true});
      $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
          'Z': {
            pattern: /[0-9]/, optional: true
          }
        }
      });
      $('.ip_address').mask('099.099.099.099');
      $('.percent').mask('##0,00%', {reverse: true});
      $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
      $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
      $('.fallback').mask("00r00r0000", {
          translation: {
            'r': {
              pattern: /[\/]/,
              fallback: '/'
            },
            placeholder: "__/__/____"
          }
        });
      $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
    });
    </script>

@livewireScripts
</body>
</body>
</html>
