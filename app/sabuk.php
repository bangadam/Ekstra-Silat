<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sabuk extends Model
{
    protected $table = "sabuk";

    protected $fillable = [
    	'id_sabuk', 'tingkatan',
    ];

}
