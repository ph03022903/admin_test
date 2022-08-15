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
                                @php
                                    if(isset($table['name'])){
                                        echo    '<div class="form-group">
                                                    <label for="exampleInputEmail1">'.$table['name'].'</label>
                                                    <input type="text" class="form-control" name="name" placeholder="">
                                                </div>';
                                    }
                                    if(isset($table['desc_short'])){
                                        echo    '<div class="form-group">
                                                    <label for="exampleInputEmail1">'.$table['desc_short'].'</label>
                                                    <input type="text" class="form-control" name="name" placeholder="">
                                                </div>';
                                    }
                                    if(isset($table['detail'])){
                                        echo    '<div class="form-group">
                                                    <label for="exampleInputEmail1">'.$table['detail'].'</label>
                                                    <textarea id="mymce" name="area"></textarea>
                                                </div>';
                                    }
                                    if($table['thumbnail'] != ''){
                                        echo    '<div class="form-group">
                                                    <label for="exampleInputEmail1">'.$table['thumbnail'].'</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                            <label class="custom-file-label form-control" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>';
                                    }

                                @endphp
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Thoát</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
@endsection


