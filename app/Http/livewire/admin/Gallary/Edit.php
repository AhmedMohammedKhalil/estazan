<?php

namespace App\Http\Livewire\Admin\Gallary;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Helper\ImageStore;

class Edit extends Component
{
    use WithFileUploads;
    public $image,$gallary;

    public function mount($gallary)
    {
        $this->gallary = $gallary;
        $this->image = $this->gallary->image;
    }

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }

    public function edit()
    {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->gallary->update(array_merge(array('image' => $imagename)));
            ImageStore::store('img/gallaries/'.$this->gallary->id,$this->image,$imagename);
            File::deleteDirectory(public_path('livewire-tmp'));
            session()->flash('message', "تم إتمام العملية بنجاح");
            return redirect()->route('admin.gallaries.index');
    }


    public function render()
    {
        return view('livewire.admin.gallary.edit');
    }
}
