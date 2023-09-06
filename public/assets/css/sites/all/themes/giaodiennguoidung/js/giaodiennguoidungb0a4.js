(function ($) {
Drupal.behaviors.ajaxRegister = {
  attach: function (context){
    // Make modal window height scaled automatically.
    $('.ctools-modal-content, #modal-content', context).height('auto');
    // Position code lifted from http://www.quirksmode.org/viewport/compatibility.html
    if (self.pageYOffset) { // all except Explorer
      var wt = self.pageYOffset;
    }
    else if (document.documentElement && document.documentElement.scrollTop) { // Explorer 6 Strict
      var wt = document.documentElement.scrollTop;
    }
    else if (document.body) { // all other Explorers
      var wt = document.body.scrollTop;
    }
    // Fix CTools bug: calculate correct 'top' value.
    var mdcTop = wt + ( $(window).height() / 2 ) - ($('#modalContent', context).outerHeight() / 2);
    $('#modalContent', context).css({top: mdcTop + 'px'});
  }
}
})(jQuery);
jQuery(document).ready(function($) {
	//Anchor link
	$(document).on('click', '.ky-gui-anchor', function(e){
			e.preventDefault();
			$('html, body').animate({
					scrollTop: $("#"+$(this).data("href")).offset().top
			}, 500);
	});
	$('.link-cart-code .post-code-update i').click(function(){
		if($(this).next('input').is(':visible')){
			$(this).next('input').hide();
			$(this).parent().next().show();
		}else{
			$(this).next('input').show();
			$(this).parent().next().hide();
		}
	});
    
    $(".noi-dung p img").each(function() {
       $(this).parent().parent('.noi-dung').children('p').addClass('rtecenter'); 
    });
    
    $(".noi-dung a").each(function() {
       $(this).attr('target','_blank'); 
    });
    
	$('.view-more-giaohang').click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var $this = $(this);
		if($('tr.megarow-'+id).length){
			$('tr.megarow-'+id).remove();
		}else{
			$(this).closest('tr').after('<tr class="megarow megarow-'+id+'"><td colspan="9">\
			<div class="views-megarow-content views-megarow-content-'+id+'">\
				<div class="megarow-header clearfix">\
					<span class="megarow-title"><i class="fa fa-minus-circle"></i> Loading...</span>\
					<a class="close" href="#">x</a>\
				</div>\
				<div class="megarow-content">\
					<div class="megarow-throbber">\
						<div class="megarow-throbber-wrapper">\
							<img src="/extensions/ajax-loader.gif" title="Loading...">\
						</div>\
					</div>\
				</div>\
			</div>\
		</td>\
		');
			$.ajax({
				url: $(this).attr('href'),
				type: 'POST',
				data: {
					id: id
				},
				success: function(data){
					if(data != -1){
						$('tr.megarow-'+id).remove();
						$this.closest('tr').after('<tr class="megarow megarow-'+id+'"><td colspan="9">\
				<div class="views-megarow-content views-megarow-content-'+id+'">\
					<div class="megarow-header clearfix">\
						<span class="megarow-title"><i class="fa fa-minus-circle"></i> Đóng</span>\
						<a class="close" href="#">x</a>\
					</div>\
					<div class="megarow-content">\
								'+data+'\
					</div>\
				</div>\
			</td>\
			');
				}else{
					alert('Có lỗi xảy ra, bạn vui lòng thử lại sau !');
				}
				}
			});
		}
	});
	$(document).on('click', '.megarow-header', function(e){
		e.preventDefault();
		$(this).closest('tr.megarow').remove();
	});
	//Ship hàng
	$(document).on('change', '#checkAll', function(e){
		var c = this.checked;
		$('.kien-hang-cua-ban-item tbody input.ckb-den-kho-vn').attr('checked', c);
		print_content_check_kien_hang('.kien-hang-cua-ban-item tbody input.ckb-den-kho-vn');
	});
	$('.kien-hang-cua-ban-item tbody input.ckb-den-kho-vn').change(function(){
		print_content_check_kien_hang('.kien-hang-cua-ban-item tbody input.ckb-den-kho-vn');
	});
	function print_content_check_kien_hang(path){
		var newValues = [];
		$(path).each(function(){
			if($(this).is(':checked')){
				var selected = $(this).val();
				newValues.push(selected);
			}else{
				remove_arr_kien_hang(newValues, $(this).val());
			}
		});
		var count_kien_ship = newValues.length;
		var txtNid = newValues.join(',');
		$('#item-giao-hang-hidden').val(txtNid);
		$('.total-giao-hang span').text(count_kien_ship);
	}
	function remove_arr_kien_hang(arr, item) {
		for(var i = arr.length; i--;) {
			if(arr[i] === item) {
				arr.splice(i, 1);
			}
		}
	}
	if($.browser.chrome || $.browser.mozilla){
        //UIkit.modal("#popup-browser").hide();
	} else {
        //UIkit.modal("#popup-browser",{center:true}).show();
	}
	function scrolltop() {
    	var offset = 35;
    	var duration = 500;
    	jQuery(window).scroll(function() {
    		if (jQuery(this).scrollTop() > offset) {
    				jQuery('#back_top').removeClass('affix-top').addClass('affix');
    		} else {
    				jQuery('#back_top').addClass('affix-top').removeClass('affix');
    		}
    	});
    	jQuery('#back_top').click(function(event) {
    		event.preventDefault();
    		jQuery('html, body').animate({scrollTop: 0}, duration);
    		return false;
    	});
    }
	scrolltop();
    function scrollTopHomePage() {
        var offset = 35;
    	var duration = 500;
    	jQuery(window).scroll(function() {
    		if (jQuery(this).scrollTop() > offset) {
    				jQuery('header').removeClass('header-affix-top').addClass('header-affix');
    		} else {
    				jQuery('header').addClass('header-affix-top').removeClass('header-affix');
    		}
    	});
    }
    scrollTopHomePage();
	var $ = jQuery;
	$('.call-close').click(function(){
		$('.call-left').hide();
		$('.phone-online').fadeIn(500);
	});
	$('.phone-online a').click(function(e){
		e.preventDefault();
		if($('.call-left').length){
			$('.phone-online').hide();
			$('.call-left').fadeIn(500);
		}
	});
	$('.fb-close-tvh').click(function(e){
		e.preventDefault();
		$('#chat-facebook').animate({left: '30px'}, 1000);
		$(this).addClass('uk-hidden');
	});
	$('#facebook-support').click(function(e){
		e.preventDefault();
		$('.fb-close-tvh').removeClass('uk-hidden');
		$('#chat-facebook').animate({left: '-350px'}, 1000);
	});
	$('.logout-li').hover(function(){
		//Hover on
		$('#overlay_body').addClass('hover-overlay');
	}, function(){
		//Hover out
		$('#overlay_body').removeClass('hover-overlay');
	});
	$.fn.clickToggle = function(func1, func2) {
			var funcs = [func1, func2];
			this.data('toggleclicked', 0);
			this.click(function() {
					var data = $(this).data();
					var tc = data.toggleclicked;
					$.proxy(funcs[tc], this)();
					data.toggleclicked = (tc + 1) % 2;
			});
			return this;
	};
    $('.thong-tin > a.name').click(function(e){
        e.preventDefault();
		var flag_active = false;
		$('.notify-sidebar li a').each(function(){
			if($(this).hasClass('active')){
				flag_active = true;
			}
		});
		if(flag_active == false){
			$(".panel-notify .notify-body ul.notify-sidebar li.first a").trigger('click');
		}
        if($(".panel-notify").css('display') == 'none') {
            $(".panel-notify").show();
            return false;
        } else {
            $(".panel-notify").hide();
            return false;
        }
    });
    $('.thong-tin > a').on('mouseup', function(e){
        e.preventDefault();
        e.stopPropagation();
    });
	//Click ra ngoài div .panel-notify ẩn div này
	$(document).click(function(e){
		var panel_notify = $('.panel-notify');
		if (panel_notify.is(':visible') && !panel_notify.is(e.target) && panel_notify.has(e.target).length === 0 && !$('.thong-tin > a').is(e.target)){
            panel_notify.hide();
            return false;
        }
		/*
        var cart_list = $('.cart-list');
        var cart_user_i = $('.cart-user > a > i');
        var cart_user_s = $('.cart-user > a > span');
        if (cart_list.is(':visible') && !cart_list.is(e.target) && cart_list.has(e.target).length === 0 && !cart_user_i.is(e.target) && !cart_user_s.is(e.target)){
            cart_list.removeClass('active');
            return false;
        }
		*/
	});
	$('#hisella-minimize').click(function () {
			if ($('#hisella-facebook').css('opacity') == 0) {
					$('#hisella-facebook').css('opacity', 1);
					$('.hisella-messages').animate({bottom: '0'});
			} else {
					$('.hisella-messages').animate({bottom: '-300px'}, 400, function () {
							$('#hisella-facebook').css('opacity', 0)
					});
			}
	});
	//28-02-2017
	var hash = window.location.hash;
	//end 28-02-2017
	var getDecimal = 2;
	var getvMax = '999999.99';
	var getOption = $.parseJSON('{"mDec":  ' + getDecimal + ',"vMax": ' + getvMax + '}');
	$("input.auto").autoNumeric('init', getOption);
    
    var getDecimalQty = 0;
    var getvMaxQty = '999999';
    var getOptionQty = $.parseJSON('{"mDec":  ' + getDecimalQty + ',"vMax": ' + getvMaxQty + '}');
    $("input.qty").autoNumeric('init', getOptionQty);

    var getDecimalVnd = 0;
    var getvMaxVnd = '999999999';
    var getOptionVnd = $.parseJSON('{"mDec":  ' + getDecimalVnd + ',"vMax": ' + getvMaxVnd + '}');
    $("input.auto-vnd").autoNumeric('init', getOptionVnd);
	//tvhoan 21-02-2017
	$('.tb-reduce').click(function(e){
		e.preventDefault();
		var qty_cur = ($(this).siblings().find('input.form-text').val());
		if($.trim(qty_cur) == ""){
			qty_cur = 0;
		}else{
			qty_cur = parseInt($(this).siblings().find('input.form-text').val());
		}
		if(qty_cur > 0){
			$(this).siblings().find('input.form-text').val(qty_cur - 1);
			$(this).siblings().find('input.form-text').trigger('blur');
		}else{
			alert("Số lượng sản phẩm phải lớn hơn 0");
		}
	});
	$('.tb-increase').click(function(e){
		e.preventDefault();
		var qty_cur = ($(this).siblings().find('input.form-text').val());
		if($.trim(qty_cur) == ""){
			qty_cur = 0;
		}else{
			qty_cur = parseInt($(this).siblings().find('input.form-text').val());
		}
		if(qty_cur < parseInt(getvMaxQty)){
			$(this).siblings().find('input.form-text').val(qty_cur + 1);
			$(this).siblings().find('input.form-text').trigger('blur');
		}else{
			alert("Số lượng sản phẩm phải nhỏ hơn "+getvMaxQty);
		}
	});
	//End tvhoan 21-02-2017
    $(window).scroll(function() {
    	if($(this).scrollTop() >= 150) {
    		$('.header-bottom').addClass('scroll');	
    	} else {
    		$('.header-bottom').removeClass('scroll');	
    	}
    });
    $(".tim-kiem-add-form ul li a").click(function() {
        $(".tim-kiem-add-form ul li a").removeClass('active');
        $(this).addClass('active');
        $(".tim-kiem-add-form .form-item select").val($(this).attr('data'));
    });
    // change
  $("select.the-tich").change(function() {
		_id = $(this).attr('data');
		_type = $(this).val();
		_qty = $("#edit-sanpham-item-"+_id+"-qty").val();
		_total = 0;
		_price = $("#edit-sanpham-item-"+_id+"-price").val();
		// Thanh tien
        _tigia = $("span.ti-gia").html();
		_thanhtien = parseFloat(_price) * parseInt(_qty) * parseInt(_tigia);
		$("#edit-sanpham-item-"+_id+"-tongtien").val(number_format(_thanhtien,0,'',','));
		_total = 0;
		for(i = 1; i <= 20; i++) {
			_thanhtinh = number_format($("#edit-sanpham-item-"+i+"-tongtien").val(),0,',','');
			_total += parseInt(_thanhtinh);
		}
		$("p.total span").html(number_format(_total,0,'',','));
	});
    // Slide gioi thieu
    $(".quang-cao-gioi-thieu .content").cycle({
        fx:'scrollLeft',
        speed: 1000,
        timeout: 3000  		
    });
	$(".hinh-anh-cty").cycle({
        fx:'scrollLeft',
        speed: 1000,
        timeout: 3000  		
    });
	$(".menu-header ul li.thong-tin a.name").toggle(
		function() {
			$(this).parent().children("ul").show();
		},
		function() {
			$(this).parent().children("ul").hide();
		}
	);
	$("a.them-moi").click(function() {
	   _rel = parseInt($(this).attr('rel'));
	   $(".dat-hang-online-form tbody tr.hidden-"+_rel).removeClass('hidden');
       $(this).attr('rel', parseInt($(this).attr('rel')) + 1);   
	});
	// Click video
	$(".huong-dan-su-dung ul li span.bg-iframe").click(function() {
		$(this).hide();
	});
    // Check phi kiem dem
    $('.info .form-item-yeu-cau-khac input').bind('change', function(){
        if ($(this).is(':checked')) {
            if($(this).val() == 2) {
                // Xử lý dành cho phí đóng gỗ
                $("p.phi-dong-kien b").html('20 tệ/kg đầu tiên, 1 tệ/kg sau');
            }else {
                //  Xử lý dành cho phí kiểm đếm
                $("#loading").show();
                $.ajax({
                    url: '/phi-kiem-dem-build-data',
                    data: {'qty': $("p.phi-kiem-dem").attr('data-product-total')},
                    type: 'POST',
                    success: function(data){
                        $("p.phi-kiem-dem b").html(number_format(data.price,0,'',','));
                        _tienHang = number_format($("p.tong-tien-hang b").html(),0,',','');
                        _phiDatHang = number_format($("p.phi-dat-hang b").html(),0,',','');
                        _total = parseInt(_tienHang) + parseInt(_phiDatHang) + data.price;
                        $("p.tong-tien b").html(number_format(_total,0,'',','));
                        $("#loading").hide();
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        window.location.reload(true);
                        return false;
                    }       
                });
            }
        }else {
            if($(this).val() == 2) {
                $("p.phi-dong-kien b").html('');
            }else {
                $("p.phi-kiem-dem b").html('');
                _tienHang = number_format($("p.tong-tien-hang b").html(),0,',','');
                _phiDatHang = number_format($("p.phi-dat-hang b").html(),0,',','');
                _total = parseInt(_tienHang) + parseInt(_phiDatHang);
                $("p.tong-tien b").html(number_format(_total,0,'',','));
            }
        }
    });
    // Check phí kiểm đếm đóng gỗ...
    $("form.gui-yeu-cau-form .form-item-yeu-cau-khac input").bind('change', function() {
       if($(this).is(':checked')) {
          if($(this).val() == 1) {
             $("form.gui-yeu-cau-form .form-item-so-luong").show();
          }else if($(this).val() == 3) {
             $("form.gui-yeu-cau-form .form-item-gia-tri-hang-hoa").show(); 
          }  
       }else {
          if($(this).val() == 1) {
             $("form.gui-yeu-cau-form .form-item-so-luong").hide();
          }else if($(this).val() == 3) {
             $("form.gui-yeu-cau-form .form-item-gia-tri-hang-hoa").hide(); 
          }
       } 
    });
    // Submit search
    $("a.search-form").click(function() {
       $("form.don-hang-da-dat-search-form").submit(); 
    });
    // View all kien hang
    $("a.view-detail-kien-hang-product").toggle(function() {
       $(this).parent().children('ul').show(); 
       $(this).parent().children('.uk-grid').show(); 
    },function() {
       $(this).parent().children('ul').hide(); 
       $(this).parent().children('.uk-grid').hide(); 
    });
    $(".kien-hang-history-status a.view-detail-kien-hang-product").toggle(function() {
        $(this).parent().children('table').show();
    },function() {
        $(this).parent().children('table').hide();
    });
    $(".panel-notify .notify-body ul.notify-sidebar li a").click(function(e) {
			e.preventDefault();
			var id_link = $(this).attr('href');
			if(id_link == '#td-thongbao' && !$(this).hasClass('active')){
				ajax_thongbao();
			}else if(id_link == '#td-taichinh' && !$(this).hasClass('active')){
				ajax_thongbao_taichinh();
			}else if(id_link == '#td-kienhang' && !$(this).hasClass('active')){
				ajax_thongbao_kienhang();
			}else if(id_link == '#td-yeucau' && !$(this).hasClass('active')){
				ajax_thongbao_khieunai();
			}else if(id_link == '#td-gop-y' && !$(this).hasClass('active')) {
			    ajax_thongbao_gopy();
			}
       $(".panel-notify .notify-body ul.notify-sidebar li a").removeClass('active');
       $(this).addClass('active');
       $(".panel-notify .notify-header").html('');
       $(".panel-notify .notify-header").html($(this).attr('data-title'));
			 $('.td-notify').hide();
			 $(id_link).show();
    });
    $(".search-text span").click(function() {
       $(".search-text ul.search-hover").show();
       $(".olay-css").show();
    });
	function isEmpty(obj) {
		for(var prop in obj) {
				if(obj.hasOwnProperty(prop))
						return false;
		}
		return true;
	}
	function ajax_thongbao(){
		$.ajax({
			url: '/update/tinthongbao/xem',
			type: 'POST',
			dataType: 'json',
			success: function(data){
				if(data){
					//if(isEmpty(data.total) == false){
						$('.tb-thongbao .uk-badge-abs').text(data.total);
						$('.thong-tin .name b').text(data.total_thongbao);
					//}
				}
			},
			error: function(){
				//alert("Có lỗi xảy ra !");
			}
		});
	}
	//ajax_thongbao();
	function ajax_thongbao_khieunai(){
		$.ajax({
			url: '/update/khieunai/xem',
			type: 'POST',
			dataType: 'json',
			success: function(data){
				if(data){
					$('.tb-khieunai .uk-badge-abs').text(data.total);
					$('.thong-tin .name b').text(data.total_thongbao);
				}
			},
			error: function(){
				alert("Có lỗi xảy ra !");
			}
		});
	}
	function ajax_thongbao_kienhang(){
		$.ajax({
			url: '/update/kienhang/xem',
			type: 'POST',
			dataType: 'json',
			success: function(data){
				if(data){
					$('.tb-kienhang .uk-badge-abs').text(data.total);
					$('.thong-tin .name b').text(data.total_thongbao);
				}
			},
			error: function(){
				alert("Có lỗi xảy ra !");
			}
		});
	}
	function ajax_thongbao_taichinh(){
		$.ajax({
			url: '/update/taichinh/xem',
			type: 'POST',
			dataType: 'json',
			success: function(data){
				if(data){
					$('.tb-taichinh .uk-badge-abs').text(data.total);
					$('.thong-tin .name b').text(data.total_thongbao);
				}
			},
			error: function(){
				alert("Có lỗi xảy ra !");
			}
		});
	}
    function ajax_thongbao_gopy() {
        $.ajax({
           type: 'POST',
           url: '/update/gop-y/xem',
           dataType: 'JSON',
           success: function(data) {
             $('.tb-gopy .uk-badge-abs').text('0');
           },
           complete: function() {
             
           },
           error: function() {
             
           } 
        });
    }
    $(".search-text ul.search-hover li").click(function() {
        _src = $(this).children('img').attr('src');
        $(".search-text img.active-seleted").attr('src',_src);
        $(".search-text ul.search-hover").hide();
        $(".search-text .form-item-category select").val($(this).attr('data-id'));
        $('.olay-css').hide();
    });
    $(".olay-css").click(function() {
       if($(this).css('display') == 'block') {
          $(".search-text ul.search-hover").hide();
          $(this).hide();
       } 
    });
    $("form.don-hang-gio-hang-add-form .shop-item h3 input").click(function() {
       if($(this).is(':checked')) {
          $(this).parent().parent().children('.data-item').children('tbody').children('tr').children('td').children('div.form-type-checkbox').children('input.form-checkbox').attr('checked','checked');
       }else {
         $(this).parent().parent().children('.data-item').children('tbody').children('tr').children('td').children('div.form-type-checkbox').children('input.form-checkbox').attr('checked','');
       } 
    });
    // Dia chi giao hang
    $(".dia-chi-giao-hang-inner ul li").click(function() {
        $(".dia-chi-giao-hang-inner ul li").removeClass('selected');
        $(this).addClass('selected');
    });
    // Don vi van chuyen
    $(".don-vi-van-chuyen span").click(function() {
       if($(".dia-chi-giao-hang-inner ul li.selected").length < 1) {
          alert("Vui lòng chọn địa chỉ giao hàng");
          return false;
       }else {
          $(".don-vi-van-chuyen span").removeClass('selected');
          $(this).addClass('selected');   
       } 
    });
    // hinh thuc thanh toan
    $(".hinh-thuc-thanh-toan span").click(function() {
       $(".hinh-thuc-thanh-toan span").removeClass('selected');
       $(this).addClass('selected'); 
    });
    // Kiện hàng chọn tất cả
    $(".kien-hang-list-item a.chon-tat-ca").click(function() {
       if($(".kien-hang-list-item .item a.yeu-cau-ship").length > 0) {
          $(".kien-hang-list-item .item a.yeu-cau-ship").each(function() {
            kien_hang_yeu_cau_shipping($(this).attr('data-kien-hang-id'));
          });
          $("a.shipping-address-request-cart").remove();
       }
       if($(this).attr('data-status') == 0) {
          $(this).attr('data-status', 1);
          $(this).children('span').html('Bỏ chọn tất cả');
       }else {
          $(this).attr('data-status', 0);
          $(this).children('span').html('Chọn tất cả');
       } 
    });
    // Click Gio Hang
	/*
    var singleClick = null;

    $('.cart-user > a').click(function(e){
        e.preventDefault();
        var $this = $(this);
        if(singleClick != null){
            clearTimeout(singleClick);
            singleClick = null;
            //Double click event
            window.location = $this.attr('href');
        }else{
            singleClick = setTimeout(function(){
                //Call single click event
                var cart_list = $this.parent().find('.cart-list');
                if(cart_list.hasClass('active')){
                    cart_list.removeClass('active');
                } else {
                    cart_list.addClass('active');
                }
                clearTimeout(singleClick);
                singleClick = null;
            }, 300);
        }
    });
	*/
	$('.cart-user').hover(function(e){
		$(this).parent().find('.cart-list').addClass('active');
	}, function(){
		$(this).parent().find('.cart-list').removeClass('active');
	});
    // Header Top Fixed
    var window_height, scroll_top;
    $(window).load(function() {
        $(window).scroll(function() {
            scroll_top = $(window).scrollTop();
            if (scroll_top > 0) {
                $('.header-top-top').addClass('sticky');
            } else {
                $('.header-top-top').removeClass('sticky');
            }
        });
    });
	
	// Phương thức đặt hàng
	$(document).on("click","a.phuong-thuc-dat-hang", function(e) {
		e.preventDefault();
		$("#ajax_loader").show();
		$.ajax({
			type: 'POST',
			url: $(this).attr('href'),
			data: {
				uid: $(this).data('uid')
			},
			dataType: 'HTML',
			success: function(data) {
				var html = '<a class="uk-modal-close uk-close"></a>'+data;
				$('#my_modal .uk-modal-dialog').empty().append(html);
				var modal = UIkit.modal("#my_modal").show();
			},
			complete: function() {
				$("#ajax_loader").hide();
			}
		});
		return false;
	});
	
	// Onloading submit
	$("form input.form-submit").click(function() {
		//$("#ajax_loader").show();
	});
	
    // Khách hàng popup
    $(document).on("click","a.khach-hang-popup-action-link", function(e) {
       e.preventDefault();
       $("#ajax_loader").show();
       $.ajax({
          type: 'POST',
          url: $(this).attr('href'),
          data: {
            kid: $(this).data('kid')
          },
          dataType: 'HTML',
          success: function(data) {
            if(data) {
                var html = '<a class="uk-modal-close uk-close"></a>'+data;
    			$('#my_modal .uk-modal-dialog').empty().append(html);
    			var modal = UIkit.modal("#my_modal").show();    
            }
          },
          complete: function() {
            $("#ajax_loader").hide();
          }
       }); 
    });
    
    $('#article-home-item').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items : 2,
        autoPlay: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });
    
    $("form.dang-ky-san-sale-add-form button").click(function() {
       var fullname = $("form.dang-ky-san-sale-add-form input.fullname").val();
       var phone = $("form.dang-ky-san-sale-add-form input.phone").val();
       var content = $("form.dang-ky-san-sale-add-form textarea.content").val();
       if(fullname == '') {
          alert('Vui lòng nhập họ và tên');
          return false;
       }
       if(phone == '') {
          alert('Vui lòng nhập số điện thoại');
          return false;
       }
       if(validatePhone("sale-phone")) {
        
       } else {
          alert('Số điện thoại không hợp lệ');
          return false;
       }
       if(content == '') {
          alert('Vui lòng nội dung');
          return false;
       }
       $("#ajax_loader").show();
       $.ajax({
          type: 'POST',
          url: '/newsletter/sale-save',
          data: {
            fullname:fullname,
            phone:phone,
            content:content
          },
          dataType: 'json',
          success: function(data) {
            if(parseInt(data.status) == 1) {
                alert(data.msg);
                setTimeout(function() {
                    window.location.reload(true);
                }, 1000);
            } else {
                alert(data.msg);
            }
          },
          complete: function() {
            $("#ajax_loader").hide();     
          }
       });
       return false; 
    });
    
    khach_hang_sale_timecountdown('sale-timecountdown',$("#sale-timecountdown").attr('data-date'));
    
    // Show form login in page cart
    /*
    $(window).bind('load', function() {
        if($('body').find('.user-not-login-in-page-cart').length){
            var retVal = confirm('Cần đăng nhập tài khoản!');
            if( retVal == true ){
                $('.ctools-use-modal.button-login').click();
                return true;
            }
            else{
                return false;
            }
        }
    });
    */
});
var $ = jQuery;
function don_hang_data_ajax(id) {
    var $ = jQuery;
    $.ajax({
        url: '/dat-hang-data',
        data: {'link': $("#edit-sanpham-item-"+id+"-link").val()},
        type: 'POST',
        success: function(data){
            
        },
        error: function(jqXHR, textStatus, errorThrown){
            window.location.reload(true);
            return false;
        }       
    });
}
function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}
function don_hang_website_cart_delete(id) {
    var $ = jQuery;
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này ?')) {
        $.ajax({
            url: '/don-hang-website-cart-delete',
            data: {'id':id},
            type: 'POST',
            success: function(data){
                window.location.reload(true);
            },
            error: function(jqXHR, textStatus, errorThrown){
                window.location.reload(true);
            }       
        });
    }
}
function don_hang_trash_item(id) {
    var $ = jQuery;
    if (confirm('Bạn có chắc chắn muốn xóa đơn hàng này ?')) {
        $.ajax({
            url: '/don-hang-trash-item',
            data: {'don-hang-id':id},
            type: 'POST',
            success: function(data){
                window.location.reload(true);
            },
            error: function(jqXHR, textStatus, errorThrown){
                //window.location.reload(true);
            }       
        });
    }
}
function don_hang_update_qty(id) {
	var $ = jQuery;
    var data = [];
    $("#loading").show();
	_qty = $("#edit-sanpham-item-"+id+"-qty").val().replace(',','');
	_price = $("#edit-sanpham-item-"+id+"-price").val().replace(',','');
	// Thanh tien
    _tigia = $("span.ti-gia").html();
	_thanhtien =  parseFloat(_price) * parseInt(_qty) * parseInt(_tigia);
	$("#edit-sanpham-item-"+id+"-tongtien").val(number_format(_thanhtien,0,'',','));
	_total = 0;
    _dem = 0;
    _totalQty = 0;
	for(i = 0; i <= 50; i++) {
		_thanhtinh = number_format($("#edit-sanpham-item-"+i+"-tongtien").val(),0,',','');
		_total += parseInt(_thanhtinh);
        if($("#edit-sanpham-item-"+i+"-qty").val() && $("#edit-sanpham-item-"+i+"-price").val()) {
            _dem += parseInt($("#edit-sanpham-item-"+i+"-qty").val());
            _totalQty += parseInt($("#edit-sanpham-item-"+i+"-qty").val());
            data[i] = [$("#edit-sanpham-item-"+i+"-link").val(),
                       $("#edit-sanpham-item-"+i+"-tensanpham").val(),
                       $("#edit-sanpham-item-"+i+"-thongso").val(),
                       $("#edit-sanpham-item-"+i+"-price").val(),
                       $("#edit-sanpham-item-"+i+"-qty").val(),
                       '',
                       ''];
        }
	}
    $("div.tong-tien-tam-tinh").attr('data-product-count', _dem);
	$("p.tong-tien-hang span b").html(number_format(_total,0,'',','));
    $("p.tong-tien-hang").attr('data-total-price', _total);
    $("p.phi-kiem-dem").attr('data-product-total', _totalQty);
    _kiem_dem = 0;
    $('.info .form-item-yeu-cau-khac input').each(function(){
        if($(this).is(':checked')) {
            if($(this).val() == 1) {
                _kiem_dem = 1;
            }
        }
    });
    $.ajax({
        url: '/dat-hang-qua-website-update-san-pham',
        data: {'count':_dem,'totalQty': _totalQty,'kiem_dem': _kiem_dem,'total': _total,'data': data,'id_current':id},
        type: 'POST',
        success: function(data){
            $("p.phi-kiem-dem b").html(number_format(data.phi_kiem_dem,0,'',','));
            _totalBuild = _total;
            if(data.phi_kiem_dem) {
                _totalBuild = _total + data.phi_kiem_dem;
            }
            if(data.phi_giao_dich) {
                $("p.phi-dat-hang b").html(number_format(data.phi_giao_dich,0,'',','));
                _totalBuild = _totalBuild + data.phi_giao_dich;
            }
            $("p.tong-tien b").html(number_format(_totalBuild,0,'',','));
            $("#loading").hide();
        },
        error: function(jqXHR, textStatus, errorThrown){
            window.location.reload(true);
            return false;
        }       
    });
}
function don_hang_gio_hang_cart_update(id, id_current, id_children,shop_id,stt) {
    var $ = jQuery;
    if($("input.qty-item-"+id).val() < 1) {
        return false;
    }
    _chinaUnit = $("span.china-unit-"+id).attr('data');
    _vndUnit = $("span.vnd-unit-"+id).attr('data');
    _qty = $("input.qty-item-"+id).val().replace(',','');
    _totalVndUnit = _vndUnit * _qty;
    _totalChinaUnit = _chinaUnit * _qty;
    $("span.vnd-unit-total-"+id+" b").html(number_format(_totalVndUnit,0,'',','));
    $("span.china-unit-total-"+id+" b").html(_totalChinaUnit.toFixed(1));
    _productCount = $(".tong-tien-tam-tinh").attr('data-product-count');
    _total_dat_hang = 0;
    _totalQty = 0;
    for(i = 1; i <= parseInt(_productCount); i++) { 
      _total_dat_hang += parseInt($("span.vnd-unit-"+i).attr('data')) * parseInt($("input.qty-item-"+i).val().replace(',',''));
      _totalQty += parseInt($("input.qty-item-"+i).val().replace(',',''));
    }
    $(".tong-tien-tam-tinh p.tong-tien-hang span b").html(number_format(_total_dat_hang,0,'',','));
    _total = _total_dat_hang + parseInt($(".tong-tien-tam-tinh p.phi-dat-hang span b").attr('data-price'));
    $(".tong-tien-tam-tinh p.tong-tien span b").html(number_format(_total,0,'',','));
    $("p.phi-kiem-dem").attr('data-product-total', _totalQty);
    _kiem_dem = 0;
    $('.info .form-item-yeu-cau-khac input').each(function(){
        if($(this).is(':checked')) {
            if($(this).val() == 1) {
                _kiem_dem = 1;
            }
        }
    });
	var kiem_dem_update = 0;
	if($('.gio-hang-kiem-hang-'+stt).is(':checked')){
		kiem_dem_update = 1;
	}
    $("#loading").show();
    $.ajax({
        url: '/don-hang-san-pham-update',
        data: {'key':id_current,'key_children':id_children,'qty':_qty,'total':_total_dat_hang,'kiem_dem': _kiem_dem,'totalQty':_totalQty,'shop_id': shop_id, kiem_dem_update: kiem_dem_update},
        type: 'POST',
        success: function(data){
            $("#loading").hide(); 
            if(data.phi_giao_dich) {
                // Tong shop
                $(".shop-tong-stt-"+stt+" ul li.thanh-tien b.value").html('');
                $(".shop-tong-stt-"+stt+" ul li.thanh-tien b.value").html(number_format(data.tien_hang,0,'',','));
                $(".shop-tong-stt-"+stt+" ul li.phi-tam-tinh b.value").html('');
                $(".shop-tong-stt-"+stt+' ul li.phi-tam-tinh b.value').html(number_format(data.phi_tam_tinh,0,'',','));
                $(".shop-tong-stt-"+stt+" ul li.tong-tien-theo-shop b.value").html('');
                $(".shop-tong-stt-"+stt+" ul li.tong-tien-theo-shop b.value").html(number_format(data.tong_tien_shop,0,'',','));
                $(".shop-tong-stt-"+stt+" ul li.phi-tam-tinh p.kiem-dem b").html(number_format(data.shop_phi_kiem_dem,0,'',','));
                $(".shop-tong-stt-"+stt+" ul li.phi-tam-tinh p.phi-dat-hang b").html(number_format(data.shop_phi_dat_hang,0,'',','));
                // Tong
                $("p.phi-dat-hang span b").html(number_format(data.phi_giao_dich,0,'',','));
                $("p.phi-kiem-dem b").html(number_format(data.phi_kiem_dem,0,'',','));
                _total = _total_dat_hang + data.phi_giao_dich + data.phi_kiem_dem;
                $(".tong-tien-tam-tinh p.tong-tien span b").html(number_format(_total,0,'',','));
            }
        },
        error: function(jqXHR, textStatus, errorThrown){
            window.location.reload(true);
            return false;
        }       
    });
}
function don_hang_gio_hang_update(id, id_current, id_children) {
    var $ = jQuery;
    if($("input.qty-item-"+id).val() < 1) {
        return false;
    }
    _chinaUnit = $("span.china-unit-"+id).attr('data');
    _vndUnit = $("span.vnd-unit-"+id).attr('data');
    _qty = $("input.qty-item-"+id).val().replace(',','');
    _totalVndUnit = _vndUnit * _qty;
    _totalChinaUnit = _chinaUnit * _qty;
    $("span.vnd-unit-total-"+id+" b").html(number_format(_totalVndUnit,0,'',','));
    $("span.china-unit-total-"+id+" b").html(_totalChinaUnit.toFixed(1));
    _productCount = $(".tong-tien-tam-tinh").attr('data-product-count');
    _total_dat_hang = 0;
    _totalQty = 0;
    for(i = 1; i <= parseInt(_productCount); i++) { 
      _total_dat_hang += parseInt($("span.vnd-unit-"+i).attr('data')) * parseInt($("input.qty-item-"+i).val().replace(',',''));
      _totalQty += parseInt($("input.qty-item-"+i).val().replace(',',''));
    }
    $(".tong-tien-tam-tinh p.tong-tien-hang span b").html(number_format(_total_dat_hang,0,'',','));
    _total = _total_dat_hang + parseInt($(".tong-tien-tam-tinh p.phi-dat-hang span b").attr('data-price'));
    $(".tong-tien-tam-tinh p.tong-tien span b").html(number_format(_total,0,'',','));
    
    $("p.phi-kiem-dem").attr('data-product-total', _totalQty);
    _kiem_dem = 0;
    $('.info .form-item-yeu-cau-khac input').each(function(){
        if($(this).is(':checked')) {
            if($(this).val() == 1) {
                _kiem_dem = 1;
            }
        }
    });
    $("#loading").show();
    $.ajax({
        url: '/don-hang-san-pham-update',
        data: {'key':id_current,'key_children':id_children,'qty':_qty,'total':_total_dat_hang,'kiem_dem': _kiem_dem,'totalQty':_totalQty},
        type: 'POST',
        success: function(data){
            $("#loading").hide(); 
            if(data.phi_giao_dich) {
                $("p.phi-dat-hang span b").html(number_format(data.phi_giao_dich,0,'',','));
                $("p.phi-kiem-dem b").html(number_format(data.phi_kiem_dem,0,'',','));
                _total = _total_dat_hang + data.phi_giao_dich + data.phi_kiem_dem;
                $(".tong-tien-tam-tinh p.tong-tien span b").html(number_format(_total,0,'',','));
            }
        },
        error: function(jqXHR, textStatus, errorThrown){
            window.location.reload(true);
            return false;
        }       
    });
}
function don_hang_dat_hang_delete_item(id, id_current, id_children) {
	var $ = jQuery;
	if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này ?')) {
		_total =  parseInt(number_format($("p.total span").html(),0,',','')) - parseInt(number_format($("#edit-sanpham-item-"+(id)+"-tongtien").val(),0,',',''));
		$("p.total span").html(number_format(_total,0,'',','));
		$("#edit-sanpham-item-"+(id)+"-price").val('');
		$("#edit-sanpham-item-"+(id)+"-qty").val('');
		$("#edit-sanpham-item-"+(id)+"-tongtien").val('');
		$("#edit-sanpham-item-"+(id)+"-thongso").val('');
		$("#edit-sanpham-item-"+(id)+"-tensanpham").val('');
		$("#edit-sanpham-item-"+(id)+"-link").val('');
		$("tr.hidden-"+(id - 1)).hide();
        $.ajax({
            url: '/dat-hang-session-delete',
            data: {'key':id_current,'key_children':id_children},
            type: 'POST',
            success: function(data){
                 window.location.reload(true);
            },
            error: function(jqXHR, textStatus, errorThrown){
                window.location.reload(true);
                return false;
            }       
        });
	}
}
function don_hang_huy_item(orderid) {
    var $ = jQuery;
    $('#ajax_loader').show();
    $.ajax({
       type: 'POST',
       url: '/huy-don-process',
       data: {
          order_id: orderid
       },
       dataType: 'HTML',
       success: function(data) {
          if(data) {
              $('#my_modal').addClass('modal-small-200');
              $('#my_modal .uk-modal-dialog').empty().append(data);
              var modal = UIkit.modal("#my_modal").show();  
              
              $("form.don-hang-action-huy-form button.btn-submit").click(function() {
                 if($("form.don-hang-action-huy-form select.ly-do").val() == '') {
                    return false;
                 }
                 $('#ajax_loader').show();
                 $.ajax({
                    type: 'POST',
                    url: '/huy-don',
                    data: {
                        order_id: orderid,
                        status: $("form.don-hang-action-huy-form select.ly-do").val()
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        window.location.reload(true);
                    },
                    complete: function() {
                        $('#ajax_loader').hide();
                    }
                 });
                 return false;
              });
              
          }
          
       },
       complete: function() {
          $('#ajax_loader').hide();
       }
    });
}
var ajax_var = "";
function don_hang_dat_coc_xac_nhan(orderid) {
    var $ = jQuery;
    $("#ajax_loader").show();
    
    uu_dai_id = 0;
    if($("div").hasClass('uu-dai-dat-coc') === true) {
       if($(".uu-dai-dat-coc span").hasClass('active') === true) {
          uu_dai_id = 1; 
       }
    }
    
    $.ajax({
        url: '/don-hang-dat-coc-xac-nhan',
        data: {'orderid':orderid,'uu_dai_use': uu_dai_id},
        type: 'POST',
        dataType: 'JSON',
        success: function(data){
			if(data.status == 1){
				alert("Bạn đã đặt cọc thành công đơn hàng "+data.madh);
				window.setTimeout(function(){
					window.location.reload(true);
				}, 3000);
			}else{
				alert("Có lỗi xảy ra, bạn vui lòng đặt cọc lại ");
				window.location.reload(true);
			}
        },
        error: function(jqXHR, textStatus, errorThrown){

        },
        complete: function() {
            $("#ajax_loader").hide();
        }       
    });
}
function don_hang_dat_coc_xac_nhan_full(orderid) {
    var $ = jQuery;
    $("#ajax_loader").show();
    uu_dai_id = 0;
    if($("div").hasClass('uu-dai-dat-coc') === true) {
       if($(".uu-dai-dat-coc span").hasClass('active') === true) {
          uu_dai_id = 1; 
       }
    }
    $.ajax({
        url: '/don-hang-xac-nhan-dat-coc',
        data: {'orderid':orderid,'uu_dai_use': uu_dai_id},
        type: 'POST',
        dataType: 'JSON',
        success: function(data){
			if(data.status == 1){
				alert("Bạn đã đặt cọc thành công đơn hàng "+data.madh);
				window.setTimeout(function(){
					window.location.reload(true);
				}, 3000);
			}else{
				alert("Có lỗi xảy ra, bạn vui lòng đặt cọc lại ");
				window.location.reload(true);
			}
        },
        error: function(jqXHR, textStatus, errorThrown){

        },
        complete: function() {
            $("#ajax_loader").hide();
        }       
    });
}
function don_hang_gio_hang_edit_delete(pid,order_id, type_name) {
    var $ = jQuery;
    message = 'Bạn có chắc chắn muốn xóa sản phẩm này ?';
    if(type_name == 1) {
        message = 'Bạn có chắc chắn muốn xóa nhà cung cấp này ?';
    }
    if(confirm(message)) {
        $("#loading").show();
        $.ajax({
            url: '/product-delete-item',
            data: {'pid':pid,'order_id': order_id,'type_name': parseInt(type_name)},
            type: 'POST',
            success: function(data){
                 window.location.reload(true);
            },
            error: function(jqXHR, textStatus, errorThrown){

            }       
        });
    }
}
function don_hang_gio_hang_edit_update(pid, shop_id, stt, order_id, type_name, shop_stt) {
    var $ = jQuery;
    if($("input.qty-item-"+stt).val() < 1) {
        return false;
    }
    $("#loading").show();
    $.ajax({
        url: '/don-hang-san-pham-edit-update',
        data: {'pid':pid,'qty':$("input.qty-item-"+stt).val(),'ghi_chu': $("textarea.ghi-chu-item-"+stt).val(),'type' : type_name,'shop_id': shop_id,'order_id':order_id},
        type: 'POST',
        success: function(data){
             $("#loading").hide();
             if(type_name == 1) {
                 $("span.vnd-unit-total-"+stt+" b").html(number_format(data.price,0,'',','));
                 $("span.china-unit-total-"+stt+" b").html(number_format(data.price_china,0,'',','));
                 // Tong shop
                 //$(".shop-tong-stt-"+shop_stt+" ul li.phi-tam-tinh b.value").html('');
                 $(".shop-tong-stt-"+shop_stt+' ul li.thanh-tien b.value').empty().html(number_format(data.tien_hang,0,'',','));
                 $(".shop-tong-stt-"+shop_stt+' ul li.phi-tam-tinh b.value').empty().html(number_format(data.phi_tam_tinh,0,'',','));
                 //$(".shop-tong-stt-"+shop_stt+" ul li.tong-tien-theo-shop b.value").empty().html('');
                 $(".shop-tong-stt-"+shop_stt+" ul li.tong-tien-theo-shop b.value").empty().html(number_format(data.tong_tien_shop,0,'',','));
                 $(".shop-tong-stt-"+shop_stt+" ul li.phi-tam-tinh p.kiem-dem b").html(number_format(data.phi_kiem_dem,0,'',','));
                 // Tong don hang
                 $("p.tong-tien-hang b").html(number_format(data.tong_tien_hang,0,'',','));
                 $("p.phi-dat-hang b").html(number_format(data.tong_phi_dat_hang,0,'',','));
                 $("p.phi-kiem-dem b").html(number_format(data.tong_phi_kiem_dem,0,'',','));
                 $("p.phi-chiet-khau b").html(number_format(data.phi_chiet_khau,0,'',','));
                 $("p.tong-tien b").html(number_format(data.tong_tien,0,'',','));   
             }
        },
        error: function(jqXHR, textStatus, errorThrown){
  
        }       
    });
}
function don_hang_cart_update_order(stt, key, pid, id_current) {
    var $ = jQuery;
    if($("form.don-hang-gio-hang-add-form table tbody tr td textarea#edit-shop-cart-item-"+key+"-item-"+stt+"-ghi-chu").val() == '') {
        return false;
    }
    $("#loading").show();
    $.ajax({
        url: '/san-pham-cart-update-order',
        data: {
            'stt':stt,
            'pid' : pid,
            'id_current': id_current,
            'ghi_chu' : $("form.don-hang-gio-hang-add-form table tbody tr td textarea#edit-shop-cart-item-"+key+"-item-"+stt+"-ghi-chu").val()
        },
        type: 'POST',
        success: function(data){
             $("#loading").hide();
        },
        error: function(jqXHR, textStatus, errorThrown){
            
        }       
    });
}
function kien_hang_yeu_cau_shipping(id) {
    var $ = jQuery;
    $.ajax({
        url: '/shipping-temp-cart',
        data: {'kien-hang-id': id,'status': $("a.yeu-cau-ship-kien-hang-"+id).attr('data-status')},
        type: 'POST',
        success: function(data){
             if(data.total > 0) {
                $(".kien-hang-list-item").append('<a class="shipping-address-request-cart" onclick="don_hang_yeu_cau_ship();" href="javascript:void(0);"><b>'+data.total+' kiện hàng</b><br/>Gửi yêu cầu<br/>giao hàng</a>');   
             }else {
                $(".kien-hang-list-item .shipping-address-request-cart").remove();
             }
             if(data.status == 1) {
                $("a.yeu-cau-ship-kien-hang-"+id).html('Đã chọn yêu cầu giao hàng');
                $("a.yeu-cau-ship-kien-hang-"+id).addClass('blue');
                $("a.yeu-cau-ship-kien-hang-"+id).attr('data-status', 1);    
             }else {
                $("a.yeu-cau-ship-kien-hang-"+id).html('Yêu cầu giao hàng');
                $("a.yeu-cau-ship-kien-hang-"+id).removeClass('blue');
                $("a.yeu-cau-ship-kien-hang-"+id).attr('data-status', 0);   
             }
        },
        error: function(jqXHR, textStatus, errorThrown){
            
        }       
    });
}
function gio_hang_shop_cart_delete(shop_id) {
    var $ = jQuery;
    if(confirm('Bạn có chắc chắn muốn tất cả sản phẩm trong nhà cung cấp này ?')) {
        $("#loading").show();
        $.ajax({
            url: '/shop-cart-delete',
            data: {'shop_id':shop_id},
            type: 'POST',
            success: function(data){
                 $("#loading").hide();
                 window.location.reload(true);
            },
            error: function(jqXHR, textStatus, errorThrown){

            }       
        });
    }
}
function don_hang_tinh_tp_get_address_shipping() {
    
}
function don_hang_dat_hang_shop(stt_id, shop_id) {
    
    var count = 0;
    $("table.data-item-shop-stt-"+stt_id+ " tr td input.product-check").each(function() {
        if($(this).is(":checked")) {
            count += 1;
        }
    });
    if(count == 0) {
       alert('Vui lòng tích chọn sản phẩm đặt hàng cho nhà cung cấp này để tiếp tục'); 
       return false;   
    }
    
    $("#ajax_loader").show();
    $.ajax({
       type: 'POST',
       url: '/gio-hang/shop/order-create-save',
       data: {
          shop_stt_id: stt_id,
          shop_id: shop_id,
          element_type: 'html'
       },
       dataType: 'HTML',
       success: function(data) {
          $("#my_modal").removeClass('not-padding').addClass('not-padding');
          $("#my_modal").removeClass('modal-order-create-order').addClass('modal-order-create-order');
          var html = '<a class="uk-modal-close uk-close"></a>'+data;
          $('#my_modal .uk-modal-dialog').empty().append(html);
          var modal = UIkit.modal("#my_modal").show();
          
          $(".address-shipping input").click(function() {
             if($(this).val() == 'other') {
                $(".other-address-shipping").show();
             } else {
                $(".other-address-shipping").hide();
             }
          });
          
          $("select.tinh-tp").change(function() {
            $("#ajax_loader").show();
            $.ajax({
               type: "POST",
               url:'/tinh-tp/quan-huyen',
               data: {
                 tinh_id: $(this).val()
               },
               dataType: 'HTML',
               success: function(data) {
                  $("form.address-shipping-add-form select.quan-huyen").empty().html(data);
               },
               complete: function() {
                 $("#ajax_loader").hide();
               } 
            });
          });
          
          $("button.btn-submit").click(function() {
             
             var address_shipping_id = 0;
             $(".address-shipping input").each(function() {
                if($(this).is(":checked")) {
                    address_shipping_id = $(this).val();
                }
             });
             
             if(address_shipping_id == '0') {
                $(".order-shop-product span.message").empty().html("Vui lòng chọn địa chỉ nhận hàng");
                setTimeout(function(){
                    $(".order-shop-product span.message").empty();    
                }, 2000);
                return false;
             }
             
             var kho_nhan_id = $("select.kho-nhan").val();
             if(kho_nhan_id == '') {
                $(".order-shop-product span.message").empty().html("Vui lòng chọn kho nhận hàng");
                setTimeout(function(){
                    $(".order-shop-product span.message").empty();    
                }, 2000);
                return false;
             }
             
             var address = {};
             
             if(address_shipping_id == 'other') {
                if($("form.address-shipping-add-form input.fullname").val() == '') {
                    $(".order-shop-product span.message").empty().html("Vui lòng nhập Họ và Tên");
                    setTimeout(function(){
                        $(".order-shop-product span.message").empty();    
                    }, 2000);
                    return false;
                }
                if($("form.address-shipping-add-form input.phone").val() == '') {
                    $(".order-shop-product span.message").empty().html("Vui lòng nhập Số điện thoại");
                    setTimeout(function(){
                        $(".order-shop-product span.message").empty();    
                    }, 2000);
                    return false;
                }
                if($("form.address-shipping-add-form input.address").val() == '') {
                    $(".order-shop-product span.message").empty().html("Vui lòng nhập địa chỉ");
                    setTimeout(function(){
                        $(".order-shop-product span.message").empty();    
                    }, 2000);
                    return false;
                }
                if($("form.address-shipping-add-form select.tinh-tp").val() == '') {
                    $(".order-shop-product span.message").empty().html("Vui lòng Chọn Tỉnh/TP");
                    setTimeout(function(){
                        $(".order-shop-product span.message").empty();    
                    }, 2000);
                    return false;
                }
                if($("form.address-shipping-add-form select.quan-huyen").val() == '') {
                    $(".order-shop-product span.message").empty().html("Vui lòng Chọn Quận huyện");
                    setTimeout(function(){
                        $(".order-shop-product span.message").empty();    
                    }, 2000);
                    return false;
                }
                var address = {fullname: $("form.address-shipping-add-form input.fullname").val(), 
                               phone: $("form.address-shipping-add-form input.phone").val(), 
                               address: $("form.address-shipping-add-form input.address").val(), 
                               tinh_id: $("form.address-shipping-add-form select.tinh-tp").val(), 
                               quan_id: $("form.address-shipping-add-form select.quan-huyen").val()
                               };
             }
             
             var loai_vc = '';
             $(".dich-vu-khac .form-item-shop-cart-item-"+stt_id+"-van-chuyen input").each(function() {
                if($(this).is(":checked")) {
                    loai_vc = $(this).val();
                }
             });
             
             var dong_go = '';
             if($(".dich-vu-khac .form-item-shop-cart-item-"+stt_id+"-dong-go input").is(":checked")) {
                dong_go = 1;
             }
             
             var kiem_dem = '';
             if($(".dich-vu-khac .form-item-shop-cart-item-"+stt_id+"-kiem-hang input").is(":checked")) {
                kiem_dem = 1;
             }
             
             $("#ajax_loader").show();
             $.ajax({
                type: 'POST',
                url: '/gio-hang/shop/order-create-save',
                data: {
                  shop_stt_id: stt_id,
                  shop_id: shop_id,
                  element_type: 'save',
                  kho_nhan_id: kho_nhan_id,
                  address_shipping_id: address_shipping_id,
                  address: JSON.stringify(address),
                  ghi_chu_cty: $(".shop-tong-stt-"+stt_id+ " .form-item-shop-cart-item-"+stt_id+"-ghi-chu textarea").val(),
                  ghi_chu_rieng: $(".shop-tong-stt-"+stt_id+ " .form-item-shop-cart-item-"+stt_id+"-ghi-chu-rieng textarea").val(),
                  loai_vc: loai_vc,
                  dong_go: dong_go,
                  kiem_dem: kiem_dem
                },
                dataType: 'JSON',
                success: function(data) {
                   if(parseInt(data.status) == 1) {
                      $(".main-order-shop-new").empty().html("<div class='order-success-ncc'> \
                                                                <strong>Quý khách đã gửi yêu cầu báo giá thành công</strong> \
                                                                <em>(Hệ thống tự động chuyển về trang Đơn hàng trong 2s)</em> \
                                                              </div>");
                      setTimeout(function() {
                        window.location.replace("https://www.thuongdo.com/don-hang");
                      }, 2000);
                   } 
                },
                complete: function() {
                  $("#ajax_loader").hide();  
                }
             });
          });
       },
       complete: function() {
          $("#ajax_loader").hide();
       }
    });
}
function don_hang_product_reload_money_check(shop_stt_id, product_stt_id) {
    
    $(document).delegate("table.data-item-shop-stt-"+shop_stt_id+ " tr td input.product-check", 'change', function(e){
        product_check = this.checked;
        
        var kiem_hang_checked = false;
        if($("input.gio-hang-kiem-hang-"+shop_stt_id).is(":checked")) {
            var kiem_hang_checked = true;    
        }
        
        $("#loading").show();
        $.ajax({
           type: 'POST',
           url: '/gio-hang/product-shop-update-check',
           data: {
              shop_stt_id : shop_stt_id,
              product_stt_id: product_stt_id,
              kiem_hang_check: kiem_hang_checked,
              product_check: product_check,
              type: 2
           },
           dataType: 'JSON',
           success: function(data) {
              if(parseInt(data.status) == 1) {
                 $(".shop-tong-stt-"+shop_stt_id+ " .thanh-tien b.value").html(number_format(data.total_shop_tien_hang,0,'',',')+"đ");
                 $(".shop-tong-stt-"+shop_stt_id+ " .phi-tam-tinh").attr('data', data.total_shop_phi_tam_tinh);
                 $(".shop-tong-stt-"+shop_stt_id+ " .phi-tam-tinh b.value").html(number_format(data.total_shop_phi_tam_tinh,0,'',',')+"đ");
                 $(".shop-tong-stt-"+shop_stt_id+ " .tong-tien-theo-shop b").html(number_format(data.total_shop,0,'',',')+"đ");
                 
                 $("p.tong-tien-hang span b").html(number_format(data.total_tien_hang,0,'',','));
                 $("p.phi-dat-hang span b").html(number_format(data.total_phi_dat_hang,0,'',','));
                 $("p.phi-dat-hang span b").attr('data-price', data.total_phi_dat_hang);
                 $("p.phi-kiem-dem span b").html(number_format(data.total_kiem_dem,0,'',','));
                 $("p.tong-tien span b").html(number_format(data.total,0,'',','));
              }
           },
           complete: function() {
             $("#loading").hide();
           }
        });
        
    });
}
function don_hang_shop_change(shop_id, stt) {
    var $ = jQuery;
    $(document).delegate('input.shop-check-item-'+stt, 'change', function(e){
        checked = this.checked;
        $("table.data-item-shop-stt-"+stt+" tr td input.product-check").prop("checked", checked);
        
        var kiem_hang_checked = false;
        if($("input.gio-hang-kiem-hang-"+stt).is(":checked")) {
            var kiem_hang_checked = true;    
        }
        $("#loading").show();
        $.ajax({
           type: 'POST',
           url: '/gio-hang/product-shop-update-check',
           data: {
              shop_id : shop_id,
              stt: stt,
              checked: checked,
              kiem_hang_check: kiem_hang_checked,
              type: 1
           },
           dataType: 'JSON',
           success: function(data) {
              if(parseInt(data.status) == 1) {
                 $(".shop-tong-stt-"+stt+ " .thanh-tien b.value").html(number_format(data.total_shop_tien_hang,0,'',',')+"đ");
                 $(".shop-tong-stt-"+stt+ " .phi-tam-tinh").attr('data', data.total_shop_phi_tam_tinh);
                 $(".shop-tong-stt-"+stt+ " .phi-tam-tinh b.value").html(number_format(data.total_shop_phi_tam_tinh,0,'',',')+"đ");
                 $(".shop-tong-stt-"+stt+ " .tong-tien-theo-shop b").html(number_format(data.total_shop,0,'',',')+"đ");
                 
                 $("p.tong-tien-hang span b").html(number_format(data.total_tien_hang,0,'',','));
                 $("p.phi-dat-hang span b").html(number_format(data.total_phi_dat_hang,0,'',','));
                 $("p.phi-dat-hang span b").attr('data-price', data.total_phi_dat_hang);
                 $("p.phi-kiem-dem span b").html(number_format(data.total_kiem_dem,0,'',','));
                 $("p.tong-tien span b").html(number_format(data.total,0,'',','));
              }
           },
           complete: function() {
             $("#loading").hide();
           }
        });
        
    });
}
function khach_hang_rut_tien_huy_action(rid) {
    var $ = jQuery;
    if(confirm('Bạn có chắc chắn muốn hủy yêu cầu rút ?')) {
        $.ajax({
            url: '/rut-tien-huy',
            data: {'rut_tien_id':rid},
            type: 'POST',
            success: function(data){
                 window.location.reload(true);
            },
            error: function(jqXHR, textStatus, errorThrown){

            }       
        });
    }
}
function don_hang_shop_cart_phi_kiem_dem(shop_id,stt) {
    var $ = jQuery;
    var doTrue = false;
    if($("input.gio-hang-kiem-hang-"+stt).is(":checked")) {
       doTrue = true; 
    }
    $.ajax({
        url: '/gio-hang-update-kiem-dem',
        data: {'shop_id':shop_id,'stt': stt,'dotrue': doTrue},
        type: 'POST',
        success: function(data){
             $(".shop-tong-stt-"+stt+" ul li.phi-tam-tinh b.value").html('');
             $(".shop-tong-stt-"+stt+' ul li.phi-tam-tinh b.value').html(number_format(data.phi_tam_tinh,0,'',','));
             $(".shop-tong-stt-"+stt+" ul li.tong-tien-theo-shop b.value").html('');
             $(".shop-tong-stt-"+stt+" ul li.tong-tien-theo-shop b.value").html(number_format(data.tong_tien_shop,0,'',','));
             $(".shop-tong-stt-"+stt+" ul li.phi-tam-tinh p.kiem-dem b").html(number_format(data.phi_kiem_dem,0,'',','));
			 $("p.phi-kiem-dem b").html(number_format(data.total_phi_kiem_dem,0,'',','));
        },
        error: function(jqXHR, textStatus, errorThrown){
 
        }       
    });
}
function don_hang_shop_edit_phi_kiem_dem(shop_id, stt, order_id) {
    var $ = jQuery;
    var doTrue = false;
    if($("input.gio-hang-kiem-hang-"+stt).is(":checked")) {
       doTrue = true; 
    }
    $.ajax({
        url: '/don-hang-update-kiem-dem',
        data: {'shop_id':shop_id,'dotrue': doTrue,'order_id': order_id},
        type: 'POST',
        success: function(data){
             $(".shop-tong-stt-"+stt+" ul li.phi-tam-tinh b.value").html('');
             $(".shop-tong-stt-"+stt+' ul li.phi-tam-tinh b.value').html(number_format(data.phi_tam_tinh,0,'',','));
             $(".shop-tong-stt-"+stt+" ul li.tong-tien-theo-shop b.value").html('');
             $(".shop-tong-stt-"+stt+" ul li.tong-tien-theo-shop b.value").html(number_format(data.tong_tien_shop,0,'',','));
             $(".shop-tong-stt-"+stt+" ul li.phi-tam-tinh p.kiem-dem b").html(number_format(data.phi_kiem_dem,0,'',','));
             // Tong don hang
             $("p.tong-tien-hang b").html(number_format(data.tong_tien_hang,0,'',','));
             $("p.phi-dat-hang b").html(number_format(data.tong_phi_dat_hang,0,'',','));
             $("p.phi-kiem-dem b").html(number_format(data.tong_phi_kiem_dem,0,'',','));
             $("p.phi-chiet-khau b").html(number_format(data.phi_chiet_khau,0,'',','));
             $("p.tong-tien b").html(number_format(data.tong_tien,0,'',','));
        },
        error: function(jqXHR, textStatus, errorThrown){

        }       
    });
}
function don_hang_yeu_cau_ship() {
    if($('#item-giao-hang-hidden').val().length > 0){
		$("#ajax_loader").show();
        $.ajax({
            type: 'POST',
            url: '/kien-hang/yeu-cau-ship-process-popup',
            data: {
                kien_hang: $('#item-giao-hang-hidden').val()         
            },
            dataType: 'HTML',
            success: function(data) {
               if(data) {
                  $("#my_modal").removeClass('not-padding').addClass('not-padding');
                  var html = '<a class="uk-modal-close uk-close"></a>'+data;
                  $('#my_modal .uk-modal-dialog').empty().append(html);
                  var modal = UIkit.modal("#my_modal").show();
                  
                  $(".don-vi-van-chuyen span").click(function() {
                     $(".don-vi-van-chuyen span").removeClass('selected');
                     $(this).addClass('selected'); 
                  });
                  $(".don-vi-van-chuyen table tr td input").bind('click', function(e){
                      if($(this).is(':checked')) {
                          $('span.full-item').removeClass('selected');
                          $("span.doi-vi-van-chuyen-item-"+$(this).data('parent')).removeClass('selected').addClass('selected');  
                          $(".don-vi-van-chuyen table tr td input").prop("checked",false);
                          $(this).attr("checked", true);               
                      }
                  });
                  $("span.full-item").bind('click', function(e){
                      if(parseInt($(this).data('item')) == 1000 || parseInt($(this).data('item')) == 1001 || parseInt($(this).data('item')) == 1002) {
                          $(this).removeClass('selected');
                          return false;
                      }else {
                          $(".don-vi-van-chuyen table tr td input").prop("checked",false);
                      }
                  });
                  // hinh thuc thanh toan
                  $(".hinh-thuc-thanh-toan span").click(function() {
                     $(".hinh-thuc-thanh-toan span").removeClass('selected');
                     $(this).addClass('selected'); 
                  });
                  
                  $('.gui-yeu-cau-update').click(function(e){
                	var uid = $(this).data('uid'); 
                    addressSelect = 0;
                    donviSeleted = 0;
                    htSeleted = 0;
                    var address = '';
                    var don_vi = '';
                    var hinh_thuc = '';
                		var time_delevery = $('.flatpickr').val();
                		if(!time_delevery.length){    
                			 $(".message-status-error").html('Vui lòng chọn thời gian mong muốn nhận hàng !');
                			 $('.flatpickr').css('border', '1px solid red');
                             return false;
                		}
                    $(".dia-chi-giao-hang-inner ul li.selected").each(function() {
                        addressSelect++;
                        address = $(this).attr('data-item');
                    });
                    $(".dia-chi-giao-hang-inner .don-vi-van-chuyen span.selected").each(function() {
                        donviSeleted++;
                        don_vi = $(this).attr('data-item');
                    });
                    $(".dia-chi-giao-hang-inner .hinh-thuc-thanh-toan span.selected").each(function() {
                        htSeleted++;
                        hinh_thuc = $(this).attr('data-item');
                    });
                    if(addressSelect == 0 && addressSelect == '') {
                        $('.flatpickr').removeAttr('style');
                        $(".message-status-error").html('Vui lòng chọn địa chỉ giao hàng');
                        return false;
                    }
                    if(donviSeleted == 0 && donviSeleted == '') {
                        $(".message-status-error").html('Vui lòng chọn đơn vị vận chuyển');
                        return false;
                    }
                    if(htSeleted == 0 && htSeleted == '') {
                        $(".message-status-error").html('Vui lòng chọn hình thức thanh toán');
                        return false;
                    }
                    var serviceId = '';
                    var serviceName = '';
                    $(".don-vi-van-chuyen table tr td input").each(function() {
                       if($(this).is(":checked")) {
                          serviceId = $(this).val();
                          serviceName = $(this).attr('data-name');
                       } 
                    });
                    $.ajax({
                        url: '/kien-hang-yeu-cau-ship-save-update',
                        data: {
                                'time_delevery': time_delevery,
                                'address':address,
                                'don_vi': don_vi,
                                'hinh_thuc': hinh_thuc,
                                'yeu_cau_khac': $(".dia-chi-giao-hang-inner textarea.yeu-cau-khac").val(),
                				kienhang_id: $('#item-giao-hang-hidden').val(),
                                serviceId: serviceId,
                                service_name: serviceName
                        },
                        type: 'POST',
                        success: function(data){
                             if(data.status == 0) {
                             }else {
                				var socket_gh = io("https://thuongdosocket.herokuapp.com/");
                				socket_gh.emit("user-send-giao-hang", data);
                                $("a.shipping-address-request-cart-update").remove();
                                $(".dia-chi-giao-hang-inner").html('');
                                $(".dia-chi-giao-hang-inner").append('<div class="message-status-success">Đã gửi thành công</div>');
                                setTimeout(function () {
                    				UIkit.modal("#popup-yeu-cau-giao-hang").hide();
                				    window.location.reload(true);
                    			 },2000);
                             }
                        },
                        error: function(jqXHR, textStatus, errorThrown){    
                
                        }       
                    });
                });
               } 
            },
            complete: function() {
                $("#ajax_loader").hide();
            }
        });
	}else{
		alert("Bạn chưa chọn kiện hàng cần ship !");
	}
    
}
function don_hang_gui_yeu_cau_ship(uid) {
    var $ = jQuery;
    addressSelect = 0;
    donviSeleted = 0;
    htSeleted = 0;
    var address = '';
    var don_vi = '';	
    var hinh_thuc = '';
	var time_delevery = $('.flatpickr').val();
	if(!time_delevery.length){    
		 $(".message-status-error").html('Vui lòng chọn thời gian mong muốn nhận hàng !');
		 $('.flatpickr').css('border', '1px solid red');
        return false;
	}
    $(".dia-chi-giao-hang-inner ul li.selected").each(function() {
        addressSelect++;
        address = $(this).attr('data-item');
    });
    $(".dia-chi-giao-hang-inner .don-vi-van-chuyen span.selected").each(function() {
        donviSeleted++;
        don_vi = $(this).attr('data-item');
    });
    $(".dia-chi-giao-hang-inner .hinh-thuc-thanh-toan span.selected").each(function() {
        htSeleted++;
        hinh_thuc = $(this).attr('data-item');
    });
    if(addressSelect == 0 && addressSelect == '') {
        $('.flatpickr').removeAttr('style');
        $(".message-status-error").html('Vui lòng chọn địa chỉ giao hàng');
        return false;
    }
    if(donviSeleted == 0 && donviSeleted == '') {
        $(".message-status-error").html('Vui lòng chọn đơn vị vận chuyển');
        return false;
    }
    if(htSeleted == 0 && htSeleted == '') {
        $(".message-status-error").html('Vui lòng chọn hình thức thanh toán');
        return false;
    }
    $.ajax({
        url: '/kien-hang-yeu-cau-ship-save',
        data: {'time_delevery': time_delevery,'address':address,'don_vi': don_vi,'hinh_thuc': hinh_thuc,'yeu_cau_khac': $(".dia-chi-giao-hang-inner textarea.yeu-cau-khac").val()},
        type: 'POST',
        success: function(data){
             if(data.status == 0) {
                
             }else {
                $("a.shipping-address-request-cart").remove();
                $(".dia-chi-giao-hang-inner").html('');
                $(".dia-chi-giao-hang-inner").append('<div class="message-status-success">Đã gửi thành công</div>');
                setTimeout(function () {
				    UIkit.modal("#popup-yeu-cau-giao-hang").hide();
                    window.location.reload(true);
			     },2000);
             }
        },
        error: function(jqXHR, textStatus, errorThrown){

        }       
    });
}
function kien_hang_yeu_cau_shipping_huy(kien_hang_id) {
    var $ = jQuery;
    if(confirm('Bạn có chắc chắn muốn hủy yêu cầu giao hàng ?')) {
        $.ajax({
            url: '/yeu-cau-giao-hang-huy',
            data: {'kien_hang_id':kien_hang_id},
            type: 'POST',
            success: function(data){
                 window.location.reload(true);
            },
            error: function(jqXHR, textStatus, errorThrown){

            }       
        });
    }
}
function don_hang_clone_order(order_id) {
    var $ = jQuery;
    $("#loading").show();
    $.ajax({
       url: '/don-hang-clone-process',
       type: 'POST',
       data: {
          order_id: order_id
       },
       dataType: 'HTML',
       success: function(data) {
          $("#my_modal").addClass('modal-small');
          $("#my_modal .uk-modal-dialog").empty().html(data);
          UIkit.modal("#my_modal").show();
          doTrue = 0;
          var value = '';
          $(".don-hang-close-item ul li a").click(function() {
             if($(this).attr('selected')) {
                
             }else {
                $(".don-hang-close-item ul li a").removeAttr('selected');
                $(".don-hang-close-item ul li a").removeClass('active');
                $(this).attr('selected','');
                $(this).addClass('active');
                doTrue = 1;
                value = $(this).data('value');
             }
          });
          // Check xem đã chọn hay chưa
          $(document).on('click','.don-hang-close-item button.btn-submit', function(e) {
             e.preventDefault();
             if(doTrue == 0) {
                $(".don-hang-close-item button.btn-submit").attr('title','Vui lòng chọn trạng thái cho đơn hàng mới');
                UIkit.tooltip(".don-hang-close-item button.btn-submit").show();
                return false;
             }
             $("#loading").show();
             $.ajax({
                type: 'POST',
                url: '/don-hang-clone-process-save',
                data: {
                    value: value,
                    order_id: order_id
                },
                dataType: 'JSON',
                success: function(data) {
                   $("#my_modal .uk-modal-dialog .don-hang-close-item").empty().html('<p class="status message status-'+data.status+'">'+data.message+'</p>');
                   setTimeout(function () {
    				  UIkit.modal("#my_modal").hide();
                      window.location.reload(true);
    			   },2000); 
                },
                complete: function() {
                    $("#loading").hide();
                }
             });
          });
       },
       complete: function() {
         $("#loading").hide();
       }
    });
}
/* Scroll page bao gia */
jQuery(document).ready(function($){
	$("a").on('click', function(event) {
		var current_url = window.location.href.toString().split('#')[0];
		var url = $(this).attr('href').split('#');
		var wh = $(window).height();
		var id_h = $('#'+url[1]).outerHeight();
		if(url[0] == current_url || url[0] == ""){
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop: $(hash).offset().top - wh/2 + id_h/2
				}, 800);
			}
		}
	});
	$(window).load(function(){
		var current_url = window.location.href.toString().split('#')[1];
		if(typeof current_url != 'undefined'){
			var wh = $(window).height();
			var id_h = $('#'+current_url).outerHeight();
			$('html, body').animate({
				//scrollTop: $('#'+current_url).offset().top - wh/2 + id_h/2
			}, 800);
		}
		if($(window).outerWidth() > 992 && $('.sticky-sidebar').length) {
			$('.sticky-sidebar').wrap('<div class="sticky-sidebar-wrap"></div>');
			var stickySidebar = $('.sticky-sidebar'),
				stickySidebarOffset = stickySidebar.offset(),
				stickySidebarHeight = stickySidebar.outerHeight(),
				stickySidebarWidth = stickySidebar.outerWidth(),
				stickyParent = stickySidebar.closest('.container').find('.group-content'),
				stickyWrapHeight = stickyParent.outerHeight() - stickySidebarHeight,
				stickyWrapOffset = stickyParent.offset();
			$('.sticky-sidebar-wrap').css({height:stickySidebarHeight});
			$(window).scroll(function(){
				var windowTop = $(window).scrollTop();
				if ( stickySidebarOffset.top < windowTop && windowTop <= (stickyWrapHeight + stickyWrapOffset.top)  ) {
					stickySidebar.css({ position: 'fixed', top: '60px', width:stickySidebarWidth });
				} else if(windowTop > (stickyWrapHeight + stickyWrapOffset.top)) {
					stickySidebar.css({ position: 'absolute', top: stickyWrapHeight, width:stickySidebarWidth });
				} else {
					stickySidebar.css('position','static');
				}
			});
		}
	});
	$(window).scroll(function(){
		var ws = $(window).scrollTop() + ($(window).height()/2);
		$('.menu-one-page-bao-gia li a').each(function(){
			var id = $(this).attr('href');
			var menu_s = $(id).offset().top;
			if(ws > menu_s){
				$(this).closest('ul').find('li a').removeClass('active');
				$(this).addClass('active');
			}
		});
	});
	$('.install-extension-btn').click(function() {
		if(typeof chrome == 'undefined' || typeof chrome.webstore == 'undefined') {
	        if(navigator.userAgent.indexOf("Chrome") != -1) {
	           if(chrome.app.isInstalled) {
    				alert('Công cụ đặt hàng đã được cài trên trình duyệt của bạn');
    		   } else {
    				chrome.webstore.install();
    	       }  
	        } else {
	           if(typeof InstallTrigger != 'undefined'){
    			    if(navigator.userAgent.indexOf("Firefox") != -1) {
        			     var params = {
        					"Foo": { URL: "https://addons.mozilla.org/firefox/downloads/file/931827/thuong_o_logistics-3.0-an+fx.xpi",
        						toString: function () { return this.URL; }
        					}
        				};
        				InstallTrigger.install(params);
        				return false; 
    			    }else {
    			         UIkit.modal("#popup-browser",{center:true}).show();
    			    }
    			}else{
    				var $modal = $('#modal-download-chrome');
    				//$modal.foundation('open');
                    UIkit.modal("#popup-browser",{center:true}).show();
    			}   
	        } 	  
			
		} else {
			if(chrome.app.isInstalled) {
				alert('Công cụ đặt hàng đã được cài trên trình duyệt của bạn');
			} else {
				chrome.webstore.install();
			}
		}
		return false;
	});
	$("a.add-more-phuong-thuc").click(function() {
		var countPT = $(this).attr('data-count');
		$("table.phuong-thuc-lien-he tbody tr.hidden-"+(parseInt(countPT) + 1)).removeClass('hidden');
		$(this).attr('data-count',parseInt(countPT) + 1);
	});
	$("a.add-more-bank").click(function() {
		var countBank = $(this).attr('data-count');
		$("table.tai-khoan-ngan-hang tbody tr.hidden-"+(parseInt(countBank) + 1)).removeClass('hidden');
		$(this).attr('data-count',parseInt(countBank) + 1);
	});
	// Nhà cung cấp popup chi tiết
	$(document).on("click","a.popup-ncc-detail", function(e) {
		e.preventDefault();
		$("#ajax_loader").show();
		var ncc_id = $(this).data('ncc');
		$.ajax({
			url: $(this).attr('href'),
			type: 'POST',
			data:{
				ncc_id: ncc_id
			},
			dataType: 'HTML',
			success: function(data){
			    var html = '<a class="uk-modal-close uk-close"></a>'+data;
				$('#my_modal .uk-modal-dialog').empty().append(html);
				$("#my_modal").removeClass('modal-small');
				var modal = UIkit.modal("#my_modal").show();
			},
			complete: function() {
				$("#ajax_loader").hide();	
			}
		});
	});
});
var $ = jQuery;
function nha_cung_cap_edit_name(nnc_id) {
	$("span.ncc-id-"+nnc_id).hide();
	$("input.nha-cung-cap-name-"+nnc_id).removeClass('hidden');
}
function nha_cung_cap_user_change_update(ncc_id) {
	var name = $(".info span.name input.nha-cung-cap-name-"+ncc_id).val();
	$("#ajax_loader").show();
	$.ajax({
		type: 'POST',
		url: '/nha-cung-cap-change-name-process',
		data: {
			'name': name,
			'ncc_id': ncc_id
		},
		dataType: 'JSON',
		success: function(data) {
			if(data.name) {
				$(".info span.name input.nha-cung-cap-name-"+ncc_id).addClass('hidden');
				$(".info span.name span.ncc-id-"+ncc_id).empty().html(data.name);
				$(".info span.name span.ncc-id-"+ncc_id).show();
			}
		},
		complete: function() {
			$("#ajax_loader").hide();
		}
	});
}
function nha_cung_cap_delete(ncc_id) {
	if(confirm("Bạn chắc chắn muốn xóa nhà cung cấp này ?")) {
		$("#ajax_loader").show();
		$.ajax({
			type: 'POST',
			url: '/nha-cung-cap-trash',
			data: {
				'ncc_id': ncc_id
			},
			dataType: 'JSON',
			success: function(data) {
				if(data.status == 1) {
					window.location.reload(true);
				}
			},
			complete: function() {
				
			}
		});
	}
}
function don_hang_dat_lai_item(order_id, order_status_id) {
	var data = '<div class="bao-lai-va-dat-don-hang-huy">\
					<p>Vui lòng Nhấn nút <b>"Yêu cầu báo giá lại"</b> để nhân viên đặt hàng gửi lại báo giá !</p>\
					<button class="btn-submit">Yêu cầu báo giá lại</button>\
					<span class="message"></span>\
			    </div>';
	var html = '<a class="uk-modal-close uk-close"></a>'+data;
	$('#my_modal .uk-modal-dialog').empty().append(html);
	$("#my_modal").addClass('modal-small');
	var modal = UIkit.modal("#my_modal").show();
	$(document).on('click','.bao-lai-va-dat-don-hang-huy button.btn-submit', function(e) {
		e.preventDefault();
		$("#ajax_loader").show();
		$.ajax({
			type: 'POST',
			url: '/don-hang-bao-gia-user-process',
			data: {
				order_id: order_id,
				status_id: order_status_id
			},
			dataType: 'JSON',
			success: function(data) {
				$(".bao-lai-va-dat-don-hang-huy span.message").removeClass('error');
				$(".bao-lai-va-dat-don-hang-huy span.message").empty();
				$(".bao-lai-va-dat-don-hang-huy span.message").html(data.message);
				if(parseInt(data.status) == 0) {
					$(".bao-lai-va-dat-don-hang-huy span.message").addClass('error');
				}else {
					$(".bao-lai-va-dat-don-hang-huy span.message").addClass('success');
					setTimeout(function(){ 
						window.location.reload(true);
				    }, 3000);
				}
				
			},
			complete: function() {
				$("#ajax_loader").hide();
			}
		});
	});	
}
function don_hang_ky_gui_phuong_thuc_dat_hang_config(phuong_thuc_dat_hang_id) {
	$("#ajax_loader").show();
	$.ajax({
		type: 'POST',
		url:'/phuong-thuc-dat-hang-default',
		data: {
			phuong_thuc_dat_hang_id: phuong_thuc_dat_hang_id
		},
		dataType: 'JSON',
		success: function(data) {
			$("a.dat-mac-dinh").removeClass('active');
			$("a.dat-mac-dinh-"+phuong_thuc_dat_hang_id).addClass('active');
			setTimeout(function(){ 
				window.location.reload(true);
			}, 2000);
		},
		complete: function() {
			$("#ajax_loader").hide();
		}
	});
}
function don_hang_dat_hang_nha_cung_cap() {
	var type = $("form.nha-cung-cap-search-form select").val();
	var title = $("form.nha-cung-cap-search-form input").val();
	$.ajax({
		type: 'POST',
		url: '/don-hang-dat-hang-nha-cung-cap-autocomplete',
		data: {
			type: type,
			title: title
		},
		dataType: 'HTML',
		success: function(data) {
			var st = $(".autocomplete-result").data('status');
			if(parseInt(st) == 0) {
				if(data) {
					$(".autocomplete-result").addClass('active');
					$(".autocomplete-result").attr('data-status',1);
				}	
			}else {
				if(data == '') {
					$(".autocomplete-result").removeClass('active');
					$(".autocomplete-result").attr('data-status',0);
				} 
			}
			$(".autocomplete-result").empty().html(data);
		},
		complete: function() {
			
		}
	});
}
function don_hang_dat_hang_choose(sid, type) {
	$("#ajax_loader").show();
	$("form.nha-cung-cap-search-form .form-item input").val($("a.result-data-item-"+sid).data('title'));
	$(".autocomplete-result").empty();
	$.ajax({
		type: 'POST',
		url: '/don-hang-dat-hang-result-process',
		data: {
			sid: sid,
			type: type
		},
		dataType: 'HTML',
		success: function(data) {
			$(".result").empty().html(data);
		},
		complete: function() {
			$("#ajax_loader").hide();
		}
	});
}
function don_hang_dat_hang_nha_cung_cap_choose(pid) {
	$("#ajax_loader").show();
	$("ul li.dat-hang-product-item-"+pid).remove();
	$.ajax({
		type: 'POST',
		url: '/don-hang-dat-hang-nha-cung-cap-add-to-cart',
		data: {
			pid: pid
		},
		dataType: 'JSON',
		success: function(data) {
			if(data) {
				var addData = '<li class="data-product-item-pid-'+pid+'">\
								<a href="javascript:void(0);" class="choose" onClick="don_hang_dat_hang_nha_cung_cap_product_delete('+pid+');">\
								   <i class="fa fa-trash-o" aria-hidden="true"></i>\
								</a>\
								<img src='+data.image+' with="50" height="50" class="image" />\
								<a href='+data.link+' target="_blank" class="title">'+data.title+'</a><br/>\
								<span class="price">¥'+data.price+'</span> - <span class="ghi-chu">'+data.ghi_chu+'</span>\
							   </li>';
				$(addData).appendTo($(".result-choose ul"));
			}
		},
		complete: function() {
			$("#ajax_loader").hide();
		}
	});
}
function don_hang_dat_hang_nha_cung_cap_product_delete(pid) {
	$("#ajax_loader").show();
	$("ul li.data-product-item-pid-"+pid).remove();
	$.ajax({
		type: 'POST',
		url: '/don-hang-dat-hang-nha-cung-cap-product-delete',
		data: {
			pid: pid
		},
		success: function(data) {
			
		},
		complete: function() {
			$("#ajax_loader").hide();
		}
	});
}
function don_hang_dat_hang_save() {
	if($(".result-choose ul li").length > 0) {
		$("#ajax_loader").show();	
		$.ajax({
			type: 'POST',
			url: '/don-hang-dat-hang-nha-cung-cap-save',
			data: {
				
			},
			dataType: 'JSON',
			success: function(data) {
				window.location.replace("https://thuongdo.com/gio-hang");
			},
			complete:function() {
				$("#ajax_loader").hide();	
			}
		});
	}
	
}
function don_hang_tra_cuoc_calculator() {
    var noi_gui_hang = $(".tra-cuoc-item-page select.noi-gui-hang").val();
    var noi_nhan_hang = $(".tra-cuoc-item-page select.noi-nhan-hang").val();
    var chieu_dai = $(".tra-cuoc-item-page input.chieu-dai").val();
    var chieu_rong = $(".tra-cuoc-item-page input.chieu-rong").val();
    var chieu_cao = $(".tra-cuoc-item-page input.chieu-cao").val();
    var trong_luong = $(".tra-cuoc-item-page input.trong-luong").val();
    var result = 0;
    var access = false;
    if(chieu_cao && chieu_rong && chieu_cao) {
        var result = parseFloat(chieu_dai * chieu_rong * chieu_cao / 6000).toFixed(2);    
    }
    var type = 1;
    if(result > 0 && trong_luong) {
        if(parseFloat(trong_luong) > result) {
            $(".tra-cuoc-item-page span.message").removeClass('success').addClass('success').empty().html("Kiện hàng <b style='color: red;'>NẶNG</b> đơn vị tính là: <b style='color: #f8c206;'>"+trong_luong+"</b>kg");
            var type = 1; 
        }else {
            var resultM3 = chieu_dai * chieu_rong * chieu_cao / 1000000;
            var type = 2;
            $(".tra-cuoc-item-page span.message").removeClass('success').addClass('success').empty().html("Kiện hàng <b style='color: red;'>NHẸ</b> đơn vị tính là: <b style='color: #f8c206;'>"+resultM3+"</b>m<sup>3</sup>");
        }
        access = true;
    }
    if(noi_nhan_hang && noi_gui_hang && access == true) {
        $("#ajax_loader").show();
        $.ajax({
           type: 'POST',
           url: '/tra-cuoc-process',
           data: {
              noi_gui_hang: noi_gui_hang,
              noi_nhan_hang: noi_nhan_hang,
              type: type,
              trong_luong: trong_luong,
              dai: chieu_dai,
              rong: chieu_rong,
              cao: chieu_cao
           },
           dataType: 'JSON',
           success: function(data) {
             if(data) {
                if($(".tra-cuoc-item-page table tr td.result-item").length > 0) {
                    $(".tra-cuoc-item-page td.result-item").each(function(index, value) {
                         $(".tra-cuoc-item-page td.result-item-"+index).empty().html(data.list[index]);
                    });
                }
                $("span.message.success").empty().html(data.msg);
             }
           },
           complete: function() {
              $("#ajax_loader").hide();	
           }
        });
    }
}
function don_hang_xac_nhan_dat_hang(order_id) {
    $("#ajax_loader").show();
    $.ajax({
       type: 'POST',
       url: '/xac-nhan-dat-hang-process',
       data: {
          order_id: order_id
       },
       dataType: 'HTML',
       success: function(data) {
          if(data) {
             var html = '<a class="uk-modal-close uk-close"></a>'+data;
			 $('#my_modal .uk-modal-dialog').empty().append(html);
			 $("#my_modal").addClass('modal-small');
			 var modal = UIkit.modal("#my_modal").show();
             
             if($("div").hasClass('uu-dai-dat-coc') === true) {
                $(".uu-dai-dat-coc span").click(function() {
                   if($(this).hasClass('active') === true) {
                      $(this).removeClass('active');
                   } else {
                      $(this).addClass('active');  
                   } 
                });
             }
             
          }
       },
       complete: function() {
          $("#ajax_loader").hide();
       }
    });
}
function khach_hang_register_validate(field) {
    var fieldReplace = $("form.don-hang-dang-ky-form .form-item-"+field+" input.form-text").val();
    $("form.don-hang-dang-ky-form .form-item-"+field+" input.form-text").val(fieldReplace.replace(/ /g,""));
}
function don_hang_nap_tien_number_format() {
    var nap_tien = $(".nap-them-vi-dien-tu input.nap-tien").val();
    if(parseInt(nap_tien) > 1000) {
        $(".nap-them-vi-dien-tu input.nap-tien").val(number_format(parseInt(nap_tien),0,'',','));
    }
}
function don_hang_dia_chi_giao_hang_api_result(dia_chi_id) {
    $("#ajax_loader").show();
    $.ajax({
       type: 'POST',
       url:'/don-hang-dia-chi-giao-hang-api-process',
       data: {
          dia_chi_id: dia_chi_id,
          kienhang_id: $('#item-giao-hang-hidden').val()
       },
       dataType: 'HTML',
       success: function(data) {
          if(data) {
             $(".don-vi-van-chuyen").empty().html(data);
             // selected
             $(".don-vi-van-chuyen span").click(function() {
               $(".don-vi-van-chuyen span").removeClass('selected');
               $(this).addClass('selected'); 
            });
            $(".don-vi-van-chuyen table tr td input").bind('click', function(e){
                if($(this).is(':checked')) {
                    $('span.full-item').removeClass('selected');
                    $("span.doi-vi-van-chuyen-item-"+$(this).data('parent')).removeClass('selected').addClass('selected');  
                    $(".don-vi-van-chuyen table tr td input").prop("checked",false);
                    $(this).attr("checked", true);               
                }
            });
            $("span.full-item").bind('click', function(e){
                if(parseInt($(this).data('item')) == 1000 || parseInt($(this).data('item')) == 1001 || parseInt($(this).data('item')) == 1002) {
                    $(this).removeClass('selected');
                    return false;
                }else {
                    $(".don-vi-van-chuyen table tr td input").prop("checked",false);
                }
            });
            if($(".dia-chi-giao-hang-item ul li.shipping-address-item-"+dia_chi_id).hasClass('selected') === false) {
                $(".dia-chi-giao-hang-item ul li").removeClass('selected');
                $(".dia-chi-giao-hang-item ul li.shipping-address-item-"+dia_chi_id).addClass('selected');
            }
          }
       },
       complete: function() {
          $("#ajax_loader").hide();
       } 
    });
}
function don_hang_don_vi_van_chuyen(don_vi_van_chuyen_id) {
    
}
function don_hang_kien_hang_kiem_hang_xac_nhan_chuyen(kien_hang_id) {
    var dataHtml = '<form class="kien-hang-kiem-hang-xac-nhan-chuyen"> \
                        <p>Click vào nút "Xác nhận chuyển hàng" để hoàn tất</p> \
                        <button class="btn btn-submit">Xác nhận chuyển</button> \
                    </form>';
    $('#my_modal .uk-modal-dialog').empty().append(dataHtml);
	$("#my_modal").addClass('modal-small');
	var modal = UIkit.modal("#my_modal").show();
    $("form.kien-hang-kiem-hang-xac-nhan-chuyen button").click(function() {
       $("#ajax_loader").show();
       $.ajax({
          type: 'POST',
          url: '/kien-hang/kiem-dem-confirm-save',
          data: {
             kien_hang_id: kien_hang_id
          },
          dataType: 'JSON',
          succes: function(data) {
             if(parseInt(data.status) == 1) {
                window.location.reload(true);
             }
          },
          complete: function() {
             $("#ajax_loader").hide();
          }
       });     
       return false; 
    });
}
function don_hang_ky_gui_ma_van_don_delete(kien_hang_id, ma_van_don) {
    if(confirm('Bạn chắc chắn muốn xóa mã vận đơn: '+ma_van_don+' này ?')) {
        $("#ajax_loader").show();
        $.ajax({
           type: 'POST',
           url: '/my-account/ma-van-don/delete',
           data: {
              kien_hang_id: kien_hang_id
           },
           success: function(data) {
              if(parseInt(data.status) == 1) {
                 alert('Đã xóa thành công');
                 window.location.reload(true);
              } else {
                 alert('Bạn không thể xóa mã vận đơn này');
              }
           },
           complete: function() {
              $("#ajax_loader").hide();
           }
        });
    }
}
function khach_hang_sale_timecountdown(id_class, date_time) {
    var countDownDate = new Date(""+date_time+"").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        $("#"+id_class+"").empty().html("<span><b>"+days + "</b>ngày </span><span><b>" + hours + "</b>giờ </span><span><b>" + minutes + "</b>phút </span><span><b>" + seconds + "</b>giây </span>");
        if (distance < 0) {
            clearInterval(x);
            $("#"+id_class+"").empty();
        }
    }, 1000);
}
function validatePhone(txtPhone) {
    var a = document.getElementById(txtPhone).value;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}