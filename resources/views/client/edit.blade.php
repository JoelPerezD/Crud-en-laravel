@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Editar Cliente</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Auch! </strong>Ingresaste mal algun dato<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('client.update',$client ->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Razon Social :</strong>
          <input type="text" name="RazonSocial" class="form-control" value="{{$client ->RazonSocial}}">
        </div>
        <div class="col-md-12">
          <strong>Giro:</strong>
          <input type="text" name="Giro" class="form-control" value="{{$client ->Giro}}">
         <!-- <textarea class="form-control" name="Giro" rows="8" cols="80">{{$client ->Giro}}</textarea> -->
        </div>
        <div class="col-md-12">
          <strong>Ciudad :</strong>
          <input type="text" name="Ciudad" class="form-control" value="{{$client ->Ciudad}}">
        </div>
        <div class="col-md-12">
          <strong>Zona :</strong>
          <input type="text" name="Zona" class="form-control" value="{{$client ->Zona}}">
        </div>
        <div class="col-md-12">
          <strong>Contactos :</strong>
          <input type="text" name="Contacto" class="form-control" value="{{$client ->Contacto}}">
        </div>
        <div class="col-md-12">
          <a href="{{route('client.index')}}" class="btn btn-sm btn-success">Regresar</a>
          <button type="submit" class="btn btn-sm btn-primary">Gurdar Cambios</button>
        </div>
      </div>
    </form>
  </div>
@endsection