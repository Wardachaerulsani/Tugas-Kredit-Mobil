<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pembeli'] = Pembeli::all();
        return view('pembeli/index', $data);
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
            'ktp_pembeli' => 'required',
            'nama_pembeli' => 'required',
            'alamat_pembeli' => 'required',
            'telp_pembeli' => 'required'
        ]);
        $input = Pembeli::create($validate);

        if ($input) return redirect('pembeli')->with('success', 'Data Pembeli berhasil diinput');
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
        $model = Pembeli::find($id);
        return view('pembeli.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Pembeli::Find($id);
        $model->ktp_pembeli = $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli = $request->alamat_pembeli;
        $model->telp_pembeli = $request->telp_pembeli;
        $model->save();

        return redirect('/pembeli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pembeli::find($id);
        $model->delete();
        return redirect('/pembeli');
    }
}
