<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Journal;
use Livewire\Component;
use App\Models\Presence;
use App\Exports\JournalExport;
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
    public function remake($id)
    {
        Presence::create([
            'teacher_id' => $id,
            'date' => date("d/m/y"),
            'time_in' => Carbon::now()->subMinutes(10)->format('H:i:s'),
            'is_late' => false,
            'note' => 'Tepat waktu',
            'created_at' => Carbon::now()->subMinutes(10)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->subMinutes(10)->format('Y-m-d H:i:s'),
        ]);
    }
}
