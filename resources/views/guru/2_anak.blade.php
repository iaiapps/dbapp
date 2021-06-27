 <div id="4" class="tabcontent">
     <br />
     <div class="clearfix">
         <h4 class="float-left">Anak</h4>
         <a class="btn btn-primary float-right" href="{{ route('guru.tambah_anak') }}">Tambah</a>
     </div>
     <hr class="text-primary" />
     <table class="table table-striped tab-content" id="4">
         <thead>
             <tr>
                 <th>Nama</th>
                 <th>Status</th>
                 <th>Jenjang Pendidikan</th>
                 <th>NISN</th>
                 <th>JK</th>
                 <th>tempat lahir</th>
                 <th>tanggal lahir</th>
                 <th>tahun masuk</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($item->children as $anak)
                 <tr>
                     <td>{{ $anak->nama }}</td>
                     <td>{{ $anak->status }}</td>
                     <td>{{ $anak->jenjang_pendidikan }}</td>
                     <td>{{ $anak->nisn }}</td>
                     <td>{{ $anak->jk }}</td>
                     <td>{{ $anak->tempat_lahir }}</td>
                     <td>{{ $anak->tanggal_lahir }}</td>
                     <td>{{ $anak->tahun_masuk }}</td>
                 </tr>
             @endforeach
         </tbody>
     </table>
 </div>
