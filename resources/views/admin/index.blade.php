<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    @include('admin.layout.css')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @include('admin.layout.aside')

    <!-- nav bar __ search for __ name login -->



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div id='content'>
            @include('admin.layout.navbar')

            @yield('admin_content')
            <!-- Main Content -->
        </div>

        <!-- End of Main Content -->

        <!-- chat realtime -->


{{--        <div class="wrapper" id="chat_realtime" style="position: fixed; right: 20px; bottom: 400px; z-index: 999; height: 100px; ">--}}
{{--            <iframe src="{{URL::to('resources/views/chat_app_php/login.php')}}" frameborder="0" height="400px"></iframe>--}}
{{--            <button class="btn" id="hidden_chat">Ẩn</button>--}}
{{--        </div>--}}
{{--        <!--  -->--}}

{{--        <!--  -->--}}
{{--        <div class="circle" id="clickableDiv">--}}
{{--            <img src="uploads/brand/chat_realtime.png" alt="Your Image">--}}
{{--        </div>--}}

{{--        <script>--}}
{{--            document.addEventListener("DOMContentLoaded", function() {--}}
{{--                const chatRealtimeDiv = document.getElementById("chat_realtime");--}}
{{--                const clickableDiv = document.getElementById("clickableDiv");--}}
{{--                const circle = document.getElementById("clickableDiv");--}}

{{--                clickableDiv.addEventListener("click", function() {--}}
{{--                    // Thực hiện hành động bạn muốn khi div được nhấp vào--}}
{{--                    // alert("Bạn đã nhấp vào div hình tròn!");--}}
{{--                    chatRealtimeDiv.style.display = "block";--}}
{{--                    circle.style.display = "none";--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}

{{--        <script>--}}
{{--            document.addEventListener("DOMContentLoaded", function() {--}}
{{--                const hidden_chat = document.getElementById("hidden_chat");--}}
{{--                const chatRealtimeDiv = document.getElementById("chat_realtime");--}}
{{--                const circle = document.getElementById("clickableDiv");--}}

{{--                hidden_chat.addEventListener("click", function() {--}}
{{--                    // Toggle lớp "hidden" trên div "chat_realtime"--}}
{{--                    chatRealtimeDiv.style.display = "none";--}}
{{--                    circle.style.display = "block";--}}

{{--                });--}}
{{--            });--}}
{{--        </script>--}}


        <!--  -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white" style="margin-top: 200px">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Nguyen Van Thanh - 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <!-- <a class="btn btn-primary" href="{{route('logout')}}">Logout</a> -->
                <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>

            </div>
        </div>
    </div>
</div>

@include('admin.layout.js')
</body>

</html>
