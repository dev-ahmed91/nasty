@extends('web.base')

@section('content')

    <div class="card card-style">
        <div class="content">
            <h2 class="mb-0">
                Cart
            </h2>
            <p>
                Your shopping cart before checking out.
            </p>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">

            @foreach($cart['products'] as $id => $product)
                <div id="product-{{$id}}-card">
                    <div class="d-flex mb-4 pb-2">
                        <div>
                            <img src="{{ $product['image'] }}" class="rounded-m shadow-xl" width="100" alt="img">
                        </div>
                        <div class="ms-3">
                            <h2 class="font-20">{{ $product['name'] }}</h2>

                            <h3 class="pt-3 pb-3" id="product-{{$id}}-price">{{ $product['price'] * $product['quantity']}} LE</h3>
                            <div>
                                <div class="stepper rounded-s pt-1">
                                    <a href="#" class="stepper-sub" onclick="removeCart({{$id}})"><i class="fa fa-minus color-theme opacity-40"></i></a>
                                    <input type="number" id="product-{{$id}}-quantity" name="product[{{$id}}]" min="1" max="10" value="{{ $product['quantity'] }}">
                                    <a href="#" class="stepper-add" onclick="addCart({{$id}})"><i class="fa fa-plus color-theme opacity-40"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>

                </div>

            @endforeach




            <div class="d-flex mb-3">
                <div class="me-3">
                    <h4 class="font-20">Total</h4>
                </div>
                <div class="ms-auto">
                    <h4 class="font-20" id="cart-total">{{ $cart['total'] }} LE</h4>
                </div>
            </div>
            <div class="divider"></div>
            <a href="{{ route('web.cart.checkout') }}" class="btn btn-full bg-highlight btn-m text-uppercase font-800 rounded-sm mb-4">Proceed to Checkout</a>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        function addCart(id) {
            axios.post('{{ route('web.cart.add') }}', {
                product: id,
            })
            .then((response) => {
                document.getElementById('cart-total').innerHTML = response.data.total + ' LE';
            }, (error) => {
                console.log(error);
            });
        }

        function removeCart(id) {
            axios.post('{{ route('web.cart.remove') }}', {
                product: id,
            })
            .then((response) => {
                var quantity =  document.getElementById('product-'+id+'-quantity').value;
                console.log(quantity)
                if (quantity < 1) {
                    document.getElementById('product-'+id+'-card').remove();
                }
                document.getElementById('cart-total').innerHTML = response.data.total + ' LE';
            }, (error) => {
                console.log(error);
            });
        }
    </script>
@endsection
