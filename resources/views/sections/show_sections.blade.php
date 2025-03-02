@extends('layouts.master')
@section('content')
    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">



            <div class="row product-lists">
                @foreach ($sections as $s)
                    <div class="col-lg-4 col-md-6 text-center strawberry">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/products/{{ $s->id }}">
                                    <img src="{{ url($s->image_path) }}"
                                        style="max-height: 250px !important; min-height: 250px !important;" alt="">

                            </div>
                            <h3>{{ $s->name }}</h3>
                            <p>{{ $s->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->
@endsection
