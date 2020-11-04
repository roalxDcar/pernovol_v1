<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Función que obtiene todos los productos y listado de categorias para la vista
     * Url: /lista-productos
     * Method: GET
     */
    public function getProduct()
    {
        $categories = Category::select('category_cat', 'name_cat')
            ->where('state_cat', 1)
            ->get();
        $products = Product::with('category')
            ->get();

        return view('product.list', [
            'categories' => $categories,
            'products'   => $products,
        ]);
    }

    /**
     * Obtener un dato en especifico de producto
     * Url: /editar-producto/{id}
     * Method: GET
     */
    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'product' => $product,
        ]);
    }

    /**
     * FUnción que almacena toda la información del producto, como también el almacen de imagen
     * Url: /nuevo-producto/guardar
     * Method: POST
     */
    public function storeProduct(Request $request)
    {
        $product                  = new Product;
        $product->code_prod       = $request->code;
        $product->name_prod       = $request->name;
        $product->category_prod   = $request->category;
        $product->expiration_prod = $request->expiration;

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $name = time() . "_" . $file->getClientOriginalName();
            //Guardar en la Base de datos
            $product->photo_prod = $name;
            // Se alamacena en la carpeta product las imagenes del producto
            $file->move(public_path() . '/assets/product/', $name);
        }
        $product->save();
        return redirect()->route('get.product');
    }

    /**
     * Función para actualizar datos de producto
     * Url: /editar-producto/actualizar/{id}
     * Method: PUT
     */
    public function updateProduct(Request $request, $id)
    {
        $product                  = Product::findOrFail($id);
        $product->code_prod       = $request->code;
        $product->name_prod       = $request->name;
        $product->category_prod   = $request->category;
        $product->expiration_prod = $request->expiration;

        if ($request->hasfile('photo')) {
            // Eliminar foto
            unlink(public_path() . '/assets/product/' . $product->photo_prod);
            // Guardar Foto
            $file = $request->file('photo');
            $name = time() . "_" . $file->getClientOriginalName();
            //Guardar en la Base de datos
            $product->photo_prod = $name;
            // Se alamacena en la carpeta product las imagenes deñ producto
            $file->move(public_path() . '/assets/product/', $name);
        }
        $product->update();
        return redirect()->route('get.product');
    }

    /**
     * Función para cambiar estado de productos
     * Url: /producto/cambiar-estado/{id}
     * Method: PUT
     */
    public function stateProduct($id)
    {
        $product             = Product::findOrFail($id);
        $product->state_prod = $product->state_prod ? 0 : 1;
        $product->update();
        return redirect()->route('get.product');
    }
}
