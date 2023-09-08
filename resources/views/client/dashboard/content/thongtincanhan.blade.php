@extends('client.dashboard.index')
@section('content_user')
    <div class="content-page-center">
        <form class="thong-tin-ca-nhan-form dia-chi-giao-hang-add-form" action="{{route('cus_info')}}"
              method="post" id="don-hang-thong-tin-ca-nhan-add-form" accept-charset="UTF-8">
            @csrf
            <div>
                <div class="ttcn-wrap-basic">
                    <div class="ttcn-wrap-title">THÔNG TIN CƠ BẢN</div>
                    <div class="ttcn-wrap-content">
                        <div class="form-item form-type-textfield form-item-ma-tai-khoan form-disabled">
                            <label for="edit-ma-tai-khoan">Mã tài khoản <span class="form-required"
                                                                              title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input disabled="disabled" type="text" id="edit-ma-tai-khoan" name="ma_tai_khoan" value=""
                                   size="60" maxlength="128" class="form-text required" />
                        </div>
                        <div class="form-item form-type-textfield form-item-fullname">
                            <label for="edit-fullname">Họ và tên <span class="form-required"
                                                                       title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input type="text" id="edit-fullname" name="fullname" value="{{$user['name']}}"
                                   size="60" maxlength="128" class="form-text required" />
                        </div>
                        <div class="form-item form-type-textfield form-item-mail">
                            <label for="edit-mail">E-mail <span class="form-required"
                                                                title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input type="text" id="edit-mail" name="mail" value="{{$user['email']}}"
                                   size="60" maxlength="128" class="form-text required" />
                        </div>
                        <div class="form-item form-type-textfield form-item-phone">
                            <label for="edit-phone">Số điện thoại <span class="form-required"
                                                                        title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input type="text" id="edit-phone" name="phone" value="{{$user['phone']}}"
                                   size="60" maxlength="128" class="form-text required" />
                        </div>
                    </div>
                </div>
                <div class="ttcn-wrap-basic">
                    <div class="ttcn-wrap-title">THÔNG TIN BỔ SUNG</div>
                    <div class="ttcn-wrap-content">
                        <div class="container-inline-date">
                            <div class="form-item form-type-date-popup form-item-birthday">
                                <label for="edit-birthday">Ngày sinh </label>
                                <div id="edit-birthday" class="date-padding">
                                    <div class="form-item form-type-textfield form-item-birthday-date">
                                        <label for="edit-birthday-datepicker-popup-0">Date </label>
{{--                                        @php--}}
{{--                                            $ngaysinh = $customer_info->ngaysinh;--}}
{{--                                            $formattedDate = date('d/m/Y', strtotime($ngaysinh));--}}
{{--                                        @endphp--}}
                                        <input type="text" id="edit-birthday-datepicker-popup-0" name="birthday"
                                               value="{$formattedDate}" size="20" maxlength="30" class="form-text" />
                                        <div class="description"> E.g., 21/07/2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tinh-tp">
                            <div class="form-item form-type-select form-item-gioi-tinh">
                                <label for="edit-gioi-tinh">Giới tính </label>
                                <select id="edit-gioi-tinh" name="gioi_tinh" class="form-select">
{{--                                    @if($customer_info->gioitinh == null)--}}
                                        <option value="" selected="selected">Chọn giới tính</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>

{{--                                    @else--}}
{{--                                        <option value="1" {{ $customer_info->gioitinh == "1" ? 'selected' : '' }}>Nam</option>--}}
{{--                                        <option value="2" {{ $customer_info->gioitinh == "2" ? 'selected' : '' }}>Nữ</option>--}}
{{--                                    @endif--}}
                                </select>

                            </div>
                            <div class="form-item form-type-textfield form-item-address">
                                <label for="edit-address">Địa chỉ </label>
                                <input type="text" id="edit-address" name="address" value="{$customer_info->diachi}"
                                       size="60" maxlength="128" class="form-text" />
                            </div>
                            <div class="form-item form-type-select form-item-tinhtp">
                                <label for="edit-tinhtp">Tỉnh/Tp <span class="form-required"
                                                                       title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                <select id="edit-tinhtp" name="tinhtp" class="form-select required">
{{--                                    @if($customer_info->tinh == null)--}}
{{--                                        <option value="" selected="selected">Chọn</option>--}}

