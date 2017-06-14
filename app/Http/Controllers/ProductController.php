<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('backend.product.index', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [
            'name'    => 'The :attribute does not be empty.',
            'price'    => 'The :attribute does not be empty.',
             'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
        ], $messages);

        $product = Product::create(request()->all());

        $imageName = time().'.'.$request->img->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $img = Image::make($request->img->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);
        $product->img = $imageName;
        $product->save();

        return view('backend.product.create', ['success'=>'le produit a été bien créé .']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return $product;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        $messages = [
            'name'    => 'The :attribute does not be empty.',
            'price'    => 'The :attribute does not be empty.',
        ];

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
        ], $messages);

        $product = Product::create(request()->all());
        //$product->name = $request->name;
        //$product->price = $request->price;
        //$product->save();

        return view('backend.product.edit', ['success'=>'le produit a été bien mis à jour .',
                                            'product'=>$product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        $products = Product::paginate(15);
        return view('backend.product.index', ['success'=>'le produit a été bien supprimer .',
            'products'=>$products]);
    }
}
