@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Cliente nuevo</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Hey! </strong>Ingresaste mal los datos<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('client.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Empresa :</strong>
          <input type="text" name="RazonSocial" class="form-control" placeholder="Empresa">
        </div>
        <div class="col-md-12">
          <strong>Giro :</strong>
          <input type="text" name="Giro" class="form-control" placeholder="Giro">
        </div>
        <div class="col-md-12">
          <strong>Telefono :</strong>
          <input type="text" name="Telefono" class="form-control" placeholder="Telefono">
        </div>
        <div class="col-md-12">
          <strong>Direccion :</strong>
          <input type="text" name="Direccion" class="form-control" placeholder="Direccion">
        </div>
        <div class="col-md-12">
          <strong>Zona :</strong>
          <input type="text" name="Zona" class="form-control" placeholder="Zona">
        </div>
        <div class="col-md-12">
          <strong>Ciudad :</strong>
          <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad">
        </div>
        <div class="col-md-12">
          <strong>Estado :</strong>
          <input type="text" name="Estado" class="form-control" placeholder="Estado">
        </div>
        
        <div class="col-md-12">
          <strong>Contacto :</strong>
          <input type="text" name="Contacto" class="form-control" placeholder="Contacto">
        </div>
        <div class="col-md-12">
          <strong>Correo :</strong>
          <input type="text" name="Correo" class="form-control" placeholder="Correo">
        </div>

        <div class="col-md-12">
          <a href="{{route('client.index')}}" class="btn btn-sm btn-success">Regresar</a>
          <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
        </div>
      </div>
    </form>

  </div>
@endsection