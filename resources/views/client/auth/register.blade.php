<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
    "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" version="XHTML+RDFa 1.0" dir="ltr"
      xmlns:content="http://purl.org/rss/1.0/modules/content/"
      xmlns:dc="http://purl.org/dc/terms/"
      xmlns:foaf="http://xmlns.com/foaf/0.1/"
      xmlns:og="http://ogp.me/ns#"
      xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
      xmlns:sioc="http://rdfs.org/sioc/ns#"
      xmlns:sioct="http://rdfs.org/sioc/types#"
      xmlns:skos="http://www.w3.org/2004/02/skos/core#"
      xmlns:xsd="http://www.w3.org/2001/XMLSchema#">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head profile="http://www.w3.org/1999/xhtml/vocab">
    <title>HTKK Logistics - Dịch vụ Order Taobao Nhập hàng Trung Quốc, Đặt hàng Quảng Châu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="sites/default/files/48icon.ico" type="image/vnd.microsoft.icon" />
    <meta name="description" content="Thương Đô cung cấp dịch vụ đặt mua hàng order Taobao, 1688, Alibaba, Tmall, nhập hàng Trung Quốc, order hàng Quảng Châu, giải pháp logistics vận chuyển Việt - Trung chuyên nghiệp, tốc độ và uy tín. Phục vụ hơn 50.000 khách hàng, dẫn đầu tại VN. Hotline 19006825" />
    <meta property="og:image" content="sites/default/files/quangcao/banner.html" />
    <meta property="og:title" content="Nhập Hàng Trung Quốc - Đặt Hàng Quảng Châu Trung Quốc Giá Rẻ" />
    <meta property="og:description" content="Thương Đô cung cấp dịch vụ đặt mua hàng order Taobao, 1688, Alibaba, Tmall, nhập hàng Trung Quốc, order hàng Quảng Châu, giải pháp logistics vận chuyển Việt - Trung chuyên nghiệp, tốc độ và uy tín. Phục vụ hơn 50.000 khách hàng, dẫn đầu tại VN. Hotline 19006825" />
    <link rel="canonical" href="index.html" />
    <script src="{{url('assets/css/sites/all/themes/giaodiennguoidung/js/socket.io.js')}}" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&amp;display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>
    <!-- <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/fcicepgmmbpfkknccafappindadbgcpg" /> -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&amp;display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>

    @include('client.layout.css')



</head>
<body class="html front not-logged-in no-sidebars page-user  " >
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
{{--@if ( Session::has('error') )--}}
{{--    @php toast(Session::get('error'), 'error'); @endphp--}}
{{--@endif--}}
{{--@if ($errors->any())--}}
{{--     @foreach ($errors->all() as $error)--}}
{{--         @php toast($error, 'error'); @endphp--}}
{{--     @endforeach--}}
{{--@endif--}}
<div class="olay-css" style="display: none;"></div>
<div class="container">
    <div class="left-user">
        <div class="logo"><a href="{{url('/')}}" class="shiner" rel="nofollow">
                {{--                    <img--}}
                {{--                        src="{{asset('fontend/image/img.png')}}"--}}
                {{--                        alt="Nhập hàng Trung Quốc - HTKK LOGISTICS"--}}
                {{--                        title="Nhập hàng Trung Quốc - HTKK LOGISTICS" />--}}
            </a></div>
        <h2><strong>Dịch vụ của chúng tôi</strong></h2>
        <ul>
            <li><a href="{{route('client_home')}}" title="Dịch vụ đặt hàng Trung Quốc">Dịch vụ đặt hàng Trung Quốc</a>
            </li>
            <li><a href="{{route('client_home')}}" title="Vận chuyển hàng Trung Quốc">Vận chuyển hàng Trung
                    Quốc</a></li>
            <li><a href="{{route('client_home')}}"
                   title="Ghép nhóm đánh hàng">Ghép nhóm đánh hàng</a></li>
            <li><a href="{{route('client_home')}}"
                   title="Chuyển tiền Trung Quốc">Chuyển tiền Trung Quốc</a></li>
        </ul>
        <div class="social block-both">
            <a href="{{route('client_home')}}" class="skype">
                <span class="icon"></span>
            </a>
            <a href="{{route('client_home')}}" class="youtube">
                <span class="icon"></span>
            </a>
            <a href="{{route('client_home')}}" class="facebook">
                <span class="icon"></span>
            </a>
            <a href="{{route('client_home')}}" class="viber">
                <span class="icon"></span>
            </a>
        </div>
    </div>
    <div class="user-content block-clear">
        <div class="top">
            <h1>Tạo tài khoản</h1>
            <h2><a href="{{route('auth_login')}}">Đăng nhập</a></h2>
            <i>Tạo tài khoản để tìm kiếm nguồn hàng, đặt hàng, theo dõi đơn hàng, nhận những chương trình khuyến
                mại, phản hồi khiếu nại, thắc mắc về dịch vụ...</i>
        </div>
        <form class="don-hang-dang-ky-form user-register-form" action="{{route('auth_register')}}" method="post"
               accept-charset="UTF-8">
            @csrf
            <div>
                <div class="form-item form-type-textfield form-item-fullname">

