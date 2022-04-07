<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
// use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    
    public function getInventory()
    {
        $collection = Inventory::orderBy('id', 'DESC')->get();
        return view('inventarisbos.inventaris',compact('collection'));
    }
    function detailInventory($id){
        $item = Inventory::find($id);
        return view('inventarisbos.details',compact('item'));
    }
    
    public function storeInventory(Request $request)
    {
        $this->_validate();
        $data = $request->all();
        $file = $request->file('dokumen');
        $nama = time() . $file->getClientOriginalName();
        $data['dokumen']=$nama;
        $file->move(\base_path() ."/public/img_inventaris", $nama);
        Inventory::create($data);
        return redirect()->route('inventaris.index')->with('success','Berhasil menambah data inventaris');
    }
    
    function editInventory($id)
    {
        $item = Inventory::find($id);
        return view('inventarisbos.edit',compact('item'));
    }
    
    public function updateInventory(Request $request, $id)
    { 
        Inventory::find($id)->update($request->all());
        return redirect()->route('inventaris.index');
    }
    
    function hapusInventory($id)
    {
        $file = Inventory::find($id, 'dokumen');
        // dd($file);
        unlink(\base_path() ."/public/img_inventaris/".$file->dokumen);
        Inventory::where('id', $id)->delete();
        
        return redirect()->route('inventaris.index')->with('success', 'Berhasil dihapus');
    }
    private function _validate()
    {
        return request()->validate([
            'nama_barang' => 'required',
            'tanggal_pembelian' => 'required',
            'kuantitas' => 'required',
            'pembuat' => 'required',
            'harga' => 'required',
            'sumber_dana' => 'required',
            'tanggal_penerimaan' => 'required',
            'tempat_pembelian' => 'required',
            'kondisi_barang' => 'required',
            'dokumen' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }
    
}
