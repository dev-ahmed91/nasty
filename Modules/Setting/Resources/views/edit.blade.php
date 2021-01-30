@extends('admin.layout.base')

@section('title')
    Edit a Setting ({{ $form->name }})
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form" method="POST" action="{{ route('admin.settings.update', ['setting' => $form->id]) }}">
                                @method('PUT')
                                @csrf

                                <div class="form-row">
                                    @include('admin.layout.field', field('disabled', 'name', 'Name', 6, $form))
                                    @include('admin.layout.field', field('disabled', 'key', 'Key', 6, $form))
                                    @include('admin.layout.field', field('text', 'value', 'value', 12, $form))
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
