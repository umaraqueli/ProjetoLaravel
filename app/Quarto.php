<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    //
    protected $fillable = [
        'hotel_id','capacidade','valor','disponivel'       
    ];
    public function hotel()
    {
      return $this->hasOne('App\Hotel', 'hotel_id');
    }

}
