@extends('admin.layout.base')

@section('title')
    Create a new Doctor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.doctors.store') }}">
                                @method('POST')
                                @csrf

                                <div class="form-row " style="margin-bottom:  10px">
                                    @include('admin.layout.field', field('text', 'name', 'Name', 6))
                                    @include('admin.layout.field', field('text', 'branch', 'Branch', 6))
                                    @include('admin.layout.field', field('text', 'description', 'Description', 12))
                                    @include('admin.layout.field', field('file', 'image', 'Image', 12))
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
