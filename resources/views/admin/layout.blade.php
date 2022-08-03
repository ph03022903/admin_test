<!DOCTYPE html>
<html lang="en">
<head>
    {{-- link header --}}
    @include('admin.elements.header')
</head>
<body class="fixed-left">
    {{-- Loader --}}
    @include('admin.elements.loader')
    <div id="wrapper">
        @include('admin.elements.sidebar')
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                @include('admin.elements.topbar')
                <div class="page-content-wrapper ">
                    @section('wrapper')

                    @show
                </div>
            </div>
            @include('admin.elements.footer')
        </div>
    </div>
    {{-- script --}}
    @include('admin.elements.script')
</body>
</html>
