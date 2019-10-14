@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Lista de clientes ALSO Montacargas</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('client.create') }}">Agregar Cliente</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "250px">Empresa</th>
        <th width="100px">Giro</th>
        <th width=>Telefono</th>
        <th>Direccion</th>
        <th>Zona</th>
        <th>Ciudad</th>
        <th>Contacto</th>
        <th width = "250px">Action</th>
      </tr>

      @foreach ($clients as $client)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$client->RazonSocial}}</td>
          <td>{{$client->Giro}}</td>
          <td>{{$client->Telefono}}</td>
          <td>{{$client->Direccion}}</td>
          <td>{{$client->Zona}}</td>
          <td>{{$client->Ciudad}}</td>
          <td>{{$client->Contacto}}</td>
          <td>
            <form action="{{ route('client.destroy', $client->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('client.show',$client->id)}}">Ver</a>
              <a class="btn btn-sm btn-warning" href="{{route('client.edit',$client->id)}}">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar cliente?')">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $clients->links() !!}
  </div>
@endsection