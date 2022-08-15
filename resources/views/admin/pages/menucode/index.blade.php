@php
use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
    @php
    $Header = Template::HeaderTitleContent('Trang menu code', route('admin'));
    @endphp
    {!! $Header !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách</h4>
                        <h6 class="card-subtitle">Danh sách ẩn/hiện menu admin</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-menu-code">
                                <thead>
                                    <tr>
                                        <th style="width:5%">ID</th>
                                        <th style="width:10%">Trạng thái</th>
                                        <th style="width:65%;">Tên menu</th>
                                        <th style="width:10%">Sắp sếp</th>
                                        <th class="text-nowrap" style="width:10%">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_menu as $value)
                                        <tr>
                                            <td>{{ $value['id'] }}</td>
                                            <td>
                                                <div class="switch {{ $value['default'] == 1 ? 'disable-button' : '' }}">
                                                    <label>
                                                        <input
                                                        data-display={{ $value['display'] }}
                                                        data-id={{ $value['id'] }}
                                                        type="checkbox"
                                                        onclick="changeDisplay(this)"
                                                            {{ $value['display'] == 1 ? 'checked' : '' }}><span
                                                            class="lever switch-col-teal"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-left font-bold"><a href="javascript:;">{{ $value['name'] }}</a>
                                            </td>
                                            <td><input class="form-control" type="text" value="{{ $value['sort'] }}"
                                                    id="example-text-input"></td>
                                            <td class="text-nowrap text-center">
                                                @if ($value['fixed'] == 0)
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-sm btn-danger">Xóa</button>
                                                @endif

                                            </td>
                                        </tr>
                                        @if ($value['child'])
                                            @foreach ($value['child'] as $value2)
                                                <tr class="menu_sub">
                                                    <td>{{ $value2['id'] }}</td>
                                                    <td>
                                                        <div
                                                            class="switch {{ $value2['default'] == 1 ? 'disable-button' : '' }}">
                                                            <label>
                                                                <input
                                                                    data-display={{ $value2['display'] }}
                                                                    data-id={{ $value2['id'] }}
                                                                    onclick="changeDisplay(this)" type="checkbox"
                                                                    {{ $value2['display'] == 1 ? 'checked' : '' }}><span
                                                                    class="lever switch-col-teal"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-left p-l-20 font-medium"><a
                                                            href="{{ $value2['link'] }}">- {{ $value2['name'] }}</a></td>
                                                    <td><input class="form-control" type="text"
                                                            value="{{ $value2['sort'] }}" id="example-text-input"></td>
                                                    <td class="text-nowrap text-center">
                                                        @if ($value2['fixed'] == 0)
                                                            <button type="button"
                                                                class="btn waves-effect waves-light btn-sm btn-danger">Xóa</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changeDisplay(value) {
            console.log(value);
            var id_menu = $(value).attr('data-id');
            var id = $(value).attr('data-display');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/api/chagemenucode",
                type: 'get',
                data: {
                    'id': id,
                    'id_menu': id_menu
                },
                success: function(result) {
                    $(value).attr('data-display',result);
                    console.log("===== " + result + " =====");
                }
            });
        }
    </script>
@endsection
