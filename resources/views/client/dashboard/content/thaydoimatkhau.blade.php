@extends('client.dashboard.index')
@section('content_user')
    <div class="content-page-center">
        <form class="thanh-vien-thay-doi-mat-khau-form uk-form" action="{{route('cus_pass')}}" method="POST"
               accept-charset="UTF-8">
            @csrf
            <div>
                <div class="ttcn-wrap-basic">
                    <div class="ttcn-wrap-title">THAY ĐỔI MẬT KHẨU</div>
                    <div class="ttcn-wrap-content">
                        <div class="form-item form-type-password form-item-current-pass">
                            <label for="edit-current-pass">Mật khẩu hiện tại <span class="form-required"
                                                                                   title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input type="password" id="edit-current-pass" name="current_password" size="60" maxlength="128"
                                   class="form-text required" />
                        </div>
                        <div class="form-item form-type-password form-item-pass">
                            <label for="edit-pass">Mật khẩu mới <span class="form-required"
                                                                      title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input type="password" id="edit-pass" name="new_password" size="60" maxlength="128"
                                   class="form-text required" />
                        </div>
                        <div class="form-item form-type-password form-item-re-pass">
                            <label for="edit-re-pass">Nhập lại mật khẩu mới <span class="form-required"
                                                                                  title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input type="password" id="edit-re-pass" name="new_password_confirmation" size="60" maxlength="128"
                                   class="form-text required" />
                        </div>
                        <input class="uk-button uk-button-primary form-submit" type="submit" id="edit-submit" name="op"
                               value="Lưu thay đổi" />
                    </div>
                </div>
{{--                <input type="hidden" name="form_build_id" value="form-MTSvrQ-Oaa292aPq7baK4ghPowR4_ycIZAGg1-aftJY" />--}}
{{--                <input type="hidden" name="form_token" value="25Wf8ImREIIOPFJn_-kdCucpXMGnk38aYGMjzUROPu4" />--}}
{{--                <input type="hidden" name="form_id" value="don_hang_thanh_vien_mat_khau_form" />--}}
            </div>
        </form>
    </div>

    </div>
@endsection
