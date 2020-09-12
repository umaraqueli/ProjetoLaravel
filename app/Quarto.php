<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    
  public $timestamps = false;


    protected $fillable = [
        'capacidade','valor','disponivel','hotel_id'      
    ];
    public function hotel()
    {
      return $this->hasOne('App\Hotel', 'hotel_id');
    }

}
