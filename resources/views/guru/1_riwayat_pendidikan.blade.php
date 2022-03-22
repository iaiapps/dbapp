<div id="3" class="tabcontent">
    <br />
    <div class="clearfix">
        <h4 class="float-start">Riwayat Pendidikan</h4>
        <a class="btn btn-primary float-end" href="{{ route('guru.tambah_pendidikan') }}">Tambah</a>
    </div>

    <hr class="text-primary" />
    <table class="table">
        <thead>
            <tr>
                <th>Jenjang Pendidikan</th>
                <th>Gelar Akademik</th>
                <th>Nama Sekolah/lembaga</th>
                <th>Fakultas</th>
                <th>Tahun Masuk</th>
                <th>Tahun Lulus</th>
                <th>NISN/NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item->education as $item)
                <tr>
                    <td>{{ $item->jenjang_pendidikan }}</td>
                    <td>{{ $item->gelar_akademik }}</td>
                    <td>{{ $item->nama_satuan_pendidikan }}</td>
                    <td>{{ $item->fakultas }}</td>
                    <td>{{ $item->tahun_masuk }}</td>
                    <td>{{ $item->tahun_lulus }}</td>
                    <td>{{ $item->nim }}</td>
                    <form action="{{ route('guru.hapus_pendidikan', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="submit" onClick="confirm('Yakin mau di hapus?')" class="btn btn-primary">
                                <span><i class="las la-trash"></i></span>
                            </button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