{{--                                        <option value="1">Hà Nội--}}
{{--                                        </option>--}}
{{--                                        <option value="2">TP Hồ Chí Minh--}}
{{--                                        </option>--}}
{{--                                        <option value="3">Hải Phòng--}}
{{--                                        </option>--}}
{{--                                        <option value="4">Đà Nẵng--}}
{{--                                        </option>--}}
{{--                                        <option value="5">Cần Thơ--}}
{{--                                        </option>--}}
{{--                                        <option value="6">An Giang--}}
{{--                                        </option>--}}
{{--                                        <option value="7">Bà Rịa - Vũng Tàu--}}
{{--                                        </option>--}}
{{--                                        <option value="8">Bắc Giang--}}
{{--                                        </option>--}}
{{--                                        <option value="9">Bắc Kạn--}}
{{--                                        </option>--}}
{{--                                        <option value="10">Bạc Liêu--}}
{{--                                        </option>--}}
{{--                                        <option value="11">Bắc Ninh--}}
{{--                                        </option>--}}
{{--                                        <option value="12">Bến Tre--}}
{{--                                        </option>--}}
{{--                                        <option value="13">Bình Định--}}
{{--                                        </option>--}}
{{--                                        <option value="14">Bình Dương--}}
{{--                                        </option>--}}
{{--                                        <option value="15">Bình Phước--}}
{{--                                        </option>--}}
{{--                                        <option value="16">Bình Thuận--}}
{{--                                        </option>--}}
{{--                                        <option value="17">Cà Mau--}}
{{--                                        </option>--}}
{{--                                        <option value="18">Cao Bằng--}}
{{--                                        </option>--}}
{{--                                        <option value="19">Đắk Lắk--}}
{{--                                        </option>--}}
{{--                                        <option value="20">Đắk Nông--}}
{{--                                        </option>--}}
{{--                                        <option value="21">Điện Biên--}}
{{--                                        </option>--}}
{{--                                        <option value="22">Đồng Nai--}}
{{--                                        </option>--}}
{{--                                        <option value="23">Đồng Tháp--}}
{{--                                        </option>--}}
{{--                                        <option value="24">Gia Lai--}}
{{--                                        </option>--}}
{{--                                        <option value="25">Hà Giang--}}
{{--                                        </option>--}}
{{--                                        <option value="26">Hà Nam--}}
{{--                                        </option>--}}
{{--                                        <option value="27">Hà Tĩnh--}}
{{--                                        </option>--}}
{{--                                        <option value="28">Hải Dương--}}
{{--                                        </option>--}}
{{--                                        <option value="29">Hậu Giang--}}
{{--                                        </option>--}}
{{--                                        <option value="30">Hòa Bình--}}
{{--                                        </option>--}}
{{--                                        <option value="31">Hưng Yên--}}
{{--                                        </option>--}}
{{--                                        <option value="32">Khánh Hòa--}}
{{--                                        </option>--}}
{{--                                        <option value="33">Kiên Giang--}}
{{--                                        </option>--}}
{{--                                        <option value="34">Kon Tum--}}
{{--                                        </option>--}}
{{--                                        <option value="35">Lai Châu--}}
{{--                                        </option>--}}
{{--                                        <option value="36">Lâm Đồng--}}
{{--                                        </option>--}}
{{--                                        <option value="37">Lạng Sơn--}}
{{--                                        </option>--}}
{{--                                        <option value="38">Lào Cai--}}
{{--                                        </option>--}}
{{--                                        <option value="39">Long An--}}
{{--                                        </option>--}}
{{--                                        <option value="40">Nam Định--}}
{{--                                        </option>--}}
{{--                                        <option value="41">Nghệ An--}}
{{--                                        </option>--}}
{{--                                        <option value="42">Ninh Bình--}}
{{--                                        </option>--}}
{{--                                        <option value="43">Ninh Thuận--}}
{{--                                        </option>--}}
{{--                                        <option value="44">Phú Thọ--}}
{{--                                        </option>--}}
{{--                                        <option value="45">Quảng Bình--}}
{{--                                        </option>--}}
{{--                                        <option value="46">Quảng Nam--}}
{{--                                        </option>--}}
{{--                                        <option value="47">Quảng Ngãi--}}
{{--                                        </option>--}}
{{--                                        <option value="48">Quảng Ninh--}}
{{--                                        </option>--}}
{{--                                        <option value="49">Quảng Trị--}}
{{--                                        </option>--}}
{{--                                        <option value="50">Sóc Trăng--}}
{{--                                        </option>--}}
{{--                                        <option value="51">Sơn La--}}
{{--                                        </option>--}}
{{--                                        <option value="52">Tây Ninh--}}
{{--                                        </option>--}}
{{--                                        <option value="53">Thái Bình--}}
{{--                                        </option>--}}
{{--                                        <option value="54">Thái Nguyên--}}
{{--                                        </option>--}}
{{--                                        <option value="55">Thanh Hóa--}}
{{--                                        </option>--}}
{{--                                        <option value="56">Thừa Thiên Huế--}}
{{--                                        </option>--}}
{{--                                        <option value="57">Tiền Giang--}}
{{--                                        </option>--}}
{{--                                        <option value="58">Trà Vinh--}}
{{--                                        </option>--}}
{{--                                        <option value="59">Tuyên Quang--}}
{{--                                        </option>--}}
{{--                                        <option value="60">Vĩnh Long--}}
{{--                                        </option>--}}
{{--                                        <option value="61">Vĩnh Phúc--}}
{{--                                        </option>--}}
{{--                                        <option value="62">Yên Bái--}}
{{--                                        </option>--}}
{{--                                        <option value="63">Phú Yên</option>--}}
{{--                                    @else--}}
{{--                                        <!-- @if($customer_info->tinh == "1")--}}
{{--                                            <option value="" selected="selected">Hà Nội</option>--}}
{{--@elseif($customer_info->tinh == "2")--}}
{{--                                            <option value="" selected="selected">TP Hồ Chí Minh</option>--}}

