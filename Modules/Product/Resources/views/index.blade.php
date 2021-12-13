@extends('admin.layout.base')

@section('title')
    Products
@endsection

@section('content')
    <div class="container-fluid">
        @include('admin.layout.alerts')
        <products-list></products-list>
    </div>
@endsection
