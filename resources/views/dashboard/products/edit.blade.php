@extends('dashboard.layouts.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/admin/products/{{ $product->id }}" class="mb-5"
                            enctype="multipart/form-data">
                            <h4 class="card-title">Edit Products form</h4>
                            <form class="forms-sample">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" required value="{{ old('name', $product->name) }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price" required value="{{ old('price', $product->price) }}">
                                    @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" name="category_id">
                                        @foreach ($categories as $category)
                                        @if(old('category_id', $product->category_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Product Image</label>
                                    <input type="hidden" name="oldImage" value="{{ $product->image }}">
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" width="100px"  class="img-preview img-fluid mb-3 col-sm-5">
                                    @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    @endif
                                    <input class="form-control @error('image') is-invalid @enderror" type="file"
                                        id="image" name="image" onchange="previewImage()">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea type="text"
                                        class="form-control @error('description') is-invalid @enderror" id="description"
                                        name="description" required
                                        value="{{ old('description', $product->description) }}">
                                    @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

@endsection
