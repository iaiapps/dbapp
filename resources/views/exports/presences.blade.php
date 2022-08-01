<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Total Kehadiran</th>
            <th>Telat</th>
            <th>Sakit</th>
            <th>Izin</th>
        </tr>
    </thead>
    <tbody>
        @php
            // dd($presences);
        @endphp
        @foreach ($presences as $presence)
            @php
                $tanggal = DB::table('presences')
                    ->where('teacher_id', $presence->teacher->id)
                    ->whereMonth('created_at', $month)
                    ->orderBy('id', 'DESC')
                    ->first();
                // dd($pre);
                
                // convert ke bulan dan tahun
                Carbon\Carbon::setLocale('id');
                $date = Carbon\Carbon::parse($tanggal->created_at);
                $bulan = $date->month;
                $tahun = $date->year;
                
                // lalu cari jumlah sakitnya id ini
                $sakit = DB::table('presences')
                    ->where('teacher_id', $presence->teacher->id)
                    ->whereMonth('created_at', $bulan)
                    ->whereYear('created_at', $tahun)
                    ->where('note', 'sakit')
                    ->count();
                // ->get();
                
                $izin = DB::table('presences')
                    ->where('teacher_id', $presence->teacher->id)
                    ->whereMonth('created_at', $bulan)
                    ->whereYear('created_at', $tahun)
                    ->where('note', 'ijin')
                    ->count();
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $presence->teacher->nama }}</td>
                <td>{{ $presence->total_kehadiran - $izin - $sakit }}</td>
                <td>{{ $presence->total_telat }}</td>
                <td>{{ $sakit }}</td>
                <td>{{ $izin }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
