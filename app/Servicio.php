<?php

namespace PuntoVenta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class servicio extends Model
{
  use SoftDeletes;
  protected $table = 'servicio';

  protected $fillable = [
    'codigo',
    'tipo',
    'descripcion',
    'costo',
  ];

 public function citas()
 {
   return $this->hasMany('PuntoVenta\Citas', 'idServicio');
 }


}
