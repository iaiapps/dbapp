<?php

namespace App\Http\Livewire;

use App\Models\Journal;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class JournalCreate extends Component
{
    public $date;
    public $activity;
    public $jam;
    public $jml;

    public function render()
    {
        $jml = Journal::where('email', Auth::user()->email)->sum('jam');
        return view('livewire.journal-create');
    }

    public function store()
    {
        $this->validate([
            'date' => 'required',
            'activity' => 'required|max:255',
            'jam' => 'required',
        ]);
        $journal = Journal::create([
            'email' => Auth::user()->email,
            'date' => $this->date,
            'activity' => $this->activity,
            'jam' => $this->jam,
        ]);

        $this->resetInput();
        $this->emit('journalStored', $journal);
    }
    public function resetInput()
    {
        $this->activity = null;
        $this->jam = null;
        $this->jml = 111;
        // $this->date = null;
    }
}
