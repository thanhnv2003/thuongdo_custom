<!-- Custom fonts for this template-->
<link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

<link href="{{asset('https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css')}}" rel="stylesheet" />

<!-- font awesome -->
<script src="https://kit.fontawesome.com/bf8f778c02.js" crossorigin="anonymous"></script>

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- datepicker -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />



<style>
    .input_qty {
        width: 50px;
    }

    .circle {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        position: fixed;
        z-index: 999;
        right: 25px;
        bottom: 220px;
        cursor: pointer;
    }

    .circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #chat_realtime {
        display: none
    }
</style>

<script>
    $(document).ready(function() {
        $('.order_details').change(function() {
            var order_id = $(this).children(":selected").attr("id");
            var payment_status = $(this).val();
            var _token = $('input[name="_token"]').val();
            // Gửi yêu cầu AJAX chỉ với dữ liệu liên quan đến order_id và payment_status
            $.ajax({
                url: "{{url('/update-order-quantity')}}",
                type: 'POST',
                data: {
                    _token: _token,
                    order_id: order_id,
                    payment_status: payment_status,
                },
                success: function(data) {
                    alert('Thay đổi tình trạng đơn hàng thành công!');
                    location.reload();
                },
                error: function(xhr, textStatus, errorThrown) {
                    alert('Đã xảy ra lỗi khi cập nhật tình trạng đơn hàng!');
                    console.log(xhr.responseText);
                }
            });
        });
    });


    $(document).ready(function() {

        $('.update_quantity_order').click(function() {
            var order_product_id = $(this).data('product_id');
            var order_qty = $('.order_qty_' + order_product_id).val();
            var order_code = $('.order_code_input').val();
            var _token = $('input[name="_token"]').val();

            // alert(order_product_id);
            // alert(order_qty);
            // alert(order_code);


            $.ajax({
                url: "{{url('/update-qty')}}",
                type: 'POST',
                data: {
                    _token: _token,
                    order_product_id: order_product_id,
                    order_qty: order_qty,
                    order_code: order_code,

                },
                success: function(data) {
                    alert('Cập nhật thành công!');
                    location.reload();
                }
            });
        });
    });

    // biểu đồ
    $(document).ready(function() {

        // Initialize chart with default data
        var myfirstchart1 = new Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            // The name of the data record attribute that contains x-values.
            xkey: 'period',
            ykeys: ['order', 'sales', 'profit', 'quantity'], // Tên các thuộc tính y trong đối tượng JSON
            labels: ['Tổng đơn hàng', 'Tổng tiền bán', 'Lợi nhuận', 'Số lượng sản phẩm bán']
        });

        // Get data for chart from server and populate chart
        {{--var _token = $('input[name="_token"]').val();--}}
        {{--$.ajax({--}}
        {{--    url: "{{url('/get-30-days')}}",--}}
        {{--    method: "POST",--}}
        {{--    dataType: "JSON",--}}
        {{--    data: {--}}
        {{--        _token: _token--}}
        {{--    },--}}
        {{--    success: function(data) {--}}
        {{--        myfirstchart1.setData(data);--}}
        {{--    }--}}
        {{--});--}}

        // Attach click event handler to the filter button
        $('#btn-dashboard-filter').click(function(event) {
            var from_date = $('#datepicker1').val();
            var to_date = $('#datepicker2').val();

            $.ajax({
                url: "{{url('/filter-by-date')}}",
                method: "POST",
                dataType: "JSON",
                data: {
                    from_date: from_date,
                    to_date: to_date,
                    _token: _token
                },
                success: function(data) {
                    myfirstchart1.setData(data);
                }
            });
        });
    });

    // --------------------

    // cập nhật số lượng trong báo cáo tồn kho
    $(document).ready(function() {
        $('.edit_qty_in_report').click(function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            var currentQty = $(this).data('product-qty');
            // var qtyToAdd = $('#product-qty').val();

            var qtyToAdd = $(this).closest('tr').find('#product-qty').val();
            var newQty = parseInt(currentQty) + parseInt(qtyToAdd);

            $.ajax({
                url: "{{url('/import-product-qty')}}",
                type: 'POST',
                data: {
                    product_id: productId,
                    product_qty_import: qtyToAdd,
                    _token: '{{csrf_token()}}'
                },
                success: function(response) {
                    // Handle success response here
                    // Redirect to report page
                    alert('Đã cập nhật số lượng thành công!');
                    window.location.href = "{{url('report ')}}";
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle error response here
                }
            });
        });
    });

    // ----------------------

    $(document).ready(function() {
        $('.order_details_ky_gui').change(function() {
            var donkygui_id = $(this).children(":selected").attr("id");
            var payment_status = $(this).val();
            // alert(payment_status + " " + donkygui_id);

            var _token = $('input[name="_token"]').val();
            // Gửi yêu cầu AJAX chỉ với dữ liệu liên quan đến order_id và payment_status
            $.ajax({
                url: "{{url('/update-order-quantity-ky-gui')}}",
                type: 'POST',
                data: {
                    _token: _token,
                    donkygui_id: donkygui_id,
                    payment_status: payment_status,
                },
                success: function(data) {
                    alert('Thay đổi tình trạng đơn hàng thành công!');
                    location.reload();
                },
                error: function(xhr, textStatus, errorThrown) {
                    alert('Đã xảy ra lỗi khi cập nhật tình trạng đơn hàng!');
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

