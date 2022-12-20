<?php

namespace App\Http\Controllers;

use App\Models\Grooming;
use App\Models\Penitipan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class GroomingController extends Controller
{
    public function index(Request $request)
    {
        $pegawai = DB::table('grooming')->get();
        $pagination = 5;
        $grooming = Grooming::when($request->keyword, function ($query) use ($request) {
            $query
                ->where('id', 'like', "%{$request->keyword}%")
                ->orWhere('pemilik', 'like', "%{$request->keyword}%")
                ->orWhere('tipe', 'like', "%{$request->keyword}%")
                ->orWhere('pj', 'like', "%{$request->keyword}%")
                ->orWhere('harga', 'like', "%{$request->keyword}%")
                ->orWhere('hargapokok', 'like', "%{$request->keyword}%")
                ->orWhere('status', 'like', "%{$request->keyword}%");
        })->orderBy('id')->paginate($pagination);

        return view('Grooming.groomingindex', compact('grooming'))
            ->with('i', (request()->input('page', 1) - 1) * $pagination);
    }

    public function create()
    {
        //
        return view('Grooming.groomingcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'pemilik' => 'required',
            'tipe' => 'required',
            'pj' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'status' => 'required',
        ]);
        Grooming::create($request->all());

        return redirect()->route('Grooming.groomingindex')->with('succes','Data Berhasil di Input');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $this->authorize('admin');
        $grooming = grooming::find($id);
        return view('Grooming.groominganedit', compact('grooming'));
    }

    /*  *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pemilik' => 'required',
            'tipe' => 'required',
            'pj' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'status' => 'required',
        ]);
        $Grooming = Penitipan::where('id', $id)->first();
        $Grooming->update([
            'pemilik' => $request->get('pemilik'),
            'tipe' => $request->get('tipe'),
            'pj' => $request->get('pj'),
            'harga' => $request->get('harga'),
            'hargapokok' => $request->get('hargapokok'),
            'status' => $request->get('status')
        ]);

        return redirect()->route('grooming.index')
            ->with('success', 'Grooming Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        try {
            Grooming::find($id)->delete();
            return redirect()->route('penitipan.index')
                ->with('success', 'Grooming Berhasil Dihapus');
        } catch (Throwable $error) {
            report($error);
            return redirect()->route('grooming.index')
                ->with('errors', 'Mohon Maaf Data Penitipan Belum Bisa Dihapus. Coba Lagi Nanti');
        }
    }
}
