<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	/**
     * Se obtiene un listado general de todos los usuarios registrados
     * Url: /lista-usuario
     * Type: GET
     */
    public function getUser()
    {
        $users = User::get();
        return view('user.list', [
            'users' => $users,
        ]);
    }
    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear usuario
     * Url: /nuevo-usuario/guardar
     * Type: POST
     */
    public function storeUser(Request $request)
    {
        $user           = new User;
        $user->name    	= $request->name;
        $user->paternal = $request->paternal;
        $user->maternal = $request->maternal;
        $user->ci   	= $request->ci;
        $user->email 	= $request->email;
        $user->address 	= $request->address;
        $user->phone 	= $request->phone;
        $user->password	= bcrypt($request->ci);
        $user->save();
        return redirect()->route('get.user')->with('status', 'Se registró Usuario');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-usuario/actualizar/{id}
     * Type: PUT
     */
    public function updateUser(Request $request, $id)
    {
        $user           = User::findOrFail($id);
        $user->name     = $request->name_edit;
        $user->paternal = $request->paternal_edit;
        $user->maternal = $request->maternal_edit;
        $user->ci       = $request->ci_edit;
        $user->email    = $request->email_edit;
        $user->address  = $request->address_edit;
        $user->phone    = $request->phone_edit;
        $user->update();
        return redirect()->route('get.user')->with('status', 'Se actualizo Usuario');
    }

    /**
     * Se actualiza el estado del Usuario
     * Url: /usuario/cambiar-estado/{id}
     * Type: PUT
     */
    public function stateUser($id)
    {
        $user        = User::findOrFail($id);
        $user->state = $user->state ? 0 : 1;
        $user->update();
        return redirect()->route('get.user')->with('status', 'Se actualizo Estado');
    }
}
