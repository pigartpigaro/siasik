<?php

namespace App\Http\Controllers\Master\Organisasi;

use App\Models\Master\Organisasi\NamaPTK;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NamaPTKController extends Controller
{
    public function getorg(){
        $data=NamaPTK::get();
        return response()->json($data);
    }

    public function postorg(Request $request){
        $data=NamaPTK::create([
            'nip'=> $request->nip,
            'nama'=> $request->nama,
            'flag'=> $request->flag,
            'bagian'=> $request->bagian,
            'kodeBagian'=> $request->kodeBagian,
            'tahun'=> $request->tahun,
            'alias'=> $request->alias,
        ]);

        return response()->json($data);
    }
    public function updateorg(Request $request){
        $data=NamaPTK::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'nip'=> $request->nip,
            'nama'=> $request->nama,
            'flag'=> $request->flag,
            'bagian'=> $request->bagian,
            'kodeBagian'=> $request->kodeBagian,
            'tahun'=> $request->tahun,
            'alias'=> $request->alias,
        ]);

        return response()->json('Success');
    }

    public function deleteorg(Request $request){
        
        $data=NamaPTK::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
