<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use PhpParser\Lexer;

class ProdukController extends Controller
{

    // public function listproduct()
    // {
    //     // $index = IndexController::all();
    //     // $this->listproduct = Shop::orderBy('created_at','DESC')->get();
    //     // $produk = Shops::all();
    //     return view('users/pages/listproduct');
    // }
    
    
    // public function detailproduct()
    // {
    //     // $index = IndexController::all();
    //     // $this->listproduct = Shop::orderBy('created_at','DESC')->get();
    //     return view('users/pages/detailproduct');
    // }
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
    // public function indexapparel()
    // {
    //     $produk = Produk::all();
    //     return view('admin/produkapparel/index', compact('produk'));
    // }
    // beranda
    public function berandabeans()
    {
        // $leader = Leader::find([1, 2, 3]);
        $produk = Produk::all();
        return view('users/pages/listproduct', compact('produk'));
    }
    // public function berandabeans()
    // {
    //     // $leader = Leader::find([1, 2, 3]);
    //     $produk = Produk::all();
    //     return view('users/pages/listproduct2', compact('produk'));
    // }

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
        //ini cara panjang
        // $leader = new Leader;
        // $leader->nama = $request->nama;
        // $leader->jabatan = $request->jabatan;
        // $leader->foto = $request->foto;
        // $leader -> save();

        // Leader::create([
        //     'nama' => $request->nama,
        //     'jabatan' => $request->jabatan,
        //     'foto' => $request->foto
        // ]);
        
        if($request->hasFile('foto')){
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
            //Leader::find(12)->update(['foto' => $filename]);
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
        // Leader::create($request->all()); cara simple dpt digunakan jika tidak ada kondisi khusus
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
                //'foto' => 'required'
            ]);

        Produk::where('id', $produk->id)
                ->update([
                    'nama' => $request->nama,
                    'description' => $request->description,
                    // 'foto' => $filename
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
