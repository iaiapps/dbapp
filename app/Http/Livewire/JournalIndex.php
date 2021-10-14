<?php

namespace App\Http\Livewire;

use App\Exports\JournalExport;
use App\Models\Journal;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class JournalIndex extends Component
{

    public $updateMode = false;

    protected $listeners = [
        'journalStored' => 'handleStored',
        'journalUpdated' => 'handleUpdated'
    ];
    public function render()
    {
        return view(
            'livewire.journal-index',
            [
                'journals' => Journal::where('email', Auth::user()->email)->orderBy('date', 'ASC')->get(),
                'jmljam' => Journal::where('email', Auth::user()->email)->sum('jam'),
            ]
        );
    }
    public function getJournal($id)
    {
        $this->updateMode = true;
        $journal = Journal::find($id);
        $this->emit('getJournal', $journal);
    }

    public function destroy($id)
    {
        $journal = Journal::find($id);
        $journal->delete();
        session()->flash('message', 'Jurnal berhasi dihapus');
    }

    public function handleStored($journal)
    {
        $date = \Carbon\Carbon::parse($journal['date']);
        session()->flash('message', 'Jurnal ' . $date->isoFormat('dddd, D MMM Y') . ' berhasil ditambah');
    }
    public function handleUpdated($journal)
    {
        $date = \Carbon\Carbon::parse($journal['date']);
        session()->flash('message', 'Jurnal ' . $date->isoFormat('dddd, D MMM Y') . ' berhasil diedit');
    }
    public function exportExcel()
    {
        return Excel::download(new JournalExport, 'jurnal.xls');
    }
}
