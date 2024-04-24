<?php

namespace App\Http\Livewire\Admin\Complaint;

use Livewire\Component;
use App\Models\Complaint;

class EditReply extends Component
{

    public $reply,$complaint;

    public function mount($complaint_id) {
        $this->complaint = Complaint::find($complaint_id);
        $this->reply = $this->complaint->reply;
    }

    protected $rules = [
        'reply' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function edit() {
        $validatedData = $this->validate();
        $data = [
            'replyed_at' => now(),
        ];
        $validatedData = array_merge($validatedData,$data);
        $this->complaint->update($validatedData);
        session()->flash('message', "Reply Updated Successfully.");
        return redirect()->route('admin.complaints.index');
    }
    public function render()
    {
        return view('livewire.admin.complaint.edit-reply');
    }
}
