<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['RazonSocial','Giro',
'Ciudad','Zona','Contacto'];

}
