<?php

namespace App\Http\Livewire\Admin\Announcement;

use App\Models\Teacher;
use Livewire\Component;
use App\Models\Announcement;

class Edit extends Component
{

    public $content,$teacher_id,$announcement,$teachers;

    public function mount($announcement_id) {
        $this->announcement = Announcement::find($announcement_id);
        $this->content = $this->announcement->content;
        $this->teacher_id = $this->announcement->teacher_id;
    }

    protected $rules = [
        'content' => ['required'],
        'teacher_id' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function edit() {
        $validatedData = $this->validate();
        $this->announcement->update($validatedData);
        session()->flash('message', "Announcement Updated Successfully.");
        return redirect()->route('admin.announcements.index');
    }
    public function render()
    {
        $this->teachers = Teacher::all();
        return view('livewire.admin.announcement.edit');
    }
}
