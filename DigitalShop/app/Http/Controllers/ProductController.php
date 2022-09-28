<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::all();
        return view('backend.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-product');
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = request()->file('images')->store('public/images');
        Product::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'details'=>$request->details,
            'price'=>$request->price,
            //'images'=>$this->uploadImage(request()->file('images')),
            'images'=>$imageName,
            'description'=>$request->description
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //dd($request->all());
        request()->validate([
            'name' => ['required','min:3','max:30']
        ]);

        $imageName = request()->file('images')->store('public/images');
        $product->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'details'=>$request->details,
            'price'=>$request->price,
            //'images'=>$this->uploadImage(request()->file('images')),
            'images'=>$imageName,
            'description'=>$request->description
        ]);
        $request->session()->flash('message', $request->title.' STILL WORKED!!!');
        return redirect()->route('product.index')->withMessage($request->title.' STILL WORKED!!!');
    }

    // public function uploadImage($file)
    // {
    //     $fileName = time().'.'.$file->getClientOriginalExtension();
    //     Image::make($file)
    //     ->resize(200,200)
    //     ->save(storage_path().'/app/public/images'.$fileName);
    //     return $fileName;
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->withMessage('YOU ARE OUTTA HERE!');
    }
}
