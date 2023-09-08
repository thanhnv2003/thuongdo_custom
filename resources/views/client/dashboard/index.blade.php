<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" version="XHTML+RDFa 1.0" dir="ltr" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
    <title>Trang tổng hợp | HTKK LOGISTICS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://www.thuongdo.com/sites/default/files/48icon.ico" type="image/vnd.microsoft.icon" />
    <meta name="revisit-after" content="1 ngày" />
    <meta property="fb:app_id" content="1883942085176180" />
    <meta name="robots" content="noodp,index, follow" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="googlebot" content="all, index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta property="og:type" content="website" />
    <meta property="article:author" content="https://www.facebook.com/thuongdogroup?fref=ts" />
    <meta property="og:url" content="https://www.thuongdo.com" />
    <meta name="original-source" content="https://www.thuongdo.com" />
    @include('client.dashboard.layout.css')
</head>

<body class="html not-front logged-in no-sidebars page-dashboard dashboard-page ">

<div class="olay-css" style="display: none;"></div>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('client.dashboard.layout.header')
<div class="main-dashboard block-both">
    <div class="left-dashboard-bar block-clear">
        @include('client.dashboard.layout.aside')
        <div class="addon-install block-clear block-both">
            <a href="" target="_blank">
                <b>Cài đặt</b><br />
                Công cụ đặt hàng
            </a>
            <span class="dashboard-icon"></span>
            <div class="hotline">
                <span>Hotline</span><br />
                <a href="">1900 6825</a>
            </div>
            <a href="" target="_blank" class="install-now">Cài đặt ngay</a>
        </div>
    </div>

    <div class="content-dashboard">
        <div class="content-dashboard-top block-both">
            <div class="content-dashboard-top-inner">
                <div class="hotline">
                    <div class="inner">
                        <span class="text">Hotline</span><br />
                        <b>1900 6825</b>
                    </div>
                    <span class="dashboard-icon"></span>
                </div>
                <div class="tim-kiem-search-form">
                    <form class="tim-kiem-add-form" target="_blank" action="/dashboard" method="post" id="baiviet-tim-kiem-add-form" accept-charset="UTF-8">
                        <div>
                            <div class="search-text">
                                    <span>
                                        <img data-id="2" class="active-seleted" src="{{asset('')}}uploads/brand/taobao3.png" />
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                <ul class="search-hover" style="display:none;">
{{--                                    @foreach($brand as $key => $brand)--}}

{{--                                        <li data-id="2">--}}
{{--                                            <img src="public/uploads/brand/{{ $brand->brand_image}}" />--}}
{{--                                            <i class="fa fa-caret-right"></i>--}}
{{--                                        </li>--}}
{{--                                        <!-- <li data-id="6">--}}
{{--                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/shiji1688.png" />--}}
{{--                                        </li>--}}
{{--                                        <li data-id="1">--}}
{{--                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/1688.png" />--}}
{{--                                        </li>--}}
{{--                                        <li data-id="3">--}}
{{--                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/tmall.png" />--}}
{{--                                        </li>--}}
{{--                                        <li data-id="4">--}}
{{--                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/baidu.png" /> -->--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
                                </ul>
                                <div class="form-item form-type-select form-item-category">
                                    <select id="edit-category" name="category" class="form-select">

                                        <option value="1">1688</option>
                                        <option value="6">1688shili</option>
                                        <option value="5">Taobao CN</option>
                                        <option value="2" selected="selected">Taobao QT</option>
                                        <option value="3">Tmall</option>
                                        <option value="4">Baidu</option>
                                    </select>
                                </div>
                                <div class="form-item form-type-textfield form-item-keyword">
                                    <input placeholder="@php
                                                            echo $user['name'] . '1311233' . ', sáng nay bạn muốn tìm gì: nhập link, từ khóa...;'
                                                        @endphp
                                        " type="text" id="edit-keyword" name="keyword" value="" size="60" maxlength="128" class="form-text form-autocomplete" /><input type="hidden" id="edit-keyword-autocomplete" value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete" disabled="disabled" class="autocomplete" />
                                </div>
                            </div><input type="submit" id="edit-submit" name="op" value="Tìm kiếm" class="form-submit" /><input type="hidden" name="form_build_id" value="form-Lnc0bYR2dhGQjMUk1gucF3i3hg6ZP9HLerizsbjHfGE" />
                            <input type="hidden" name="form_token" value="0vCEi-iPdZcbWQCurV-6zgMky-MfuVkqeJiZgrwqUQI" />
                            <input type="hidden" name="form_id" value="baiviet_tim_kiem_add_form" />
                        </div>
                    </form> <b>(Nếu bạn chưa tìm thấy sản phẩm mong muốn vui lòng <a href="" target="_bank" rel="nofollow">Click vào đây</a> gửi yêu cầu từ khóa)</b>
                </div>
                <div class="ti-gia">
                    <span class="dashboard-icon"></span>
                    <span class="text">
                            <em>Tỉ giá</em><br />
                            <b>3,470đ</b>
                        </span>
                </div>
            </div>
        </div>
        @yield('content_user')

       @include('client.dashboard.layout.aside_right')
    </div>

</div>
@include('client.dashboard.layout.js')
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
{{--                        <img src="https://www.thuongdo.com/sites/default/files/quangcao/logo_0.png" />--}}
{{--                    </div>--}}
{{--                    <div class="uk-width-1-1 uk-width-medium-2-3">--}}
{{--                        <div class="td-slogan">--}}
{{--                            HTKK LOGISTICS CHỈ CẦN NGỒI Ở NHÀ MÀ VẪN CHỦ ĐỘNG ĐƯỢC NGUỒN HÀNG--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="td-thongbao-content">--}}
{{--                <div class="td-content-main">--}}
{{--                    Công cụ đặt hàng của <b>htkk.com</b> hiện tại chỉ hỗ trợ trình duyệt Chrome, Firefox. Bạn có thể download hai trình duyệt này bằng link dưới đây:--}}
{{--                    <ul>--}}
{{--                        <li><a href="">Link tải Chrome</a></li>--}}
{{--                        <li><a href="">Link tải Firefox</a></li>--}}
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
