<?php

namespace App\Http\Controllers;
use App\Models\Hewan;
use Illuminate\Http\Request;
use PDF;
class HewanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kamar
        $hewan = Hewan::all();
    	// mengirim data kamar ke view index
    	return view('layout/hewan',compact('hewan'));

    }

    public function tambahhewan()
    {
    	// mengambil data dari table pasien


    	// mengirim data pasien ke view index
    	return view('layout/tambahhewan');

    }

    public function insertdata1(Request $request)
    {
        Hewan::create($request->all());

    	// mengirim data pasien ke view index
    	return redirect()->route('hewan');


    }

    public function ubahhewan($id_hewan)
    {
    	// mengambil data dari table pasien
        $hewan = Hewan::find($id_hewan);

    	// mengirim data pasien ke view index
    	return view('layout/ubahhewan',compact('hewan'));

    }

    public function updatedata1(Request $request, $id_hewan)
    {
    	// mengambil data dari table pasien
        $hewan = Hewan::find($id_hewan);
        $hewan->update($request->all());

    	// mengirim data pasien ke view index
    	return redirect()->route('hewan');

    }

    public function deletehewan($id_hewan)
    {
    	// mengambil data dari table pasien
        $hewan = Hewan::find($id_hewan);
        $hewan->delete();

    	// mengirim data pasien ke view index
    	return redirect()->route('hewan');

    }
    public function eksporhewan()
    {
    	// mengambil data dari table pembayaran
        $hewan=Hewan::all();
        view()->share('hewan',$hewan);
        $pdf = PDF::loadview('layout/datahewan-pdf');
        return $pdf->download('hewan.pdf');

    }
}
