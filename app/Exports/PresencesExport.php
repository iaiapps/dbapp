<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Presence;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Http\Controllers\PresenceController;

class PresencesExport implements FromView
{
    private $month;

    public function __construct($month)
    {
        $this->month = $month;
    }
    public function view(): View
    {
        $monthExport = Carbon::createFromFormat('Y-m', $this->month);
        $bln = Carbon::createFromFormat('Y-m', $this->month)->format('m');
        $presences = new PresenceController();
        $presences = $presences->getPresencesWhereMonth($monthExport);
        return view('exports.presences', [
            'presences' => $presences,
            'month' => $bln
        ]);
    }
}
