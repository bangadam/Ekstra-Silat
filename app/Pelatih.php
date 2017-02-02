<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    protected $table = "pel";

    protected $fillable = [
    	'id', 'id_sabuk', 'nama_pel', 'ttl', 'alamat_pel' , 'JK', 'kelas', 'jurusan'
    ];
    public function sabuk()
    {
    	return $this->belongsTo('App\sabuk','id_sabuk');
    }
}
