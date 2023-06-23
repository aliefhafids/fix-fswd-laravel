<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/about/style.css">

    <title>Motorhead | About</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">Motorhead</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
            @auth
            <form action="/logout" method="POST" class="form-inline my-2 my-lg-0">
                @csrf
                <button type="submit" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
            </form>
            @endauth
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($sliders as $slider => $item)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slider }}"
                class="{{ $slider == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($sliders as $slider => $item)
            <div class="carousel-item {{ $slider == 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                <div class="carousel-caption">
                    <h3>{{ $item->title }}</h3>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Introduction </h2>
                    <p class="my-4">Motorhead Club is a motorcycle community in Malang, and this Motorhead
                        already has many partners and clients. and this web application is used to introduce motorheads
                        in the city of Malang </p>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Vision and Mission </h2>
                    <p class="my-4"><b>Vision :</b> Become the largest motorbike community in Malang city and even in
                        Indonesia, and this community can provide benefits to other people.</p>
                    <p class="my-4"><b>Mission :</b> From the results of our community, we can offer donations from the
                        events we hold.</p>
                </div>
            </div>
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <p>
                        our Galleries <br>
                    </p>
                    <img class="related-img" src="/img/gallery/gallery-1.jpg" alt="related-1">
                    <img class="related-img" src="/img/gallery/gallery-2.jpg" alt="related-1">
                    <img class="related-img" src="/img/gallery/gallery-3.jpg" alt="related-1"><br>
                </div>
            </div>
        </div>
        <br>
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Get easiser with Motorhead<br> Mobile App</h2>
                    <p class="my-4">Now the motorhead club app can be used on the playstore, 
                        what is the design of the application? see further to visit the article.</p>
                    <a href="#" >See More</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center">
                    <img src="img/feature-2.png" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    
        
   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
