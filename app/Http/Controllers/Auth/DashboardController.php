<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\QRCode;

class DashboardController extends Controller
{
    public function index(){
        $totalCategory = Category::count();
        $totalQr_code = QRCode::count();
        return view('dashboard', compact('totalCategory','totalQr_code'));
    }
}
