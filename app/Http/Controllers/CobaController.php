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
       $getCount =ExtracurricularData::groupBy('extra_id')
       ->having(DB::raw('count(extra_id)'), '>=', 3)
       ->pluck('extra_id'); // you may replace this with get()/select()
       
      //  dd($getCount);
       $getCategory = ExtracurricularCategory::where('id', '!=', $getCount)->get();
       dd($getCategory);

       return view('coba', compact('getCount'));
   }
   public function selectCategoryWhereNotIn()
   {
      // $ekskul_show = ExtracurricularCategory::whereIn('id',)
   }

}
