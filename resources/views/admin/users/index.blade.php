@extends('admin.layout.base')

@section('title')
    Admins
@endsection

@section('content')
    <div class="container-fluid">
        @include('admin.layout.alerts')
        <users-list></users-list>
    </div>
@endsection
