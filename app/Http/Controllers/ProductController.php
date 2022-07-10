<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
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
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ], [
            'name.required' => 'အမည် ဖြည့်ရန် လိုအပ်ပါသည်။',
            'name.string' => 'အမည်သည် စာသား ဖြစ်ရပါမည်။',
            'price.requried' => 'စျေးနှုန်း ဖြည့်ရန် လိုအပ်ပါသည်။',
            'price.numeric' => 'စျေးနှုန်းသည် ဂဏန်း ဖြစ်ရပါမည်။'
        ]);
        $product = Product::create($request->only('name', 'price'));
        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        $request->validate([
            'name' => 'nullable|string',
            'price' => 'nullable|numeric'
        ], [
            'name.string' => 'အမည်သည် စာသား ဖြစ်ရပါမည်။',
            'price.numeric' => 'စျေးနှုန်းသည် ဂဏန်း ဖြစ်ရပါမည်။'
        ]);
        $product = Product::find($id);
        $product->update($request->only('name', 'price'));
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return $product;
    }
}