{{--@endif -->--}}
{{--                                        <!-- Hà Nội -->--}}
{{--                                        <option value="1" {{ $customer_info->tinh == "1" ? 'selected' : '' }}>Hà Nội</option>--}}
{{--                                        <!-- TP Hồ Chí Minh -->--}}
{{--                                        <option value="2" {{ $customer_info->tinh == "2" ? 'selected' : '' }}>TP Hồ Chí Minh--}}
{{--                                        </option>--}}
{{--                                        <!-- Hải Phòng -->--}}
{{--                                        <option value="3" {{ $customer_info->tinh == "3" ? 'selected' : '' }}>Hải Phòng</option>--}}
{{--                                        <!-- Đà Nẵng -->--}}
{{--                                        <option value="4" {{ $customer_info->tinh == "4" ? 'selected' : '' }}>Đà Nẵng</option>--}}
{{--                                        <!-- Cần Thơ -->--}}
{{--                                        <option value="5" {{ $customer_info->tinh == "5" ? 'selected' : '' }}>Cần Thơ</option>--}}
{{--                                        <!-- An Giang -->--}}
{{--                                        <option value="6" {{ $customer_info->tinh == "6" ? 'selected' : '' }}>An Giang</option>--}}
{{--                                        <!-- Bà Rịa - Vũng Tàu -->--}}
{{--                                        <option value="7" {{ $customer_info->tinh == "7" ? 'selected' : '' }}>Bà Rịa - Vũng Tàu--}}
{{--                                        </option>--}}
{{--                                        <!-- Bắc Giang -->--}}
{{--                                        <option value="8" {{ $customer_info->tinh == "8" ? 'selected' : '' }}>Bắc Giang</option>--}}
{{--                                        <!-- Bắc Kạn -->--}}
{{--                                        <option value="9" {{ $customer_info->tinh == "9" ? 'selected' : '' }}>Bắc Kạn</option>--}}
{{--                                        <!-- Bạc Liêu -->--}}
{{--                                        <option value="10" {{ $customer_info->tinh == "10" ? 'selected' : '' }}>Bạc Liêu--}}
{{--                                        </option>--}}
{{--                                        <!-- Bắc Ninh -->--}}
{{--                                        <option value="11" {{ $customer_info->tinh == "11" ? 'selected' : '' }}>Bắc Ninh--}}
{{--                                        </option>--}}
{{--                                        <!-- Bến Tre -->--}}
{{--                                        <option value="12" {{ $customer_info->tinh == "12" ? 'selected' : '' }}>Bến Tre</option>--}}
{{--                                        <!-- Bình Định -->--}}
{{--                                        <option value="13" {{ $customer_info->tinh == "13" ? 'selected' : '' }}>Bình Định--}}
{{--                                        </option>--}}
{{--                                        <!-- Bình Dương -->--}}
{{--                                        <option value="14" {{ $customer_info->tinh == "14" ? 'selected' : '' }}>Bình Dương--}}
{{--                                        </option>--}}
{{--                                        <!-- Bình Phước -->--}}
{{--                                        <option value="15" {{ $customer_info->tinh == "15" ? 'selected' : '' }}>Bình Phước--}}
{{--                                        </option>--}}
{{--                                        <!-- Bình Thuận -->--}}
{{--                                        <option value="16" {{ $customer_info->tinh == "16" ? 'selected' : '' }}>Bình Thuận--}}
{{--                                        </option>--}}
{{--                                        <!-- Cà Mau -->--}}
{{--                                        <option value="17" {{ $customer_info->tinh == "17" ? 'selected' : '' }}>Cà Mau</option>--}}
{{--                                        <!-- Cao Bằng -->--}}
{{--                                        <option value="18" {{ $customer_info->tinh == "18" ? 'selected' : '' }}>Cao Bằng--}}
{{--                                        </option>--}}
{{--                                        <!-- Đắk Lắk -->--}}
{{--                                        <option value="19" {{ $customer_info->tinh == "19" ? 'selected' : '' }}>Đắk Lắk</option>--}}
{{--                                        <!-- Đắk Nông -->--}}
{{--                                        <option value="20" {{ $customer_info->tinh == "20" ? 'selected' : '' }}>Đắk Nông--}}
{{--                                        </option>--}}
{{--                                        <!-- Điện Biên -->--}}
{{--                                        <option value="21" {{ $customer_info->tinh == "21" ? 'selected' : '' }}>Điện Biên--}}
{{--                                        </option>--}}
{{--                                        <!-- Đồng Nai -->--}}
{{--                                        <option value="22" {{ $customer_info->tinh == "22" ? 'selected' : '' }}>Đồng Nai--}}
{{--                                        </option>--}}
{{--                                        <!-- Đồng Tháp -->--}}
{{--                                        <option value="23" {{ $customer_info->tinh == "23" ? 'selected' : '' }}>Đồng Tháp--}}
{{--                                        </option>--}}
{{--                                        <!-- Gia Lai -->--}}
{{--                                        <option value="24" {{ $customer_info->tinh == "24" ? 'selected' : '' }}>Gia Lai</option>--}}
{{--                                        <!-- Hà Giang -->--}}
{{--                                        <option value="25" {{ $customer_info->tinh == "25" ? 'selected' : '' }}>Hà Giang--}}
{{--                                        </option>--}}
{{--                                        <!-- Hà Nam -->--}}
{{--                                        <option value="26" {{ $customer_info->tinh == "26" ? 'selected' : '' }}>Hà Nam</option>--}}
{{--                                        <!-- Hà Tĩnh -->--}}
{{--                                        <option value="27" {{ $customer_info->tinh == "27" ? 'selected' : '' }}>Hà Tĩnh</option>--}}
{{--                                        <!-- Hải Dương -->--}}
{{--                                        <option value="28" {{ $customer_info->tinh == "28" ? 'selected' : '' }}>Hải Dương--}}
{{--                                        </option>--}}
{{--                                        <!-- Hậu Giang -->--}}
{{--                                        <option value="29" {{ $customer_info->tinh == "29" ? 'selected' : '' }}>Hậu Giang--}}
{{--                                        </option>--}}
{{--                                        <!-- Hòa Bình -->--}}
{{--                                        <option value="30" {{ $customer_info->tinh == "30" ? 'selected' : '' }}>Hòa Bình--}}
{{--                                        </option>--}}
{{--                                        <!-- Hưng Yên -->--}}
{{--                                        <option value="31" {{ $customer_info->tinh == "31" ? 'selected' : '' }}>Hưng Yên--}}
{{--                                        </option>--}}
{{--                                        <!-- Khánh Hòa -->--}}
{{--                                        <option value="32" {{ $customer_info->tinh == "32" ? 'selected' : '' }}>Khánh Hòa--}}
{{--                                        </option>--}}
{{--                                        <!-- Kiên Giang -->--}}
{{--                                        <option value="33" {{ $customer_info->tinh == "33" ? 'selected' : '' }}>Kiên Giang--}}
{{--                                        </option>--}}
{{--                                        <!-- Kon Tum -->--}}
{{--                                        <option value="34" {{ $customer_info->tinh == "34" ? 'selected' : '' }}>Kon Tum</option>--}}
{{--                                        <!-- Lai Châu -->--}}
{{--                                        <option value="35" {{ $customer_info->tinh == "35" ? 'selected' : '' }}>Lai Châu--}}
{{--                                        </option>--}}
{{--                                        <!-- Lâm Đồng -->--}}
{{--                                        <!-- Lâm Đồng -->--}}
{{--                                        <option value="36" {{ $customer_info->tinh == "36" ? 'selected' : '' }}>Lâm Đồng--}}
{{--                                        </option>--}}
{{--                                        <!-- Lạng Sơn -->--}}
{{--                                        <option value="37" {{ $customer_info->tinh == "37" ? 'selected' : '' }}>Lạng Sơn--}}
{{--                                        </option>--}}
{{--                                        <!-- Lào Cai -->--}}
{{--                                        <option value="38" {{ $customer_info->tinh == "38" ? 'selected' : '' }}>Lào Cai</option>--}}
{{--                                        <!-- Long An -->--}}
{{--                                        <option value="39" {{ $customer_info->tinh == "39" ? 'selected' : '' }}>Long An</option>--}}
{{--                                        <!-- Nam Định -->--}}
{{--                                        <option value="40" {{ $customer_info->tinh == "40" ? 'selected' : '' }}>Nam Định--}}
{{--                                        </option>--}}
{{--                                        <!-- Nghệ An -->--}}
{{--                                        <option value="41" {{ $customer_info->tinh == "41" ? 'selected' : '' }}>Nghệ An</option>--}}
{{--                                        <!-- Ninh Bình -->--}}
{{--                                        <option value="42" {{ $customer_info->tinh == "42" ? 'selected' : '' }}>Ninh Bình--}}
{{--                                        </option>--}}
{{--                                        <!-- Ninh Thuận -->--}}
{{--                                        <option value="43" {{ $customer_info->tinh == "43" ? 'selected' : '' }}>Ninh Thuận--}}
{{--                                        </option>--}}
{{--                                        <!-- Phú Thọ -->--}}
{{--                                        <option value="44" {{ $customer_info->tinh == "44" ? 'selected' : '' }}>Phú Thọ</option>--}}
{{--                                        <!-- Quảng Bình -->--}}
{{--                                        <option value="45" {{ $customer_info->tinh == "45" ? 'selected' : '' }}>Quảng Bình--}}
{{--                                        </option>--}}
{{--                                        <!-- Quảng Nam -->--}}
{{--                                        <option value="46" {{ $customer_info->tinh == "46" ? 'selected' : '' }}>Quảng Nam--}}
{{--                                        </option>--}}
{{--                                        <!-- Quảng Ngãi -->--}}
{{--                                        <option value="47" {{ $customer_info->tinh == "47" ? 'selected' : '' }}>Quảng Ngãi--}}
{{--                                        </option>--}}
{{--                                        <!-- Quảng Ninh -->--}}
{{--                                        <option value="48" {{ $customer_info->tinh == "48" ? 'selected' : '' }}>Quảng Ninh--}}
{{--                                        </option>--}}
{{--                                        <!-- Quảng Trị -->--}}
{{--                                        <option value="49" {{ $customer_info->tinh == "49" ? 'selected' : '' }}>Quảng Trị--}}
{{--                                        </option>--}}
{{--                                        <!-- Sóc Trăng -->--}}
{{--                                        <option value="50" {{ $customer_info->tinh == "50" ? 'selected' : '' }}>Sóc Trăng--}}
{{--                                        </option>--}}
{{--                                        <!-- Sơn La -->--}}
{{--                                        <option value="51" {{ $customer_info->tinh == "51" ? 'selected' : '' }}>Sơn La</option>--}}
{{--                                        <!-- Tây Ninh -->--}}
{{--                                        <option value="52" {{ $customer_info->tinh == "52" ? 'selected' : '' }}>Tây Ninh--}}
{{--                                        </option>--}}
{{--                                        <!-- Thái Bình -->--}}
{{--                                        <option value="53" {{ $customer_info->tinh == "53" ? 'selected' : '' }}>Thái Bình--}}
{{--                                        </option>--}}
{{--                                        <!-- Thái Nguyên -->--}}
{{--                                        <option value="54" {{ $customer_info->tinh == "54" ? 'selected' : '' }}>Thái Nguyên--}}
{{--                                        </option>--}}
{{--                                        <!-- Thanh Hóa -->--}}
{{--                                        <option value="55" {{ $customer_info->tinh == "55" ? 'selected' : '' }}>Thanh Hóa--}}
{{--                                        </option>--}}
{{--                                        <!-- Thừa Thiên Huế -->--}}
{{--                                        <option value="56" {{ $customer_info->tinh == "56" ? 'selected' : '' }}>Thừa Thiên Huế--}}
{{--                                        </option>--}}
{{--                                        <!-- Tiền Giang -->--}}
{{--                                        <option value="57" {{ $customer_info->tinh == "57" ? 'selected' : '' }}>Tiền Giang--}}
{{--                                        </option>--}}
{{--                                        <!-- Trà Vinh -->--}}
{{--                                        <option value="58" {{ $customer_info->tinh == "58" ? 'selected' : '' }}>Trà Vinh--}}
{{--                                        </option>--}}
{{--                                        <!-- Tuyên Quang -->--}}
{{--                                        <option value="59" {{ $customer_info->tinh == "59" ? 'selected' : '' }}>Tuyên Quang--}}
{{--                                        </option>--}}
{{--                                        <!-- Vĩnh Long -->--}}
{{--                                        <option value="60" {{ $customer_info->tinh == "60" ? 'selected' : '' }}>Vĩnh Long--}}
{{--                                        </option>--}}
{{--                                        <!-- Vĩnh Phúc -->--}}
{{--                                        <option value="61" {{ $customer_info->tinh == "61" ? 'selected' : '' }}>Vĩnh Phúc--}}
{{--                                        </option>--}}
{{--                                        <!-- Yên Bái -->--}}
{{--                                        <option value="62" {{ $customer_info->tinh == "62" ? 'selected' : '' }}>Yên Bái</option>--}}
{{--                                        <!-- Phú Yên -->--}}
{{--                                        <option value="63" {{ $customer_info->tinh == "63" ? 'selected' : '' }}>Phú Yên</option>--}}
{{--                                        <!-- Nơi khác -->--}}
{{--                                        <option value="64" {{ $customer_info->tinh == "64" ? 'selected' : '' }}>Nơi khác--}}
{{--                                        </option>--}}



