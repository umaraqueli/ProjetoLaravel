<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'nome','sobrenome','cpf','idade','endereco'
    ];
}
