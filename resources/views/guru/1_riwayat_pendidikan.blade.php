<div id="3" class="tabcontent">
    <br />
    <div class="clearfix">
        <h4 class="float-left">Riwayat Pendidikan</h4>
        <a class="btn btn-primary float-right" href="{{ route('guru.tambah_pendidikan') }}">Tambah</a>
    </div>

    <hr class="text-primary" />
    <table class="table table-striped tab-content" id="3">
        <thead>
            <tr>
                <th>Bidang Studi</th>
                <th>jenjang pendidikan</th>
                <th>Gelar Akademik</th>
                <th>nama Satuan pendidikan formal</th>
                <th>Tahun masuk</th>
                <th>Tahun Lulus</th>
                <th>NIM</th>
                <th>Semester</th>
                <th>IPK</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item->education as $item)
                <tr>
                    <td>{{ $item->bidang_study }}</td>
                    <td>{{ $item->jenjang_pendidikan }}</td>
                    <td>{{ $item->gelar_akademik }}</td>
                    <td>{{ $item->nama_satuan_pendidikan }}</td>
                    <td>{{ $item->tahun_masuk }}</td>
                    <td>{{ $item->tahun_lulus }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->semester }}</td>
                    <td>{{ $item->ipk }}</td>
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
