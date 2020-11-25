<?php

namespace App\Http\Controllers;

use App\Produkap;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use PhpParser\Lexer;

class ProdukapController extends Controller
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
    public function indexapparel()
    {
        $produkap = Produkap::all();
        return view('admin/produkapparel/index', compact('produkap'));
    }
    // public function indexapparel()
    // {
    //     $produk = Produk::all();
    //     return view('admin/produkapparel/index', compact('produk'));
    // }
    // beranda
    public function berandaapparel()
    {
        // $leader = Leader::find([1, 2, 3]);
        $produkap = Produkap::all();
        return view('users/pages/listproductap', compact('produkap'));
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

        Produkap::create([
            'nama' => $request->nama,
            'description' => $request->description,
            'foto' => $filename
        ]);
        return redirect('/adminprodukap');
        // Leader::create($request->all()); cara simple dpt digunakan jika tidak ada kondisi khusus
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produkap  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Produkap $produkap)
    {
        return view('admin/produkapparel/show', compact('produkap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produkap  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('admin/produkapparel/edit', compact('produkap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produkap  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkap $produkap)
    {
        if($request->hasFile('foto') == "")
    	{
            $produkap->foto=$produkap->foto;

    	}
    	else if($request->hasFile('foto'))
    	{
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
            $produkap->foto = $filename;
        }

        $produkap->save();
         
        $request -> validate([
                'nama' => 'required',
                'description' => 'required',
                //'foto' => 'required'
            ]);

        Produkap::where('id', $produkap->id)
                ->update([
                    'nama' => $request->nama,
                    'description' => $request->description,
                    // 'foto' => $filename
                ]);
        return redirect('/adminprodukap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produkap  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkap $produkap)
    {
        Produkap::destroy($produkap->id);
        return redirect('/adminprodukap')->with('sukses', 'Data berhasil dihapus');         
    }

}
