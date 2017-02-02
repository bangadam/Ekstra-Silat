<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Absensi;
use Storage;
use DB;
use App\Http\Requests;

class AbsensiController extends Controller
{
    public function index(){
    	$siswa = DB::table('t_siswa')->join('sabuk','t_siswa.id_sabuk','=','sabuk.id_sabuk')->join('kelas','t_siswa.id_kelas','=','kelas.id_kelas')->get();
    	return view('admin/absensi/index', compact('siswa'));
    }
    public function lihat(){
    	$absensi =DB::table('absensi')->join('t_siswa','absensi.siswa_id','=','t_siswa.id')->join('kelas','absensi.id_kelas','=','kelas.id_kelas')->get();
    	return view('admin/absensi/tampil', compact('absensi'));
    }
    public function postTambah(Request $request) {
        $absen= $request['absen'];
        
        foreach ($absen as $key => $value) {
           
            $Absensi = new Absensi;
        $Absensi->siswa_id              =   $key;
        $Absensi->id_kelas              =   $key;
        $Absensi->absen                 =   $value;
        
        $Absensi->save();
            
        }

        return redirect()->route('lihat.absensi');  
    }
    public function tampil($id){
      /*  dd($id);*/
        $absensi = Absensi::find($id);
       /* dd($absensi);*/
        return view('admin/absensi/lihat', compact('absensi'));
    }
}
