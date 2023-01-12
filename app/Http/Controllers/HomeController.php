<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function komentarcreate(Request $request){
       \App\Models\Komentar::create(['nama' => $request->nama, 'email' => $request->email, 'judul' => $request->judul, 'komentar' => $request->komentar]);

       return redirect('home');
    }
}
