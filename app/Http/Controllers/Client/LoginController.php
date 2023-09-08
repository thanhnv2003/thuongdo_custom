<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        if ($request->isMethod('POST')){
            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'email' => 'required|email',
            ]);
            if ($validator->fails()) {
                if (count($validator->messages()->all()) < 1){
                    toast($validator->messages()->all()[0], 'error');
                }else{
                    $html = "<ul style='list-style: none;'>";
                    foreach($validator->messages()->all() as $error) {
                        $html .= "<li>$error</li>";
                    }
                    $html .= "</ul>";
                    Alert::html('Lỗi!', $html, 'error');
                }
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
//                if ($request->remember_me == 1){
//                    Auth::login($user, true);
//                }
                if ($user['role'] == 2){
                    toast("Đăng nhập thành công! Admin ID: ".$user['id'], 'success');
                    return redirect()->route('admin_home');
                }else{
                    toast("Đăng nhập thành công! Xin chào ".$user['name'], 'success');
                    return redirect()->route('client_home');
                }
            } else {
                //đăng nhập không thành công
                toast("Đăng nhập không thành công. Sai mật khẩu hoặc email!", 'error');
                return redirect()->route('auth_login');
            }
        }

        return view('client.auth.login');
    }
    public function register(Request $request){
        if ($request->isMethod('POST')){
            $params = $request->except('_token', 'agree', 'op');

            $validator = Validator::make($params, [
                'name' => 'required',
                'password' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required'
            ]);
            if ($validator->fails()) {
                if (count($validator->messages()->all()) < 1){
                    toast($validator->messages()->all()[0], 'error');
                }else{
                    $html = "<ul style='list-style: none;'>";
                    foreach($validator->messages()->all() as $error) {
                        $html .= "<li>$error</li>";
                    }
                    $html .= "</ul>";
                    Alert::html('Lỗi!', $html, 'error');
                }
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            $params['password'] = Hash::make($request->password);
            $result = User::create($params);

            if ($result){
                toast('Đăng ký tài khoản thành công', 'success');
                return redirect()->route('auth_login');
            }
            }
        return view('client.auth.register');
    }

    public function logout()
    {
        Auth::logout();
        toast('Đăng xuất thành công', 'success');
        return redirect()->route('client_home');
    }

    public function changePass(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('POST')){
            $params = $request->all();
            $validator = Validator::make($params,[
                'current_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);

            if ($validator->fails()) {
                if (count($validator->messages()->all()) < 1){
                    toast($validator->messages()->all()[0], 'error');
                }else{
                    $html = "<ul style='list-style: none;'>";
                    foreach($validator->messages()->all() as $error) {
                        $html .= "<li>$error</li>";
                    }
                    $html .= "</ul>";
                    Alert::html('Lỗi!', $html, 'error');
                }
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }


            if (Hash::check($request->current_password, $user['password'])) {
                $value = User::find($user['id']);
                $value['password'] = Hash::make($request->new_password);
                $value->save();
                toast('Mật khẩu đã được thay đổi thành công.', 'success');
                return redirect()->route('cus_home');
            }else{
                toast('Mật khẩu hiện tại không đúng.', 'error');
                return back();
            }
        }

        return view('client.dashboard.content.thaydoimatkhau', compact('user'));
    }

}
