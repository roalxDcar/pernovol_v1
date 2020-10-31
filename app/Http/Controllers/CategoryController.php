<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Se obtiene un listado general de todos los proveedores registrados
     * Url: /lista-proveedor
     * Type: GET
     */
    public function getCategory()
    {
        $categories = Category::get();
        return view('category.list', [
            'categories' => $categories,
        ]);
    }

    /**
     * Se presenta esta función para redireccionar al formulario
     * Url: /nuevo-proveedor
     * Type: GET
     */
    public function createCategory()
    {
        return view('category.new');
    }

    /**
     * La función redirecciona a un formulario donde se recupera los datos del proveedor especificado en {id}
     * Url: /editar-proveedor/{id}
     * Type: GET
     */
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Se almacena toda la informarión que es enviada desde el formulario para crear proveedor
     * Url: /nuevo-proveedor/guardar
     * Type: POST
     */
    public function storeCategory(Request $request)
    {
        $category           = new Category;
        $category->name_cat = $request->name_cat;
        $category->save();
        return redirect()->route('get.category');
    }

    /**
     * Se actualizara toda la información
     * Url: /editar-proveedor/actualizar/{id}
     * Type: PUT
     */
    public function updateCategory(Request $request, $id)
    {
        $category           = Category::findOrFail($id);
        $category->name_cat = $request->name_cat;
        $category->update();
        return redirect()->route('get.category');
    }

    /**
     * Se actualiza el estado del Proveedor
     * Url: /proveedor/cambiar-estado/{id}
     * Type: PUT
     */
    public function stateCategory($id)
    {
        $category            = Category::findOrFail($id);
        $category->state_cat = $category->state_cat ? 0 : 1;
        $category->update();
        return redirect()->route('get.category');
    }
}
