<?php

namespace App\Http\Controllers\Master\Akun;

use App\Models\Master\Akun\Permendagri79;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Permendagri79Controller extends Controller
{
    public function getakun79(){
        $data=Permendagri79::get();
        return response()->json($data);
    }

    public function postakun79(Request $request){
        $data=Permendagri79::create([
            'uraian'=> $request->uraian,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
           
        ]);

        return response()->json($data);
    }
    public function updateakun79(Request $request){
        $data=Permendagri79::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'uraian'=> $request->uraian,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,

        ]);

        return response()->json('Success');
    }

    public function deleteakun79(Request $request){
        
        $data=Permendagri79::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
