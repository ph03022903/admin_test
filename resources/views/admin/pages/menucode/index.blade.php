@php
    use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
<link href="{{asset('admins/assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">
<div class="container-fluid">
    @php
         $Header = Template::HeaderTitleContent('Trang menu code',route('menucode'));
    @endphp
    <div class="row">
        <div class="col-sm-12">
            {!!$Header!!}
            <!-- end page-title-box -->
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Danh sách</h4>
                    <p class="text-muted m-b-30 font-14">Tổng hợp danh sách menu</p>

                    <div class="table-rep-plugin">
                        <div class="table-responsive b-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th data-priority="1">ID</th>
                                    <th data-priority="3">Trạng thái</th>
                                    <th data-priority="1">Tên menu</th>
                                    <th data-priority="3">Sắp sếp</th>
                                    <th data-priority="3"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>on/off</td>
                                    <td>Trang chủ</td>
                                    <td>Sắp sếp</td>
                                    <td>Xóa</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div><!-- container fluid -->
<script src="{{asset('admins/assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')}}"></script>
<script>
    $(function() {
        $('.table-responsive').responsiveTable({
            addDisplayAllBtn: 'btn btn-secondary',
            addDisplayAllBtn:false,
            i18n:{
                { focus : 'Focus', display : 'Display', displayAll : 'Display all' }
            }
        });
    });
</script>
@endsection
