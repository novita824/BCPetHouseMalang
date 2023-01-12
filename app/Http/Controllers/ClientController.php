<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Throwable;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    

    public function clientcreate(Request $request){
        $data = [
            'namahewan'     => $request->namahewan,
            'namapemilik'   => $request->email,
            'alamat'        => $request->alamat,
            'petcargo'      => $request->sediapetcargo,
            'kandang'       => $request->sediakandang,
            'tanggal'       => $request->tanggalpenitipan,
            'jenispaket'    => $request->jenispaket,
            'berapakalimakan'   => $request->berapakalimakan,
            'pakan'             => $request->pakan,
            'riwayatvaksin'     => $request->riwayatvaksin,
            'kontak'            => $request->kontak,
            'riwayatpenyakit'   => $request->riwayatpenyakit
        ];

        \App\Models\ClientPenitipan::updateOrCreate(['id' => $request->id], $data);
        
        if($request->id){
            return redirect()->route('Penitipan.index');
        }
        return redirect()->route('home');
    }

    public function editclientcreate(Request $request, $id){
        $penitipan = \App\Models\ClientPenitipan::find($id);

        return view('Penitipan.editclient', compact('penitipan'));
    }

    public function detailclientcreate(Request $request, $id){
        $penitipan = \App\Models\ClientPenitipan::find($id);

        return view('Penitipan.detail', compact('penitipan'));
    }

    public function deleteclientcreate(Request $request, $id){
        $penitipan = \App\Models\ClientPenitipan::destroy($id);
        return redirect()->route('Penitipan.index');
    }


    public function clientcreategromming(Request $request){
        $data = [
            'namahewan'     => $request->namahewan,
            'nama'   => $request->nama,
            'alamat'        => $request->alamat,
            'jenishewan'    => $request->jenishewan,
            'umur'          => $request->umur,
            'notelp'        => $request->notelp,
            'tipegrooming'  => $request->tipegrooming,
            'sediapetcargo' => $request->sediapetcargo
        ];

        \App\Models\ClientGromming::updateOrCreate(['id' => $request->id], $data);
         if($request->id){
            return redirect()->route('Grooming.index');
        }
        return redirect()->route('home');
    }

    public function editclientgromming(Request $request, $id){
        $gromming = \App\Models\ClientGromming::find($id);

        return view('Grooming.editclient', compact('gromming'));
    }


    public function deleteclientgromming(Request $request, $id){
        $penitipan = \App\Models\ClientGromming::destroy($id);
        return redirect()->route('Grooming.index');
    }
}
