<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';

    protected $fillable = [
    	'nama_kegiatan',
    	'tempat_kegiatan',
    	'administrasi',
    	'tgl_pel',
    ];

    public function pembina() {
    	return $this->belongsTo('App\Pelatih');
    }
}

