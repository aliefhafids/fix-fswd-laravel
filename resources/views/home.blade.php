@extends('layouts.app')

@section('content')
<!-- banner -->
 <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/banner-bk.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    @auth
                    <div class="col-6 align-self-center text-right">
                        <a href="/dashboard" class="text-white">Dashboard</a>
                    </div>

                    @else
                    <div class="col-6 align-self-center text-right">
                        <a href="/login" class="text-white">LOGIN</a>
                    </div>
                    @endauth
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="display-3 text-white font-weight-bold my-5">
                Distortion Store<br>
                Web App
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="lead text-white my-4">
                Web Application that facilitates the purchase of clothes <br>
                featuring many of the products sold at Distortion Stores in Malang
            </p>
            <a href="/products" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="btn my-4 font-weight-bold atlas-cta cta-green">Shop</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">The benefits you get</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="img/smart-protect-1.png" alt="Anti-spam" class="mx-auto">
                <h4>effectiveness</h4>
                <p>Provide effectiveness for the purchase of our products.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="img/smart-protect-2.png" alt="Phishing Detect" class="mx-auto">
                <h4>Accurate</h4>
                <p>Order data is never wrong and the product must reach the buyer's hands</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="img/smart-protect-3.png" alt="Smart Scan" class="mx-auto">
                <h4>Safety</h4>
                <p>Good packing for every product purchase</p>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Available on Mobile App </h2>
                    <p class="my-4">Distortion mobile app available on playstore, Download now and experience the ease of shopping.</p>
                    <a href="/about" class="btn my-4 font-weight-bold atlas-cta cta-blue">Download</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center">
                    <img src="img/feature-1.png" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            </div>
            @auth
            <a class="nav-link">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-white border-0">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </button>
                </form>
            </a>
            @endauth
        </div>
    </div>
@endsection 