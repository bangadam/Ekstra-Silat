<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends User
{
    protected $table = 'T_siswa';

    protected $fillable = [
        'id',
        'id_sabuk',
    	'nama_siswa',
        'alamat_siswa',
        'JK',
        'Ttl',
        'kelas',
        'jurusan',
        'status'
    ];

    public function kelas() {
        return $this->belongsTo('App\Kelas');
    }
}
