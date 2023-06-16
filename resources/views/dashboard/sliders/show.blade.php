@extends('dashboard.layouts.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Slider</h4>
                        <p class="card-description">
                            More information about specific Slider
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <p class="font-weight-bold mb-2">{{ $slider->title }}</p>
                                    <p>
                                        <img src="{{ asset('storage/' . $slider->image) }}" alt="image" width="200px"
                                        class="img-thumbnail">
                                    </p>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Information</h4>
                        <p class="lead">
                            Slider created at {{ $slider->created_at }}
                        </p>
                    </div>
                    <div class="card-body">
                        <a href="/admin/sliders/" type="button" class="btn btn-warning btn-rounded btn-fw">
                            <i class="ti-arrow-left btn-icon-prepend"></i>
                            Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
