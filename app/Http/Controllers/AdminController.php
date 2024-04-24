<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use App\Models\Message;
use App\Models\Service;
use App\Models\Sliders;
use App\Models\Teacher;
use App\Models\Complaint;
use App\Models\Permission;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admins.login');
    }

    public function dashboard() {

        $page_name = 'الإحصائيات';
        $sliders_count = Sliders::all()->count();
        $services_count = Service::all()->count();
        $gallaries_count = Gallary::all()->count();
        $messages_count = Message::all()->count();
        $teachers_count = Teacher::all()->count();
        $announcements_count = Announcement::all()->count();
        $complaints_count = Complaint::all()->count();
        $permissions_count = Permission::all()->count();
        return view('admins.dashboard',compact(array_keys(get_defined_vars())));
    }

    public function profile() {
        return view('admins.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('admins.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('admins.changePassword',['page_name' => 'تغيير كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
