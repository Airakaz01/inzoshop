@extends('layouts.app')
@section('content')
<section id="" class="new-arrivals-products-container  py-3 mx-0 px-0">
    <div class="section-title">
        <h2 class="ff-main">Homme</h2>
    </div>
    <div class="container-fluid d-flex row justify-content-evenly flex-wrap">
        <div class="new-arrivals-products ">
            <div class="products-list container-fluid  d-flex row justify-content-center">
                <div class="row container-fluid justify-content-center d-flex flex-wrap">
                    @foreach ($products as $product)
                    <div class="col-md-4 col-lg-3 col-sm-6 col-12 align-self-center gx-2 gx-md-3">
                        <div class="product-item shadow mx-auto">
                            <div class="product-image position-relative">
                                <img src="{{ asset('/img') }}/{{ $product->img_path }}" alt=""
                                    width="200">
                                <span class="badge sold position-absolute">-20%</span>
                            </div>
                            <div class="product-details">
                                <div class="product-category">{{ $product->sub_category }}</div>
                                <div class="product-name">
                                    <h3>{{ $product->name }}</h3>
                                </div>
                                <div class="product-reviews py-2">
                                    <i class="fa-solid fa-star selected"></i>
                                    <i class="fa-solid fa-star selected"></i>
                                    <i class="fa-solid fa-star selected"></i>
                                    <i class="fa-solid fa-star selected"></i>
                                    <i class="fa-solid fa-star "></i> (789)
                                </div>
                                <div class="product-price d-flex justify-content-center py-2 gap-2">
                                    <del>
                                        <h4>${{ $product->old_price }}</h4>
                                    </del>
                                    <h4>${{ $product->price }}</h4>
                                </div>
                                <div class="product-options">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#{{$product->id}}">Aperçu</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-bold ffb-main" id="exampleModalLabel">{{$product->sub_category}}</h1>
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
                                                <p class="ff-main ">{{$product->description}}</p>
                                                <form action="{{route('cart.store')}}" method="POST">
                                                    @csrf
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
                                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                                <input type="hidden" name="name" value="{{$product->name}}">
                                                                <input type="hidden" name="price" value="{{$product->price}}">
                                                                <button type="submit"
                                                                    class="btn modal-btn2 text-light fw-bold">Panier</button>
                                                        
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
@endsection