<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function buyProduct($id){
        $store = Product::findOrFail($id);
        if($store->stock < 1){
            return redirect()->back()->with(['msg' => 'Product not sold', 'stock' => 'Insufficient stock', 'status' => 400]);
        }
        else if($store->stock  <= 2){
            $store->stock -= 1;
            $store->save();
            return redirect()->back()->with(['msg' => 'Product successfully sold.', 'stock' => 'Product with low stock', 'status' => 200]);
        }else{
            $store->stock -= 1;
            $store->save();
            return redirect()->back()->with(['msg' => 'Product successfully sold.', 'status' => 200]);
        }
    }

    public function buyProductJson($id){
        $store = Product::findOrFail($id);

        if($store->stock < 1){
            return response()->json(['msg' => 'Product not sold', 'stock' => 'Insufficient stock','status' => 400]);
        }
        else if($store->stock  <= 2){
            $store->stock -= 1;
            $store->save();
            return response()->json(['msg' => 'Product successfully sold.', 'stock' => 'Product with low stock', 'status' => 200]);
        }
        else{
            $store->stock -= 1;
            $store->save();
            return response()->json(['msg' => 'Product successfully sold.', 'status' => 200]);
        }
    }

}
