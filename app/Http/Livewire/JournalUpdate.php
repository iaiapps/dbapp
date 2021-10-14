<?php

namespace App\Http\Livewire;

use App\Models\Journal;
use Livewire\Component;

class JournalUpdate extends Component
{
    public $date;
    public $activity;
    public $jam;
    public $jml;
    public $journalId;

    protected $listeners = [
        'getJournal' => 'showJournal'
    ];
    public function render()
    {
        return view('livewire.journal-update');
    }
    public function showJournal($journal)
    {
        $this->date = $journal['date'];
        $this->activity = $journal['activity'];
        $this->jam = $journal['jam'];
        $this->journalId = $journal['id'];
    }
    public function update()
    {
        if ($this->journalId) {
            $journal = Journal::find($this->journalId);
            $this->validate([
                'date' => 'required',
                'activity' => 'required|max:255',
                'jam' => 'required',
            ]);
            $journal->update([
                'date' => $this->date,
                'activity' => $this->activity,
                'jam' => $this->jam,
            ]);
            $this->resetInput();
            $this->emit('journalUpdated', $journal);
        }
    }
    public function resetInput()
    {
        $this->data = null;
        $this->activity = null;
        $this->jam = null;
    }
}
