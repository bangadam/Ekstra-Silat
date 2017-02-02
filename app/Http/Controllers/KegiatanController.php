<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Http\Requests;

class KegiatanController extends Controller
{
    // Kegiatan Controller
    public function getKegiatan() {
        $data = Kegiatan::all();
        return view('admin.kegiatan.index', ['data' => $data]);
    }

    public function getTambahKegiatan() {
        return view('admin.kegiatan.tambah');
    }

    public function postTambahKegiatan(Request $request) {
        

        $data = new Kegiatan;
        $data->nama_kegiatan = $request['nama_kegiatan'];
        $data->tempat_kegiatan = $request['tempat_kegiatan'];
        $data->tgl_pel = $request['tgl_pel'];
        $data->administrasi = $request['administrasi'];

       	$data->save();

       	return redirect()->route('lihat.kegiatan')->with('pesan', 'Data Kegiatan Berhasil Ditambahkan !');
    }

    public function getEditKegiatan($id) {
        $data = Kegiatan::find($id);
        
        return view('admin.kegiatan.edit', ['data' => $data]);
    }

    public function putEditKegiatan(Request $request, $id) {
        
        $data=kegiatan::find($id);
        $data->nama_kegiatan = $request['nama_kegiatan'];
        $data->tempat_kegiatan = $request['tempat_kegiatan'];
        $data->tgl_pel = $request['tgl_pel'];
        $data->administrasi = $request['administrasi'];


        $data->save();

        return redirect()->route('lihat.kegiatan')->with('pesan', 'Data Kegiatan Berhasil Di Update !');
    }    

    public function getHapusKegiatan($id) {
        $data = Kegiatan::findOrFail($id);
        
        $data->delete();

        return redirect()->route('lihat.kegiatan')->with('pesan', 'Data Kegiatan Berhasil Di Hapus !');
    }
}
