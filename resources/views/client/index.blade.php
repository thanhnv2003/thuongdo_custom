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
<body class="html front not-logged-in no-sidebars page-home  " >
<div class="olay-css" style="display: none;"></div>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@include('client.layout.header')

@yield('content')

@include('client.layout.footer')

@include('client.layout.js')
<div id="ajax_loader" class="ajax-load-qa">&nbsp;</div>
<!--
        <div id="my_modal" class="uk-modal">
        <div class="uk-modal-dialog">

        </div>
    </div>
-->

<div id="my_modal" class="uk-modal">
    <div class="uk-modal-dialog">

    </div>
</div>

<!-- Scroll to top -->
<!--<div id="backtotop"></div>-->
<!-- Scroll to top -->
{{--<div id="popup-browser" class="uk-modal popup-home">--}}
{{--    <div class="uk-modal-dialog">--}}
{{--        <a class="uk-modal-close uk-close"></a>--}}
{{--        <div class="td-thongbao">--}}
{{--            <div class="td-thongbao-top">--}}
{{--                <div class="uk-grid uk-grid-small">--}}
{{--                    <div class="uk-width-1-1 uk-width-medium-1-3">--}}
{{--                        <img src="sites/default/files/quangcao/logo_0.png" />--}}
{{--                    </div>--}}
{{--                    <div class="uk-width-1-1 uk-width-medium-2-3">--}}
{{--                        <div class="td-slogan">--}}
{{--                            THƯƠNG ĐÔ LOGISTICS CHỈ CẦN NGỒI Ở NHÀ MÀ VẪN CHỦ ĐỘNG ĐƯỢC NGUỒN HÀNG--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="td-thongbao-content">--}}
{{--                <div class="td-content-main">--}}
{{--                    Công cụ đặt hàng của <b>thuongdo.com</b> hiện tại chỉ hỗ trợ trình duyệt Chrome, Firefox. Bạn có thể download hai trình duyệt này bằng link dưới đây:--}}
{{--                    <ul>--}}
{{--                        <li><a href="https://chrome.google.com/webstore/detail/công-cụ-đặt-hàng-thương-đ/fcicepgmmbpfkknccafappindadbgcpg">Link tải Chrome</a></li>--}}
{{--                        <li><a href="https://addons.mozilla.org/firefox/downloads/file/931827/thuong_o_logistics-3.0-an+fx.xpi">Link tải Firefox</a></li>--}}
{{--                    </ul>--}}
{{--                    Hoặc bạn có thể đặt hàng bằng biểu mẫu, hoặc đặt hàng bằng links liên kết. Chat ngay nếu bạn cần hỗ trợ--}}
{{--                </div>--}}
{{--                <div class="td-support">--}}
{{--                    <div class="uk-grid uk-grid-collapse">--}}
{{--                        <div class="uk-width-1-1 uk-width-medium-1-2">--}}
{{--                            <a href="#" class="uk-button uk-button-primary" style="display: block; margin-right: 1px; font-weight: bold"><i class="fa fa-phone"></i> 19006825</a>--}}
{{--                        </div>--}}
{{--                        <div class="uk-width-1-1 uk-width-medium-1-2">--}}
{{--                            <a href="#" class="uk-button uk-button-primary" style="display: block; font-weight: bold"><i class="fa fa-envelope-o"></i> chamsoc@thuongdo.com</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div id="overlay_body"></div>
</body>

</html>
