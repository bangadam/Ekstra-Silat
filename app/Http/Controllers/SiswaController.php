<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\sabuk;
use App\kelas;
use DB;
use Storage;
use App\Http\Requests;



class SiswaController extends Controller
{
    //menampilkan daftar anggota
    public function getSiswa() {
        $siswa =  DB::table('t_siswa')->join('sabuk','t_siswa.id_sabuk','=','sabuk.id_sabuk')->join('kelas','t_siswa.id_kelas','=','kelas.id_kelas')->get();
        return view('admin.anggota.index',compact('siswa'));
    }

    public function getTambah() {
        $sabuk = sabuk::all();
        $Kelas = Kelas::all();
        return view('admin.anggota.tambah', ['sabuk' => $sabuk],['Kelas' => $Kelas]);
    }
    public function postTambah(Request $request) {
        // dd($request);
       

        $siswa = new Siswa;
        $siswa->nama_siswa          =   $request['nama'];
        $siswa->id_sabuk          =   $request['sabuk'];
        $siswa->id_kelas          =   $request['kelas'];
        $siswa->Ttl         =   $request['ttl'];
        $siswa->JK =   $request['jenis_kelamin'];
        $siswa->no_hp         =   $request['no_hp'];
        $siswa->alamat_siswa        =   $request['alamat'];
        $siswa->status         =    $request['status'];

        $siswa->save();

        return redirect()->route('Siswa')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function getEdit($id) {
        
        $siswa       = Siswa::findOrFail($id);
        $sabuk      = sabuk::all();
        $Kelas = Kelas::all();
        if (!$siswa) {
            abort(404);
        }
        return view('admin.anggota.edit', ['siswa' => $siswa, 'sabuk' => $sabuk],['Kelas' => $Kelas]);
    }

    public function getLihat($id) {
        $siswa = Siswa::findOrFail($id);
        return view('admin.anggota.lihat', ['siswa' => $siswa]);
    }

    public function getHapus($id) {
        $siswa = Siswa::findOrFail($id);
        if (!$siswa) {
            abort(404);
        }
        $siswa->delete();

        return redirect()->route('Siswa')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data anggota

    public function putEdit(Request $request, $id) { 

        $siswa = Siswa::find($id);
        
        $siswa->nama_siswa          =   $request['nama'];
        $siswa->id_sabuk          =   $request['sabuk'];
        $siswa->id_kelas        =   $request['kelas'];
        $siswa->Ttl         =   $request['ttl'];
        $siswa->JK =   $request['jenis_kelamin'];
        $siswa->no_hp         =   $request['no_hp'];
        $siswa->alamat_siswa        =   $request['alamat'];
        $siswa->status         =    $request['status'];

        $siswa->save();

        return redirect()->route('Siswa')->with('pesan', 'Data berhasil di Update !');
    }
}
