<?php

namespace App\Http\Controllers\Master\Akun;

use App\Models\Master\Akun\Permendagri108;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Permendagri108Controller extends Controller
{
    public function getakun108(){
        $data=Permendagri108::get();
        return response()->json($data);
    }

    public function postakun108(Request $request){
        $data=Permendagri108::create([
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'kode5'=> $request->kode5,
            'kode6'=> $request->kode6,
            'kode7'=> $request->kode7,
            'uraian'=> $request->uraian,
            // 'blud_akun'=> $request->blud_akun,
            // 'blud_kelompok'=> $request->blud_kelompok,
            // 'blud_jenis'=> $request->blud_jenis,
            // 'blud_objectx'=> $request->blud_objectx,
            // 'blud_rincian'=> $request->blud_rincian,
            // 'blud_subrincian'=> $request->blud_subrincian,
            // 'blud_uraian'=> $request->blud_uraian,            
        ]);

        return response()->json($data);
    }
    public function updateakun108(Request $request){
        $data=Permendagri108::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'kode5'=> $request->kode5,
            'kode6'=> $request->kode6,
            'kode7'=> $request->kode7,
            'uraian'=> $request->uraian,
            // 'blud_akun'=> $request->blud_akun,
            // 'blud_kelompok'=> $request->blud_kelompok,
            // 'blud_jenis'=> $request->blud_jenis,
            // 'blud_objectx'=> $request->blud_objectx,
            // 'blud_rincian'=> $request->blud_rincian,
            // 'blud_subrincian'=> $request->blud_subrincian,
            // 'blud_uraian'=> $request->blud_uraian,
        ]);

        return response()->json('Success');
    }

    public function deleteakun108(Request $request){
        
        $data=Permendagri108::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
