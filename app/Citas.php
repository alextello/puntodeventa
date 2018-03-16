<?php

namespace PuntoVenta;

use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
  protected $fillable = [
         'idUser',
         'idAdmin', /* i added this */
         'idServicio',
         'fecha',
         'hora',
         'descripcion',
         'solicitud',
         'estado',
     ];

     public function user()
    {
        return $this->belongsTo('PuntoVenta\User', 'idUser');
    }

    public function servicio()
   {
       return $this->belongsTo('PuntoVenta\Servicio', 'idServicio');
   }
}
