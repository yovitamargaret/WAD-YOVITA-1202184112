<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('img_path');
        $path = public_path().'/picture';
        $file->move($path, $file->getClientOriginalName());
        $filename_data = "picture/".$file->getClientOriginalName();

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->img_path = $filename_data;

        $product->save();
    
        return redirect()->route('products.index')
                        ->with('success','Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('img_path');
        $path = public_path().'/picture';
        $file->move($path, $file->getClientOriginalName());
        $filename_data = "picture/".$file->getClientOriginalName();
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->img_path = $filename_data;
        $product->save();
        return redirect()->route('products.index');
        $product->update($request->all());
        return redirect()->route('products.index')
                        ->with('success','Produk berhasil ditambahkan');
        
        //$file = $request->file('img_path');
        //$path = public_path().'/picture';
        //$file->move($path, $file->getClientOriginalName());
        //$filename_data = "picture/".$file->getClientOriginalName();

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Produk berhasil dihapus');
    }
}
