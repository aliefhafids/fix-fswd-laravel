<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/product/style.css">
    <title>Distortion | {{ $title }}</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">Distortion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
  </div>
</nav>
    <div class="container text-center text-md-left">
        <h1 class="text-center text-dark font-weight-bold my-2">{{ $title }}</h1>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/products">
                    @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{request('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>


        @if($products->count())

        <div class="container my-5 py-2">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card border-light mb-3">
                        <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.3)"><a
                                href="/products?category={{ $product->category->id }}"
                                class="text-white text-decoration-none">{{ $product->category->name }}</a></div>
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}"
                            class="img-fluid">
                        @else
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=300&w=500&q=80"
                            alt="{{ $product->category->name }}">
                        @endif


                        <div class="card-body text-center">
                            <h5 class="card-title text-black font-weight-bold">{{ $product->name }}</h5>
                            <p class="card-text">Rp. {{ $product->price }}</p>
                            <a href="/products/{{ $product->id }}" class="btn btn-primary mb-3">Detail product</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        @else
        <p class="text-center fs-4">No product found.</p>
        @endif

        <div class="d-flex justify-content-end">
            {{ $products->links() }}
        </div>
</body>

</html>
