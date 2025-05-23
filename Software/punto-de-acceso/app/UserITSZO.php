<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserITSZO extends Model
{
  protected $primaryKey = 'no_control';
  public $timestamps = false;

public function scopeNombre($query, $nombre){
  if(trim($nombre) != ""){
    $query->where('nombre', 'LIKE', "%$nombre%");
  }
}

}
