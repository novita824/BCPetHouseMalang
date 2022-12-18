<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $pagination = 5;
        $produk = Produk::when($request->keyword, function ($query) use ($request) {
            $query
                ->where('id', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%")
                ->orWhere('produk', 'like', "%{$request->keyword}%")
                ->orWhere('totalproduk', 'like', "%{$request->keyword}%")
                ->orWhere('totalharga', 'like', "%{$request->keyword}%");
        })->orderBy('id')->paginate($pagination);

        return view('Produk.produkindex', compact('produk'))
            ->with('i', (request()->input('page', 1) - 1) * $pagination);
    }

    public function create()
    {
        //
        return view('Produk.produkcreate');
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
            'nama' => 'required',
            'produk' => 'required',
            'totalproduk' => 'required',
            'totalharga' => 'required',
        ]);
        Produk::create($request->all());

        return redirect()->route('Produk.produkindex')->with('succes','Data Berhasil di Input');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $this->authorize('admin');
        $produk = produk::find($id);
        return view('Produk.produkedit', compact('produk'));
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
            'nama' => 'required',
            'produk' => 'required',
            'totalproduk' => 'required',
            'totalharga' => 'required',
        ]);
        $Produk = Produk::where('id', $id)->first();
        $Produk->update([
            'nama' => $request->get('nama'),
            'produk' => $request->get('produk'),
            'totalproduk' => $request->get('totalproduk'),
            'totalharga' => $request->get('totalharga'),
        ]);

        return redirect()->route('produk.index')
            ->with('success', 'Produk Berhasil Diupdate');
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
            Produk::find($id)->delete();
            return redirect()->route('produk.index')
                ->with('success', 'Produk Berhasil Dihapus');
        } catch (Throwable $error) {
            report($error);
            return redirect()->route('produk.index')
                ->with('errors', 'Mohon Maaf Data Penitipan Belum Bisa Dihapus. Coba Lagi Nanti');
        }
    }
}
