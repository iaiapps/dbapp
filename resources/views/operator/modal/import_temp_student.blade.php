 <div id="openModalImportTempStudent" class="modalDialog">
     <div> <a href="#close" title="Close" class="close">X</a>
         <h4>Import TempStudent</h4>
         <form action="{{ route('admin.import_temp_students') }}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
                 <input type="file" name="file" class="form-control" required>
             </div>
             <button type="submit" class="btn btn-primary">Import</button>
         </form>
     </div>
 </div>
