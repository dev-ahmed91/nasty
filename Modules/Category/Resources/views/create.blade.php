@extends('admin.layout.base')

@section('title')
    Create a Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.categories.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-row " style="margin-bottom:  10px">
                                            @include('admin.layout.field', field('select', 'parent_id', 'Parent', 12, [], $categories))
                                            @include('admin.layout.field', field('text', 'name', 'Name', 12))
                                            @include('admin.layout.field', field('file', 'image', 'Image', 12))
                                        </div>
                                    </div>
                                    @include('admin.layout.field', field('toggle', 'status', 'Active', 1))
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
