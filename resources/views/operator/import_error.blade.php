 @if (isset($errors) && $errors->any)
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger">
             {{ $error }}
         </div>
     @endforeach
 @endif

 @if (session()->has('failures'))
     <table class="table table-danger" style="background-color: #e74c3c; color:white">
         <tr>
             <th>Baris ke</th>
             <th>Apa</th>
             <th>Keterangan</th>
             <th>Nilai</th>
         </tr>
         @foreach (session()->get('failures') as $validation)
             <tr>
                 <td>{{ $validation->row() }}</td>
                 <td>{{ $validation->attribute() }}</td>
                 <td>
                     <ul>
                         @foreach ($validation->errors() as $e)
                             <li>{{ $e }}</li>
                         @endforeach
                     </ul>
                 </td>
                 <td>
                     {{ $validation->values()[$validation->attribute()] }}
                 </td>
             </tr>
         @endforeach
     </table>
 @endif
