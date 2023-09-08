<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin_home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-face-grin-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin_home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tổng quan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <!-- Interface -->
    </div>

    <!-- Nav Item - Pages Collapse Menu Danh mục sản phẩm-->

    <!-- Nav Item - Danh mục sản phẩm -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Danh mục bài viết</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn:</h6>
                <!-- <a class="collapse-item" href="{{URL::to('/add-category-product')}}">Thêm danh mục</a> -->
                <a class="collapse-item" href="{{URL::to('/all-category-post')}}">Liệt kê danh mục</a>
                <a class="collapse-item" href="{{URL::to('/add-category-post')}}">Thêm danh mục</a>

            </div>
        </div>
    </li>


    <!-- Nav Item - Thương hiệu sản phẩm -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Nhà cung cấp</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn:</h6>
                <a class="collapse-item" href="{{URL::to('/all-brand')}}">Liệt kê nhà cung cấp</a>
                <a class="collapse-item" href="{{URL::to('/add-brand')}}">Thêm nhà cung cấp</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Bài viết</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn:</h6>

                <a class="collapse-item" href="{{URL::to('/all-product')}}">Danh sách bài viết</a>
                <a class="collapse-item" href="{{URL::to('/add-product')}}">Thêm bài viết</a>


            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="true" aria-controls="collapseThree1">
            <i class="fas fa-fw fa-cog"></i>
            <span>Thông báo</span>
        </a>
        <div id="collapseThree1" class="collapse" aria-labelledby="collapseThree1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn:</h6>

                <a class="collapse-item" href="{{URL::to('/all-notification')}}">Danh sách thông báo</a>
                <a class="collapse-item" href="{{URL::to('/add-notification')}}">Thêm thông báo</a>

            </div>
        </div>
    </li>

    <hr class="sidebar-divider">


    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Addons
    </div> -->

    <!-- user -->
{{--    @hasrole('admin')--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">--}}
{{--            <i class="fa-solid fa-user-gear"></i>--}}
{{--            <span>User</span>--}}
{{--        </a>--}}
{{--        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Tùy chọn:</h6>--}}
{{--                <a class="collapse-item" href="{{URL::to('/users')}}">Quản lý user</a>--}}
{{--                <a class="collapse-item" href="{{URL::to('/add-users')}}">Thêm users</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}
{{--    <hr class="sidebar-divider">--}}

{{--    @endhasrole--}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
            <i class="fa-solid fa-user"></i>
            <span>Customer</span>
        </a>
        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn:</h6>
                <a class="collapse-item" href="{{route('admin_customer_all')}}">Quản lý customer</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Đơn hàng</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn:</h6>
                <a class="collapse-item" href="{{URL::to('/manage-order')}}">Xem các đơn hàng</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
            <i class="fas fa-fw fa-folder"></i>
            <span>Đơn ký gửi</span>
        </a>
        <div id="collapseTen" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn:</h6>
                <a class="collapse-item" href="{{URL::to('/manage-order-ky-gui')}}">Xem các đơn ký gửi</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/report')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Báo cáo kho</span></a>

            </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
