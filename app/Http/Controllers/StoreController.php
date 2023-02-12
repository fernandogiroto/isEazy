<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;

class StoreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $store = Store::withCount('product')->findOrFail($id);
        $products = $store->product()->get();
        return view('store' , ['store' => $store, 'products' => $products]);
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
        try {
            $store = new Store;
            $store->name = $request->name;
            $store->description = $request->description;
            $store->save();
            return response()->json(['msg' => 'Store created successfully', 'status' => 200]);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['msg' => 'Store not created', 'status' => 500]);
        }
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
        $store=Store::findOrFail($id);
        try {
            $store->update($request->all());
            return response()->json(['msg' => 'Store updated', 'status' => 200]);
        }catch (ModelNotFoundException $exception) {
            return response()->json(['msg' => 'Store not update', 'status' => 500]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Store::destroy($id);
            return redirect('/')->with('success', 'Store Deleted'); 
        }catch (ModelNotFoundException $exception) {
            return response()->json(['msg' => 'Store not delete', 'status' => 500]);
        }
    }

    public function getStores(){
        $stores = Store::withCount('product')->get();
        return view('welcome' , ['stores' => $stores]);
    }
}
