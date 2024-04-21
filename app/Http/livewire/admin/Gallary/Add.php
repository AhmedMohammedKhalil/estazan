<?php

namespace App\Http\Livewire\Admin\Gallary;

use Livewire\Component;
use App\Helper\ImageStore;
use App\Models\Gallary;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;


class Add extends Component
{
    use WithFileUploads;

    public $image;
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا'
    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }

    public function add()
    {
        $this->updatedImage();
        $imagename = $this->image->getClientOriginalName();
        $gallary = Gallary::create(array('image' => $imagename));
        ImageStore::store('assets/images/galleries/'.$gallary->id,$this->image,$imagename);
        File::deleteDirectory(public_path('livewire-tmp'));
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.gallaries.index');
    }

    public function render()
    {
        return view('livewire.admin.gallary.add');
    }
}
