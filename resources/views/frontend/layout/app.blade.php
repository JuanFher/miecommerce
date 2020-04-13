<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.partials.header')
</head>

<body>
    @include('frontend.layout.partials.mini_menu')
    <div class="super_container">
        <!-- Header -->
        @include('frontend.layout.partials.nav')
        <div class="super_container_inner">
            <div class="super_overlay"></div>
            <!-- Home -->
            <div class="home">
                <!-- Home Slider -->
                @yield('slider')
            </div>
            <!-- Products -->
            <div class="products">
                @yield('content')
            </div>
            <!-- Lo mas visto -->
            <div class="lomasvendidocontenedor">
                @yield('more_view')
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Lo mas visto -->
        <div class="lomasvendidocontenedor">
            @yield('more_sale')
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- En oferta -->
    <div class="lomasvendidocontenedor">
        @yield('in_offert')
    </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Boxes -->
    <div class="boxes">
        @yield('boxes')
    </div>
    <!-- Features -->
    <div class="features">
        <div class="container">
            <div class="row">
                <!-- Feature -->
                <div class="col-lg-4 feature_col">
                    <div class="feature d-flex flex-row align-items-start justify-content-start">
                        <div class="feature_left">
                            <div class="feature_icon">
                                <img src="{{ asset('assets/images/icon_1.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                            <div class="feature_title">Pagos rápidos y seguros</div>
                        </div>
                    </div>
                </div>
                <!-- Feature -->
                <div class="col-lg-4 feature_col">
                    <div class="feature d-flex flex-row align-items-start justify-content-start">
                        <div class="feature_left">
                            <div class="feature_icon ml-auto mr-auto">
                                <img src="{{ asset('assets/images/icon_2.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                            <div class="feature_title">Productos de calidad</div>
                        </div>
                    </div>
                </div>
                <!-- Feature -->
                <div class="col-lg-4 feature_col">
                    <div class="feature d-flex flex-row align-items-start justify-content-start">
                        <div class="feature_left">
                            <div class="feature_icon">
                                <img src="{{ asset('assets/images/icon_3.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                            <div class="feature_title">Entrega gratis después de $100</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->@include('frontend.layout.partials.foot')</div>
    </div>@include('frontend.layout.partials.footer')</body>

</html>