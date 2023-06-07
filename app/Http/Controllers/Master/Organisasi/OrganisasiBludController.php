<?php

namespace App\Http\Controllers\Master\Organisasi;

use App\Http\Controllers\Controller;
use App\Models\Master\Organisasi\OrganisasiBLUD;
use Illuminate\Http\Request;

class OrganisasiBludController extends Controller
{
    public function getorg(){
        $data=OrganisasiBLUD::get();
        return response()->json($data);
    }

    public function postorg(Request $request){
        $data=OrganisasiBLUD::create([
            'nama'=> $request->nama,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'hidden'=> $request->hidden,         
        ]);

        return response()->json($data);
    }
    public function updateorg(Request $request){
        $data=OrganisasiBLUD::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }        
        $data->update([
            'nama'=> $request->nama,
            'kode1'=> $request->kode1,
            'kode2'=> $request->kode2,
            'kode3'=> $request->kode3,
            'kode4'=> $request->kode4,
            'hidden'=> $request->hidden,
        ]);

        return response()->json('Success');
    }

    public function deleteorg(Request $request){
        
        $data=OrganisasiBLUD::find($request->id);
        if(!$data){
            return response()->json('NotValid',500);
        }
        $data->delete();

        return response()->json('Success');
    }
}
