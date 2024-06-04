@extends('layouts.adminApp')
@section('adminContent')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <nav class="navbar navbar-expand-lg" style="background-color: #253592;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1 class="logo-text text-light">InZoShop</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container-fluid justify-content-center gap-5 d-flex"
                id="navbarTogglerDemo02">
                <ul class="navbar-nav mb-2 mb-lg-0 "> <!-- Removed me-auto class -->
                    <li class="nav-item mx-5">
                        <a class="nav-link active text-light fw-bold fs-6" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link active text-light fw-bold fs-6" aria-current="page" href="#">Produits</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link active text-light fw-bold fs-6" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Nom du produit</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required
                        placeholder="Nom du produit*">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Catégorie</label>
                <div class="col-sm-10">
                    <select name="category" class="form-select" aria-label="" required>
                        <option selected>Ouvrir ce menu de sélection</option>
                        <option value="Homme">Home</option>
                        <option value="Femme">Femme</option>
                        <option value="Enfant">Enfant</option>
                        <option value="Accessoires">Accessoires</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Sub-Catégorie</label>
                <div class="col-sm-10">
                    <select name="sub_category" class="form-select" aria-label="" required>
                        <option selected>Ouvrir ce menu de sélection</option>
                        <option value="Pantallon">Pantallon</option>
                        <option value="T-Shirt">T-Shirt</option>
                        <option value="Hodie">Hodie</option>
                        <option value="Robe">Robe</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Description</label>
                <div class="col-sm-10">
                    {{-- <input type="text" name="description" class="form-control" value="{{ old('desccription') }}" required
                        placeholder="Description"> --}}
                        <textarea name="description" class="form-control" rows="3" required>
                            {{old('description')}}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Quantité</label>
                <div class="col-sm-10">
                    <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}" min="0"
                        max="1000" placeholder="Quantité du produit">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Prix</label>
                <div class="col-sm-10">
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control" min="0"
                        max="10000" required placeholder="Prix du produit*">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label fw-bold fs-6">Ancien Prix</label>
                <div class="col-sm-10">
                    <input type="number" name="old_price" value="{{ old('old_price') }}" class="form-control" min="0"
                        max="10000" required placeholder="Ancien Prix">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="input-group mb-3">
                    <label class="input-group-text fw-bold fs-6" for="inputGroupFile01">Image</label>
                    <input type="file" class="form-control" name="imgpath" value="{{ old('imgpath') }}"
                        accept=".jpg, .jpeg, .png, .svg">
                </div>
            </div>
            <div class="mb-3 row container position-relative">
                <div class="btn-group col-sm-4 gap-2 d-flex justify-content-end position-absolute end-0 mx-0" role="group"
                    aria-label="Basic mixed styles example">
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
            </div>
        </form>

    </div>
@endsection
