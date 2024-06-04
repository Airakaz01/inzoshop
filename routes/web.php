<?php
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    $productsFromDB = Product::all();
    return view('welcome',['products' => $productsFromDB]);})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/favoris', function() { return view('favoris');
})->name('favoris');
// ***********************Products******************
Route::get('/home/products',[ProductController::class, 'index'])->name('products.index');

Route::get('/home/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/home/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/home/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/home/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/home/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/home/products/{product}',[ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/homme', [ProductController::class, 'showHomme'])->name('Homme');
Route::get('/femme', [ProductController::class, 'showFemme'])->name('Femme');
Route::get('/enfant', [ProductController::class, 'showEnfant'])->name('Enfant');
Route::get('/accessoires', [ProductController::class, 'showAccessoires'])->name('Accessoires');

// ******************************Search***********************************
Route::get('/home/search', [ProductController::class, 'showSearch'])->name('search');
// ****************************Cart routes******************************
Route::get('/panier',[CartController::class, 'index'])->name('cart.index');
Route::post('/panier/ajouter',[CartController::class, 'store'])->name('cart.store');
Route::delete('panier/{rowId}',[CartController::class, 'destroy'])->name('cart.destroy');
// Route::post('/home',[CartController::class, 'store'])->name('cart.store');
Route::get('/videpanier', function(){
    Cart::destroy();
});