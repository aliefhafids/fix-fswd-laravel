@extends('layouts.app')

@section('content')
<!-- banner -->
<div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/banner-bk.png);">
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
            Motorhead Club<br>
            Web App
        </h1>
        <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
            class="lead text-white my-4">
            Web application that displays information from documentation from Motörhead Club <br>
            which also facilitates product sales in the form of motor spareparts.
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
            <h4>Community</h4>
            <p>Several partners who work together in your community.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
            class="col-md-4 text-center">
            <img src="img/smart-protect-2.png" alt="Phishing Detect" class="mx-auto">
            <h4>Solidarity</h4>
            <p>Family solidarity establishes good relations with others.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
            class="col-md-4 text-center">
            <img src="img/smart-protect-3.png" alt="Smart Scan" class="mx-auto">
            <h4>Easiness</h4>
            <p>Convenience in finding motor spare parts.</p>
        </div>
    </div>
</div>
<!-- feature (skew background) -->
<div class="jumbotron jumbotron-fluid feature" id="feature-first">
    <div class="container my-5">
        <div class="row justify-content-between text-center text-md-left">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h2 class="font-weight-bold">Available on Mobile App </h2>
                <p class="my-4">Motorhead mobile app available on playstore, Download now to see documentation from motohead club.</p>
                <a href="/about" class="btn my-4 font-weight-bold atlas-cta cta-blue">Download</a>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <img src="img/feature-1.png" alt="Take a look inside" class="mx-auto d-block">
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="font-weight-bold">Our client : </h3>
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client/client1.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client/client2.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client/client3.png" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

<div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk1.png);">
    <div class="container my-5">
        <div class="row justify-content-between">
            <div class="col-md-6 text-white">
                <h2 class="font-weight-bold">Contact Us</h2>
                <p class="my-4">
                    For more information, you can call the number below
                    <br> You can order the product after the feature is available.
                </p>
                <ul class="list-unstyled">
                    <li>Email : motorheadclub@gmai.com</li>
                    <li>Phone : +62 822-4509-4594</li>
                    <li>Address : Griyashanta K-407, Jl. Soekarno - Hatta, Mojolangu, Kec. Lowokwaru, Jawa Timur, 65142
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- copyright -->
<div class="jumbotron jumbotron-fluid" id="copyright">
    <div class="container">
    </div>
</div>
@endsection
