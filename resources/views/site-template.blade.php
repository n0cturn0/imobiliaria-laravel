<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Real Estate 1</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,400,500,700,900">
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">--}}
    <link rel="stylesheet" href="{{ url(mix('css/style.css')) }}">
{{--    <link rel="stylesheet" href="css/style.css">--}}
{{--    <link rel="stylesheet" href="css/fonts.css">--}}
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
                                    <div class="unit-body"><a href="tel:#">67 991302726</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="block-inline unit unit-spacing-xs align-items-center">
                                    <div class="unit-left"><span class="icon text-middle mdi mdi-email-outline"></span></div>
                                    <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="rd-navbar-aside-item">

                            <div class="rd-navbar-popup bg-gray-12" id="navbar-login-register">
                                <!-- Bootstrap tabs-->
                                <div class="tabs-custom tabs-horizontal tabs-line" id="navbar-tabs">
                                    <!-- Nav tabs-->
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#navbar-tabs-1" data-toggle="tab">Login</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="#navbar-tabs-2" data-toggle="tab">Register</a></li>
                                    </ul>
                                    <!-- Tab panes-->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navbar-tabs-1">
                                            <form class="rd-form form-1">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="navbar-login-email" type="email" name="email" data-constraints="@Email @Required">
                                                    <label class="form-label" for="navbar-login-email">E-mail</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="navbar-login-password" type="password" name="password" data-constraints="@Required">
                                                    <label class="form-label" for="navbar-login-password">Password</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <button class="button button-sm button-primary button-block" type="submit">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="navbar-tabs-2">
                                            <form class="rd-form form-1">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-name" type="text" name="username" data-constraints="@Required">
                                                    <label class="form-label" for="register-name">Username</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-email" type="email" name="email" data-constraints="@Email @Required">
                                                    <label class="form-label" for="register-email">E-mail</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-password" type="password" name="password" data-constraints="@Required">
                                                    <label class="form-label" for="register-password">Password</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-password-confirm" type="password" name="password" data-constraints="@Required">
                                                    <label class="form-label" for="register-password-confirm">Confirm Password</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <button class="button button-sm button-primary button-block" type="submit">Create an Account</button>
                                                </div>
                                                <div class="form-wrap">
                                                    <div class="text-decoration-lines"><span class="text-decoration-lines-content">or enter with</span></div>
                                                </div>
                                                <div class="form-wrap">
                                                    <div class="button-group"><a class="button button-facebook button-icon button-icon-only" href="#" aria-label="Facebook"><span class="icon mdi mdi mdi-facebook"></span></a><a class="button button-twitter button-icon button-icon-only" href="#" aria-label="Twitter"><span class="icon mdi mdi-twitter"></span></a><a class="button button-google button-icon button-icon-only" href="#" aria-label="Google+"><span class="icon mdi mdi-google"></span></a></div>
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
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-default-121x61.png')}}" alt="" width="121" height="61" srcset="images/logo-default-242x122.png 2x"/><img class="brand-logo-light" src="images/logo-inverse-121x61.png" alt="" width="121" height="61" srcset="images/logo-inverse-242x122.png 2x"/></a>
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
    <section class="section section-lg bg-default">
        <div class="container">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="4" data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="30" data-autoplay="true" data-autoplay-speed="3000" data-mouse-drag="false"><a class="link-corporate" href="#"><img src="images/brand-1-183x44.png" alt="" width="183" height="44"/></a><a class="link-corporate" href="#"><img src="images/brand-2-118x82.png" alt="" width="118" height="82"/></a><a class="link-corporate" href="#"><img src="images/brand-3-137x39.png" alt="" width="137" height="39"/></a><a class="link-corporate" href="#"><img src="images/brand-4-133x77.png" alt="" width="133" height="77"/></a><a class="link-corporate" href="#"><img src="images/brand-5-145x35.png" alt="" width="145" height="35"/></a></div>
        </div>
    </section>

    <section class="section">
        <div class="range">
            <div class="cell-xl-6_lg box-1-cell height-fill context-dark">
                <div class="box-1-bg-shape"><img class="box-1-bg-image" src="images/bg-shape-1.svg" alt=""></div>
                <div class="cell-inner box-1-outer">
                    <div class="box-1">
                        <h2>Faça uma busca da sua nova casa</h2>
                        <form class="rd-form">
                            <div class="row row-x-20 row-20">
                                <div class="col-sm-6 col-lg-12 col-xl-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="search-property-location" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Escolha onde buscar" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="2">Alaska</option>
                                            <option value="3">Arizona</option>
                                            <option value="4">Arkansas</option>
                                            <option value="5">California</option>
                                            <option value="6">Colorado</option>
                                            <option value="7">Connecticut</option>
                                            <option value="8">Delaware</option>
                                            <option value="9">Florida</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="search-property-type" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Tipo do imóvel" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="2">Apartment</option>
                                            <option value="3">House</option>
                                            <option value="4">Lot</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-6 col-xl-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="search-property-status" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Escolha . . ." data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="2">For Sale</option>
                                            <option value="3">For Rent</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-6 col-xl-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="search-property-bathrooms" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Banheiros" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-6 col-xl-4">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="search-property-bedrooms" data-style="modern" data-class="select-dropdown-context-dark" data-placeholder="Quartos" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="rd-range-outer">
                                <p class="rd-range-caption">Preço (R$)</p>
                                <!-- RD Range-->
                                <div class="rd-range" data-min="50" data-max="10000" data-start="[50, 10000]" data-step="10" data-tooltip="true" data-min-diff="100"></div>
                            </div>
                            <div class="rd-range-outer">
                                <p class="rd-range-caption">Área Construída</p>
                                <!-- RD Range-->
                                <div class="rd-range" data-min="70" data-max="20000" data-start="[70, 20000]" data-step="10" data-tooltip="true" data-min-diff="100"></div>
                            </div>
                            <div class="layout-5">
                                <div class="layout-5-item layout-5-item_primary">

                                </div>
                                <div class="layout-5-item"><a class="button button-secondary-outline" href="search-results-2.html" style="min-width: 150px;">Encontrar minha casa</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cell-xl-6_sm height-fill">
                <div class="box-2">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="1" data-xl-items="2" data-dots="false" data-nav="false" data-nav-custom="#owl-outer-nav" data-loop="true" data-margin="30" data-autoplay="true" data-autoplay-speed="3500" data-stage-padding="0" data-mouse-drag="false"><a class="product-corporate context-dark" href="single-property.html" style="background-image: url(images/real-estate-1-1-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">401 Biscayne Boulevard, Miami</h3>
                                    <h4 class="product-corporate-info">3 bedrooms, $240\day</h4>
                                </div>
                            </div></a><a class="product-corporate context-dark" href="single-property.html" style="background-image: url(images/real-estate-1-2-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">3895 NW 107th Ave, Doral</h3>
                                    <h4 class="product-corporate-info">2 bedrooms, $130\day</h4>
                                </div>
                            </div></a><a class="product-corporate context-dark" href="single-property.html" style="background-image: url(images/real-estate-1-3-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">3782 Broadway St, San Francisco</h3>
                                    <h4 class="product-corporate-info">2 bedrooms, $290\day</h4>
                                </div>
                            </div></a><a class="product-corporate context-dark" href="single-property.html" style="background-image: url(images/real-estate-1-4-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">9021 Charter Oak Ln, San Diego</h3>
                                    <h4 class="product-corporate-info">1 bedroom, $210\day</h4>
                                </div>
                            </div></a></div>
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
                <div class="col-md-6 col-lg-4">
                    <!-- Product Classic-->
                    <article class="product-classic">
                        <div class="product-classic-media">
                            <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"><img src="images/featured-properties-01-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-02-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-03-480x287.jpg" alt="" width="480" height="287"/><img src="images/featured-properties-04-480x287.jpg" alt="" width="480" height="287"/>
                            </div>
                            <div class="product-classic-price"><span>$5000\mo</span></div>
                        </div>
                        <h4 class="product-classic-title"><a href="single-property.html">401 Biscayne Boulevard, Miami</a></h4>
                        <div class="product-classic-divider"></div>
                        <ul class="product-classic-list">
                            <li><span class="icon mdi mdi-vector-square"></span><span>480 Sq Ft</span></li>
                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                            <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                        </ul>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
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
                </div>
                <div class="col-md-6 col-lg-4">
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
                </div>
                <div class="col-md-6 col-lg-4">
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
                </div>
                <div class="col-md-6 col-lg-4">
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
                </div>
                <div class="col-md-6 col-lg-4">
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
                </div>
                <div class="col-12 text-center"><a class="button button-primary" href="properties-grid.html">Ver todas nossos imóveis</a></div>
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
    <!-- FAQ-->

    <!-- Latest Blog Posts-->

    <!-- Page Footer-->
    <!-- Pre footer section-->
    <section class="section section-md bg-gray-31 context-dark">
        <div class="container">
            <div class="row row-40 justify-content-lg-between">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Últimos imóveis</h3><a class="post-minimal" href="single-property.html">
                        <div class="post-minimal-image"><img src="images/post-minimal-01-161x136.jpg" alt="" width="161" height="136"/>
                        </div>
                        <div class="post-minimal-body">
                            <div class="post-minimal-title"><span> Retail Store Southwest 186th Street</span></div>
                            <div class="post-minimal-text"><span>From $120/month</span></div>
                        </div></a><a class="post-minimal" href="single-property.html">
                        <div class="post-minimal-image"><img src="images/post-minimal-02-161x136.jpg" alt="" width="161" height="136"/>
                        </div>
                        <div class="post-minimal-body">
                            <div class="post-minimal-title"><span> Apartment Building with Subunits</span></div>
                            <div class="post-minimal-text"><span>From $120/month</span></div>
                        </div></a>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 col-bordered">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Oi! Fale Conosco</h3>
                    <div class="link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon"><span class="icon icon-1 mdi mdi-phone"></span><a href="tel:#">1-800-700-6200</a></div>
                    <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-2 mdi mdi-email-outline"></span><a href="mailto:#">info@demolink.org</a></div>
                    <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-3 mdi mdi-map-marker"></span><a href="#">3015 Grand Ave, Coconut<br style="line-height: 0"> Grove,Merrick Way, FL 12345</a></div>
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
                        <li><a class="icon fa-facebook" href="#"></a></li>
                        <li><a class="icon fa-twitter" href="#"></a></li>
                        <li><a class="icon fa-google-plus" href="#"></a></li>
                        <li><a class="icon fa-pinterest-p" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page footer-->
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

<script src="{{url(mix('js/scripts.js'))}}"></script>
</body>
</html>
