<?php

namespace App\Http\Livewire\Teacher\Permission;

use App\Models\Permission;
use Livewire\Component;

class Edit extends Component
{


    public $reason,$permission;

    public function mount($permission_id) {
        $this->permission = Permission::find($permission_id);
        $this->reason = $this->permission->reason;
    }
    protected $rules = [
        'reason' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function edit() {
        $validatedData = $this->validate();
        $this->permission->update($validatedData);
        session()->flash('message', "Permission Updated Successfully.");
        return redirect()->route('teacher.permissions.index');
    }

    public function render()
    {
        return view('livewire.teacher.permission.edit');
    }
}
