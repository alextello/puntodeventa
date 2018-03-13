<?php

namespace PuntoVenta;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
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
