@extends('admin.layout.base')

@section('title')
    Edit a Product ({{ $form->name }})
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.products.update', ['product' => $form->id]) }}">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-row " style="margin-bottom:  10px">
                                            @include('admin.layout.field', field('text', 'name', 'Name', 12, $form))
                                            @include('admin.layout.field', field('select', 'category_id', 'Category', 12, $form, $categories))
                                            @include('admin.layout.field', field('text', 'description', 'Description', 12, $form))
                                            @include('admin.layout.field', field('file', 'image', 'Image', 12, $form))
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        @if($form->image)
                                            <img  width="100%" class="img-thumbnail" src="{{ $form->image }}">
                                        @endif

                                    </div>
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
