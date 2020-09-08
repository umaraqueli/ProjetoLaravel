<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Municipio;



class Hotel extends Model
{
    protected $fillable = [
        'nome','endereço','localidade','municipio_id','created_by','updated_by'
    ];
}
