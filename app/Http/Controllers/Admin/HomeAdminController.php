<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeAdminController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }

    public function customerAll()
    {
        $user = Auth::user();
        $data = User::orderBy('id', 'asc')->get();
//        dd($data);
        return view('admin.customer.list', compact('data', 'user'));
    }
}
