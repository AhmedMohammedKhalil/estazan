<?php

namespace App\Http\Livewire\Teacher;

use App\Models\teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $confirm_password, $phone, $civil_number;


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'civil_number' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:12','max:12','unique:teachers,civil_number'],
        'email'   => 'required|email|unique:teachers,email',
        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],

    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];


    public function register(){
        $validatedData = $this->validate();
        $data = array_merge(
            $validatedData,
            ['password' => Hash::make($this->password)]
        );
        //dd($data);
        Teacher::create($data);
        if(Auth::guard('teacher')->attempt(['email' => $this->email , 'password' => $this->password])){
            session()->flash('message', "You are Login successful.");
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.teacher.register');
    }
}
