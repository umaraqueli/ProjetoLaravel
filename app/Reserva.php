<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  public $timestamps = false;


    protected $fillable = [
        'pessoa_id','quarto_id','data_reserva'       
    ];
    public function pessoa()
    {
      return $this->hasOne('App\Pessoa', 'pessoa_id');
    }
    public function quarto()
    {
      return $this->hasOne('App\Quarto', 'quarto_id');
    }
}
