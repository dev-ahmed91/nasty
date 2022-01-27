@extends('admin.layout.base')

@section('title')
    Create a Branch
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form" method="POST" action="{{ route('admin.branches.store') }}">
                                @csrf

                                <div class="form-row">
                                    @include('admin.layout.field', field('text', 'name', 'Name', 3))
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
