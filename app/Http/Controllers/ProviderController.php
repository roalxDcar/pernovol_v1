<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Se obtiene un listado general de todos los proveedores registrados
     * Url: /lista-proveedor
     * Type: GET
     */
    public function getProvider()
    {
        $providers = Provider::get();
        return view('provider.list', [
            'providers' => $providers,
        ]);
    }

    /**
     * Se presenta esta función para redireccionar al formulario
     * Url: /nuevo-proveedor
     * Type: GET
     */
    public function createProvider()
    {
        return view('provider.new');
    }

    /**
     * La función redirecciona a un formulario donde se recupera los datos del proveedor especificado en {id}
     * Url: /editar-proveedor/{id}
     * Type: GET
     */
    public function editProvider($id)
    {
        $provider = Provider::findOrFail($id);
        return view('provider.edit', [
            'provider' => $provider,
        ]);
    }

    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear proveedor
     * Url: /nuevo-proveedor/guardar
     * Type: POST
     */
    public function storeProvider(Request $request)
    {
        $provider                    = new Provider;
        $provider->company_name_prov = $request->company_name;
        $provider->nit_prov          = $request->nit;
        $provider->address_prov      = $request->address;
        $provider->name_manager_prov = $request->name_manager;
        $provider->phone_prov        = $request->phone;
        $provider->email_prov        = $request->email;
        $provider->save();
        return redirect()->route('get.provider');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-proveedor/actualizar/{id}
     * Type: PUT
     */
    public function updateProvider(Request $request, $id)
    {
        $provider                    = Provider::findOrFail($id);
        $provider->company_name_prov = $request->company_name;
        $provider->nit_prov          = $request->nit;
        $provider->address_prov      = $request->address;
        $provider->name_manager_prov = $request->name_manager;
        $provider->phone_prov        = $request->phone;
        $provider->email_prov        = $request->email;
        $provider->update();
        return redirect()->route('get.provider');
    }

    /**
     * Se actualiza el estado del Proveedor
     * Url: /proveedor/cambiar-estado/{id}
     * Type: PUT
     */
    public function stateProvider($id)
    {
        $provider             = Provider::findOrFail($id);
        $provider->state_prov = $provider->state_prov ? 0 : 1;
        $provider->update();
        return redirect()->route('get.provider');
    }
}
