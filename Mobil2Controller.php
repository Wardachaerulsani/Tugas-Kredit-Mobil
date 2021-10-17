<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil2;

class Mobil2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mobil2'] = Mobil2::all();
        return view('mobil2/index', $data);
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
        //validasi
        $validate = $request->validate([
            'kode_mobil' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'warna' => 'required',
            'harga_mobil' => 'required',
            'gambar' => 'required'
        ]);
        $input = Mobil2::create($validate);

        if ($input) return redirect('mobil2')->with('success', 'Data Mobil2 berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil2 $mobil2, $id)
    {
        // $rules = $request->validate([
        //     'kode_mobil' => 'required',
        //     'merk' => 'required',
        //     'type' => 'required',
        //     'warna' => 'required',
        //     'harga_mobil' => 'required',
        //     'gambar' => 'required'
        // ]);

        // $update = $mobil2->find($id)->update($request->all());

        // if ($update) return redirect('mobil2')->with('success', 'Data Mobil berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil2 $mobil2, $id)
    {
        // $mobil2->find($id)->delete();

        // return redirect('mobil2')->with('success', 'Mobil2 deleted');
    }
}
