@extends('web.base')

@section('content')

    <div class="card card-style">
        <div class="content">
            <h2>Your Order</h2>
            <p>
                Finished Shopping? Let's checkout!
            </p>
            @foreach($cart['products'] as $product)
            <div class="d-flex mb-4">
                <div>
                    <img src="{{ $product['image'] }}" class="rounded-m shadow-xl" width="90" alt="img">
                </div>
                <div class="ms-3">
                    <h4>{{$product['quantity']}} X {{ $product['name'] }}</h4>
                    <h4 class="pt-1 color-highlight">{{ $product['price'] * $product['quantity'] }} LE</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <form method="POST" action="{{ route('web.cart.checkout.submit') }}">
                @csrf
                <h2 class="mb-0">
                    Billing Information
                </h2>
                <p>
                </p>

                <div class="input-style has-borders no-icon validate-field">
                    <input type="text" name="full_name" class="form-control focus-blue validate-text" id="f1" placeholder="Full Name">
                    <label for="f1" class="color-blue-dark">Full Name</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style has-borders no-icon validate-field">
                    <input type="text" name="address" class="form-control focus-blue validate-text" id="f1b" placeholder="Street Address">
                    <label for="f1b" class="color-blue-dark">Street Address</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style has-borders no-icon">
                    <input type="text" name="phone" class="form-control focus-blue " id="f1c" placeholder="Phone Number">
                    <label for="f1c" class="color-blue-dark">Phone Number</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>



                <div class="divider"></div>

                <div class="d-flex mb-3">
                    <div class="me-3">
                        <h4 class="font-18">Total</h4>
                    </div>
                    <div class="ms-auto">
                        <h4 class="font-18">{{ $cart['total'] }} LE</h4>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="me-3">
                        <h4 class="font-18">Shipping</h4>
                    </div>
                    <div class="ms-auto">
                        <h4 class="font-18">30 LE</h4>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-full btn-block bg-highlight btn-m text-uppercase font-800 rounded-sm">Place Order</button>
                </div>
            </form>
        </div>
    </div>

@endsection
