@extends('admin.layout')
@section('wrapper')
    <div class="container-fluid">
        @include('admin.elements.title', ['title' => 'Product Category'])
        <!-- end page title -->
        @include('admin.pages.productcat.list');
        <!-- end row -->
    </div>

@include('admin.pages.productcat.script');
@endsection
