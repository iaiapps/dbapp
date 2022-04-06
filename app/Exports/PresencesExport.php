<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Presence;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Http\Controllers\PresenceController;

class PresencesExport implements FromView
{
   
    public function view(): View
    {
        $presences = new PresenceController();
        $presences = $presences->getPresencesWhereMonth(Carbon::now());
        return view('exports.presences', [
            'presences' => $presences
        ]);
    }
}