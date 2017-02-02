<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\warga;
use App\Siswa;
use App\Kegiatan;
use App\Absensi;
use DB;
use App\Http\Requests;

class UserController extends Controller
{
    public function getPelatih() {
 		$Pelatih = DB::table('pel')->join('sabuk','pel.id_sabuk','=','sabuk.id_sabuk')->join('kelas','pel.id_kelas','=','kelas.id_kelas')->get();
    	return view('user/pelatih', ['Pelatih' => $Pelatih]);
    }

    public function getSiswa(){
      $siswa =  DB::table('t_siswa')->join('sabuk','t_siswa.id_sabuk','=','sabuk.id_sabuk')->join('kelas','t_siswa.id_kelas','=','kelas.id_kelas')->get();
      return view('user/siswa', ['siswa'  => $siswa]);
    }
   
    public function getKegiatan(){
      $data = Kegiatan::all();
      return view('user/Kegiatan',['data' =>  $data]);
    }

    public function getAbsensi(){
     $absensi =DB::table('absensi')->join('t_siswa','absensi.siswa_id','=','t_siswa.id')->join('kelas','absensi.id_kelas','=','kelas.id_kelas')->get();
      return view('user/Absensi',compact('absensi'));
    }
}
