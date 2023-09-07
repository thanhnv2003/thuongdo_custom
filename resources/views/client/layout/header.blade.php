<header class="block-clear block-both">
    <h1 class="title-head-h1">HTKK Logistics - Dịch vụ Order Taobao Nhập hàng Trung Quốc, Đặt hàng Quảng Châu</h1>

    <div class="header-top block-clear block-both">
        <div class="container">
            <div class="header-top-left">
			<span class="exchange-current">
				<span class="icon"></span>Tỉ giá: <b>3,470</b>
			</span>
                <span class="hotline">
				<span class="icon"></span> Hotline: <b>1900 6825</b>
			</span>
            </div>
            <ul class="header-top-right">
                @if(Auth::check())
                    <li>Xin chào <a href="{{route('client_home')}}">{{Auth::user()['name']}} - </a>
                        <a style="color: red" href="{{route('logout')}}">Đăng xuất</a>
                    </li>
                @else
                <span class="icon"></span>
                <li class="dang-nhap"><a href="{{route('auth_login')}}">Đăng nhập</a></li>
                <li><a href="{{route('auth_register')}}">Đăng ký</a></li>
                @endif
            </ul>
        </div>

    </div>
    <div class="header-center block-both">
        <div class="container">
            <div class="logo"><a href="{{url('/')}}" class="shiner" rel="nofollow">
                    <img style="width: 210px; padding: 25px" src="{{asset('fontend/image/img.png')}}" alt= "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" title = "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" /></a></div>
            <nav class="menu-main block-clear">
                <ul><li class="item item-49950 Trang chủ 698   ">
                        <a href="{{url('/')}}" title="Trang chủ" rel="" class="parent active"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li><li class="item item-49951 Dịch vụ 432  last-below ">
                        <a href="{{route('client_home')}}" title="Dịch vụ" rel="" class="parent">
                            <span class="icon"></span>Dịch vụ</a>
                        <ul>
                            <li class="first-below ">
                                <a href="{{route('client_home')}}" title="DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC">DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC</a>
                                <ul>
                                    <li class=""><a href="{{route('client_home')}}" title="node/234">Đặt hàng Quảng Châu</a></li>
                                    <li class=""><a href="{{route('client_home')}}" title="node/230">Đặt Hàng TaoBao</a></li>
                                    <li class=""><a href="{{route('client_home')}}" title="node/232">Đặt Hàng 1688</a></li>
                                    <li class=""><a href="{{route('client_home')}}" title="node/233">Đặt hàng Alibaba</a></li>
                                    <li class="last"><a href="{{route('client_home')}}" title="node/231">Đặt hàng Tmall</a></li></ul>
                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="VẬN CHUYỂN HÀNG TRUNG QUỐC">VẬN CHUYỂN HÀNG TRUNG QUỐC</a>
                                <ul>
                                    <li class=""><a href="{{route('client_home')}}" title="node/235">Vận chuyển hàng Quảng Châu</a></li>
                                    <li class=""><a href="{{route('client_home')}}" title="https:/www.thuongdo.com">Vận chuyển đường bộ</a></li>
                                    <li class=""><a href="{{route('client_home')}}" title="https://www.thuongdo.com/">Vận chuyển đường hàng không</a></li>
                                    <li class=""><a href="{{route('client_home')}}" title="https://www.thuongdo.com/">Vận chuyển đường sắt</a></li>
                                    <li class="last"><a href="{{route('client_home')}}" title="https://www.thuongdo.com">Vận chuyển đường thuỷ</a></li>
                                </ul>
                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="GHÉP NHÓM ĐÁNH HÀNG">GHÉP NHÓM ĐÁNH HÀNG</a>
                                <ul><li class="last"><a href="{{route('client_home')}}" title="node/23">Phiên dịch, đặt vé tàu, máy bay...</a></li></ul>
                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Dịch vụ đổi tiền, chuyển tiền Trung Quốc, nạp tiền ví Alipay">Dịch vụ đổi tiền, chuyển tiền Trung Quốc, nạp tiền ví Alipay</a>

                            </li><li class=" last-below">
                                <a href="{{route('client_home')}}" title="DỊCH VỤ GIA TĂNG">DỊCH VỤ GIA TĂNG</a>
                                <ul><li class=""><a href="{{route('client_home')}}" title="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-chi-phi">Dịch vụ bảo hiểm hàng hoá</a>
                                    </li><li class=""><a href="{{route('client_home')}}" title="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-phi-kiem-dem">Dịch vụ kiểm đếm</a></li>
                                    <li class="last"><a href="{{route('client_home')}}" title="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-phi-dong-go">Dịch vụ đóng hàng</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li><li class="item item-49952 BẢNG GIÁ 433  last-below ">
                        <a href="{{route('client_home')}}" title="BẢNG GIÁ" rel="" class="parent"><span class="icon"></span>BẢNG GIÁ</a><ul><li class="first-below ">
                                <a href="{{route('client_home')}}" title="Bảng giá dịch vụ đặt hàng Trung Quốc">Bảng giá dịch vụ đặt hàng Trung Quốc</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Bảng giá vận chuyển Trung Quốc - Việt Nam">Bảng giá vận chuyển Trung Quốc - Việt Nam</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Bảng giá vận chuyển Quảng Châu về Việt Nam">Bảng giá vận chuyển Quảng Châu về Việt Nam</a>

                            </li><li class=" last-below">
                                <a href="{{route('client_home')}}" title="Bảng giá dịch vụ chuyển tiền">Bảng giá dịch vụ chuyển tiền</a>

                            </li></ul>
                    </li><li class="item item-49953 Tra cước 3031   ">
                        <a href="{{route('client_home')}}" title="Tra cước" rel="" class="parent"><span class="icon"></span>Tra cước</a>
                    </li><li class="item item-49954 Hướng dẫn 431   ">
                        <a href="{{route('client_home')}}" title="Hướng dẫn" rel="" class="parent"><span class="icon"></span>Hướng dẫn</a><ul><li class="first-below ">
                                <a href="{{route('client_home')}}" title="Hướng dẫn tạo đơn đặt hàng">Hướng dẫn tạo đơn đặt hàng</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Hướng dẫn tìm nguồn hàng trên Taobao 1688">Hướng dẫn tìm nguồn hàng trên Taobao 1688</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Cài đặt công cụ đặt hàng">Cài đặt công cụ đặt hàng</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Hướng dẫn đăng ký, đăng nhập tài khoản">Hướng dẫn đăng ký, đăng nhập tài khoản</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Hướng dẫn tạo đơn ký gửi hàng">Hướng dẫn tạo đơn ký gửi hàng</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Hướng dẫn nạp tiền vào tài khoản khách hàng">Hướng dẫn nạp tiền vào tài khoản khách hàng</a>

                            </li></ul>
                    </li><li class="item item-49955 CHÍNH SÁCH 782  last-below ">
                        <a href="{{route('client_home')}}" title="CHÍNH SÁCH" rel="" class="parent"><span class="icon"></span>CHÍNH SÁCH</a><ul><li class="first-below ">
                                <a href="{{route('client_home')}}" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Chính sách khiếu nại">Chính sách khiếu nại</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Quy định về hàng ký gửi">Quy định về hàng ký gửi</a>

                            </li><li class=" ">
                                <a href="{{route('client_home')}}" title="Chính sách bảo mật">Chính sách bảo mật</a>

                            </li><li class=" last-below">
                                <a href="{{route('client_home')}}" title="Thông báo cập nhật chính sách">Thông báo cập nhật chính sách</a>

                            </li></ul>
                    </li><li class="item item-49956 TIN TỨC 1685   ">
                        <a href="{{route('client_home')}}" title="TIN TỨC" rel="" class="parent"><span class="icon"></span>TIN TỨC</a>
                    </li><li class="item item-49957 SỰ KIỆN 2153   ">
                        <a href="{{route('client_home')}}" title="SỰ KIỆN" rel="" class="parent"><span class="icon"></span>SỰ KIỆN</a>
                    </li><li class="item item-49958 TUYỂN DỤNG 1299   ">
                        <a href="{{route('client_home')}}" title="TUYỂN DỤNG" rel="" class="parent"><span class="icon"></span>TUYỂN DỤNG</a>
                    </li></ul>
            </nav>
        </div>
    </div>
    <div class="header-bottom block-clear block-both">
        <div class="container">
            <span class="icon"></span>
        </div>
    </div>
</header>
