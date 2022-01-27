@extends('admin.layout.base')

@section('title')
    Adding/Removing Stock for {{ $product->name }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.products.stock.store', ['product' => $product->id]) }}">
                                @method('POST')
                                @csrf

                                <div class="form-row " style="margin-bottom:  10px">
                                    @include('admin.layout.field', field('select', 'branch_id', 'Branch', 2, [], $branches))
                                    @include('admin.layout.field', field('text', 'quantity', 'quantity', 1))
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
s
