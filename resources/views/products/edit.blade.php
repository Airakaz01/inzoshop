@extends('layouts.adminApp')
@section('adminContent')

    <form method="POST" action="{{route('products.update', $product->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Nom du produit</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="{{old('name',$product->name)}}" required
                    placeholder="Nom du produit*">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Catégorie</label>
            <div class="col-sm-10">
                <select name="category" class="form-select" aria-label="" required>
                    <option value="" {{ old('category', $product->category) == '' ? 'selected' : '' }}>Ouvrir ce menu de sélection</option>
                    <option value="Homme" {{ old('category', $product->category) == 'Homme' ? 'selected' : '' }}>Home</option>
                    <option value="Femme" {{ old('category', $product->category) == 'Femme' ? 'selected' : '' }}>Femme</option>
                    <option value="Enfant" {{ old('category', $product->category) == 'Enfant' ? 'selected' : '' }}>Enfant</option>
                    <option value="Accessoires" {{ old('category', $product->category) == 'Accessoires' ? 'selected' : '' }}>Accessoires</option>
                </select>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Sub-Catégorie</label>
            <div class="col-sm-10">
                <select name="sub_category" class="form-select" aria-label="" required>
                    <option value="" {{ old('sub_category', $product->sub_category) == '' ? 'selected' : '' }}>Ouvrir ce menu de sélection</option>
                    <option value="Pantallon" {{ old('sub_category', $product->sub_category) == 'Pantallon' ? 'selected' : '' }}>Pantallon</option>
                    <option value="T-Shirt" {{ old('sub_category', $product->sub_category) == 'T-Shirt' ? 'selected' : '' }}>T-Shirt</option>
                    <option value="Hodie" {{ old('sub_category', $product->sub_category) == 'Hodie' ? 'selected' : '' }}>Hodie</option>
                    <option value="Robe" {{ old('sub_category', $product->sub_category) == 'Robe' ? 'selected' : '' }}>Robe</option>
                </select
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Description</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" rows="3" required>
                    {{ old('description', $product->description) }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Quantité</label>
            <div class="col-sm-10">
                <input type="number" name="quantity" class="form-control" value="{{old('quantity',$product->quantity)}}" min="0"
                    max="1000" placeholder="Quantité du produit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Prix</label>
            <div class="col-sm-10">
                <input type="number" name="price" value="{{old('price',$product->price)}}" class="form-control" min="0"
                    max="10000" required placeholder="Prix du produit*">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Ancien Prix</label>
            <div class="col-sm-10">
                <input type="number" name="old_price" value="{{old('old_price',$product->old_price)}}" class="form-control" min="0"
                    max="10000" required placeholder="Ancien Prix">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="input-group mb-3">
                <label class="input-group-text fw-bold fs-6" for="inputGroupFile01">Image</label>
                <input type="file" class="form-control" name="imgpath" value="{{old('imgpath',$product->imgpath)}}"
                    accept=".jpg, .jpeg, .png, .svg">
            </div>
        </div>
        <div class="mb-3 row container position-relative">
            <div class="btn-group col-sm-4 gap-2 d-flex justify-content-end position-absolute end-0 mx-0" role="group"
            aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div>
</form>
@endsection



{{-- @method('PUT')
<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Nom du produit</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" value="{{old('name')}}" required
            placeholder="Nom du produit*">
    </div>
</div>
<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Catégorie</label>
    <div class="col-sm-10">
        <select name="category" class="form-select" aria-label="" required>
            <option selected>Ouvrir ce menu de sélection</option>
            <option value="1">Home</option>
            <option value="2">Femme</option>
            <option value="3">Enfant</option>
            <option value="4">Accessoires</option>
        </select>
    </div>
</div>
<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Sub-Catégorie</label>
    <div class="col-sm-10">
        <select name="sub_category" class="form-select" aria-label="" required>
            <option selected>Ouvrir ce menu de sélection</option>
            <option value="1">Pantallon</option>
            <option value="2">T-Shirt</option>
            <option value="3">Hodie</option>
            <option value="4">Robe</option>
        </select>
    </div>
</div>
<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Quantité</label>
    <div class="col-sm-10">
        <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}" min="0" max="1000"
            placeholder="Quantité du produit">
    </div>
</div>
<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Prix</label>
    <div class="col-sm-10">
        <input type="number" name="price" value="{{old('price')}}" class="form-control" min="0" max="10000" required
            placeholder="Prix du produit*">
    </div>
</div>
<div class="mb-3 row">
    <div class="input-group mb-3">
        <label class="input-group-text fw-bold fs-6" for="inputGroupFile01">Image</label>
        <input type="file" class="form-control" name="imgpath" value="{{old('imgpath')}}" accept=".jpg, .jpeg, .png, .svg">
    </div>
</div> --}}