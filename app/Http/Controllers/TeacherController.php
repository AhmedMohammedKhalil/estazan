<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function showLoginForm() {
        return view('teachers.login');
    }


    public function showRegisterForm() {
        return view('teachers.register');
    }


    public function profile() {
        return view('teachers.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('teachers.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('teachers.changePassword',['page_name' => 'تعديل كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('teacher')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
