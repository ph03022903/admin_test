@php
    use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
@php
        $Header = Template::HeaderTitleContent('Trang menu code', route('admin'));
@endphp
    {!!$Header!!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách</h4>
                        <h6 class="card-subtitle">Danh sách ẩn/hiện menu admin</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th style="width:5%">ID</th>
                                        <th style="width:15%">Trạng thái</th>
                                        <th style="width:60%">Tên menu</th>
                                        <th style="width:10%">Sắp sếp</th>
                                        <th class="text-nowrap" style="width:10%">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_menu as $value )
                                        <tr>
                                            <td>{{$value['id']}}</td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" {{$value['display']==1 ? 'checked' : '';}}><span class="lever switch-col-teal"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>{{$value['name']}}</td>
                                            <td><input class="form-control" type="text" value="" id="example-text-input"></td>
                                            <td class="text-nowrap text-center">
                                                <button type="button" class="btn waves-effect waves-light btn-sm btn-danger">Xóa</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
