 <!-- Modal -->
 <div class="modal fade" id="importSiswa" tabindex="99" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Import Siswa</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('admin.import_students') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3 mb-3">
                         <input type="file" name="file" class="form-control" required>
                     </div>
                     <button type="submit" class="btn btn-primary w-100">Import</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
