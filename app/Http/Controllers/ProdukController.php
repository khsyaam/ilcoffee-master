<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
// use Illuminate\Http\UploadedFile;
// use PhpParser\Lexer;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexbeans()
    {
        $produk = Produk::all();
        return view('admin/produkbeans/index', compact('produk'));
    }
    // beranda
    public function berandabeans()
    {
        // $leader = Leader::find([1, 2, 3]);
        $produk = Produk::all();
        return view('users/pages/listproduct', compact('produk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        if($request->hasFile('foto')){
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
        }
        $request -> validate([
                'nama' => 'required',
                'description' => 'required',
                'foto' => 'required'
            ]);

        Produk::create([
            'nama' => $request->nama,
            'description' => $request->description,
            'foto' => $filename
        ]);
        return redirect('/adminproduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('admin/produkbeans/show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('admin/produkbeans/edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        if($request->hasFile('foto') == "")
    	{
            $produk->foto=$produk->foto;

    	}
    	else if($request->hasFile('foto'))
    	{
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
            $produk->foto = $filename;
        }

        $produk->save();
         
        $request -> validate([
                'nama' => 'required',
                'description' => 'required',
                'foto' => 'required',
            ]);

        Produk::where('id', $produk->id)
                ->update([
                    'nama' => $request->nama,
                    'description' => $request->description,
                    'foto' => $filename,
                ]);
        return redirect('/adminproduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        Produk::destroy($produk->id);
        return redirect('/adminproduk')->with('sukses', 'Data berhasil dihapus');         
    }

}
