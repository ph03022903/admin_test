@php
    use App\Helpers\Template as Template;
@endphp
@extends('admin.layout')
@section('wrapper')
@php
        $Header = Template::HeaderTitleContent('Danh sách danh mục',route('productcat') , false);
@endphp
    {!!$Header!!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Thêm danh mục</h3>
                    <h6 class="card-subtitle"></h6>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label>Input Select</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1"> Remember me </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

