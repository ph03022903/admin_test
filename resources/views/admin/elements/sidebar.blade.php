<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                    <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Trang chủ
                        </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Sản phẩm
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('productcat') }}">Danh mục Sản phẩm</a></li>
                        <li><a href="{{ route('product') }}">Danh sách Sản phẩm</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