{{--                                    @endif--}}

                                </select>
                            </div>
                            <div id="tinh-tp-wrapper">
                                <div class="form-item form-type-select form-item-quanhuyen">
                                    <select id="edit-quanhuyen" name="quanhuyen" class="form-select">
                                        <option value="" selected="selected">Chọn</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="ngan-hang">
                            <div class="form-item form-type-textfield form-item-nganhang">
                                <label class="element-invisible" for="edit-nganhang">Ngân hàng </label>
                                <input class="uk-hidden form-text" type="text" id="edit-nganhang" name="nganhang" value=""
                                       size="60" maxlength="128" />
                            </div>
                            <div class="form-item form-type-textfield form-item-chinhanh">
                                <input placeholder="Chi nhánh" class="uk-hidden form-text" type="text" id="edit-chinhanh"
                                       name="chinhanh" value="" size="60" maxlength="128" />
                            </div>
                        </div>
                        <div class="ngan-hang">
                            <div class="form-item form-type-textfield form-item-shipping-address">
                                <label class="element-invisible" for="edit-shipping-address">Địa chỉ ship hàng </label>
                                <input class="uk-hidden form-text" type="text" id="edit-shipping-address"
                                       name="shipping_address" value="" size="60" maxlength="128" />
                            </div>
                            <div class="form-item form-type-select form-item-shipping-type">
                                <select class="uk-hidden form-select" id="edit-shipping-type" name="shipping_type">
                                    <option value="3">Giao hàng nhanh</option>
                                    <option value="2">Viettel</option>
                                    <option value="4">Giao hàng tiết kiệm</option>
                                    <option value="5">Xe khách</option>
                                    <option value="6">Chuyển phát khác</option>
                                    <option value="1">Hãng xe tải</option>
                                    <option value="7">Ship nội thành</option>
                                </select>
                            </div>
                            <div class="form-item form-type-select form-item-shipping-code">
                                <select class="uk-hidden form-select" id="edit-shipping-code" name="shipping_code">
                                    <option value="" selected="selected">CODE/CK</option>
                                    <option value="1">[Ví điện tử] </option>
                                    <option value="2">[COD] </option>
                                    <option value="3">[Chuyển khoản] </option>
                                    <option value="4">[Tiền mặt] </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-item form-type-select form-item-loai-vc">
                            <label for="edit-loai-vc">Loại vận chuyển </label>
                            <select id="edit-loai-vc" name="loai_vc" class="form-select">
{{--                                @if($customer_info->loaivanchuyen == null)--}}
                                    <option value="">Chọn</option>
                                    <option value="1" selected="selected">Nhanh</option>
                                    <option value="2">Thường</option>
{{--                                @else--}}

