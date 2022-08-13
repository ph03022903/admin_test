@php
    use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
@php
        $Header = Template::HeaderTitleContent('Trang menu code', 0, route('admin'));
@endphp
    {!!$Header!!}
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Trang chủ
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
