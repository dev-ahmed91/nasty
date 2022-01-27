@extends('admin.layout.base')

@section('title')
    POS Orders creation
@endsection

@section('content')
    <div class="container-fluid">
        @include('admin.layout.alerts')
        <orders-creation branches="{{ json_encode($branches) }}"></orders-creation>
    </div>
@endsection
