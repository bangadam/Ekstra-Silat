<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $primaryKey = 'id_absen';

    protected $fillable = [
        'id_absen',
    	'siswa_id',
        'absen',
        'created_at',
        'updated_at',
    ];

    public function siswa() {
        return $this->belongsTo('App\Siswa');
    }

}
