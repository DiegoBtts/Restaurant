<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\models\CategoryModel;
use App\models\ProductsModel;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
	{
		return view('panel.product.index', ['items' => ProductsModel::all()]);
	}

	public function add() 
	{
        return view('panel.product.form')->with(['product' => new ProductsModel()]); 
    }

    public function edit($id)
    {
        $product = ProductsModel::find($id);
        return view('panel.product.form')->with(['product' => ProductsModel::find($id)]);
    }

    public function delete($id)
    {
        ProductsModel::destroy($id);
        session()->flash('messages', 'success|El Producto se borro satisfactoriamente.' );
        return redirect()->route('product');
    }

    public function save(Request $request, ProductsModel $product) 
    {
    	$validatedData = $request->validate([
            'name' => 'required',
        ]);
        $product->name = $request->input('name');
        $product->purchase_price = $request->input('purchase_price');
        $product->stock = $request->input('stock');
        $product->stock_min = $request->input('stock_min');
        $product->expiration_date = $request->input('expiration_date');
        $product->categoria_id = $request->input("categoria_id");
        $product->save();
        session()->flash('messages', 'success|Producto guardado correctamente.' );
        return redirect()->route('product');
    }
}
