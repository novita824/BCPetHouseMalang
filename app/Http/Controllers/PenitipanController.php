<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Throwable;
use Illuminate\Support\Facades\DB;

class PenitipanController extends Controller
{
    public function index(Request $request)
    {
        $penitipan=Penitipan::all();
        $client = \App\Models\ClientPenitipan::all();
        return view('Penitipan.index', ['penitipan' => $penitipan, 'client' =>$client]);


        // $pagination = 5;
        // $Penitipan = Penitipan::when($request->keyword, function ($query) use ($request) {
        //     $query
        //         ->where('nopenitipan', 'like', "%{$request->keyword}%")
        //         ->orWhere('pemilik', 'like', "%{$request->keyword}%")
        //         ->orWhere('tipe', 'like', "%{$request->keyword}%")
        //         ->orWhere('pj', 'like', "%{$request->keyword}%")
        //         ->orWhere('harga', 'like', "%{$request->keyword}%")
        //         ->orWhere('hargapokok', 'like', "%{$request->keyword}%")
        //         ->orWhere('status', 'like', "%{$request->keyword}%");
        // })->orderBy('Id')->paginate($pagination);

        // return view('Penitipan.penitipanindex', compact('Penitipan'))
        //     ->with('i', (request()->input('page', 1) - 1) * $pagination);
        
        // // mengambil data dari table pegawai
    	// $Penitipan = DB::table('penitipan')->get();
 
    	// // mengirim data pegawai ke view index
    	// return view('index',['pegawai' => $Penitipan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Penitipan.create');
    }

    public function edit($idpenitipan)
    {
        // $this->authorize('admin');
        $penitipan = Penitipan::find($idpenitipan);

        return view('Penitipan.edit', compact('penitipan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nopenitipan' => 'required',
            'pemilik' => 'required',
            'tipe' => 'required',
            'pj' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'status' => 'required',
        ]);
        Penitipan::create($request->all());

        return redirect()->route('Penitipan.index')->with('succes','Data Berhasil di Input');
    }

    public function update(Request $request)
    {
        $idpenitipan = $request->id;
        $request->validate([
            'nopenitipan' => 'required',
            'pemilik' => 'required',
            'tipe' => 'required',
            'pj' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'status' => 'required',
        ]);
        $Penitipan = Penitipan::where('idpenitipan', $idpenitipan)->first();
        $Penitipan->update([
            'nopenitipan' => $request->get('nopenitipan'),
            'pemilik' => $request->get('pemilik'),
            'tipe' => $request->get('tipe'),
            'pj' => $request->get('pj'),
            'harga' => $request->get('harga'),
            'hargapokok' => $request->get('hargapokok'),
            'status' => $request->get('status'),
        ]);

        return redirect()->route('Penitipan.index')
            ->with('success', 'Penitipan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpenitipan)
    {
        // $this->authorize('admin');
        try {
            Penitipan::find($idpenitipan)->delete();
            return redirect()->route('Penitipan.index')
                ->with('success', 'Penitipan Berhasil Dihapus');
        } catch (Throwable $error) {
            report($error);
            return redirect()->route('Penitipan.index')
                ->with('errors', 'Mohon Maaf Data Penitipan Belum Bisa Dihapus. Coba Lagi Nanti');
        }
    }



    public function clientcreate(Request $request){
        dd($request->all());
    }
}