{{--                    <label class="element-invisible" for="edit-fullname">Họ và tên <span class="form-required"--}}
{{--                                                                                         title="Trường dữ liệu này là bắt buộc.">*</span></label>--}}
                    <input placeholder="Họ và tên (*)" type="text" id="edit-fullname" name="name" value="{{old('name')}}"
                           size="60" maxlength="128" class="form-text required" /> <span class="field-suffix"><i
                            class="fa fa-user-o" aria-hidden="true"></i></span>
                </div>
                <div class="form-item form-type-password form-item-pass">
{{--                    <label class="element-invisible" for="edit-pass">Mật khẩu <span class="form-required"--}}
{{--                                                                                    title="Trường dữ liệu này là bắt buộc.">*</span></label>--}}
                    <input placeholder="Mật khẩu (*)" type="password" id="edit-pass" name="password"
                           size="60" maxlength="128" class="form-text required" /> <span class="field-suffix"><i
                            class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                </div>
                <div class="form-item form-type-textfield form-item-email">
{{--                    <label class="element-invisible" for="edit-email">Email <span class="form-required"--}}
{{--                                                                                  title="Trường dữ liệu này là bắt buộc.">*</span></label>--}}
                    <input placeholder="Thư điện tử (*)"
                           type="text" id="edit-email" name="email" value="{{old('email')}}" size="60" maxlength="128"
                           class="form-text required" /> <span class="field-suffix"><i class="fa fa-envelope-o"
                                                                                       aria-hidden="true"></i></span>
                </div>
                <div class="form-item form-type-textfield form-item-phone">
{{--                    <label class="element-invisible" for="edit-phone">Số điện thoại <span class="form-required"--}}
{{--                                                                                          title="Trường dữ liệu này là bắt buộc.">*</span></label>--}}
                    <input placeholder="Số điện thoại (*) để nhận các thông báo về đơn hàng"
                            type="text" id="edit-phone"
                           name="phone" value="{{old('phone')}}" size="60" maxlength="128" class="form-text required" /> <span
                        class="field-suffix"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                </div>
{{--                <div class="form-item form-type-select form-item-kho-id">--}}
{{--                    <select id="edit-kho-id" name="kho_id" class="form-select">--}}
{{--                        <option value="" selected="selected">Chọn kho nhận hàng (*)</option>--}}
{{--                        <option value="1">[Hà Nội] - Trần Điền, Thanh Xuân</option>--}}
{{--                        <option value="7">[Hà Nội] - Tạ Quang Bửu, Hai Bà Trưng</option>--}}
{{--                        <option value="10">[Hà Nội] - Mỗ Lao, Hà Đông</option>--}}
{{--                        <option value="3">[Hồ Chí Minh] - Nguyên Văn Luông, Quận 6</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-item form-type-textfield form-item-referral">--}}
{{--                    <label class="element-invisible" for="edit-referral">Nhân viên tư vấn </label>--}}
{{--                    <input placeholder="Mã nhân viên tư vấn (Không bắt buộc)" type="text" id="edit-referral"--}}
{{--                           name="referral" value="" size="60" maxlength="128" class="form-text" /> <span--}}
{{--                        class="field-suffix"><i class="fa fa-users" aria-hidden="true"></i></span>--}}
{{--                </div>--}}
{{--                <div class="form-item form-type-select form-item-type">--}}
{{--                    <select id="edit-type" name="type" class="form-select">--}}
{{--                        <option value="" selected="selected">Chọn dịch vụ (*)</option>--}}
{{--                        <option value="1">Đặt hàng</option>--}}
{{--                        <option value="7">Ký gửi hàng</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
                <div class="form-item form-type-checkbox form-item-agree">
                    <input type="checkbox" id="edit-agree" name="agree" value="1" checked="checked"
                           class="form-checkbox required" /> <label class="option" for="edit-agree">Tôi đã đọc và đồng
                        ý với <a href="{{route('client_home')}}">điều khoản</a> của Thương
                        Đô <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>

                </div>
                <input type="submit" id="edit-submit" name="op" value="Đăng ký" class="form-submit" />
                <div class="login-use-social">
                    <div class="btn-login btn-facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <a href="{{route('client_home')}}"><span>Đăng nhập bằng Facebook</span></a>
                    </div>
                    <div class="btn-login btn-google">
                        <i class="fa fa-google-plus-circle" aria-hidden="true"></i>
                        <a href="{{route('client_home')}}"><span>Đăng nhập bằng Google</span></a>
                    </div>
                </div>
{{--                <input type="hidden" name="form_build_id"--}}
{{--                       value="form-F5gH1FmllTB-tCDAls_12DWgrXblrtQ_ntWArjbdJH0" />--}}
{{--                <input type="hidden" name="form_id" value="don_hang_dang_ky_form" />--}}
            </div>
        </form>
    </div>

</div>
<script>
{{--    @if(session('infoAlert'))--}}
{{--    Swal.fire({--}}
{{--        title: '{{ session('infoAlert')['title'] }}',--}}
{{--        text: '{{ session('infoAlert')['text'] }}',--}}
{{--        icon: 'info'--}}
{{--    });--}}
{{--    @endif--}}
</script>
@include('client.layout.js')

<div id="overlay_body"></div>
</body>
</html>

