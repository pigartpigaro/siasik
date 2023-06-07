<?php

namespace App\Http\Controllers\Master\Akun;

use App\Models\Master\Akun\Kepmendagri50;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kepmendagri50Controller extends Controller
{
    public function getakun50(){
        $data=Kepmendagri50::get();
        return response()->json($data);
    }

    public function postakun50(Request $request){
        $data=Kepmendagri50::create([
            'uraian'=> $request->uraian,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'kode5'=> $request->kode5,
            'kode6'=> $request->kode6,            
        ]);

        return response()->json($data);
    }
    public function updateakun50(Request $request){
        $data=Kepmendagri50::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'uraian'=> $request->uraian,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'kode5'=> $request->kode5,
            'kode6'=> $request->kode6,
        ]);

        return response()->json('Success');
    }

    public function deleteakun50(Request $request){
        
        $data=Kepmendagri50::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
