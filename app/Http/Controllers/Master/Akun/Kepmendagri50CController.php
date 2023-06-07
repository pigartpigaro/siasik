<?php

namespace App\Http\Controllers\Master\Akun;

use App\Models\Master\Akun\Kepmendagri50_c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kepmendagri50CController extends Controller
{
    public function get50c(){
        $data=Kepmendagri50_c::get();
        return response()->json($data);
    }

    public function post50c(Request $request){
        $data=Kepmendagri50_c::create([
            'urusan'=> $request->urusan,
            'bidang_urusan'=> $request->bidang_urusan,
            'program'=> $request->program,
            'kegiatan'=> $request->kegiatan,
            'subkegiatan'=> $request->subkegiatan,
            'nomenklatur'=> $request->nomenklatur,            
        ]);

        return response()->json($data);
    }
    public function update50c(Request $request){
        $data=Kepmendagri50_c::find($request->id);
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

    public function delete50c(Request $request){
        
        $data=Kepmendagri50_c::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
