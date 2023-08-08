<?php

namespace App\Http\Controllers\Master\Organisasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\Organisasi\Pihak3;

class Pihak3Controller extends Controller
{
    public function getpihak3(){
        $data=Pihak3::get();
        return response()->json($data);
    }

    public function postpihak3(Request $request){
        $data=Pihak3::create([
            'kode'=> $request->kode,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'telepon'=> $request->telepon,
            'npwp'=> $request->npwp,
            'norek'=> $request->norek,
            'cp'=> $request->cp,
            'bank'=> $request->bank,
            'hidden'=> $request->hidden,
            'kodemapingrs'=> $request->kodemapingrs,
            'namasuplier'=> $request->namasuplier,
        ]);

        return response()->json($data);
    }
    public function updatepihak3(Request $request){
        $data=Pihak3::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'kode'=> $request->kode,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'telepon'=> $request->telepon,
            'npwp'=> $request->npwp,
            'norek'=> $request->norek,
            'cp'=> $request->cp,
            'bank'=> $request->bank,
            'hidden'=> $request->hidden,
            'kodemapingrs'=> $request->kodemapingrs,
            'namasuplier'=> $request->namasuplier,
        ]);

        return response()->json('Success');
    }

    public function deletepihak3(Request $request){
        
        $data=Pihak3::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
