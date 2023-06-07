<?php

namespace App\Http\Controllers\Master\Akun;

use App\Models\Master\Akun\PSAP13;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PSAP13Controller extends Controller
{
    public function getakun13(){
        $data=PSAP13::get();
        return response()->json($data);
    }

    public function postakun13(Request $request){
        $data=PSAP13::create([
            'uraian'=> $request->uraian,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
        ]);

        return response()->json($data);
    }
    public function updateakun13(Request $request){
        $data=PSAP13::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'uraian'=> $request->uraian,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
        ]);

        return response()->json('Success');
    }

    public function deleteakun13(Request $request){
        
        $data=PSAP13::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
