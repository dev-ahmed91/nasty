@extends('web.base')

@section('content')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="d-flex px-3 mb-n3">
        <div class="align-self-center">
            <h4 class="mb-0">Categories</h4>
        </div>
        <div class="align-self-center ms-auto" style="margin-bottom: 10px">
            <a href="{{ route('web.categories.index') }}" class="font-12">View All</a>
        </div>
    </div>

    <div class="splide double-slider slider-no-dots text-center visible-slider" id="double-slider-1a">
        <div class="splide__track">
            <div class="splide__list">
                @foreach($categories as $category)
                    <div class="splide__slide">
                        <a href="{{  route('web.categories.index', ['category' => $category->id]) }}" class="mx-3">
                            <div class="card card-style me-0 mb-0" style="background-image:url({{ $category->image }});" data-card-height="200">
                                <div class="card-bottom p-2 px-3">
                                    <h4 class="color-white">{{ $category->name }}</h4>
                                </div>
                                <div class="card-overlay bg-gradient opacity-40"></div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="d-flex px-3 " style="margin-bottom: 10px">
        <div class="align-self-center">
            <h4 class="mb-0">Trending Products</h4>
        </div>
        <div class="align-self-center ms-auto">
            <a href="{{ route('web.categories.index') }}" class="font-12">View All</a>
        </div>
    </div>

    @foreach($trendingProducts as $product)
        <div class="card card-style mb-3">
            <div class="card-top m-3"><span class="bg-blue-dark font-13 py-2 px-2 font-700 rounded-xs shadow-xxl">{{ $product->price }} LE</span></div>
            <img src="{{ $product->image }}" alt="img" style="height: 400px" class="mx-auto img-fluid">
            <div class="d-flex p-3">
                <div>
                    <p class="mb-0 font-14 mt-n1">{{ $product->name }}</p>
                </div>
                <div class="ms-auto">
                    <a href="{{ route('web.categories.index', ['category' => $product->category_id]) }}" class="btn btn-sm bg-green-dark rounded-sm text-uppercase font-700">Order</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
