<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
  
    {{-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> --}}
    <!-- Stylesheets-->
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

    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                 data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                 data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                 data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-aside-outer">
                    <div class="rd-navbar-aside">
                        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                             data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                        <ul class="rd-navbar-aside-list rd-navbar-collapse">
                            <li>
                                <div class="block-inline unit unit-spacing-xs align-items-center">
                                    <div class="unit-left"><span class="icon text-middle mdi mdi-phone"></span></div>
                                    <div class="unit-body"><a href="https://wa.me/5567992809899?text=Ol%C3%A1%20Estou%20enviando%20essa%20mensagem%20atrav%C3%A9s%20do%20site">67 99280-9899</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="block-inline unit unit-spacing-xs align-items-center">
                                    <div class="unit-left"><span class="icon text-middle mdi mdi-email-outline"></span>
                                    </div>
                                    <div class="unit-body"><a href="mailto:#">contato@itshomeimobiliaria.com.br</a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="rd-navbar-aside-item">

                            <div class="rd-navbar-popup bg-gray-12" id="navbar-login-register">
                                <!-- Bootstrap tabs-->
                                <div class="tabs-custom tabs-horizontal tabs-line" id="navbar-tabs">
                                    <!-- Nav tabs-->
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item" role="presentation"><a class="nav-link active"
                                                                                    href="#navbar-tabs-1"
                                                                                    data-toggle="tab">Login</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link"
                                                                                    href="#navbar-tabs-2"
                                                                                    data-toggle="tab">Register</a></li>
                                    </ul>
                                    <!-- Tab panes-->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navbar-tabs-1">
                                            <form class="rd-form form-1">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="navbar-login-email" type="email"
                                                           name="email" data-constraints="@Email @Required">
                                                    <label class="form-label" for="navbar-login-email">E-mail</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="navbar-login-password" type="password"
                                                           name="password" data-constraints="@Required">
                                                    <label class="form-label"
                                                           for="navbar-login-password">Password</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <button class="button button-sm button-primary button-block"
                                                            type="submit">Sign in
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="navbar-tabs-2">
                                            <form class="rd-form form-1">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-name" type="text"
                                                           name="username" data-constraints="@Required">
                                                    <label class="form-label" for="register-name">Username</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-email" type="email"
                                                           name="email" data-constraints="@Email @Required">
                                                    <label class="form-label" for="register-email">E-mail</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-password" type="password"
                                                           name="password" data-constraints="@Required">
                                                    <label class="form-label" for="register-password">Password</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-password-confirm"
                                                           type="password" name="password" data-constraints="@Required">
                                                    <label class="form-label" for="register-password-confirm">Confirm
                                                        Password</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <button class="button button-sm button-primary button-block"
                                                            type="submit">Create an Account
                                                    </button>
                                                </div>
                                                <div class="form-wrap">
                                                    <div class="text-decoration-lines"><span
                                                            class="text-decoration-lines-content">or enter with</span>
                                                    </div>
                                                </div>
                                                <div class="form-wrap">
                                                    <div class="button-group"><a
                                                            class="button button-facebook button-icon button-icon-only"
                                                            href="#" aria-label="Facebook"><span
                                                                class="icon mdi mdi mdi-facebook"></span></a><a
                                                            class="button button-twitter button-icon button-icon-only"
                                                            href="#" aria-label="Twitter"><span
                                                                class="icon mdi mdi-twitter"></span></a><a
                                                            class="button button-google button-icon button-icon-only"
                                                            href="#" aria-label="Google+"><span
                                                                class="icon mdi mdi-google"></span></a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark"
                                                                                                 src="{{ asset('images/logo-its.png')}}"
                                                                                                 alt="" width="121"
                                                                                                 height="61"
                                                                                                 srcset="images/logo-default-242x122.png 2x"/><img
                                        class="brand-logo-light" src="images/logo-inverse-121x61.png" alt="" width="121"
                                        height="61" srcset="images/logo-inverse-242x122.png 2x"/></a>
                            </div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Imóveis</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Contato</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>



@yield('itshome')
@yield('detalhada')
@yield('lista-lancamento')

    <footer class="section footer-classic context-dark bg-gray-21">
        <div class="container">
            <div class="row row-10 justify-content-sm-between">
                <div class="col-sm-6">
                    <!-- Rights-->
                    <p class="rights"><span>Sistema de apoio para corretores e imbiliárias</span> <span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="privacy-policy.html">Política de privacidade</a>
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

<!-- Global Mailform Output -->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->

{{-- <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script> --}}
  {{-- <script src="{{ asset('js/range.js') }}"></script> --}}
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/3ts2ksMwXvKRuG480KNifJ2_JNM.js')}}"></script>
<script src="{{ asset('js/jquery.mask.js')}}"></script>
{{-- <script>
    document.addEventListener("livewire:load", function(event) { window.livewire.hook('afterDomUpdate', () => { setTimeout(function() { $('#alert').fadeOut('fast'); }, 300); }); });
</script> --}}
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

</body>
</html>
