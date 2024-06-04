<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $duplicata = Cart::search(function($cartItem,$rowId) use ($request){
            return $cartItem->id == $request->id;
        });
        if($duplicata->isNotEmpty()){
            return redirect()->route('home')->with('success','Le produit a déjà été ajouté');
        }
        // $id = request()->id;
        $product =Product::find($request->id);
        // $name = request()->name;
        // $price = request()->price;
        // echo "lah yrham lik mok ";
        // dd($id,$name,$price);
        Cart::add($product->id,$product->name,1,$product->price)
        ->associate('App\Models\Product');
        // window.location.reload();
        return redirect()->route('home')->with('success','Le produit a bien été ajouté');
        // return redirect()->refresh()->with('success', 'Le produit a bien été ajouté');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Le produit a bien été ajouté'
        // ]);

        // Log::info($name);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success','Le produit a été supprimé.');
    }
}
