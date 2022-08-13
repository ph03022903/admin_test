<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Header --}}
    @include('admin.elements.header')
</head>

<body class="fix-header card-no-border">
    @include('admin.elements.loader')
    <div id="main-wrapper">
        @include('admin.elements.topbar')
        @include('admin.elements.sidebar')
        <div class="page-wrapper">
            @section('wrapper')
            @show
            @include('admin.elements.footer')
        </div>
    </div>
    @include('admin.elements.script')
</body>

</html>
