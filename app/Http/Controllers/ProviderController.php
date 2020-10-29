<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Se obtiene un listado general de todos los proveedores registrados
     * Url: lista-proveedor
     * Type: GET
     */
    public function getProvider()
    {
        $providers = Provider::get();
        return view('provider.list', [
            'providers' => $providers,
        ]);
    }
    public function createProvider()
    {
        return view('provider.new');
    }
    public function editProvider($id)
    {
        $provider = Provider::findOrFail($id);
        return view('provider.edit', [
            'provider' => $provider,
        ]);
    }
    public function storeProvider(Request $request)
    {
        $provider               = new Provider;
        $provider->company_name = $request->company_name;
        $provider->nit          = $request->nit;
        $provider->address      = $request->address;
        $provider->name_manager = $request->name_manager;
        $provider->phone        = $request->phone;
        $provider->email        = $request->email;
        $provider->save();
        return redirect()->route('get.provider');
    }
    public function updateProvider(Request $request, $id)
    {
        $provider               = Provider::findOrFail($id);
        $provider->company_name = $request->company_name;
        $provider->nit          = $request->nit;
        $provider->address      = $request->address;
        $provider->name_manager = $request->name_manager;
        $provider->phone        = $request->phone;
        $provider->email        = $request->email;
        $provider->update();
        return redirect()->route('get.provider');
    }
}
