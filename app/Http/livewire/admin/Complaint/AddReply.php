<?php

namespace App\Http\Livewire\Admin\Complaint;

use Livewire\Component;
use App\Models\Complaint;

class AddReply extends Component
{

    public $reply,$complaint;

    public function mount($complaint_id) {
        $this->complaint = Complaint::find($complaint_id);
    }

    protected $rules = [
        'reply' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function add() {
        $validatedData = $this->validate();
        $data = [
            'replyed_at' => now(),
        ];
        $validatedData = array_merge($validatedData,$data);
       $this->complaint->update($validatedData);
        session()->flash('message', "Reply Added Successfully.");
        return redirect()->route('admin.complaints.index');
    }
    public function render()
    {
        return view('livewire.admin.complaint.add-reply');
    }
}
