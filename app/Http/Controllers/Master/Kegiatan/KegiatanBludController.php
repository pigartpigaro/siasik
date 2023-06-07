<?php

namespace App\Http\Controllers\Master\Kegiatan;

use App\Http\Controllers\Controller;
use App\Models\Master\Kegiatan\KegiatanBLUD;
use Illuminate\Http\Request;

class KegiatanBludController extends Controller
{
    public function getkblud(){
        $data=KegiatanBLUD::get();
        return response()->json($data);
    }

    public function postkblud(Request $request){
        $data=KegiatanBLUD::create([
            'nomenklatur'=> $request->nomenklatur,
            'organisasi_kode1'=> $request->organisasi_kode1,
            'organisasi_kode2'=> $request->organisasi_kode2,
            'organisasi_kode3'=> $request->organisasi_kode3,
            'organisasi_nama'=> $request->organisasi_nama,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'kode5'=> $request->kode5,
            'uraian'=> $request->uraian,
            'flag'=> $request->flag,
            'tahun'=> $request->tahun,           
        ]);

        return response()->json($data);
    }
    public function updatekblud(Request $request){
        $data=KegiatanBLUD::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'nomenklatur'=> $request->nomenklatur,
            'organisasi_kode1'=> $request->organisasi_kode1,
            'organisasi_kode2'=> $request->organisasi_kode2,
            'organisasi_kode3'=> $request->organisasi_kode3,
            'organisasi_nama'=> $request->organisasi_nama,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'kode5'=> $request->kode5,
            'uraian'=> $request->uraian,
            'flag'=> $request->flag,
            'tahun'=> $request->tahun,
        ]);

        return response()->json('Success');
    }

    public function deletekblud(Request $request){
        
        $data=KegiatanBLUD::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
