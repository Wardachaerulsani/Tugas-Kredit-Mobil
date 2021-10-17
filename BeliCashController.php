<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Mobil;
use App\Models\BeliCash;

class BeliCashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mobil'] = Mobil::all();
        $data['pembeli'] = Pembeli::all();

        return view('beli_cash/index', $data);
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
        $validated = $request->validate([
            'ktp_pembeli' => 'required',
            'kode_mobil' => 'required',
            'cash_bayar' => 'required',
            'cash_tgl' => 'required'
        ]);
        $last_id = BeliCash::select('kode_cash')->orderBy('created_at', 'desc')->first();

        $kode_cash = ($last_id == null) ? sprintf('C%08d', 1)
            : sprintf('C%08d', substr($last_id->kode_cash, 1, 8) + 1);

        $validated['kode_cash'] = $kode_cash;

        //dd ($request);
        $input = BeliCash::create($validated);
        if ($input) return redirect('beli_cash')->with('success', 'Data Cash berhasil diinput');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faktur(BeliCash $beli_cash)
    {
        $beli_cash->load(['mobil', 'pembeli']);

        //dd($beli_cash);
        $data['cash'] = $beli_cash;
        return view('beli_cash/faktur', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
