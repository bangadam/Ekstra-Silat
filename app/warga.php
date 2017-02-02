<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends User
{
    protected $table = 'admin';

    protected $fillable = [
        'user',
        'pass',
    ];

    public function kelas() {
        return $this->belongsTo('App\Kelas');
    }
}