{{--                                    <option value="1" {{ $customer_info->loaivanchuyen == "1" ? 'selected' : '' }}>Nhanh--}}
{{--                                    </option>--}}
{{--                                    <option value="2" {{ $customer_info->loaivanchuyen == "2" ? 'selected' : '' }}>Thường--}}
{{--                                    </option>--}}


{{--                                @endif--}}


                            </select>
                        </div>
                    </div>
                </div>
                <div class="ttcn-wrap-basic">
                    <div class="ttcn-wrap-title">Danh sách địa chỉ kho nhận hàng tại Trung Quốc</div>
                    <div class="ttcn-wrap-content">
                        <!--<h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Bảo Thuế <em>(kê khai 100% thuế - có hóa đơn GTGT)</em></h4>
                    <div class="addresscon">
                        <ul>
                            <li>
                                <strong class="flo">Địa chỉ nhận hàng:</strong>
                                <span class="flo"> <b>广西东兴市冲卜四路215号</b>仓库</span>
                            </li>
                            <li>
                                <strong class="flo">Người nhận:</strong>
                                <span class="flo">  KH咚咚公司</span>
                            </li>
                            <li>
                                <strong class="flo">Mã bưu điện:</strong>
                                <span class="flo">538100</span>
                            </li>
                            <li>
                                <strong class="flo">Số điện thoại:</strong>
                                <span class="flo">17788548022</span>
                            </li>
                        </ul>
                    </div>-->
                        <h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Đông Hưng</h4>
                        <div class="addresscon">
                            <ul>
                                <li>
                                    <strong class="flo">Địa chỉ nhận hàng:</strong>
                                    <span class="flo"> <b>广西壮族自治区 防城港市 东兴市 东兴镇 冲卜一路65-1号</b>仓库</span>
                                </li>
                                <li>
                                    <strong class="flo">Người nhận:</strong>
                                    <span class="flo"> KH咚咚公司</span>
                                </li>
                                <li>
                                    <strong class="flo">Mã bưu điện:</strong>
                                    <span class="flo">538100</span>
                                </li>
                                <li>
                                    <strong class="flo">Số điện thoại:</strong>
                                    <span class="flo">18587603681</span>
                                </li>
                            </ul>
                        </div>
                        <h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Quảng Châu</h4>
                        <div class="addresscon">
                            <ul>
                                <li>
                                    <strong class="flo">Địa chỉ nhận hàng:</strong>
                                    <span class="flo"> <b>广东省 广州市 白云区 石井街道 凰岗村 凤鸣路117号凰岗二社大型停车场F1档口 </b></span>
                                </li>
                                <li>
                                    <strong class="flo">Người nhận:</strong>
                                    <span class="flo"> KH咚咚代收</span>
                                </li>
                                <li>
                                    <strong class="flo">Mã bưu điện:</strong>
                                    <span class="flo">510430</span>
                                </li>
                                <li>
                                    <strong class="flo">Số điện thoại:</strong>
                                    <span class="flo">86-18926668611</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><input class="uk-button uk-button-primary form-submit" type="submit" id="edit-submit" name="op"
                             value="Lưu thay đổi" /><input type="hidden" name="form_build_id"
                                                           value="form-4BiNLBAeOwDFcUB6y4fuLqsciGFTKy-Hkf2Dzgm2trk" />
                <input type="hidden" name="form_token" value="ShYQTRieEnbOt0Z7cOO4KxRLcBHef58XB6UwAsRU4wo" />
                <input type="hidden" name="form_id" value="don_hang_thong_tin_ca_nhan_add_form" />
            </div>
        </form>
    </div>


    </div>
@endsection
