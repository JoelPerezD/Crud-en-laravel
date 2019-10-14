<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['RazonSocial','Giro','Telefono',
    'Direccion','Zona','Ciudad','Estado','Contacto','Correo'];
    public $timestamps=false;

}
