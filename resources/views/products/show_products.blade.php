@extends('layouts.master')
@section('content')
    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $p)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="sections">

                                    <img src="{{ url($p->image_path) }}"
                                        style="max-height: 250px !important; min-height: 250px !important;" alt="">
                            </div>
                            <h3>{{ $p->name }}</h3>
                            <p>${{ $p->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end product section -->
@endsection
