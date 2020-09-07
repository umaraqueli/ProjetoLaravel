<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nome','endereco','localidade','municipio_id','created_by','updated_by'
    ];
}
