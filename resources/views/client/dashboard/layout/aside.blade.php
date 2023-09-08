<nav class="menu-nav block-clear block-both">
    <ul>
        <li class="parent">
            <a href="javascript:void(0);" class="item-1 one">
                <span class="dashboard-icon"></span>
                <strong>Tạo đơn</strong>
            </a>
            <ul>
                <li><a href="{{URL::to('/dat-hang')}}">Tạo đơn hàng</a></li>
                <li><a href="{{URL::to('/dat-hang-nha-cung-cap')}}">Từ sản phẩm đã mua</a></li>
                <li><a href="{{URL::to('/kien-ky-gui')}}">Tạo đơn ký gửi</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="javascript:void(0);" class="item-2 one">
                <span class="dashboard-icon"></span>
                <strong>Đơn hàng</strong>
            </a>
            <ul>
                <li><a href="{{URL::to('/tat-ca-don-hang')}}">Tất cả đơn hàng</a></li>
                <li><a href="{{URL::to('/tat-ca-don-ky-gui')}}">Tất cả đơn ký gửi</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="javascript:void(0);" class="item-3 one">
                <span class="dashboard-icon"></span>
                <strong>Kiện hàng</strong>
            </a>
            <ul>
                <li><a href="{{URL::to('/tat-ca-kien-hang')}}">Tất cả kiện hàng</a></li>
                <li><a href="{{URL::to('/giao-hang')}}">Giao hàng</a></li>
                <li><a href="{{URL::to('/da-giao-hang')}}">Đã giao hàng</a></li>
                <li><a href="">Kiểm hàng</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="javascript:void(0);" class="item-4 one">
                <span class="dashboard-icon"></span>
                <strong>Tài khoản KH</strong>
            </a>
            <ul>
                <li><a href="">Hướng dẫn nạp tiền</a></li>
                <li><a href="{{URL::to('/lich-su-giao-dich')}}">Lịch sử giao dịch</a></li>
                <li><a href="{{URL::to('/rut-tien')}}">Rút tiền</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="javascript:void(0);" class="item-5 one">
                <span class="dashboard-icon"></span>
                <strong>Khiếu nại</strong>
            </a>
            <ul>
                <li><a href="{{URL::to('/tat-ca-khieu-nai')}}">Tất cả khiếu nại</a></li>
                <li><a href="{{URL::to('/trang-chu')}}">Hàng mất thông tin</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="javascript:void(0);" class="item-6 one">
                <span class="dashboard-icon"></span>
                <strong>Nhà cung cấp</strong>
            </a>
            <ul>
                <li><a href="{{URL::to('/tat-ca-nha-cung-cap')}}">Tất cả nhà cung cấp</a></li>
                <li><a href="{{URL::to('/them-moi-nha-cung-cap')}}">Thêm mới nhà cung cấp</a></li>
            </ul>
        </li>
        <li class="parent last">
            <a href="javascript:void(0);" class="item-7 one">
                <span class="dashboard-icon"></span>
                <strong>Cài đặt</strong>
            </a>
            <ul>
                <li><a href="{{URL::to('/thong-tin-ca-nhan')}}">Thông tin cá nhân</a></li>
                <li><a href="{{URL::to('/dia-chi-giao-hang')}}">Địa chỉ giao hàng</a></li>
                <li><a href="{{URL::to('/thay-doi-mat-khau')}}">Thay đổi mật khẩu</a></li>
            </ul>
        </li>
    </ul>
</nav>
