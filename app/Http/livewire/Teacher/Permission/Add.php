<?php

namespace App\Http\Livewire\Teacher\Permission;

use App\Models\Permission;
use Livewire\Component;

class Add extends Component
{

    public $reason;

    protected $rules = [
        'reason' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function add() {
        $validatedData = $this->validate();
        $data = [
            'teacher_id' => auth('teacher')->user()->id,
        ];
        $validatedData = array_merge($validatedData,$data);
        Permission::create($validatedData);
        session()->flash('message', "Permission Added Successfully.");
        return redirect()->route('teacher.permissions.index');
    }

    public function render()
    {
        return view('livewire.teacher.permission.add');
    }
}
