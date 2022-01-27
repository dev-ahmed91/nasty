@extends('admin.layout.base')

@section('title')
    Orders
@endsection

@section('content')
    <div class="container-fluid">
        @include('admin.layout.alerts')
        <orders-list></orders-list>
    </div>
@endsection
