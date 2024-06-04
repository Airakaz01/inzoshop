<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InzoStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/main2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="/resources/css/main2.css">
    <style>.sticky { position: fixed; top: 0; width: 100%; z-index: 1000; }</style>
</head>

<body>
    <header class="">
        <div class="banner container-fluid py-1  justify-content-center d-flex">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner px-5 ">
                    <div class="carousel-item active">
                        <span class="d-block w-100 text-slide ">
                            <img class="pb-1" src="{{ asset('assets/bootstrap-icons/star-white.png ') }}"
                                alt="" width="15">
                            4.7/5 |1000+ avis vérifiés
                            <a class="a-inderline" href="">Découvrir par ici</a>
                        </span>
                    </div>
                    <div class="carousel-item">
                        <span class="d-block w-100 text-slide ">
                            Livraison offerte partout au Maroc dès
                            <a class="a-frais" href="">200MAD</a>
                        </span>
                    </div>
                    <div class="carousel-item">
                        <span class="d-block w-100 text-slide ">
                            Paiement en 2x ou 3x
                            <a class="a-scalapay" href="">Sans frais avec Scalapay</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="website-details-container d-lg-block d-none bg-light">
            <div class="container-fluid ">
                <div class="website-details d-flex align-items-center justify-content-evenly gap-5  ">
                    <div class="navbar-brand website-logo logo d-none d-lg-block">
                        <a href="{{ route('home') }}" target="_self">
                            <div class="logo-container d-flex gap-0">
                                <span class="logo-text fs-1">InZo</span>
                                <img id="logo-icon" src="{{ asset('assets/images/brand/logo-tie.png ') }}"
                                    alt="" width="4">
                                <span class="logo-text fs-1">Shop</span>
                            </div>
                        </a>
                    </div>
                    <div class="container-fluid">
                        <div class="search my-2">
                            <div class="rowe">
                                <div class="">
                                    <div class="search-2">
                                        <i class="fa fa-search"></i>
                                        <form method="GET" action="{{route('search')}}" >
                                          <input type="text" name="query" placeholder="Rechercher...">
                                          <button type="submit" class="d-none d-lg-block">Rechercher</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="website-icon-item text-center">
                        <img class="img-fluid pt-3" src="{{ asset('assets/bootstrap-icons/person.svg ') }}"
                            alt="Person Icon">
                        <a class="icon-menu-details d-block" href="{{ route('login') }}" target="_self">Connexion</a>
                    </div>
                    <div class="website-icon-item text-center">
                        <img class="img-fluid pt-3" src="{{ asset('assets/bootstrap-icons/bag-heart.svg ') }}"
                            alt="bag-heart Icon">
                        <a class="icon-menu-details d-block" href="{{ route('favoris') }}">Favoris</a>
                    </div>
                    <div class="website-icon-item text-centern position-relative">
                        <nav class="navbar border-0 ">
                            <div class="container-fluid position-relative">
                                <button class="border-0 bg-light" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#panier" aria-controls="offcanvasNavbar"
                                    aria-label="Toggle navigation">
                                    <span class="position-absolute panier-NP">{{Cart::count()}}</span>
                                    <img class="img-fluid pt-3" src="{{ asset('assets/bootstrap-icons/cart.svg ') }}"
                                        alt="cart Icon">
                                    <a id="paniere" class="icon-menu-details d-block"="">Panier</a>
                                </button>
                                <div class="offcanvas offcanvas-end panier-off-container bg-panier" tabindex="-1"
                                    id="panier" aria-labelledby="offcanvasNavbarLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title text-uppercase fw-bold" id="offcanvasNavbarLabel">
                                            Panier</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="panierStatut row container d-flex justify-content-center mt-5 mb-1">
                                            <img class="panier-img"
                                                src="{{ asset('assets/bootstrap-icons/cart.svg ') }}" alt="">
                                            {{-- <span class="col-12 text-center fw-normal fs-6">Votre panier est vide
                                                :</span> --}}
                                                <a href="{{route('cart.index')}}" class="col-12 text-center fw-normal fs-6">Afficher le panier</a>
                                            <span class="col-12 text-center fw-normal fs-6">Trouver votre prochain coup
                                                de coeur !</span>
                                        </div>
                                        <div id="carouselPanier" class="carousel slide" data-bs-ride="carousel"
                                            data-bs-touch="false">
                                            <div class="carousel-inner panier-inner">
                                                <div class="carousel-item carousel-panier active">
                                                    <div
                                                        class="panier-product-container position-relative container-fluid d-flex flex-nowrap gap-2 p-2 m-2 shadow border-1">
                                                        <div class="">
                                                            <img class="panier-product-container"
                                                                src="{{ asset('assets/images/product/lates-news/a17.jpg ') }}"
                                                                class="" alt="..." width="60"
                                                                height="80">
                                                        </div>
                                                        <div class="fw-bold">
                                                            <span>Pantallon</span>
                                                        </div>
                                                        <div class="position-absolute end-0 top-50 me-1">
                                                            <button type="button"
                                                                class="btn btn-dark btn-sm d-block">+ Ajouter -
                                                                <span>200</span> MAD</button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="panier-product-container position-relative container-fluid d-flex flex-nowrap gap-2 p-2 m-2 shadow border-1">
                                                        <div class="">
                                                            <img class="panier-product-container"
                                                                src="{{ asset('assets/images/product/lates-news/a17.jpg') }}"
                                                                class="" alt="..." width="60"
                                                                height="80">
                                                        </div>
                                                        <div class="fw-bold">
                                                            <span>Pantallon</span>
                                                        </div>
                                                        <div class="position-absolute end-0 top-50 me-1">
                                                            <button type="button"
                                                                class="btn btn-dark btn-sm d-block">+ Ajouter -
                                                                <span>200</span> MAD</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item carousel-panier">
                                                    <div
                                                        class="panier-product-container position-relative container-fluid d-flex flex-nowrap gap-2 p-2 m-2 shadow border-1">
                                                        <div class="">
                                                            <img class="panier-product-container"
                                                                src="{{ asset('assets/images/product/lates-news/a17.jpg ') }}"
                                                                class="" alt="..." width="60"
                                                                height="80">
                                                        </div>
                                                        <div class="fw-bold">
                                                            <span>Pantallon</span>
                                                        </div>
                                                        <div class="position-absolute end-0 top-50 me-1">
                                                            <button type="button"
                                                                class="btn btn-dark btn-sm d-block">+ Ajouter -
                                                                <span>200</span> MAD</button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="panier-product-container position-relative container-fluid d-flex flex-nowrap gap-2 p-2 m-2 shadow border-1">
                                                        <div class="">
                                                            <img class="panier-product-container"
                                                                src="{{ asset('assets/images/product/lates-news/a17.jpg ') }}"
                                                                class="" alt="..." width="60"
                                                                height="80">
                                                        </div>
                                                        <div class="fw-bold">
                                                            <span>Pantallon</span>
                                                        </div>
                                                        <div class="position-absolute end-0 top-50 me-1">
                                                            <button type="button"
                                                                class="btn btn-dark btn-sm d-block">+ Ajouter -
                                                                <span>200</span> MAD</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item carousel-panier">
                                                    <div
                                                        class="panier-product-container position-relative container-fluid d-flex flex-nowrap gap-2 p-2 m-2 shadow border-1">
                                                        <div class="">
                                                            <img class="panier-product-container"
                                                                src="{{ asset('assets/images/product/lates-news/a17.jpg ') }}"
                                                                class="" alt="..." width="60"
                                                                height="80">
                                                        </div>
                                                        <div class="fw-bold">
                                                            <span>Pantallon</span>
                                                        </div>
                                                        <div class="position-absolute end-0 top-50 me-1">
                                                            <button type="button"
                                                                class="btn btn-dark btn-sm d-block">+ Ajouter -
                                                                <span>200</span> MAD</button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="panier-product-container position-relative container-fluid d-flex flex-nowrap gap-2 p-2 m-2 shadow border-1">
                                                        <div class="">
                                                            <img class="panier-product-container"
                                                                src="{{ asset('assets/images/product/lates-news/a17.jpg ') }}"
                                                                class="" alt="..." width="60"
                                                                height="80">
                                                        </div>
                                                        <div class="fw-bold">
                                                            <span>Pantallon</span>
                                                        </div>
                                                        <div class="position-absolute end-0 top-50 me-1">
                                                            <button type="button"
                                                                class="btn btn-dark btn-sm d-block">+ Ajouter -
                                                                <span>200</span> MAD</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev start-0" type="button"
                                                data-bs-target="#carouselPanier" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselPanier" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="panierButtomBtn container-fluid d-flex py-3 position-relative">
                                            <div class="position-absolute start-0">
                                                <button type="button" class="btn btn-lg d-block fw-bolder fs-6">Shop
                                                    Now</button>
                                            </div>
                                            <div class="position-absolute end-0">
                                                <button type="button"
                                                    class="btn btn-lg d-block fw-bolder fs-6">Best-Sellers</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="website-icon-item text-center">
                        <img class="img-fluid pt-3" src="{{ asset('assets/bootstrap-icons/box-arrow-right.svg ') }}"
                            alt="Person Icon">
                        <a class="icon-menu-details d-block" href="{{ route('login') }}" target="_self"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Déconnexion</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Salut @auth
                                          {{ Auth::user()->name }}
                                      @else
                                          Cher C
                                      @endauth</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Voulez vous se déconnecter ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Non</button>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="visibily-hidden">
                                            <button type="button" class="btn btn-primary">Oui</button>

                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-navbar position-relative ">
            <nav class="navbar navbar-expand-lg position-relative d-lg-flex d-none py-0">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand d-lg-none d-block" href="{{ route('home') }}" target="_self">
                        <div class="logo-container d-flex gap-0">
                            <span class="logo-text fs-1">InZo</span>
                            <img id="logo-icon" src="{{ asset('assets/images/brand/logo-tie.png ') }}"
                                alt="" width="4">
                            <span class="logo-text fs-1">Shop</span>
                        </div>
                    </a>
                    <div class="my-menu collapse navbar-collapse  justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link  menu-item" aria-current="page" href="#nv-collection">NOUVELLE
                                    COLLECTION</a>
                            </li>
                            <li class="nav-item my-dropdown">
                                <a class="nav-link menu-item" href="{{ route('Homme') }}">HOMME</a>
                                <div
                                    class="sub-menu container-fluid d-flex d-none position-absolute justify-content-center z-3">
                                    <div class="row">
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Imperméables</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Court</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        long</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Trenchcoat</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Made in France</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Coupe-vent</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Court</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        long</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Vétements</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        T-Shirt</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Polaire</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        pantalons & shorts</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Pantalons de Pluie</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
  
                                </div>
                            </li>
                            <li class="nav-item my-dropdown">
                                <a class="nav-link menu-item" href="{{ route('Femme') }}">FEMME</a>
                                <div
                                    class="sub-menu container-fluid d-flex d-none position-absolute justify-content-center z-3">
                                    <div class="row">
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Imperméables</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Court</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        long</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Trenchcoat</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Made in France</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Coupe-vent</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Court</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        long</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Vétements</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        T-Shirt</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Polaire</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        pantalons & shorts</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Pantalons de Pluie</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item my-dropdown">
                                <a class="nav-link menu-item" href="{{ route('Enfant') }}">ENFANT</a>
                                <div
                                    class="sub-menu container-fluid d-flex d-none position-absolute justify-content-center z-3">
                                    <div class="row">
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/my-menu/kid-1.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Imperméables</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Court</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-sub-menu col m-4">
                                            <img src="{{ asset('assets/images/my-menu/kid-1.jpg ') }}"
                                                alt="">
                                            <ul>
                                                <li class="list-group-item main-element">
                                                    <a class="nav-link" href="#">
                                                        Vétements</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Polaire</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="nav-link" href="#">
                                                        Maillot de Bain</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-item" href="{{ route('Accessoires') }}">ACCESSOIRES</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link menu-item" href="#">LA MARQUE</a>
                                <ul class="dropdown-menu marque-dropdown">
                                    <li><a class="dropdown-item" href="#">Concept</a></li>
                                    <li><a class="dropdown-item" href="#">Histoire</a></li>
                                    <li><a class="dropdown-item" href="#">Engagements</a></li>
                                    <li><a class="dropdown-item" href="#">Collaborations</a></li>
                                    <li><a class="dropdown-item" href="#">Parrinage</a></li>
                                    <li><a class="dropdown-item" href="#">Presse</a></li>
                                    <li><a class="dropdown-item" href="#">Journal</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
  
                </div>
  
            </nav>
            <nav id="mynavbar" class="navbar  d-lg-none d-flex small-nav">
                <div class="my-small-menu container-fluid " bis_skin_checked="1">
                    <div class="row ">
                        <div class="col">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col mt-1">
                            <a href="" class="">
                                <img src="{{ asset('assets/bootstrap-icons/search.svg ') }}" alt=""
                                    width="30" class="small-nav-icon">
                            </a>
                        </div>
  
                    </div>
                    <a class="navbar-brand d-lg-none d-block" href="{{ route('home') }}" target="_self">
                        <div class="logo-container d-flex gap-0">
                            <span class="logo-text fs-1">InZo</span>
                            <img id="logo-icon" src="{{ asset('assets/images/brand/logo-tie.png ') }}"
                                alt="" width="4">
                            <span class="logo-text fs-1">Shop</span>
                        </div>
                    </a>
                    <a href="">
                        <img src="{{ asset('assets/bootstrap-icons/cart.svg ') }}" alt="" width="30"
                            class="small-nav-icon">
                    </a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel" bis_skin_checked="1">
                        <div class="offcanvas-header" bis_skin_checked="1">
                            <a class="navbar-brand d-lg-none d-block" href="{{ route('home') }}" target="_self">
                                <div class="logo-container d-flex gap-0">
                                    <span class="logo-text fs-1">InZo</span>
                                    <img id="logo-icon" src="{{ asset('assets/images/brand/logo-tie.png ') }}"
                                        alt="" width="4">
                                    <span class="logo-text fs-1">Shop</span>
                                </div>
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" bis_skin_checked="1">
                            <ul class="navbar-nav small-navbar-nav justify-content-en pe-3">
                                <li class="nav-item small-nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">NOUVELLE
                                        COLLECTION</a>
                                </li>
                                <li class="nav-item small-nav-item ">
                                    <a class="nav-link collapsed active" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#sm-nav-1" aria-expanded="false" aria-controls="sm-nav-1"
                                        href="{{ route('Homme') }}">HOMME</a>
                                    <div id="sm-nav-1" class="container sub-small-nav-item collapse"
                                        data-bs-parent="#mynavbar">
                                        <ul class="p-0 my-2">
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap py-3 collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-1" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-1" href="">Imperméables</a>
                                                <div id="sub-sm-nav-1" class="container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-1">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Court</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Long</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Trenchcoat</a></li>
                                                        <li><a class="fw-medium text-capitalize" href="">Made
                                                                in France</a></li>
                                                </div>
                                            </li>
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-3" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-3" href="">Coupe-vent</a>
                                                <div id="sub-sm-nav-3" class=" container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-1">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Court</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Long</a></li>
                                                </div>
                                            </li>
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-4" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-4" href="">Vétements</a>
                                                <div id="sub-sm-nav-4" class=" container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-1">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">T-Shirt</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Polaire</a></li>
                                                </div>
                                            </li>
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/product/featured/a5.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-5" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-5" href="">Pantalons & Shorts</a>
                                                <div id="sub-sm-nav-5" class=" container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-1">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize text-nowrap"
                                                                href="">Pantalon de Pluie</a></li>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item small-nav-item ">
                                    <a class="nav-link collapsed active" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#sm-nav-2" aria-expanded="false" aria-controls="sm-nav-2"
                                        href="{{ route('Femme') }}">FEMME</a>
                                    <div id="sm-nav-2" class="container sub-small-nav-item collapse"
                                        data-bs-parent="#mynavbar">
                                        <ul class="p-0 my-2">
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap py-3 collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-6" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-6" href="">Imperméables</a>
                                                <div id="sub-sm-nav-6" class="container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-2">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Court</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Long</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Trenchcoat</a></li>
                                                        <li><a class="fw-medium text-capitalize" href="">Made
                                                                in France</a></li>
                                                </div>
                                            </li>
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-8" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-8" href="">Coupe-vent</a>
                                                <div id="sub-sm-nav-8" class=" container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-2">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Court</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Long</a></li>
                                                </div>
                                            </li>
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-9" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-9" href="">Vétements</a>
                                                <div id="sub-sm-nav-9" class=" container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-2">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">T-Shirt</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Polaire</a></li>
                                                </div>
                                            </li>
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/my-menu/woman-1.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-10" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-10" href="">Pantalons &
                                                    Shorts</a>
                                                <div id="sub-sm-nav-10" class=" container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-2">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize text-nowrap"
                                                                href="">Pantalon de Pluie</a></li>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item small-nav-item ">
                                    <a class="nav-link collapsed active" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#sm-nav-3" aria-expanded="false" aria-controls="sm-nav-3"
                                        href="{{ route('Enfant') }}">ENFANT</a>
                                    <div id="sm-nav-3" class="container sub-small-nav-item collapse"
                                        data-bs-parent="#mynavbar">
                                        <ul class="p-0 my-2">
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/my-menu/kid-1.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize text-nowrap py-3 collapsed"
                                                    role="button" data-bs-toggle="collapse"
                                                    data-bs-target="#sub-sm-nav-11" aria-expanded="false"
                                                    aria-controls="sub-sm-nav-11" href="">Imperméables</a>
                                                <div id="sub-sm-nav-11" class="container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-3">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Court</a></li>
                                                </div>
                                            </li>
                                            <li class="my-2">
                                                <img src="{{ asset('assets/images/my-menu/kid-1.jpg ') }}"
                                                    alt="" width="60px" height="60px">
                                                <a class="fw-normal text-capitalize  py-3 collapsed" role="button"
                                                    data-bs-toggle="collapse" data-bs-target="#sub-sm-nav-12"
                                                    aria-expanded="false" aria-controls="sub-sm-nav-12"
                                                    href="">Vétements</a>
                                                <div id="sub-sm-nav-12" class=" container collapse sub-small-nav-item"
                                                    data-bs-parent="#sm-nav-3">
                                                    <ul class=" my-3">
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Polaire</a></li>
                                                        <li><a class="fw-medium text-capitalize"
                                                                href="">Maillot de Bain</a></li>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item small-nav-item">
                                    <a class="nav-link active" href="{{ route('Accessoires') }}">ACCESSOIRES</a>
                                </li>
                                <li class="nav-item small-nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        LA MARQUE
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item" href="#">Concept</a></li>
                                        <li><a class="dropdown-item" href="#">Histoire</a></li>
                                        <li><a class="dropdown-item" href="#">Engagements</a></li>
                                        <li><a class="dropdown-item" href="#">Collaborations</a></li>
                                        <li><a class="dropdown-item" href="#">Parrinage</a></li>
                                        <li><a class="dropdown-item" href="#">Presse</a></li>
                                        <li><a class="dropdown-item" href="#">Journal</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form method="GET" action="{{route('search')}}" class="d-flex mt-3">
                              @csrf
                                <input  name="query" class="form-control me-2" type="search" placeholder="Rechercher."
                                    aria-label="Search" />
                                <button class="btn btn-outline-success" type="submit">
                                    Rechercher
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
      </header>

    @yield('content')
	<footer class="bg3 p-t-20 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-20">
					<h4 class="cl0 p-b-20">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class=" cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class=" cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class=" cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class=" cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-20">
					<h4 class="cl0 p-b-20">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-20">
					<h4 class="cl0 p-b-20">
						GET IN TOUCH
					</h4>

					<p class="cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-4">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							{{-- <i class="fa fa-facebook"></i> --}}
                            {{-- <i class="bi bi-facebook"></i> --}}
                            <img src="{{asset('assets/bootstrap-icons/facebook.png')}}" class="" alt="">
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							{{-- <i class="fa fa-instagram"></i> --}}
                            <img src="{{asset('assets/bootstrap-icons/instagram.png')}}" class="" alt="">
						</a>
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							{{-- <i class="fa fa-instagram"></i> --}}
                            <img src="{{asset('assets/bootstrap-icons/whatsapp.png')}}" class="" alt="">
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							{{-- <i class="fa fa-pinterest-p"></i> --}}
                            <img src="{{asset('assets/bootstrap-icons/pinterest.png')}}" class="" alt="">
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-20">
					<h4 class="cl0 p-b-20">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-4">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="{{asset('images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="cl6 txt-center">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());
                        </script> All rights reserved  
				</p>
			</div>
		</div>
	</footer>
    <script src="{{ asset('assets/js/utilities/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/utilities/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/myScript.js') }}"></script>
    <script></script>
</body>

</html>
