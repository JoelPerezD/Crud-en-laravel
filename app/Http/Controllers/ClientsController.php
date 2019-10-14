<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Client;
class ClientsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(100);
        return view('client.index', compact('clients'))
                  ->with('i', (request()->input('page',1) -1)*100);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'RazonSocial' => 'required',
            'Giro' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
            'Zona' => 'required',
            'Ciudad' => 'required',
            'Estado' => 'required',
            'Contacto' => 'required',
            'Correo' => 'required'
          ]);
        Client::create($request->all());
        return redirect()->route('client.index')
                        ->with('success', 'Se ha agregado cliente');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('client.detail', compact('client'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit', compact('client'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'RazonSocial' => 'required',
        'Giro' => 'required',
        'Ciudad' => 'required',
        'Zona' => 'required',
        'Contacto' => 'required'
      ]);
      $client = Client::find($id);
      $client->RazonSocial = $request->get('RazonSocial');
      $client->Giro = $request->get('Giro');
      $client->Telefono = $request->get('Telefono');
      $client->Direccion = $request->get('Direccion');
      $client->Zona = $request->get('Zona');
      $client->Ciudad = $request->get('Ciudad');
      $client->Estado = $request->get('Estado');
      $client->Contacto = $request->get('Contacto');
      $client->Correo = $request->get('Correo');
      $client->save();
      return redirect()->route('client.index')
                      ->with('success', 'Cliente se ha actualizado exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('client.index')
                        ->with('success', 'Se ha eliminado cliente');
    }
}