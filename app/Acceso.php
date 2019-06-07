<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
  protected $primaryKey = 'id';
  public $timestamps = false;

public function scopeNombre($query, $nombre){
  if(trim($nombre) != ""){
    $query->where('nombre', 'LIKE', "%$nombre%");
  }
}
}
