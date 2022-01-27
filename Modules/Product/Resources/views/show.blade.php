@extends('admin.layout.base')

@section('title')
    ({{ $product->name }})
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-personal-info">
                            <h4 class="text-primary mb-4">Product Details</h4>
                            <div class="row mb-2">
                                <div class="col-sm-3 col-5">
                                    <h5 class="f-w-500">Name <span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-sm-9 col-7"><span>{{ $product->name }}</span></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3 col-5">
                                    <h5 class="f-w-500">Price <span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-sm-9 col-7"><span>{{ $product->price }} LE</span></div>
                            </div>
                        </div>

                        <div class="profile-personal-info">
                            <h4 class="text-primary mb-4">Stock</h4>
                            <div class="row mb-2">
                                <div class="col-sm-3 col-5">
                                    <h5 class="f-w-500">Overall <span class="pull-right">:</span></h5>
                                </div>
                                <div class="col-sm-9 col-7"><span>{{ (int) $product->stock }}</span></div>
                            </div>
                            @foreach($branches as $branch)
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">{{ $branch->name }} <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $product->branchStock($branch->id) }}</span></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
