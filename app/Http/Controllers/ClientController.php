<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Se obtiene un listado general de todos los proveedores registrados
     * Url: /lista-proveedor
     * Type: GET
     */
    public function getClient()
    {
        $clients = Client::get();
        return view('client.list', [
            'clients' => $clients,
        ]);
    }

    /**
     * Se presenta esta función para redireccionar al formulario
     * Url: /nuevo-proveedor
     * Type: GET
     */
    public function createClient()
    {
        return view('client.new');
    }

    /**
     * La función redirecciona a un formulario donde se recupera los datos del proveedor especificado en {id}
     * Url: /editar-proveedor/{id}
     * Type: GET
     */
    public function editClient($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit', [
            'client' => $client,
        ]);
    }

    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear proveedor
     * Url: /nuevo-proveedor/guardar
     * Type: POST
     */
    public function storeClient(Request $request)
    {
        $client              = new Client;
        $client->name_cli    = $request->name;
        $client->ci_nit_cli  = $request->nit;
        $client->email       = $request->ci;
        $client->phone_cli   = $request->phone;
        $client->address_cli = $request->address;
        $client->save();
        return redirect()->route('get.client');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-proveedor/actualizar/{id}
     * Type: PUT
     */
    public function updateClient(Request $request, $id)
    {
        $client              = Client::findOrFail($id);
        $client->name_cli    = $request->name;
        $client->ci_nit_cli  = $request->nit;
        $client->email       = $request->ci;
        $client->phone_cli   = $request->phone;
        $client->address_cli = $request->address;
        $client->update();
        return redirect()->route('get.client');
    }

    /**
     * Se actualiza el estado del Proveedor
     * Url: /proveedor/cambiar-estado/{id}
     * Type: PUT
     */
    public function stateClient($id)
    {
        $client            = Client::findOrFail($id);
        $client->state_cli = $client->state_cli ? 0 : 1;
        $client->update();
        return redirect()->route('get.client');
    }
}
