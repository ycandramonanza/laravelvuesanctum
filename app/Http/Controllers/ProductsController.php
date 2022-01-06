<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Multiple;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $products = new Products([
            'product_name'  => $request->input('product_name'),
            'seller'  => $request->input('seller'),
            'addres_seller'  => $request->input('addres_seller'),
            'price'  => $request->input('price'),
            'desc'    => $request->input('desc')
        ]);
        $products->save();

        return response()->json('The product successfully added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id) {
            $products = Products::find($id);
            return response()->json($products);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($id) {
            $products = Products::find($id);
            $result = $products->update($request->all());
            return response()->json($result);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id) {
            $product = Products::find($id);
            $product->delete();
            return response()->json(['status' => true]);
        }
    }

    public function conext(Request $request){
        $multiple = new Multiple([
            'name'  => $request->input('name'),
            'phone'  => $request->input('phone'),
        ]);
        $multiple->save();

        return response()->json('The product successfully added');
    }
}
