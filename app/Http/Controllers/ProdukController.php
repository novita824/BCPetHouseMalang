<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Throwable;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $pagination = 5;
        $produk = Produk::when($request->keyword, function ($query) use ($request) {
            $query
                ->where('id', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%")
                ->orWhere('jumlah', 'like', "%{$request->keyword}%")
                ->orWhere('harga', 'like', "%{$request->keyword}%")
                ->orWhere('hargapokok', 'like', "%{$request->keyword}%")
                ->orWhere('total', 'like', "%{$request->keyword}%");
        })->orderBy('id')->paginate($pagination);

        return view('Produk.index', compact('produk'))
            ->with('i', (request()->input('page', 1) - 1) * $pagination);
    }

    public function create()
    {
        //
        return view('Produk.create');
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
            'jumlah' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'total' => 'required',
        ]);
        Produk::create($request->all());

        return redirect()->route('Produk.index')->with('succes','Data Berhasil di Input');
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
        return view('Produk.edit', compact('produk'));
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
            'jumlah' => 'required',
            'harga' => 'required',
            'hargapokok' => 'required',
            'total' => 'required',
        ]);
        $Produk = Produk::where('id', $id)->first();
        $Produk->update([
            'nama' => $request->get('nama'),
            'jumlah' => $request->get('jumlah'),
            'harga' => $request->get('harga'),
            'hargapokok' => $request->get('hargapokok'),
            'total' => $request->get('total'),
        ]);

        return redirect()->route('Produk.index')
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
            return redirect()->route('Produk.index')
                ->with('success', 'Produk Berhasil Dihapus');
        } catch (Throwable $error) {
            report($error);
            return redirect()->route('Produk.index')
                ->with('errors', 'Mohon Maaf Data Penitipan Belum Bisa Dihapus. Coba Lagi Nanti');
        }
    }
}
