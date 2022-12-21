<?php

namespace App\Http\Controllers;

use App\Models\Grooming;
use App\Models\Penitipan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class GroomingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $grooming=Grooming::all();
        return view('Grooming.index', compact('grooming'));
        // $grooming = DB::table('grooming')->get();
        // $paginate = Grooming::orderBy('idgrooming', 'asc')->paginate(5);
        // return view('Grooming.index', ['grooming' => $grooming, 'paginate' =>$paginate]);
        // $grooming = DB::table('grooming')->get();
        // $pagination = 10;
        // $grooming = Grooming::when($request->keyword, function ($query) use ($request) {
        //     $query
        //         ->where('id', 'like', "%{$request->keyword}%")
        //         ->orWhere('pemilik', 'like', "%{$request->keyword}%")
        //         ->orWhere('tipe', 'like', "%{$request->keyword}%")
        //         ->orWhere('pj', 'like', "%{$request->keyword}%")
        //         ->orWhere('harga', 'like', "%{$request->keyword}%")
        //         ->orWhere('hargapokok', 'like', "%{$request->keyword}%")
        //         ->orWhere('status', 'like', "%{$request->keyword}%");
        // })->orderBy('id')->paginate($pagination);

        // return view('Grooming.index', compact('grooming'))
        //     ->with('i', (request()->input('page', 1) - 1) * $pagination);
    }

    public function create()
    {
        //
        return view('grooming.create');
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
            'nogrooming' => 'required',
            'pemilik' => 'required',
            'tipe' => 'required',
            'pj' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'status' => 'required',
        ]);
        Grooming::create($request->all());

        return redirect()->route('Grooming.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($idgrooming)
    {
        $this->authorize('admin');
        $grooming = Grooming::find($idgrooming);
        return view('Grooming.edit', ['grooming' => $grooming]);
    }

    /*  *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idgrooming)
    {
        $grooming =Grooming::find($idgrooming);
        $request->validate([
            'nogrooming' => 'required',
            'pemilik' => 'required',
            'tipe' => 'required',
            'pj' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'status' => 'required',
        ]);
        //  //fungsi eloquent untuk mengupdate data inputan kita
        //  Grooming::find($nogrooming)->update($request->all());
   
        //  //jika data berhasil diupdate, akan kembali ke halaman utama
        //  return redirect()->route('Grooming.index')
        //  ->with('success', 'Grooming Berhasil Diupdate');
        $grooming = Grooming::where('nogrooming', $idgrooming)->first();
        $grooming->update([
            'nogrooming' => $request->get('nogrooming'),
            'pemilik' => $request->get('pemilik'),
            'tipe' => $request->get('tipe'),
            'pj' => $request->get('pj'),
            'harga' => $request->get('harga'),
            'hargapokok' => $request->get('hargapokok'),
            'status' => $request->get('status')
        ]);

        return redirect()->route('Grooming.index')
            ->with('success', 'Grooming Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idgrooming)
    {
        $this->authorize('admin');
        Grooming::destroy($idgrooming);
        return redirect('Grooming.index')->with('toast_success', 'Data grooming berhasil di hapus!');
    }
}
