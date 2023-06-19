<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/product/style.css">
    <title>Distortion | {{ $title }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">Distortion</a>
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
    <div class="container">
        <div class="detail-product">
            <div class="row justify-content mb-5">
                <div class="col-md-6">
                    @if($product->image)
                    <div style="max-height: 500px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}"
                            class="img-fluid">
                    </div>

                    @else
                    <img src="https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=400&w=1200&q=80"
                        alt="{{ $product->category->name }}" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-6">
                    <h2 class="mt-3">Product Name : {{ $product->name }}</h2>
                    <p class="mt-2">Price : Rp. {{ $product->price }}</p>
                    <article class="my-2 fs-5">
                        {!! $product->description !!}
                    </article>
                    <p>
                        Related images : <br>
                    </p>
                    <img class="related-img" src="/img/product/bahan1.jpg" alt="related-1">
                    <img class="related-img" src="/img/product/bahan2.jpg" alt="related-1">
                    <img class="related-img" src="/img/product/bahan3.jpg" alt="related-1"><br>
                    <a href="/products" class="btn btn-primary mt-2">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
