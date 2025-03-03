@extends('layouts.master')
@section('content')
    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>

                            @foreach ($sections as $s)
                                <li data-filter="._{{ $s->id }}">{{ $s->name }}</li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                @foreach ($products as $p)
                    <div class="col-lg-4 col-md-6 text-center _{{ $p->section_id }}">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/products">
                                    <img src="{{ url($p->image_path) }}"
                                        style="max-height: 250px !important; min-height: 250px !important;" alt="">

                            </div>
                            <h3>Strawberry</h3>
                            <p class="product-price"><span>Price: </span>{{ $p->price }} </p>
                            <p class="product-price"><span>Stock: </span>{{ $p->stock }} </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

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
