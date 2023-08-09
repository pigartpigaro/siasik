<?php

namespace App\Http\Controllers\Master\Organisasi;

use App\Models\Master\Organisasi\ProfilRSUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilRSUDController extends Controller
{
    public function getprofil(){
        $data=ProfilRSUD::get();
        return response()->json($data);
    }

    public function postprofil(Request $request){
        $data=ProfilRSUD::create([
            'koders'=> $request->koders,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'telepon'=> $request->telepon,
            'fax'=> $request->fax,
            'email'=> $request->email,
            'provinsi'=> $request->provinsi,
            'jenispemerintahandaerah'=> $request->jenispemerintahandaerah,
            'kota'=> $request->kota,         
        ]);

        return response()->json($data);
    }
    public function updateprofil(Request $request){
        $data=ProfilRSUD::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'koders'=> $request->koders,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'telepon'=> $request->telepon,
            'fax'=> $request->fax,
            'email'=> $request->email,
            'provinsi'=> $request->provinsi,
            'jenispemerintahandaerah'=> $request->jenispemerintahandaerah,
            'kota'=> $request->kota,
        ]);

        return response()->json('Success');
    }

    public function deleteprofil(Request $request){
        
        $data=ProfilRSUD::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
