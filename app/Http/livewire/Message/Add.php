<?php

namespace App\Http\Livewire\Message;

use App\Models\Message;
use Livewire\Component;

class Add extends Component
{

    public $name,$email,$message;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required'],
        'message' => ['required'],

    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
    ];

    public function add() {
        $validatedData = $this->validate();
        Message::create($validatedData);
        session()->flash('message', "Message Added Successfully.");
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.message.add');
    }
}
