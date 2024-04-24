<?php

namespace App\Http\Livewire\Admin\Announcement;

use App\Models\Announcement;
use App\Models\Teacher;
use Livewire\Component;

class Add extends Component
{

    public $content,$teacher_id,$teachers;

    protected $rules = [
        'content' => ['required'],
        'teacher_id' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function add() {
        $validatedData = $this->validate();
        Announcement::create($validatedData);
        session()->flash('message', "Announcement Added Successfully.");
        return redirect()->route('admin.announcements.index');
    }

    public function render()
    {
        $this->teachers = Teacher::all();
        $this->teacher_id = Teacher::limit(1)->first()->id;
        return view('livewire.admin.announcement.add');
    }
}
