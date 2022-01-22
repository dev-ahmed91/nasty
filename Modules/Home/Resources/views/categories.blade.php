@extends('web.base')

    @section('content')

    @if($categories)
        <div class="d-flex px-3 mb-n3">
            <div class="align-self-center">
                <h4 class="mb-0">Categories</h4>
            </div>
        </div>
        <div class="row">
             @foreach($categories as $category)
                 <div class="col-6">
                     <a href="{{  route('web.categories.index', ['category' => $category->id]) }}" class="mx-4">
                         <div class="card card-style me-0 mb-0" style="background-image:url({{ $category->image }}); height: 200px">
                             <div class="card-bottom p-2 px-3">
                                 <h4 class="color-white">{{ $category->name }}</h4>
                             </div>
                             <div class="card-overlay bg-gradient opacity-40"></div>
                         </div>
                     </a>
                 </div>
             @endforeach
        </div>
    @endif

    @if($products)
        <div class="d-flex px-3 " style="margin-bottom: 10px">
            <div class="align-self-center">
                <h4 class="mb-0">Products</h4>
            </div>
        </div>

        @foreach($products as $product)
            <div class="card card-style mb-3">
                <div class="card-top m-3"><span class="bg-blue-dark font-13 py-2 px-2 font-700 rounded-xs shadow-xxl">{{ $product->price }} LE</span></div>
                <img src="{{ $product->image }}" alt="img" style="height: 400px" class="mx-auto img-fluid">
                <div class="d-flex p-3">
                    <div>
                        <p class="mb-0 font-14 mt-n1">{{ $product->name }}</p>
                    </div>
                    <div class="ms-auto">
                        <a href="#" data-toast="snackbar-cart" onclick="cart({{ $product->id }})" class=" btn btn-sm bg-green-dark rounded-sm text-uppercase font-700">Order</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <script type="text/javascript">
        function cart(id) {
            axios.post('{{ route('web.cart.add') }}', {
                product: id,
            })
            .then((response) => {
                console.log(response);
            }, (error) => {
                console.log(error);
            });
        }
    </script>


@endsection
