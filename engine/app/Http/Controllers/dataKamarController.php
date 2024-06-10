<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataKamar;
use App\Models\noKamar;
use App\Models\jenisKamar;
use App\Models\harga;

class dataKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKamar = dataKamar::all();
        return view('pages/home',$dataKamar);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $noKamar = noKamar::all();
        $jenisKamar = jenisKamar::all();
        $harga = harga::all();

        return view('dataKamar.create', compact('noKamar', 'jenisKamar', 'harga'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataKamar = new dataKamar;
        $dataKamar->noKamar = $request->noKamar;
        $dataKamar->jenisKamar = $request->jenisKamar;
        $dataKamar->harga = $request->harga;
        
        $dataKamar->save();

        return redirect('dataKamar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataKamar = dataKamar::find($id);
        $noKamar = noKamar::all();
        $jenisKamar = JenisKamar::all();
        $harga = harga::all();
        return view('dataKamar.edit', compact('noKamar', 'jenisKamar', 'harga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'noKamar' => 'required',
            'jenisKamar' => 'required|integer',
            'harga' => 'required' 
        ]);

        $dataKamar = dataKamar::findOrFail($id);
        $dataKamar->noKamar = $request->noKamar ;
        $dataKamar->jenisKamar = $request->jenisKamar ;
        $dataKamar->harga = $request->harga ;

        $dataKamar->save();
        
        return redirect('/dataKamar')->with('success', 'Data Kamar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKamar = dataKamar::findOrFail($id);
        $dataKamar->delete();
        return redirect('/dataKamar')->with('success', 'Data Kamar berhasil dihapus.');
    }
}
