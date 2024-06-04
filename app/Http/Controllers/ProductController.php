<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $productsFromDB = Product::all(); //collection object
        return view('products.index', ['products' => $productsFromDB]);
    }

    public function show(Product $product) //type hinting
    {
        // return view('products.index', ['product' => $product]);
        return to_route('products.index',['product' => $product]);
        
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'category' => ['required'],
            'sub_category' => ['required'],
            // 'description' =>[''],
            'quantity' => ['required'],
            'price' => ['required'],
            // 'old_price' => [''],
            'imgpath' => ['required'],
        ]);
        $data = request()->all();
        $name = request()->name;
        $category = request()->category;
        $sub_category = request()->sub_category;
        $description = request()->description;
        $quantity = request()->quantity;
        $price = request()->price;
        $old_price =request()->old_price;
        $imgpath = request()->imgpath;
        Product::create([
            'name' => $name,
            'category' => $category,
            'sub_category' => $sub_category, //ignore,
            'description' => $description,
            'quantity' => $quantity,
            'price' => $price,
            'old_price'=> $old_price,
            'img_path' => $imgpath,
        ]);

        return to_route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit',['product'=>$product]);
    }

    public function update($productId)
    {
        $name = request()->name;
        $category = request()->category;
        $sub_category = request()->sub_category;
        $quantity = request()->quantity;
        $price = request()->price;
        $imgpath = request()->imgpath;

        $singlePostFromDB = Product::find($productId);
        $singlePostFromDB->update([
            'name' => $name,
            'category' => $category,
            'sub_category' => $sub_category, //ignore,
            'quantity' => $quantity,
            'price' => $price,
            'img_path' => $imgpath,
        ]);
        return to_route('products.show', $productId);
    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        $product->delete();

        Product::where('id', $productId)->delete();
        return to_route('products.index');
    }
    public function showHomme()
    {
        $productsFromDB = Product::where('category', 'Homme')->get();
        // dd($productsFromDB);
        return view('man', ['products' => $productsFromDB]);
    }
    public function showFemme()
    {
        $productsFromDB = Product::where('category', 'Femme')->get();
        // dd($productsFromDB);
        return view('woman', ['products' => $productsFromDB]);
    }
    public function showEnfant()
    {
        $productsFromDB = Product::where('category', 'Enfant')->get();
        // dd($productsFromDB);
        return view('kids', ['products' => $productsFromDB]);
    }
    
    public function showAccessoires()
    {
        $productsFromDB = Product::where('category', 'Accessoires')->get();
        // dd($productsFromDB);
        return view('accessoires', ['products' => $productsFromDB]);
    }
    public function showSearch(Request $request )
    {
        $query  = $request->input('query');;
        $productsFromDB = Product::where('category', 'like', "%{$query}%")
        ->orWhere('sub_category', 'like', "%{$query}%")
        ->orWhere('name', 'like', "%{$query}%")
        ->get();
        // dd($productsFromDB);
        return view('search', ['products' => $productsFromDB]);
    }
    // public function index(){}
    // public function create(){}
    // public function store(){}
    // public function show(){}
    // public function edit(){}
    // public function update(){}
    // public function destroy(){}
}
