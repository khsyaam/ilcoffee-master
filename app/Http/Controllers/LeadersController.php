<?php

namespace App\Http\Controllers;

use App\Leader;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use PhpParser\Lexer;


class LeadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leader = Leader::all();
        return view('admin/ph/index', compact('leader'));
    }
    // beranda
    public function beranda()
    {
        // $leader = Leader::find([1, 2, 3]);
        $leader = Leader::all();
        return view('visitors/pages/index', compact('leader'));
    }
    public function visitor()
    {
        // $leader = Leader::find([1, 2, 3]);
        $leader = Leader::all();
        return view('visitors/fungsionaris/ph', compact('leader'));
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
                'jabatan' => 'required',
                'foto' => 'required'
            ]);

        Leader::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $filename
        ]);
        return redirect('/pengurus-harian');
        // Leader::create($request->all()); cara simple dpt digunakan jika tidak ada kondisi khusus
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {
        return view('admin/ph/show', compact('leader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        return view('admin/ph/edit', compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        if($request->hasFile('foto') == "")
    	{
            $leader->foto=$leader->foto;

    	}
    	else if($request->hasFile('foto'))
    	{
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('images', $filename ,'public');
            $leader->foto = $filename;
        }

        $leader->save();
         
        $request -> validate([
                'nama' => 'required',
                'jabatan' => 'required',
                //'foto' => 'required'
            ]);

        Leader::where('id', $leader->id)
                ->update([
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    // 'foto' => $filename
                ]);
        return redirect('/pengurus-harian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        Leader::destroy($leader->id);
        return redirect('/pengurus-harian')->with('sukses', 'Data berhasil dihapus');         
    }
}
