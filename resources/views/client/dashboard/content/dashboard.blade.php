@extends('client.dashboard.index')
@section('content_user')

    <div class="content-page-center">
        <div class="dashboard-block-page block-clear block-both">
            <ul>
                <li>
                    <a href="{{URL::to('/dat-hang')}}" class="tao-don-hang image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>

                    </a>
                    <a href="{{URL::to('/dat-hang')}}" class="title">Tạo đơn hàng</a>
                </li>
                <!-- 2 -->
                <li>
                    <a href="{{URL::to('/kien-ky-gui')}}" class="tao-don-ky-gui image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{URL::to('/kien-ky-gui')}}" class="title">Tạo đơn ký gửi</a>
                </li>
                <!-- 3 -->
                <li>
                    <a href="{{URL::to('/tat-ca-don-hang')}}" class="quan-ly-don-hang image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{URL::to('/tat-ca-don-hang')}}" class="title">Quản lý đơn hàng</a>
                </li>
                <!-- 4 -->
                <li>
                    <a href="{{URL::to('/tat-ca-kien-hang')}}" class="quan-ly-kien-hang image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{URL::to('/tat-ca-kien-hang')}}" class="title">Quản lý kiện hàng</a>
                </li>
                <!-- 5 -->
                <li class="last">
                    <a href="{{URL::to('/giao-hang')}}" class="yeu-cau-giao-hang image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{URL::to('/giao-hang')}}" class="title">Giao hàng</a>
                </li>
                <!-- 6 -->
                <li>
                    <a href="{{URL::to('/lich-su-giao-dich')}}" class="vi-dien-tu image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{URL::to('/lich-su-giao-dich')}}" class="title">Tài khoản KH</a>
                </li>
                <!-- 7 -->
                <li>
                    <a href="{{URL::to('/tat-ca-khieu-nai')}}" class="khieu-nai-don-hang image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{URL::to('/tat-ca-khieu-nai')}}" class="title">Khiếu nại</a>
                </li>
                <!-- 8 -->
                <li>
                    <a href="{{URL::to('/tat-ca-nha-cung-cap')}}" class="quan-ly-nha-cung-cap image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{URL::to('/tat-ca-nha-cung-cap')}}" class="title">Nhà cung cấp</a>
                </li>
                <!-- 9 -->
                <li>
                    <a href="{{route('cus_info')}}" class="thong-tin-ca-nhan image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{route('cus_info')}}" class="title">Thông tin cá nhân</a>
                </li>
                <!-- 10 -->
                <li class="last">
                    <a href="{{route('cus_home')}}" class="cai-dat image">
                    <span class="table">
                        <span class="cell">
                            <span class="dashboard-icon"></span>
                        </span>
                    </span>
                    </a>
                    <a href="{{route('cus_home')}}" class="title">Cài đặt</a>
                </li>
            </ul>
        </div>
    </div>

    </div>


@endsection
