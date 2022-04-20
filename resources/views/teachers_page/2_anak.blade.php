 <div id="4" class="tabcontent">
     <br />
     <div class="clearfix">
         <h4 class="float-start">Anak</h4>
         <a class="btn btn-success float-end" href="{{ route('teachers.tambah_anak') }}">Tambah</a>
     </div>
     <hr class="text-primary" />
     <div class="table-responsive">


         <table class="table tab-content" id="4">
             <thead>
                 <tr>
                     <th>Nama</th>
                     {{-- <th>Status</th> --}}
                     <th>Jenjang Pendidikan</th>
                     {{-- <th>NISN</th> --}}
                     <th>JK</th>
                     <th>tempat lahir</th>
                     <th>tanggal lahir</th>
                     {{-- <th>tahun masuk</th> --}}
                     <th>Aksi</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($item->children as $anak)
                     <tr>
                         <td>{{ $anak->nama }}</td>
                         {{-- <td>{{ $anak->status }}</td> --}}
                         <td>{{ $anak->jenjang_pendidikan }}</td>
                         {{-- <td>{{ $anak->nisn }}</td> --}}
                         <td>{{ $anak->jk }}</td>
                         <td>{{ $anak->tempat_lahir }}</td>
                         <td>{{ $anak->tanggal_lahir }}</td>
                         {{-- <td>{{ $anak->tahun_masuk }}</td> --}}
                         <form action="{{ route('teachers.hapus_anak', $item->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <td>
                                 <button type="submit" class="btn btn-success">
                                     <span><i class="las la-trash"></i></span>
                                 </button>
                             </td>
                         </form>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </div>
