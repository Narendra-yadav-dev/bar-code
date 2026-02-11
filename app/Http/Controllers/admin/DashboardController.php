<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\QRCode;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategory = Category::count();
        $totalQr_code = QRCode::count();
        return view('admin.dashboard', compact('totalCategory', 'totalQr_code'));
    }
    public function changePassword()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.change-password', compact('user'));
    }
    public function changePasswordPost(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);
        $admin = Auth::user();
        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->withErrors([
                'old_password' => 'Old password is incorrect'
            ]);
        }
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return back()->with('success', 'Password changed successfully!');
    }
}
