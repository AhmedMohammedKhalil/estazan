<?php

namespace App\Http\Livewire\Teacher\Complaint;

use Livewire\Component;
use App\Models\Complaint;

class Edit extends Component
{
    public $complaint_text,$complaint;

    public function mount($complaint_id) {
        $this->complaint = Complaint::find($complaint_id);
        $this->complaint_text = $this->complaint->complaint_text;
    }
    protected $rules = [
        'complaint_text' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function edit() {
        $validatedData = $this->validate();
        $this->complaint->update($validatedData);
        session()->flash('message', "complaint Updated Successfully.");
        return redirect()->route('teacher.complaints.index');
    }

    public function render()
    {
        return view('livewire.teacher.complaint.edit');
    }
}
