@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detalles de cliente</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Empresa : </strong> {{$client->RazonSocial}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Giro : </strong> {{$client->Giro}}
        </div>
      </div>
  
      <div class="col-md-12">
        <div class="form-group">
          <strong>Telefono : </strong> {{$client->Telefono}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Direccion : </strong> {{$client->Direccion}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Zona : </strong> {{$client->Zona}}
        </div>
      </div>
     
       
      <div class="col-md-12">
        <div class="form-group">
          <strong>Ciudad : </strong> {{$client->Ciudad}}
        </div>
      </div>
      
      <div class="col-md-12">
        <div class="form-group">
          <strong>Estado : </strong> {{$client->Estado}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Contacto : </strong> {{$client->Contacto}}
        </div>
      </div>
    
      <div class="col-md-12">
        <div class="form-group">
          <strong>Correo : </strong> {{$client->Correo}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('client.index')}}" class="btn btn-sm btn-success">Regresar</a>
      </div>
    </div>
  </div>
@endsection