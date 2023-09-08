<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('client.dashboard.content.dashboard', compact('user'));
    }

    public function thong_tin_ca_nhan()
    {
        $user = Auth::user();
        return view('client.dashboard.content.thongtincanhan', compact('user'));
    }
}
