<div class="card rounded">
    <nav class="navbar bg-light navbar-light">
        <a class="navbar-brand mx-3" href="#">Jumlah Total Jam Jurnal Guru</a>
        <span class="btn btn-outline-dark mx-3">{{ $jmljam }}</span>
    </nav>
    <div class="container-fluid" style="padding-top: 10px; ">
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
                            <td>{{ $date->isoFormat('dddd') }}</td>
                            <td>{{ $date->isoFormat('D') }}</td>
                            <td>{{ $date->isoFormat('MMM Y') }}</td>
                            <td>{{ $item->activity }}</td>
                            <td>{{ $item->jam }}</td>
                            <td>
                                <button wire:click="getJournal({{ $item->id }})" class="btn btn-primary btn-sm"><i
                                        class="las la-search-plus"></i> Edit</button>
                                <button wire:click="destroy({{ $item->id }})" class="btn btn-danger btn-sm"><i
                                        class="las la-trash"></i> Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (session()->has('message'))
            <script>
                tata.success('Berhasil', 'Update journal')
            </script>
        @endif
    </div>
</div>
