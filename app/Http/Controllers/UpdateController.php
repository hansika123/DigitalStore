<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UpdateController extends Controller
{
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->stock -= 1;
        $product->price = max(0, $product->price - 2);
        if ($product->category->name === 'Gadgets') {
            if ($product->stock <= 8) {
                $product->price *= 1.15;
            }

            if ($product->stock === 0) {
                $product->price = 0;
            }
        }

        $product->save();

        return $product;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
