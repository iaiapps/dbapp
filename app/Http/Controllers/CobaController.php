<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ExtracurricularCategory;
use App\Models\ExtracurricularData;

class CobaController extends Controller
{
//    public function countEkskul()
//    {
//        $data = DB::table('extracurricular_data')
//        ->select([
//            DB::raw('count(*) as jumlah'),
//            DB::raw('extra_id(*) as extra'),
//        ])
//        ->groupBy('extra')
//        ->get();
//        dd($data);
//    }
   public function hitungEkskul()
   {
       // cari jumlah tiap ekskul yang di input
      //  $getCount = DB::table('extracurricular_data')
      //   ->select('extra_id', DB::raw('count(*) as total'))
      //   ->groupBy('extra_id')
      //   ->get()
      //  ->pluck('total','extra_id');

       $getCount =ExtracurricularData::groupBy('extra_id')
       ->having(DB::raw('count(extra_id)'), '<=', 2)
       ->get('extra_id'); // you may replace this with get()/select()
       
      //  dd($getCount);
       // $getCategory = ExtracurricularCategory::whereIn('id',$getCount)->get();
       // dd($getCategory);

       return view('coba', compact('getCount'));
   }
   public function selectCategoryWhereNotIn()
   {
      // $ekskul_show = ExtracurricularCategory::whereIn('id',)
   }

}
