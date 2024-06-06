<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use PDF;
class PenggunaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kamar
        $pengguna = Pengguna::all();
    	// mengirim data kamar ke view index
    	return view('layout/pengguna',compact('pengguna'));

    }

    public function tambahpengguna()
    {
    	// mengambil data dari table pasien


    	// mengirim data pasien ke view index
    	return view('layout/tambahpengguna');

    }

    public function insertdata(Request $request)
    {
        Pengguna::create($request->all());

    	// mengirim data pasien ke view index
    	return redirect()->route('pengguna');


    }

    public function ubahpengguna($id_pengguna)
    {
    	// mengambil data dari table pasien
        $pengguna = Pengguna::find($id_pengguna);

    	// mengirim data pasien ke view index
    	return view('layout/ubahpengguna',compact('pengguna'));

    }

    public function updatedata(Request $request, $id_pengguna)
    {
    	// mengambil data dari table pasien
        $pengguna = Pengguna::find($id_pengguna);
        $pengguna->update($request->all());

    	// mengirim data pasien ke view index
    	return redirect()->route('pengguna');

    }

    public function deletepengguna($id_pengguna)
    {
    	// mengambil data dari table pasien
        $pengguna = Pengguna::find($id_pengguna);
        $pengguna->delete();

    	// mengirim data pasien ke view index
    	return redirect()->route('pengguna');

    }

    public function eksporpengguna()
    {
    	// mengambil data dari table pembayaran
        $pengguna=Pengguna::all();
        view()->share('pengguna',$pengguna);
        $pdf = PDF::loadview('layout/datapengguna-pdf');
        return $pdf->download('pengguna.pdf');

    }
}
