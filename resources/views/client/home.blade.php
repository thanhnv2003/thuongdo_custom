@extends('client.index')
@section('content')
    <div class="main block-both">
        <div class="banner-inner-block">
            <div class="tim-kiem-search-form">
                <form class="tim-kiem-add-form" target="_blank" action="{{url('/')}}" method="post" id="baiviet-tim-kiem-add-form" accept-charset="UTF-8"><div><div class="search-text">
                       <span>
                        <img data-id="2" class="active-seleted" src="{{asset('assets/css/sites/all/themes/giaodiennguoidung/images/search/taobao.png')}}" />
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                       </span>
                            <ul class="search-hover" style="display:none;">
                                <li data-id="2">
                                    <img src="{{asset('assets/css/sites/all/themes/giaodiennguoidung/images/search/taobao.png')}}" />
                                    <i class="fa fa-caret-right"></i>
                                </li>
                                <li data-id="6">
                                    <img src="{{asset('assets/css/sites/all/themes/giaodiennguoidung/images/search/shiji1688.png')}}" />
                                </li>
                                <li data-id="1">
                                    <img src="{{asset('assets/css/sites/all/themes/giaodiennguoidung/images/search/1688.png')}}" />
                                </li>
                                <li data-id="3">
                                    <img src="{{asset('assets/css/sites/all/themes/giaodiennguoidung/images/search/tmall.png')}}" />
                                </li>
                                <li data-id="4">
                                    <img src="{{asset('assets/css/sites/all/themes/giaodiennguoidung/images/search/baidu.png')}}" />
                                </li>
                            </ul>
                            <div class="form-item form-type-select form-item-category">
                                <select id="edit-category" name="category" class="form-select"><option value="1">1688</option><option value="6">1688shili</option><option value="5">Taobao CN</option><option value="2" selected="selected">Taobao QT</option><option value="3">Tmall</option><option value="4">Baidu</option></select>
                            </div>
                            <div class="form-item form-type-textfield form-item-keyword">
                                <input placeholder="Nhập link hoặc từ khóa sản phẩm bạn muốn tìm vào đây..." type="text" id="edit-keyword" name="keyword" value="" size="60" maxlength="128" class="form-text form-autocomplete" /><input type="hidden" id="edit-keyword-autocomplete" value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete" disabled="disabled" class="autocomplete" />
                            </div>
                        </div>
                        <input type="submit" id="edit-submit" name="op" value="Tìm kiếm" class="form-submit" />
                        <input type="hidden" name="form_build_id" value="form-YH_JJ6pIngMiEFiwqjTtW21wurfs6jfbtTynnUgxizo" />
                        <input type="hidden" name="form_id" value="baiviet_tim_kiem_add_form" />
                    </div>
                </form>
                <b>(Nếu bạn chưa tìm thấy sản phẩm mong muốn vui lòng <a href="https://www.messenger.com/t/thuongdo.vn" target="_bank" rel="nofollow">Click vào đây</a> gửi yêu cầu từ khóa)</b>
            </div>
            <div class="banner-slide block-both cycle-slideshow" id="slider" data-cycle-fx="fadeout" data-cycle-delay="-2500" data-cycle-slides="> a" data-cycle-swipe="true">
                <a href="{{url('/')}}" rel="nofollow">
                    <img src="{{asset('fontend/image/img_1.png')}}" alt= "Thương Đô đã phục vụ được 50000 khách hàng" title = "Thương Đô đã phục vụ được 50000 khách hàng" />
                </a>
            </div>
        </div>
        <div class="quy-trinh-block block-clear block-both">
            <div class="container">
                <ul>
                    <li>
				<span>
					<span class="icon"></span>
					<b>Tạo<br/>Đơn hàng</b>
				</span>
                    </li>
                    <li class="item-2">
				<span>
					<span class="icon"></span>
					<b>Gửi<br/>Đơn hàng</b>
				</span>
                    </li>
                    <li class="item-3">
				<span>
					<span class="icon"></span>
					<b>Nhận<br/>Đơn hàng</b>
				</span>
                    </li>
                    <li class="item-4">
				<span>
					<span class="icon"></span>
					<b>Chốt<br/>Đơn hàng</b>
				</span>
                    </li>
                    <li class="item-5">
				<span>
					<span class="icon"></span>
					<b>Thanh toán</b>
				</span>
                    </li>
                    <li class="item-6 last">
				<span>
					<span class="icon"></span>
					<b>Nhận hàng</b>
				</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-install-block block-both animatedParent">
            <div class="container">
                <div class="app-install-item animated bounceInLeft app-install-left">
                    <img src="{{asset('fontend/image/img_2.png')}}" />
                </div>
                <div class="app-install-item app-install-right">
                    <strong>Cài đặt công cụ đặt hàng</strong>
                    <a href="{{url('/')}}" target="_blank" rel="nofollow" class="addon google animated bounceInUp">
                        <span class="icon"></span>
                        <span class="text">
					Tải về cho trình duyệt
					<b>Google chrome</b>
				</span>
                    </a>
                    <a href="{{url('/')}}" target="_blank" rel="nofollow" class="addon cococ animated bounceInUp">
                        <span class="icon"></span>
                        <span class="text">
					Tải về cho trình duyệt
					<b>Coccoc</b>
				</span>
                    </a>
                    <strong class="no-margin-bottom">Tải ứng dụng HTKK</strong>
                    <i>( Quản lý đơn hàng mọi lúc, mọi nơi và nhiều hơn nữa )</i>
                    <a href="{{url('/')}}" target="_blank" rel="nofollow" class="app ios animated bounceInDown">
                        <span class="icon"></span>
                    </a>
                    <a href="{{url('/')}}" target="_blank" rel="nofollow" class="app android animated bounceInDown">
                        <span class="icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="service-list-block block-clear block-both animatedParent">
            <div class="container">
                <div class="inner">
                    <h3>Dịch vụ đặt hàng Trung Quốc của chúng tôi</h3>
                    <span class="rich icon"></span>
                    <i>Chọn ngay hệ thống website chất lượng, uy tín, đa dạng mặt hàng với nhiều mẫu mã và giá cả hợp lí, vận chuyển nhanh chóng, thanh toán tiện lợi</i>
                </div>
                <div class="content">
                    <ul>
                        <li class="item-1 animated bounceInLeft">
                            <span class="icon"></span>
                            <div class="text">
                                <h3><a href="{{url('/')}}" title="Dịch vụ đặt hàng Trung Quốc">Dịch vụ đặt hàng Quốc tế</a></h3>
                                <div class="lead">Đó là những trở ngại mà bất cứ chủ cửa hàng, chủ shop, doanh nhân nào muốn đặt hàng Quảng Châu hay bạn nào yêu thích mua sắm đều có lúc gặp phải</div>
                            </div>
                        </li>
                        <li class="item-2 last animated bounceInRight">
                            <span class="icon"></span>
                            <div>
                                <h3><a href="{{url('/')}}" title="Vận chuyển hàng Trung Quốc">Vận chuyển hàng Trong nước và Quốc tế</a></h3>
                                <div class="lead">Hãy để HTKK Logistics GIẢI QUYẾT những lo lắng này của bạn, bằng dịch vụ nhận order vận chuyển hàng từ Trung Quốc về Việt Nam </div>
                            </div>
                        </li>
                        <li class="item-3 animated bounceInLeft">
                            <span class="icon"></span>
                            <div class="text">
                                <h3><a href="{{url('/')}}" title="Ghép nhóm đánh hàng">Ghép nhóm đánh hàng</a></h3>
                                <div class="lead">HTKK Logistic cam kết và đảm bảo hàng hóa của quý khách sẽ về Việt Nam trong thời gian nhanh nhất.</div>
                            </div>
                        </li>
                        <li class="item-4 last animated bounceInRight">
                            <span class="icon"></span>
                            <div class="text">
                                <h3><a href="{{url('/')}}" title="Chuyển tiền Trung Quốc">Chuyển tiền Trung Quốc</a></h3>
                                <div class="lead">Dịch vụ đổi tiền, chuyển tiền Trung Quốc - Việt Nam - Tỷ giá nhân dân tệ (CNY-RMB) an toàn, uy tín, nhanh chóng hàng đầu Việt Nam.</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bang-gia-nhap-hang-block block-clear animatedParent block-both">
            <div class="container">
                <div class="bg-left animated bounceInDown">
                    <img src="{{'fontend/image/img_3.png'}}" />
                </div>
                <div class="bg-right">
                    <h3>Bảng giá nhập hàng Quốc tế</h3>
                    <i>Thương Đô vận chuyển thông qua đường chính ngạch, vận chuyển nhanh nhất và giá rẻ nhất thị trường</i>
                    <ul>
                        <li><a href="{{url('/')}}" title="Bảng giá đặt hàng Quốc tế"><span><i>1</i></span>Bảng giá đặt hàng Quốc tế</a></li>
                        <li class="last">
                            <a href="{{url('/')}}" title="Bảng giá vận chuyển Quốc tế - Việt Nam"><span><i>2</i></span>Bảng giá vận chuyển Quốc tế - Việt Nam</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}" title="Bảng giá vận chuyển Quảng Châu - Việt Nam"><span><i>3</i></span>Bảng giá vận chuyển Quảng Châu - Việt Nam</a>
                        </li>
                        <li class="last">
                            <a href="{{url('/')}}" title="Bảng giá dịch vụ chuyển tiền"><span><i>4</i></span>Bảng giá dịch vụ chuyển tiền</a>
                        </li>
                    </ul>
                    <a href="{{url('/')}}" rel="nofollow" class="more">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="cam-ket-dich-vu-block block-clear block-both">
            <div class="container">
                <div class="inner">
                    <div class="content">
                        <div class="ck-top">
                            <h3>
                                Cam kết<br/>
                                <span>Dịch vụ</span>
                            </h3>
                            <div class="text">
                                <p>Nhằm mang đến cho quý khách hàng dịch vụ nhập hàng tốt nhất, chúng tôi luôn nỗ lực cải tiền không ngừng nhằm nâng cao chất lượng phục vụ , đem đến sự hài lòng cho khách hàng sử dụng dịch vụ của chúng tôi !</p>
                                <div class="content animatedParent">
                                    <ul>
                                        <li>
                                            <h4>Cam kết đặt hàng</h4>
                                            <p>Cam kết đền bù gấp 10 lần tiền hàng do Thương Đô đặt sai.</p>
                                        </li>
                                        <li class="animated bounceInRight">
                                            <h4>Thời gian báo giá</h4>
                                            <p>Báo giá trong 8h kể từ lúc xuống đơn và đặt hàng trong 8h kể từ lúc khách hàng đặt cọc hoặc thanh toán.</p>
                                        </li>
                                        <li>
                                            <h4>Cam kết bồi thường</h4>
                                            <p>Cam kết bồi thường gấp 10 lần số tiền tiền chênh lệch nếu nhân viên tự tăng giá đơn hàng hoặc phí vận chuyển nội địa quốc tế.</p>
                                        </li>
                                        <li class="animated bounceInRight">
                                            <h4>Tỉ giá</h4>
                                            <p>Tỷ giá ổn định chuẩn xác 100% theo ngân hàng Công Thương Việt Nam, rẻ nhất thị trường order hàng hiện nay.</p>
                                        </li>
                                        <li>
                                            <h4>Thời gian vận chuyển</h4>
                                            <p>Thời gian vận chuyển ổn định chuẩn xác.</p>
                                        </li>
                                        <li class="animated bounceInRight">
                                            <h4>Cam kết hỗ trợ</h4>
                                            <p>Chúng tôi phát triển công nghệ để hỗ trợ Quý khách đặt hàng và tra cứu đơn hàng 24/7.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="khao-sat-chat-luong-block block-clear" id="ket-qua-item">
                        <ul class="animatedParent">
                            <li class="animated bounceInLeft">
                                <span class="number"><b class="timer count-title count-number" data-to="98" data-speed="3000">98</b><em>%</em></span>
                                <span class="text">Khách hàng hài lòng</span>
                            </li>
                            <li class="item-2 animated bounceInDown">
                                <span class="number"><b>4,5</b><em>h</em></span>
                                <span class="text">Đặt hàng ngay sau khi đặt cọc</span>
                            </li>
                            <li class="item-3 animated bounceInUp">
                                <span class="number"><b class="timer count-title count-number" data-to="96" data-speed="3000">96</b><em>%</em></span>
                                <span class="text">Đơn hàng giao dịch thành công</span>
                            </li>
                            <li class="item-4 animated bounceInRight last">
                                <span class="number"><b>48</b><em>h</em></span>
                                <span class="text">Từ kho Trung Quốc về Việt Nam chỉ từ 48h</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-testomonior-block block-clear block-both">
            <div class="container">
                <div class="faq-block item">
                    <div class="sale-block">
                        <div class="sale-left-block">
                            <img src="{{'fontend/image/img_4.png'}}" />
                        </div>
                        <div class="sale-right-block">
                            <img src="{{'fontend/image/img_5.png'}}" />
                            <br />
                            <div class="sale-timecountdown-block">
                                <b>Vào tài khoản khi mua hàng từ </b><br />
                                <strong class="timecountdown-label">06/09 - 10/09/2023</strong>
                                <div class="sale-countdown">
                                    <h5>
                                        <strong>Khuyến mãi chỉ còn</strong>
                                    </h5>
                                    <div id="sale-timecountdown" class="sale-timecountdown" data-date="2023/09/10 23:59">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testomonior-block item">
                    <form class="dang-ky-san-sale-add-form">
                        <h3>Đăng ký nhận ưu đãi</h3>
                        <em>Chỉ áp dụng cho <b style="color: #fb7824;">100</b> khách hàng đăng ký sớm nhất</em>
                        <div class="form-item">
                            <input type="" class="fullname" placeholder="Họ và Tên (*)"/>
                        </div>
                        <div class="form-item">
                            <input type="" id="sale-phone" class="phone" placeholder="Số điện thoại (*)"/>
                        </div>
                        <div class="form-item">
                            <textarea class="content" placeholder="Nội dung sản phẩm cần mua(*)"></textarea>
                        </div>
                        <button onclick="return false;">Đăng ký ngay</button><br />
                        <em>(Số tiền có thể mua hàng hoặc thanh toán phí vận chuyển)</em>
                    </form>
                </div>
            </div>
        </div>
        <div class="tin-moi-home block-clear block-both">
            <div class="container">
                <div class="inner">
                    <h3>Tin mới nhất</h3>
                    <i>(Cập nhật tin tức sự kiện, tin khuyến mại 1688.com, tmall.com, taobao.com)</i>
                </div>
                <div class="content">
                    <div class="content">
                        <div class="owl-carousel owl-theme" id="article-home-item">
                            <div class="item "><a href="gau-bong-trung-quoc.html" class="image"><img typeof="foaf:Image"
                                                                                                     src="sites/default/files/styles/200x150/public/field/image/gau-bong-trung-quoc-1111b.jpg?itok=VaglKSHq"
                                                                                                     width="200" height="150"
                                                                                                     alt="Nguồn nhập sỉ gấu bông Trung Quốc cho người mới bắt đầu"
                                                                                                     title="Nguồn nhập sỉ gấu bông Trung Quốc cho người mới bắt đầu" /></a><span
                                    class="post">04/09/2023</span><a href="gau-bong-trung-quoc.html" class="title"
                                                                     title="Nguồn nhập sỉ gấu bông Trung Quốc cho người mới bắt đầu">Nguồn nhập sỉ gấu bông
                                    Trung Quốc cho người mới bắt đầu</a>
                                <div class="lead">Gấu bông từ lâu đã là món đồ được rất nhiều người yêu thích, không chỉ có
                                    chị em mà còn cả người lớn...</div><a href="gau-bong-trung-quoc.html" class="more"
                                                                          rel="nofollow">Xem chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="item last"><a href="vay-da-hoi-trung-quoc.html" class="image"><img
                                        typeof="foaf:Image"
                                        src="sites/default/files/styles/200x150/public/field/image/vay-da-hoi-trung-quoc-1ba5c.jpg?itok=L9bWQ9QS"
                                        width="200" height="150"
                                        alt="Nguồn váy dạ hội Trung Quốc hot trend - Các mẫu váy dạ hội hot trên TMĐT"
                                        title="Nguồn váy dạ hội Trung Quốc hot trend - Các mẫu váy dạ hội hot trên TMĐT" /></a><span
                                    class="post">30/08/2023</span><a href="vay-da-hoi-trung-quoc.html" class="title"
                                                                     title="Nguồn váy dạ hội Trung Quốc hot trend - Các mẫu váy dạ hội hot trên TMĐT">Nguồn
                                    váy dạ hội Trung Quốc hot trend - Các mẫu váy dạ hội hot trên TMĐT</a>
                                <div class="lead">Để có được mẫu váy dạ hội đẹp theo đúng ý thích, rất nhiều chị em lựa chọn
                                    loại váy dạ hội Trung Quố...</div><a href="vay-da-hoi-trung-quoc.html" class="more"
                                                                         rel="nofollow">Xem chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="item "><a href="decal-dan-tuong-trung-quoc.html" class="image"><img
                                        typeof="foaf:Image"
                                        src="sites/default/files/styles/200x150/public/field/image/decal-dan-tuong-trung-quoc-17312.jpg?itok=EZaoyygj"
                                        width="200" height="150"
                                        alt="Ưu điểm của decal dán tường Trung Quốc - Link order decal dán tường giá rẻ"
                                        title="Ưu điểm của decal dán tường Trung Quốc - Link order decal dán tường giá rẻ" /></a><span
                                    class="post">28/08/2023</span><a href="decal-dan-tuong-trung-quoc.html" class="title"
                                                                     title="Ưu điểm của decal dán tường Trung Quốc - Link order decal dán tường giá rẻ">Ưu
                                    điểm của decal dán tường Trung Quốc - Link order decal dán tường giá rẻ</a>
                                <div class="lead">Để có một căn phòng đẹp theo đúng ý thích và có thể thay đổi phong cách
                                    thường xuyên, thì bạn có thể...</div><a href="decal-dan-tuong-trung-quoc.html"
                                                                            class="more" rel="nofollow">Xem chi tiết <i class="fa fa-angle-right"
                                                                                                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="item last"><a href="ao-da-nu-trung-quoc.html" class="image"><img typeof="foaf:Image"
                                                                                                         src="sites/default/files/styles/200x150/public/field/image/ao-da-nu-trung-quoc-13f37.jpg?itok=DPzXhhZp"
                                                                                                         width="200" height="150"
                                                                                                         alt="4 mẫu áo dạ nữ được ưa chuộng - Tiêu chí order áo dạ nữ Trung Quốc cực chuẩn"
                                                                                                         title="4 mẫu áo dạ nữ được ưa chuộng - Tiêu chí order áo dạ nữ Trung Quốc cực chuẩn" /></a><span
                                    class="post">25/08/2023</span><a href="ao-da-nu-trung-quoc.html" class="title"
                                                                     title="4 mẫu áo dạ nữ được ưa chuộng - Tiêu chí order áo dạ nữ Trung Quốc cực chuẩn">4
                                    mẫu áo dạ nữ được ưa chuộng - Tiêu chí order áo dạ nữ Trung Quốc cực chuẩn</a>
                                <div class="lead">Vào mùa đông, bên cạnh các mẫu áo khoác ấm áp thì áo dạ cũng được rất
                                    nhiều chị em lựa chọn. Chính v...</div><a href="ao-da-nu-trung-quoc.html" class="more"
                                                                              rel="nofollow">Xem chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="item "><a href="do-bo-trung-nien-trung-quoc.html" class="image"><img
                                        typeof="foaf:Image"
                                        src="sites/default/files/styles/200x150/public/field/image/do-bo-trung-nien-trung-quoc-14453.jpg?itok=9YguDJN8"
                                        width="200" height="150"
                                        alt="Đồ bộ trung niên Trung Quốc có tốt không? Gợi ý 5 mẫu đồ bộ trung niên Trung Quốc"
                                        title="Đồ bộ trung niên Trung Quốc có tốt không? Gợi ý 5 mẫu đồ bộ trung niên Trung Quốc" /></a><span
                                    class="post">23/08/2023</span><a href="do-bo-trung-nien-trung-quoc.html" class="title"
                                                                     title="Đồ bộ trung niên Trung Quốc có tốt không? Gợi ý 5 mẫu đồ bộ trung niên Trung Quốc">Đồ
                                    bộ trung niên Trung Quốc có tốt không? Gợi ý 5 mẫu đồ bộ trung niên Trung Quốc</a>
                                <div class="lead">Các mẫu đồ bộ Trung Quốc ngày càng được nhiều người yêu thích, đặc biệt là
                                    các mẫu đồ bộ trung niên....</div><a href="do-bo-trung-nien-trung-quoc.html"
                                                                         class="more" rel="nofollow">Xem chi tiết <i class="fa fa-angle-right"
                                                                                                                     aria-hidden="true"></i></a>
                            </div>
                            <div class="item last"><a href="chan-bong-trung-quoc.html" class="image"><img
                                        typeof="foaf:Image"
                                        src="sites/default/files/styles/200x150/public/field/image/chan-bong-trung-quoc-1ba21.jpg?itok=09zufwj6"
                                        width="200" height="150"
                                        alt="Chăn bông Trung Quốc có tốt không? Nhập chăn bông Trung Quốc chất lượng giá rẻ"
                                        title="Chăn bông Trung Quốc có tốt không? Nhập chăn bông Trung Quốc chất lượng giá rẻ" /></a><span
                                    class="post">21/08/2023</span><a href="chan-bong-trung-quoc.html" class="title"
                                                                     title="Chăn bông Trung Quốc có tốt không? Nhập chăn bông Trung Quốc chất lượng giá rẻ">Chăn
                                    bông Trung Quốc có tốt không? Nhập chăn bông Trung Quốc chất lượng giá rẻ</a>
                                <div class="lead">Vào mùa đông, chăn bông là vật dụng không thể thiếu được trong cuộc sống
                                    hàng ngày, giúp giữ ấm và đ...</div><a href="chan-bong-trung-quoc.html" class="more"
                                                                           rel="nofollow">Xem chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bao-chi-noi-ve-chung-toi block-clear block-both">
            <div class="container">
                <div class="inner">
                    <h3>Báo chí nói về chúng tôi</h3>
                </div>
                <div class="content">
                    <a href="https://vietnamnet.vn/vn/kinh-doanh/thi-truong/du-doan-6-mat-hang-nhap-khau-trung-quoc-hot-nhat-dau-nam-2021-716659.html"
                       rel="nofollow"><img src="{{'fontend/image/img_10.png'}}"
                                           alt="Báo Việt Nam Net" title="Báo Việt Nam Net" /></a><a
                        href="https://baodautu.vn/mua-hang-online-tu-trung-quoc-va-noi-lo-treo-dau-de-ban-thit-cho-d75598.html"
                        rel="nofollow"><img src="{{'fontend/image/img_11.png'}}"
                                            alt="báo Đầu Tư - Kinh Doanh" title="báo Đầu Tư - Kinh Doanh" /></a><a
                        href="https://baomoi.com/ly-do-khien-nhieu-nguoi-kinh-doanh-online-hang-trung-quoc-de-that-bai/c/24600101.epi"
                        rel="nofollow"><img src="{{'fontend/image/img_12.png'}}" alt="Báo Mới"
                                            title="Báo Mới" /></a><a
                        href="https://www.doisongphapluat.com/can-biet/ly-do-khien-nhieu-nguoi-kinh-doanh-online-hang-trung-quoc-de-that-bai-a216129.html"
                        rel="nofollow"><img src="{{'fontend/image/img_13.png'}}"
                                            alt="báo Đời Sống Pháp Luật" title="báo Đời Sống Pháp Luật" /></a><a
                        href="https://www.baogiaothong.vn/top-3-kenh-thuong-mai-dien-tu-duoc-nguoi-viet-nam-tin-dung-d242543.html"
                        rel="nofollow"><img src="{{'fontend/image/img_14.png'}}" alt="Báo Giao Thông"
                                            title="Báo Giao Thông" /></a><a
                        href="https://tintuconline.com.vn/kinh-doanh/dat-hang-tu-trung-quoc-cung-thuong-do-logitics-n-337043.html"
                        rel="nofollow"><img src="{{'fontend/image/img_15.png'}}" alt="Tin tức online"
                                            title="Tin tức online" /></a><a
                        href="https://www.giaoduc.edu.vn/mua-sam-online-xuyen-quoc-gia-va-noi-lo-van-chuyen-hang-hoa.htm"
                        rel="nofollow"><img src="{{'fontend/image/img_16.png'}}" alt="báo Giáo Dục"
                                            title="báo Giáo Dục" /></a><a
                        href="https://thethaovanhoa.vn/the-gioi/loi-khuyen-cho-nguoi-dang-co-mong-muon-khoi-nghiep-tu-viec-kinh-doanh-san-pham-trung-quoc-n20180113081733980.htm"
                        rel="nofollow"><img src="{{'fontend/image/img_17.png'}}"
                                            alt="Báo Thể thao và Văn hóa" title="Báo Thể thao và Văn hóa" /></a><a
                        href="https://xahoi.com.vn/thuong-do-logistics-tiep-tuc-trien-khai-chien-luoc-khach-hang-la-trong-tam-290254.html"
                        rel="nofollow"><img src="{{'fontend/image/img_18.png'}}" alt="Báo Xã Hội"
                                            title="Báo Xã Hội" /></a><a
                        href="https://cafef.vn/3-ly-do-khien-thuong-do-vuon-len-hang-dau-nganh-dich-vu-van-chuyen-hang-trung-quoc-20180117115759548.chn"
                        rel="nofollow"><img src="{{'fontend/image/img_19.png'}}" alt="Báo CafeF.vn"
                                            title="Báo CafeF.vn" /></a>
                </div>
            </div>
        </div>
        <div class="doi-tac-block block-clear block-both">
            <div class="container">
                <h3>Đối tác của chúng tôi</h3>
                <a href="#" rel="nofollow">
                    <img src="{{'fontend/image/img_6.png'}}" />
                </a>
                <a href="#" rel="nofollow">
                    <img src="{{'fontend/image/img_7.png'}}" />
                </a>
                <a href="#" rel="nofollow">
                    <img src="{{'fontend/image/img_8.png'}}" />
                </a>
                <a href="#" rel="nofollow">
                    <img src="{{'fontend/image/img_9.png'}}" />
                </a>
            </div>
        </div>
    </div>
@endsection
