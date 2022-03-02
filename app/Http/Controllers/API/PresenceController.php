<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PresenceResource;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PresenceController extends Controller
{
    public function index()
    {
        $data = Presence::get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'teacher_id'=>'required',
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors());       
        }
        
        // $presence = Presence::create([
        //     'teacher_id'=>$request->teacher_id,
        //     'time_in'=>$request->time_in,
        //     'time_out'=>$request->time_out,
        //     'late'=>$request->late,
        //     'overtime'=>$request->overtime,
        //     'note'=>$request->note,
        //  ]);

        $presence = Presence::create($request->all());
        
        return response()->json(['Presence created successfully.', new PresenceResource($presence)]);
    }

    public function show($id)
    {
        $presence = Presence::find($id);
        if (is_null($presence)) {
            return response()->json('Data not found', 404); 
        }
        return response()->json([new PresenceResource($presence)]);
    }


    public function update(Request $request,$id)
    {
        $presence=Presence::find($id);
        $presence->update($request->all());
        return $presence;
        
        return response()->json(['updated successfully.', new PresenceResource($presence)]);
    }

    public function destroy(Presence $presence)
    {
        $presence->delete();

        return response()->json('Presence deleted successfully');
    }
}
