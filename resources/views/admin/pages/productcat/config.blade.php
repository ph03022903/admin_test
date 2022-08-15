@php
    use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
@php
        $Header = Template::HeaderTitleContent('Cấu hình danh mục',route('productcat') , false);
@endphp
    {!!$Header!!}
    @include('admin.config.index');
@endsection

