<header class="dashboard-header block-clear block-both">
    <div class="logo"><a href="{{URL::to('/trang-chu')}}" class="shiner" rel="nofollow"><img width="170px" src="{{asset('')}}uploads/brand/logo-quan.png" alt="Nhập hàng Trung Quốc - HTKK LOGISTICS" title="Nhập hàng Trung Quốc - HTKK LOGISTICS" /></a></div>
    <div class="header-dashboard-right">
        <div class="new-block">
            <span class="icon"></span>
        </div>
        <div class="dashboard-info">
            <div class="so-du item">
                Số dư: <b>0đ</b>
                <span class="dashboard-icon"></span>
            </div>
            <ul>
                <li class="cart item cart-user icon-li">
                    <a href="/" class="top">
                        <span class="dashboard-icon"></span>
                        <sup>0</sup>
                    </a>
                </li>
                <li class="gop-y">
                    <a href="/" data-uk-tooltip="" title="Góp ý"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </li>
                <li class="thong-tin notify item cart-inner">
                    <a href="javascript:void(0);" class="top name" data-total="90" data-intro="Xin chào <b>{{$user['name']}}1688611679</b>, Hôm nay bạn có <b>90</b> thông báo mới" data-position="bottom">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                        <sup>0
                            {{--                            {{$notifications_count}}--}}
                        </sup>
                    </a>
                    <div class="panel-notify">
                        <div class="panel-arrow">


                            <div class="notify-header">Thông báo mới</div>
                            <div class="notify-body">
                                <ul class="notify-sidebar">
                                    {{--                                    @foreach($notifications as $key => $item)--}}
                                    {{--                                        <li class="first">--}}

                                    {{--                                                <?php--}}



                                    {{--                                                $string = null;--}}
                                    {{--                                                if ($item->notification_id == 1) {--}}
                                    {{--                                                    $string = "thongbao";--}}
                                    {{--                                                } elseif ($item->notification_id == 2) {--}}
                                    {{--                                                    $string = "taichinh";--}}
                                    {{--                                                } elseif ($item->notification_id == 3) {--}}
                                    {{--                                                    $string = "kienhang";--}}
                                    {{--                                                } elseif ($item->notification_id == 4) {--}}
                                    {{--                                                    $string = "khieunai";--}}
                                    {{--                                                } elseif ($item->notification_id == 5) {--}}
                                    {{--                                                    $string = "uu-dai";--}}
                                    {{--                                                } elseif ($item->notification_id == 6) {--}}
                                    {{--                                                    $string = "gopy";--}}
                                    {{--                                                }--}}

                                    {{--                                                $icon = null;--}}
                                    {{--                                                if ($item->notification_id == 1) {--}}
                                    {{--                                                    $icon = "fa fa-star-o";--}}
                                    {{--                                                } elseif ($item->notification_id == 2) {--}}
                                    {{--                                                    $icon = "fa fa-usd";--}}
                                    {{--                                                } elseif ($item->notification_id == 3) {--}}
                                    {{--                                                    $icon = "fa fa-hdd-o";--}}
                                    {{--                                                } elseif ($item->notification_id == 4) {--}}
                                    {{--                                                    $icon = "fa fa-frown-o";--}}
                                    {{--                                                } elseif ($item->notification_id == 5) {--}}
                                    {{--                                                    $icon = "fa fa-gift";--}}
                                    {{--                                                } elseif ($item->notification_id == 6) {--}}
                                    {{--                                                    $icon = "fa fa-commenting";--}}
                                    {{--                                                }--}}




                                    {{--                                                $value = 0;--}}
                                    {{--                                                if($item->notification_id == 1){--}}
                                    {{--                                                    $value = $notifications_count_id_1;--}}
                                    {{--                                                }elseif($item->notification_id == 2){--}}
                                    {{--                                                    $value = $notifications_count_id_2;--}}
                                    {{--                                                }elseif($item->notification_id == 3){--}}
                                    {{--                                                    $value = $notifications_count_id_3;--}}
                                    {{--                                                }elseif($item->notification_id == 4){--}}
                                    {{--                                                    $value = $notifications_count_id_4;--}}
                                    {{--                                                }elseif($item->notification_id == 5){--}}
                                    {{--                                                    $value = $notifications_count_id_5;--}}
                                    {{--                                                }elseif($item->notification_id == 6){--}}
                                    {{--                                                    $value = $notifications_count_id_6;--}}
                                    {{--                                                }elseif($item->notification_id == 7){--}}
                                    {{--                                                    $value = $notifications_count_id_7;--}}
                                    {{--                                                }--}}
                                    {{--                                                ?>--}}
                                    {{--                                                <!-- <a data-title="{{$item->type}}" href="#td-thongbao" title="Thông báo mới" class="tb-thongbao">--}}
                                    {{--                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
                                    {{--                                                <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>--}}
                                    {{--                                            </a> -->--}}
                                    {{--                                            </a>--}}
                                    {{--                                            <a data-title="{{$item->type}}" href="#td-{{$item->notification_id}}" onclick="toggleNotification(this)" title="Thông báo mới" class="tb-{{$string}}">--}}
                                    {{--                                                <i class="{{$icon}}" aria-hidden="true"></i>--}}

                                    {{--                                                <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">--}}
                                    {{--                                                    <?php--}}

                                    {{--                                                        echo $value;--}}

                                    {{--                                                        ?>--}}
                                    {{--                                                </span>--}}
                                    {{--                                            </a>--}}

                                    {{--                                            <script>--}}
                                    {{--                                                function toggleNotification(link) {--}}
                                    {{--                                                    var targetId = link.getAttribute('data-target');--}}
                                    {{--                                                    var targetElement = document.getElementById(targetId);--}}

                                    {{--                                                    if (targetElement) {--}}
                                    {{--                                                        var isDisplayed = targetElement.style.display === 'block';--}}
                                    {{--                                                        targetElement.style.display = isDisplayed ? 'none' : 'block';--}}
                                    {{--                                                    }--}}
                                    {{--                                                }--}}
                                    {{--                                            </script>--}}


                                    {{--                                        </li>--}}
                                    {{--                                        <!-- <li>--}}
                                    {{--                                            <a data-title="Tài chính" href="#td-taichinh" title="Tài chính" class="tb-taichinh">--}}
                                    {{--                                                <i class="fa fa-usd" aria-hidden="true"></i>--}}
                                    {{--                                                <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a data-title="Kiện hàng" href="#td-kienhang" title="Kiện hàng" class="tb-kienhang">--}}
                                    {{--                                                <i class="fa fa-hdd-o" aria-hidden="true"></i>--}}
                                    {{--                                                <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a data-title="Khiếu nại" href="#td-yeucau" title="Khiếu nại" class="tb-khieunai">--}}
                                    {{--                                                <i class="fa fa-frown-o" aria-hidden="true"></i>--}}
                                    {{--                                                <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a data-title="Ưu đãi" href="#td-uu-dai" title="Ưu đãi" class="tb-uu-dai">--}}
                                    {{--                                                <i class="fa fa-gift" aria-hidden="true"></i>--}}
                                    {{--                                                <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a data-title="Góp ý" href="#td-gop-y" class="tb-gopy">--}}
                                    {{--                                                <i class="fa fa-commenting" aria-hidden="true"></i>--}}
                                    {{--                                                <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li> -->--}}
                                    {{--                                    @endforeach--}}
                                </ul>


                                <div class="notify-content">
                                    <div id="td-1" class="td-notify">
                                        <ul class="tb-not-hover">
                                            <!-- <li class=""><a href="/lich-dao-tao-nghiep-vu-va-du-lich-thuong-nien-2023-tai-thuong-do-0">[Thông báo] Lịch đào tạo nghiệp vụ và du lịch thường niên 2023 tại HTKK</a></li>
                                            <li class=""><a href="/dieu-chinh-ty-gia-chi-con-3550-vnd-ap-dung-tu-26042023">[Thông báo] Điều chỉnh tỷ giá chỉ còn 3.550 VNĐ áp dụng từ 26/04/2023</a></li>
                                            <li class=""><a href="/lich-nghi-le-3004-va-0105-gio-to-hung-vuong-2023-tai-thuong-do">[Thông báo] Lịch nghỉ lễ 30/04 và 01/05, Giỗ Tổ Hùng Vương 2023</a></li>
                                            <li class="last"><a href="/thuong-do-cap-nhat-bang-gia-moi-nhat-t32023">[Thông báo] HTKK cập nhật bảng giá dịch vụ mới nhất T3/2023</a></li> -->
                                            @php
                                                $hasNotification = false;
                                            @endphp
                                            {{--                                            @foreach($notifications_item as $key => $item)--}}
                                            {{--                                                @if($item->notification_id == 1)--}}
                                            {{--                                                    @if($item->content)--}}
                                            {{--                                                        <li class=""><a href="">{{$item->content}}</a></li>--}}
                                            {{--                                                        @php--}}
                                            {{--                                                            $hasNotification = true;--}}
                                            {{--                                                        @endphp--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                @endif--}}
                                            {{--                                            @endforeach--}}
                                            @if (!$hasNotification)
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có thông báo mới nào !</div>


                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div id="td-2" class="td-notify" style="display:none">
                                        <ul class="tb-not-hover">

                                            @php
                                                $hasNotification = false;
                                            @endphp
                                            {{--                                            @foreach($notifications_item as $key => $item)--}}
                                            {{--                                                @if($item->notification_id == 2)--}}
                                            {{--                                                    @if($item->content)--}}
                                            {{--                                                        <li class=""><a href="">{{$item->content}}</a></li>--}}
                                            {{--                                                        @php--}}
                                            {{--                                                            $hasNotification = true;--}}
                                            {{--                                                        @endphp--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                @endif--}}
                                            {{--                                            @endforeach--}}
                                            @if (!$hasNotification)
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có dữ liệu tài chính !</div>


                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div id="td-3" class="td-notify" style="display:none">
                                        <ul class="tb-not-hover">

                                            @php
                                                $hasNotification = false;
                                            @endphp
                                            {{--                                            @foreach($notifications_item as $key => $item)--}}
                                            {{--                                                @if($item->notification_id == 3)--}}
                                            {{--                                                    @if($item->content)--}}
                                            {{--                                                        <li class=""><a href="">{{$item->content}}</a></li>--}}
                                            {{--                                                        @php--}}
                                            {{--                                                            $hasNotification = true;--}}
                                            {{--                                                        @endphp--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                @endif--}}
                                            {{--                                            @endforeach--}}
                                            @if (!$hasNotification)
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có thông báo mới về kiện hàng !</div>

                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div id="td-4" class="td-notify" style="display: none;">
                                        <ul class="uu-dai-item">

                                            @php
                                                $hasNotification = false;
                                            @endphp
                                            {{--                                            @foreach($notifications_item as $key => $item)--}}
                                            {{--                                                @if($item->notification_id == 4)--}}
                                            {{--                                                    @if($item->content)--}}
                                            {{--                                                        <li class=""><a href="">{{$item->content}}</a></li>--}}
                                            {{--                                                        @php--}}
                                            {{--                                                            $hasNotification = true;--}}
                                            {{--                                                        @endphp--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                @endif--}}
                                            {{--                                            @endforeach--}}
                                            @if (!$hasNotification)
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có ưu đãi mới nào !</div>

                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div id="td-5" class="td-notify" style="display:none">
                                        <ul class="tb-not-hover">


                                            @php
                                                $hasNotification = false;
                                            @endphp
                                            {{--                                            @foreach($notifications_item as $key => $item)--}}
                                            {{--                                                @if($item->notification_id == 5)--}}
                                            {{--                                                    @if($item->content)--}}
                                            {{--                                                        <li class=""><a href="">{{$item->content}}</a></li>--}}
                                            {{--                                                        @php--}}
                                            {{--                                                            $hasNotification = true;--}}
                                            {{--                                                        @endphp--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                @endif--}}
                                            {{--                                            @endforeach--}}
                                            @if (!$hasNotification)
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có thông báo mới nào !</div>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="td-notify" style="display:none" id="td-6">
                                        <ul class="tb-not-hover">
                                            @php
                                                $hasNotification = false;
                                            @endphp
                                            {{--                                            @foreach($notifications_item as $key => $item)--}}
                                            {{--                                                @if($item->notification_id == 6)--}}
                                            {{--                                                    @if($item->content)--}}
                                            {{--                                                        <li class=""><a href="">{{$item->content}}</a></li>--}}
                                            {{--                                                        @php--}}
                                            {{--                                                            $hasNotification = true;--}}
                                            {{--                                                        @endphp--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                @endif--}}
                                            {{--                                            @endforeach--}}
                                            @if (!$hasNotification)
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có thông báo mới nào !</div>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </li>
                <li class="avatar item logout-li front-li">
                    <a href="" class="top"><img src="{{asset('')}}uploads/brand/no-avatar.jpg" /></a>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="logout-inner">
                        <i class="fa fa-caret-up" aria-hidden="true"></i>
                        <div class="content">
                            <p class="no-border">
                                <a href="{{route('cus_home')}}"><span><img width="30" height="30" src="{{asset('')}}uploads/brand/no-avatar.jpg" /></span>
                                    <b>
                                        <?php
                                        $customer_name = Auth::user()['name'];
                                        echo $customer_name . '1311233';
                                        ?>
                                    </b>
                                    <strong class="kcode">Mã KH: </strong></a>
                            </p>
                            <p class="children">
                                <a href="{{URL::to('/tat-ca-kien-hang')}}"><b class="fa fa-th"></b> Kiện hàng</a>
                                <a href="{{URL::to('/tat-ca-khieu-nai')}}"><b class="fa fa-commenting"></b> Góp ý</a>
                                <a href="{{route('cus_pass')}}"><b class="fa fa-unlock-alt"></b> Thay đổi mật khẩu</a>
                                <a href="{{route('logout')}}"><b class="fa fa-sign-out"></b> Thoát</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
