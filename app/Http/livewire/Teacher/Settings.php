<?php

namespace App\Http\Livewire\Teacher;

use App\Helper\ImageStore;
use App\Models\teacher;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $image, $phone='', $civil_number='',$teacher_id='';


    public function mount() {
        $this->teacher_id = Auth::guard('teacher')->user()->id;
        $this->name = Auth::guard('teacher')->user()->name;
        $this->email = Auth::guard('teacher')->user()->email;
        $this->phone = Auth::guard('teacher')->user()->phone;
        $this->civil_number = Auth::guard('teacher')->user()->civil_number;

    }

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


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
    ];

    public function updatedImage()
    {
            $validatedata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,
                [ 'email'   => ['required','email',"unique:teachers,email,".$this->teacher_id],
                 'civil_number'   => ['required','string','regex:/^([0-9\s\-\+\(\)]*)$/','min:12','max:12',"unique:teachers,civil_number,".$this->teacher_id],

        ]));
        if(!$this->image)
            teacher::whereId($this->teacher_id)->update($validatedata);
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            teacher::whereId($this->teacher_id)->update(array_merge($validatedata,['image' => $imagename]));
            ImageStore::store('img/teachers/'.$this->teacher_id,$this->image,$imagename);
            File::deleteDirectory(public_path('livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('teacher.profile');
    }

    public function render()
    {
        return view('livewire.teacher.settings');
    }
}
