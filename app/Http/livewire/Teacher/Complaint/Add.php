<?php

namespace App\Http\Livewire\Teacher\Complaint;

use App\Models\Complaint;
use Livewire\Component;

class Add extends Component
{

    public $complaint_text;

    protected $rules = [
        'complaint_text' => ['required'],
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
        Complaint::create($validatedData);
        session()->flash('message', "Complaint Added Successfully.");
        return redirect()->route('teacher.complaints.index');
    }
    public function render()
    {
        return view('livewire.teacher.complaint.add');
    }
}
