<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{asset('https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css')}}" rel="stylesheet" />

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/bf8f778c02.js" crossorigin="anonymous"></script>

    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- datepicker -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />



    <style>
        .input_qty {
            width: 50px;
        }

        .circle {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
            position: fixed;
            z-index: 999;
            right: 25px;
            bottom: 220px;
            cursor: pointer;
        }

        .circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #chat_realtime {
            display: none
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.order_details').change(function() {
                var order_id = $(this).children(":selected").attr("id");
                var payment_status = $(this).val();
                var _token = $('input[name="_token"]').val();
                // Gửi yêu cầu AJAX chỉ với dữ liệu liên quan đến order_id và payment_status
                $.ajax({
                    url: "{{url('/update-order-quantity')}}",
                    type: 'POST',
                    data: {
                        _token: _token,
                        order_id: order_id,
                        payment_status: payment_status,
                    },
                    success: function(data) {
                        alert('Thay đổi tình trạng đơn hàng thành công!');
                        location.reload();
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        alert('Đã xảy ra lỗi khi cập nhật tình trạng đơn hàng!');
                        console.log(xhr.responseText);
                    }
                });
            });
        });


        $(document).ready(function() {

            $('.update_quantity_order').click(function() {
                var order_product_id = $(this).data('product_id');
                var order_qty = $('.order_qty_' + order_product_id).val();
                var order_code = $('.order_code_input').val();
                var _token = $('input[name="_token"]').val();

                // alert(order_product_id);
                // alert(order_qty);
                // alert(order_code);


                $.ajax({
                    url: "{{url('/update-qty')}}",
                    type: 'POST',
                    data: {
                        _token: _token,
                        order_product_id: order_product_id,
                        order_qty: order_qty,
                        order_code: order_code,

                    },
                    success: function(data) {
                        alert('Cập nhật thành công!');
                        location.reload();
                    }
                });
            });
        });

        // biểu đồ
        $(document).ready(function() {

            // Initialize chart with default data
            var myfirstchart1 = new Morris.Bar({
                // ID of the element in which to draw the chart.
                element: 'myfirstchart',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                // The name of the data record attribute that contains x-values.
                xkey: 'period',
                ykeys: ['order', 'sales', 'profit', 'quantity'], // Tên các thuộc tính y trong đối tượng JSON
                labels: ['Tổng đơn hàng', 'Tổng tiền bán', 'Lợi nhuận', 'Số lượng sản phẩm bán']
            });

            // Get data for chart from server and populate chart
            {{--var _token = $('input[name="_token"]').val();--}}
            {{--$.ajax({--}}
            {{--    url: "{{url('/get-30-days')}}",--}}
            {{--    method: "POST",--}}
            {{--    dataType: "JSON",--}}
            {{--    data: {--}}
            {{--        _token: _token--}}
            {{--    },--}}
            {{--    success: function(data) {--}}
            {{--        myfirstchart1.setData(data);--}}
            {{--    }--}}
            {{--});--}}

            // Attach click event handler to the filter button
            $('#btn-dashboard-filter').click(function(event) {
                var from_date = $('#datepicker1').val();
                var to_date = $('#datepicker2').val();

                $.ajax({
                    url: "{{url('/filter-by-date')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        from_date: from_date,
                        to_date: to_date,
                        _token: _token
                    },
                    success: function(data) {
                        myfirstchart1.setData(data);
                    }
                });
            });
        });

        // --------------------

        // cập nhật số lượng trong báo cáo tồn kho
        $(document).ready(function() {
            $('.edit_qty_in_report').click(function(e) {
                e.preventDefault();
                var productId = $(this).data('product-id');
                var currentQty = $(this).data('product-qty');
                // var qtyToAdd = $('#product-qty').val();

                var qtyToAdd = $(this).closest('tr').find('#product-qty').val();
                var newQty = parseInt(currentQty) + parseInt(qtyToAdd);

                $.ajax({
                    url: "{{url('/import-product-qty')}}",
                    type: 'POST',
                    data: {
                        product_id: productId,
                        product_qty_import: qtyToAdd,
                        _token: '{{csrf_token()}}'
                    },
                    success: function(response) {
                        // Handle success response here
                        // Redirect to report page
                        alert('Đã cập nhật số lượng thành công!');
                        window.location.href = "{{url('report ')}}";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle error response here
                    }
                });
            });
        });

        // ----------------------

        $(document).ready(function() {
            $('.order_details_ky_gui').change(function() {
                var donkygui_id = $(this).children(":selected").attr("id");
                var payment_status = $(this).val();
                // alert(payment_status + " " + donkygui_id);

                var _token = $('input[name="_token"]').val();
                // Gửi yêu cầu AJAX chỉ với dữ liệu liên quan đến order_id và payment_status
                $.ajax({
                    url: "{{url('/update-order-quantity-ky-gui')}}",
                    type: 'POST',
                    data: {
                        _token: _token,
                        donkygui_id: donkygui_id,
                        payment_status: payment_status,
                    },
                    success: function(data) {
                        alert('Thay đổi tình trạng đơn hàng thành công!');
                        location.reload();
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        alert('Đã xảy ra lỗi khi cập nhật tình trạng đơn hàng!');
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::to('/dashboard') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-solid fa-face-grin-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ URL::to('/dashboard') }}">
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
        @hasrole('admin')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <i class="fa-solid fa-user-gear"></i>
                <span>User</span>
            </a>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Tùy chọn:</h6>
                    <a class="collapse-item" href="{{URL::to('/users')}}">Quản lý user</a>
                    <a class="collapse-item" href="{{URL::to('/add-users')}}">Thêm users</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">

        @endhasrole

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                <i class="fa-solid fa-user"></i>
                <span>Customer</span>
            </a>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Tùy chọn:</h6>
                    <a class="collapse-item" href="{{URL::to('/all-customers')}}">Quản lý customer</a>
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

    <!-- nav bar __ search for __ name login -->



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div id='content'>
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- btn search -->
                <!-- Topbar Search -->
                <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form> -->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('backend/img/undraw_profile_1.svg')}}" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('backend/img/undraw_profile_2.svg')}}" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('backend/img/undraw_profile_3.svg')}}" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    $name = Auth::user()->admin_name;
                                    // $name = Session::get('admin_name');
                                    if ($name) {
                                        echo $name;
                                    }
                                    ?>
                                </span>
                            <img class="img-profile rounded-circle" src="{{asset('backend/img/undraw_profile.svg')}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            @yield('admin_content')
            <!-- Main Content -->
        </div>

        <!-- End of Main Content -->

        <!-- chat realtime -->


{{--        <div class="wrapper" id="chat_realtime" style="position: fixed; right: 20px; bottom: 400px; z-index: 999; height: 100px; ">--}}
{{--            <iframe src="{{URL::to('resources/views/chat_app_php/login.php')}}" frameborder="0" height="400px"></iframe>--}}
{{--            <button class="btn" id="hidden_chat">Ẩn</button>--}}
{{--        </div>--}}
{{--        <!--  -->--}}

{{--        <!--  -->--}}
{{--        <div class="circle" id="clickableDiv">--}}
{{--            <img src="uploads/brand/chat_realtime.png" alt="Your Image">--}}
{{--        </div>--}}

{{--        <script>--}}
{{--            document.addEventListener("DOMContentLoaded", function() {--}}
{{--                const chatRealtimeDiv = document.getElementById("chat_realtime");--}}
{{--                const clickableDiv = document.getElementById("clickableDiv");--}}
{{--                const circle = document.getElementById("clickableDiv");--}}

{{--                clickableDiv.addEventListener("click", function() {--}}
{{--                    // Thực hiện hành động bạn muốn khi div được nhấp vào--}}
{{--                    // alert("Bạn đã nhấp vào div hình tròn!");--}}
{{--                    chatRealtimeDiv.style.display = "block";--}}
{{--                    circle.style.display = "none";--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}

{{--        <script>--}}
{{--            document.addEventListener("DOMContentLoaded", function() {--}}
{{--                const hidden_chat = document.getElementById("hidden_chat");--}}
{{--                const chatRealtimeDiv = document.getElementById("chat_realtime");--}}
{{--                const circle = document.getElementById("clickableDiv");--}}

{{--                hidden_chat.addEventListener("click", function() {--}}
{{--                    // Toggle lớp "hidden" trên div "chat_realtime"--}}
{{--                    chatRealtimeDiv.style.display = "none";--}}
{{--                    circle.style.display = "block";--}}

{{--                });--}}
{{--            });--}}
{{--        </script>--}}


        <!--  -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white" style="margin-top: 200px">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Shop Moble - 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <!-- <a class="btn btn-primary" href="{{URL::to('/logout-auth')}}">Logout</a> -->
                <a class="btn btn-primary" href="{{URL::to('/logout')}}">Logout</a>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script>

<!-- chart -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $("#basic-form").validate();
    });
</script>
</body>

</html>
