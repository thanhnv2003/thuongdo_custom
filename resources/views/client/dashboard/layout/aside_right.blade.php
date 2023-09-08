<div class="right-dashboard-bar block-clear"><span class="info-header-nabar">
                    <span class="avatar">
                        <form id="upload-avatar" method="post" enctype="multipart/form-data">
                            <input type="file" id="myfile" class="btn-hd-upload" name="uploadFileAvatar" />
                        </form>
                        <img width="100" height="100" src="{{asset('')}}uploads/brand/no-avatar.jpg" />
                        <em>Thay đổi<br /> avatar</em>
                    </span>
                </span>
    <h4></h4>


    <a href="">
        <span class="process-level block-both"><i class="yellow">0</i> / <i>0</i></span>
    </a>
    <div class="level block-both">
        <a href="">
        </a>
    </div>
    <p>
        <span>Email</span> <br />
        <a href="">
            {{$user['email']}}
        </a>
    </p>
    <p>
        <span>Điện thoại</span> <br />
        <a href="">
            0{{$user['phone']}}
        </a>
    </p>

    <p class="info-edit">
        <a href="{{route('cus_info')}}" class="edit">Chỉnh sửa thông tin</a>
    </p>
    <div class="lich-lam-viec">
        <span class="dashboard-icon"></span>
        <b>8h00 - 17h30 hằng ngày</b>
    </div>
</div>
