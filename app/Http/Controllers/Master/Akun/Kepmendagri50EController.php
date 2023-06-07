<?php

namespace App\Http\Controllers\Master\Akun;

use App\Models\Master\Akun\Kepmendagri50_e;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kepmendagri50EController extends Controller
{
    public function get50e(){
        $data=Kepmendagri50_e::get();
        return response()->json($data);
    }

    public function post50e(Request $request){
        $data=Kepmendagri50_e::create([
            'fungsi'=> $request->fungsi,
            'subfungsi'=> $request->subfungsi,
            'urusan'=> $request->urusan,
            'bid_urusan'=> $request->bid_urusan,
            'program'=> $request->program,
            'kegiatan'=> $request->kegiatan,
            'uraian'=> $request->uraian,            
        ]);

        return response()->json($data);
    }
    public function update50e(Request $request){
        $data=Kepmendagri50_e::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'fungsi'=> $request->fungsi,
            'subfungsi'=> $request->subfungsi,
            'urusan'=> $request->urusan,
            'bid_urusan'=> $request->bid_urusan,
            'program'=> $request->program,
            'kegiatan'=> $request->kegiatan,
            'uraian'=> $request->uraian,
        ]);

        return response()->json('Success');
    }

    public function delete50e(Request $request){
        
        $data=Kepmendagri50_e::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
