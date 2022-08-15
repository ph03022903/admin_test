@php
    use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
@php
        $Header = Template::HeaderTitleContent('Danh sách sản phẩm', route('product/form'), true);
@endphp
    {!!$Header!!}
    @include('admin.pages.product.list');
@endsection
