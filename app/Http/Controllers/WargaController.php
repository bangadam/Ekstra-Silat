<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelatih;
use App\sabuk;
use App\Kelas;
use Storage;
use Excel;
use PDF;
use App\Http\Requests;
use DB;



class WargaController extends Controller
{
    //menampilkan daftar pembina
   	public function getPembina() {
        $Pelatih = DB::table('pel')->join('sabuk','pel.id_sabuk','=','sabuk.id_sabuk')->join('kelas','pel.id_kelas','=','kelas.id_kelas')->get();
    	return view('admin.pembina.index', ['Pelatih' => $Pelatih]);
    }

    public function getTambah() {
        $sabuk = sabuk::all();
        $Kelas = Kelas::all();
    	return view('admin.pembina.tambah', ['Kelas' => $Kelas], ['sabuk' => $sabuk]);
    }

    public function getEdit($id) {
        $Pelatih = Pelatih::where('id', '=', $id)->first();
        $sabuk = sabuk::all();
        $Kelas = Kelas::all();
        if (!$Pelatih) {
            abort(404);
        }
        return view('admin.pembina.edit',compact('Pelatih','Kelas','sabuk'));
    }

    public function getLihat($id) {
        $Pelatih = Pelatih::findOrFail($id);
    	return view('admin.pembina.lihat', ['Pelatih' => $Pelatih]);
    }

    public function getHapus($id) {
    	$Pelatih = Pelatih::find($id);
        $Pelatih->delete();

        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data pembina
    public function postTambah(Request $request) {
   
        // $this->validate($request, [
        //     'nama_pel'              =>  'required|min:3',
        //     'id_sabuk'              =>  'required',
        //     'ttl'             =>  'required',
        //     'JK'     =>  'required',
        //     'alamat_pel'     =>  'required',
        //     'no_hp'             =>  'required|max:12',
        //     'kelas'            =>  'required',
        //     'jurusan'            =>  'required',
        // ]);
        
        $kelas = new Kelas;
        $kelas->id_kelas = $request[''];

        $Pelatih = new Pelatih;
        $Pelatih->nama_pel          =   $request['nama'];
        $Pelatih->id_sabuk          =   $request['sabuk'];
        $Pelatih->ttl         =   $request['ttl'];
        $Pelatih->JK =   $request['jenis_kelamin'];
        $Pelatih->no_hp         =   $request['no_hp'];
        $Pelatih->alamat_pel        =   $request['alamat'];
        $Pelatih->id_kelas        =   $request['kelas'];


        $Pelatih->save();
        
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEdit(Request $request, $id) { 

         $Pelatih =  Pelatih::find($id);

        $Pelatih->nama_pel          =   $request['nama'];
        $Pelatih->id_sabuk          =   $request['sabuk'];
        $Pelatih->ttl         =   $request['ttl'];
        $Pelatih->JK =   $request['jenis_kelamin'];
        $Pelatih->no_hp         =   $request['no_hp'];
        $Pelatih->alamat_pel        =   $request['alamat'];
        $Pelatih->kelas        =   $request['kelas'];

        $Pelatih->save();

        return redirect()->route('warga')->with('pesan', 'Data berhasil di Update !');
    }

    public function downloadExcel($type) {
        $Pelatih = Pelatih::get()->toArray();
        return Excel::create('dataPelatihExcel', function($excel) use ($Pelatih) {
            $excel->sheet('dataPelatihExcel', function($sheet) use ($Pelatih) {
                $sheet->fromArray($Pelatih);
            });
        })->download($type);
    }

    

    public function getPdf(Request $request) {
        $Pelatih = Pelatih::all();

        $pdf = PDF::loadView('admin/pembina/pdf',compact('Pelatih'));

        return $pdf->stream('dataPelatih');
    }
}
