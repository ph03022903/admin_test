<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Thông tin</h3>
                <h6 class="card-subtitle"></h6>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" action="{{ route($controllerName.'/saveConfig') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input type="text" class="form-control" name="name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <input type="text" class="form-control" name="desc_short" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chi tiết</label>
                                        <input type="text" class="form-control" name="detail" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh đại diện</label>
                                        <input type="text" class="form-control" name="thumbnail" placeholder="">
                                    </div>
                                </div>
                                {{-- <div class="col-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                                        <input type="text" class="form-control" name="price_market" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá khuyến Mãi</label>
                                        <input type="text" class="form-control" name="price_discount" placeholder="">
                                    </div>
                                </div> --}}
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Thoát</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
