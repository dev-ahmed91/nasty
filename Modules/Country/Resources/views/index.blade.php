@extends('admin.layout.base')

@section('title')
    Countries
@endsection

@section('content')
    <div class="container-fluid">
        @include('admin.layout.alerts')
        <countries-list></countries-list>
    </div>
@endsection
