<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Hewan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pembayaran
        $transaksi = Transaksi::with('Hewan')->get();
    	// mengirim data pembayaran ke view index
    	return view('layout/transaksi',compact('transaksi'));

    }

    public function tambahtransaksi()
    {
    	// mengambil data dari table pembayaran

        $hewan=Hewan::all();
    	// mengirim data pembayaran ke view index
    	return view('layout/tambahtransaksi',compact('hewan'));

    }

    public function insertdata2(Request $request)
    {



        // mengambil data dari table pembayaran
    	Transaksi::create($request->all());

    	// mengirim data pembayaran ke view index
    	return redirect()->route('transaksi');

    }

    public function ubahtransaksi($id_transaksi)
    {
    	// mengambil data dari table pembayaran
        $transaksi = Transaksi::find($id_transaksi);
        $hewan=Hewan::all();

    	// mengirim data pembayaran ke view index
    	return view('layout/ubahtransaksi',compact('transaksi','hewan'));

    }

    public function updatedata2(Request $request, $id_transaksi)
    {
    	// mengambil data dari table pembayaran
        $transaksi = Transaksi::find($id_transaksi);
        $transaksi->update($request->all());

    	// mengirim data pembayaran ke view index
    	return redirect()->route('transaksi');

    }

    public function deletetransaksi($id_transaksi)
    {
    	// mengambil data dari table pembayaran
        $transaksi = Transaksi::find($id_transaksi);
        $transaksi->delete();

    	// mengirim data pembayaran ke view index
    	return redirect()->route('transaksi');

    }
}
