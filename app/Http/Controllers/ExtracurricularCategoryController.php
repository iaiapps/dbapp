<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtracurricularCategory;
use Illuminate\Support\Facades\Response;

class ExtracurricularCategoryController extends Controller
{
    
    public function index()
    {

    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
    }

    public function show(ExtracurricularCategory $extracurricularCategory)
    {
        //
    }

    public function edit(ExtracurricularCategory $extracurricularCategory)
    {
        //
    }

    public function update(Request $request, ExtracurricularCategory $extracurricularCategory)
    {
        //
    }

    public function destroy(ExtracurricularCategory $extracurricularCategory)
    {
        //
    }
}
