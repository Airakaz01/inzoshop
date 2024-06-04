@extends('layouts.adminApp')
@section('adminContent')
    <div class="text-start p-2">
        <a href="{{route('products.create')}}" class="btn btn-success">Créer un produit</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Categorie</th>
            <th scope="col">Sub-Categorie</th>
            <th scope="col">Quantite</th>
            <th scope="col">Prix</th>
            <th scope="col">Img</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->sub_category}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->img_path}}</td>
                <td>
                    {{-- <a href="{{route('products.show', $product->id)}}" class="btn btn-info">View</a> --}}
                    {{-- <a href=""{{route('products.show', $product->id)}}"" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">View</a> --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$product->id}}">
                        View
                    </button>
                    <div class="modal fade" id="{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <img src="{{ asset('/img') }}/{{ $product->img_path}}" alt="" width="350"
                                                        height="90%">
            
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="ffi-main fw-bolder text-dark">{{$product->name}}</h3>
                                                <h4 class="ffb-main">${{$product->price}}</h4>
                                                <p class="ff-main ">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Eaque pariatur, delectus est aspernatur
                                                    voluptates minima iste excepturi. Soluta illo, architecto
                                                    fugit autem iste eaque dolore quis voluptatibus eligendi
                                                    facere nobis.</p>
                                                <form action="">
                                                    <select class="form-select ffi-main my-2">
                                                        <option selected>Size</option>
                                                        <option value="1">Size S</option>
                                                        <option value="2">Size M</option>
                                                        <option value="3">Size L</option>
                                                        <option value="4">Size XL</option>
                                                    </select>
                                                    <select class="form-select ffi-main my-2">
                                                        <option selected>Couleur</option>
                                                        <option value="1">Rouge</option>
                                                        <option value="2">Bleu</option>
                                                        <option value="3">Blanc</option>
                                                        <option value="4">Gris/option>
                                                    </select>
                                                    <div class="form-control">
                                                        <div class="row">
                                                            <div class="col-md-6 ffi-main">
                                                                <label for="quantity">Qunatité</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="number" name="quantity" class="form-control" placeholder="Quantité" minlength="1" maxlength="5">
            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-control justify-content-end d-flex position-relative">
                                                        <div class="position-absolute start-0 px-2 pt-2 ffi-main">
                                                            <label for="">Ajouter au :</label>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                            <button type="button" class="btn modal-btn1 text-light fw-bold">Favoris</button>
                                                            <button type="button" class="btn modal-btn2 text-light fw-bold">Panier</button>
                                                        </div>
                                                    </div>
                                                      
                                                </form>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                    <form style="display: inline;" method="POST" action="{{route('products.destroy', $product->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection




