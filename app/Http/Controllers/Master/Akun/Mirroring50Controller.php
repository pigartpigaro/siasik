<?php

namespace App\Http\Controllers\Master\Akun;

use App\Models\Master\Akun\Mirroring50;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mirroring50Controller extends Controller
{
    public function getm50(){
        $data=Mirroring50::get();
        return response()->json($data);
    }

    public function postm50(Request $request){
        $data=Mirroring50::create([
            'akun'=> $request->akun,
            'kelompok'=> $request->kelompok,
            'jenis'=> $request->jenis,
            'objectx'=> $request->objectx,
            'rincian'=> $request->rincian,
            'subrincian'=> $request->subrincian,
            'uraian'=> $request->uraian,
            'kode_791'=> $request->kode_791,
            'kode_792'=> $request->kode_792,
            'kode_793'=> $request->kode_793,            
            'uraian_79'=> $request->uraian_79,
            'kode_psap131'=> $request->kode_psap131,
            'kode_psap132'=> $request->kode_psap132,
            'kode_psap133'=> $request->kode_psap133,
            'uraian_psap13'=> $request->uraian_psap13,
        ]);

        return response()->json($data);
    }
    public function updatem50(Request $request){
        $data=Mirroring50::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'akun'=> $request->akun,
            'kelompok'=> $request->kelompok,
            'jenis'=> $request->jenis,
            'objectx'=> $request->objectx,
            'rincian'=> $request->rincian,
            'subrincian'=> $request->subrincian,
            'uraian'=> $request->uraian,
            'kode_791'=> $request->kode_791,
            'kode_792'=> $request->kode_792,
            'kode_793'=> $request->kode_793,            
            'uraian_79'=> $request->uraian_79,
            'kode_psap131'=> $request->kode_psap131,
            'kode_psap132'=> $request->kode_psap132,
            'kode_psap133'=> $request->kode_psap133,
            'uraian_psap13'=> $request->uraian_psap13,
        ]);

        return response()->json('Success');
    }

    public function deletem50(Request $request){
        
        $data=Mirroring50::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
