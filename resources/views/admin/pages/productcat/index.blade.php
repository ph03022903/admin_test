@php
    use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
@php
        $Header = Template::HeaderTitleContent('Danh sách danh mục', route('productcat/config'), true);

@endphp
    {!!$Header!!}
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"></h3>
        </div>
        <div class="col-md-7 align-self-center text-right">
        <a type="button" href="{{ route('productcat/form') }}" class="btn btn-primary"><i class="%s"></i>Thêm mới</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bordered Table</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tên Danh mục</th>
                                        <th>Progress</th>
                                        <th class="text-center text-nowrap">Hiển thị</th>
                                        <th class="text-center text-nowrap">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lunar probe project</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar bg-danger" style="width: 35%; height:6px;"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="switch">
                                                <label>
                                                    <input type="checkbox" check=""><span class="lever switch-col-teal"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dream successful plan</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar bg-warning" style="width: 50%; height:6px;"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="switch">
                                                <label>
                                                    <input type="checkbox" checked="checked"><span class="lever switch-col-teal"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Office automatization</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar bg-success" style="width: 100%; height:6px;"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="switch">
                                                <label>
                                                    <input type="checkbox" check=""><span class="lever switch-col-teal"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
