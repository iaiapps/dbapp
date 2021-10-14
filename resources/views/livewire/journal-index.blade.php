<div>
    <nav class="navbar bg-primary navbar-dark justify-content-between">
        <a class="btn btn-outline-light mx-3" href="{{ url()->previous() }}">Kembali</a>
        <a class="navbar-brand mx-3" href="#">Jurnal Guru</a>
        <button class="btn btn-outline-light mx-3">{{$jmljam}}</button>
      </nav>
      <div class="container-fluid" style="padding-top: 10px; ">
      {{-- <div class="container-fluid" style="padding-top: 65px; "> --}}
        
    @if ($updateMode)
    @livewire('journal-update')
    @else
    <livewire:journal-create>    
    @endif

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Bulan</th>
                    <th>Tugas kedinasan</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
             
                @foreach ($journals as $item)
                    <tr>
                        @php
                            $date = \Carbon\Carbon::parse($item->date);
                        @endphp
                        <td>{{ $date->isoFormat('dddd')}}</td>
                        <td>{{ $date->isoFormat('D')}}</td>
                        <td>{{ $date->isoFormat('MMM Y')}}</td>
                        <td>{{ $item->activity }}</td>
                        <td>{{ $item->jam}}</td>
                        <td>
                            <button wire:click="getJournal({{$item->id}})" class="btn btn-primary btn-sm"><i
                                    class="las la-search-plus"></i> Edit</button>
                            <button wire:click="destroy({{$item->id}})" class="btn btn-danger btn-sm"><i class="las la-trash"></i> Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ url('dbapps') }}/js/tata.js"></script>
    @if (session()->has('message'))
        <script>tata.success('Berhasil','Update journal')</script>
    @endif
    
</div>
