<?php

namespace App\Http\Livewire\Teacher;

use App\Models\teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $password='', $confirm_password='',$teacher_id='';


    public function mount() {
        $this->teacher_id = Auth::guard('teacher')->user()->id;
    }


    protected $rules = [

        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'same' => 'لابد ان يكون الباسورد متطابق',
    ];

    public function edit() {

        $validatedata = $this->validate();
        $data =['password' => Hash::make($this->password)];

        Teacher::whereId($this->teacher_id)->update($data);
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('teacher.profile');
    }

    public function render()
    {
        return view('livewire.teacher.change-password');
    }
}
