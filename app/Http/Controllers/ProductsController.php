<?php

namespace App\Http\Controllers;

use App\ProductsData;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date=date("Y-m-d");
        $product=new ProductsData();
        $product->name="amit";
        $product->category_id=1;
        $product->description="sample";
        $product->slug="sample";
        $product->price=6;
        $product->photo="ss";
        $product->date_view=$date;
        $product->counter=0;
        $product->save();
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
     * @param  \App\ProductsData  $productsData
     * @return \Illuminate\Http\Response
     */
    public function show($id = null, ProductsData $productsData)
    {
        return  isset($id) ? ProductsData::where("id", $id)->get() : ProductsData::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductsData  $productsData
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductsData $productsData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductsData  $productsData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsData $productsData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductsData  $productsData
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductsData $productsData)
    {
        //
    }
}
