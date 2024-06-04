<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InzoStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <header>
        <div class="banner container-fluid py-1  justify-content-center sticky-top d-flex">
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
        <div class="website-details-container d-lg-block d-none">
            <div class="container-fluid ">
                <div class="website-details d-flex align-items-center justify-content-evenly gap-5  ">
                    <div class="navbar-brand website-logo logo d-none d-lg-block">
                        <a href="{{ route('welcome') }}" target="_self">
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
                                        <input type="text" placeholder="Rechercher...">
                                        <button class="d-none d-lg-block">Rechercher</button>
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
                                <button class="border-0 bg-white" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#panier" aria-controls="offcanvasNavbar"
                                    aria-label="Toggle navigation">
                                    <span class="position-absolute panier-NP">0</span>
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
                                            <span class="col-12 text-center fw-normal fs-6">Votre panier est vide
                                                :</span>
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
                </div>
            </div>
            <div class="my-navbar position-relative">
                <nav class="navbar navbar-expand-lg position-relative d-lg-flex d-none py-0">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand d-lg-none d-block" href="{{ route('welcome') }}" target="_self">
                            <div class="logo-container d-flex gap-0">
                                <span class="logo-text fs-1">InZo</span>
                                <img id="logo-icon" src="{{ asset('assets/images/brand/logo-tie.png ') }}"
                                    alt="" width="4">
                                <span class="logo-text fs-1">Shop</span>
                            </div>
                        </a>
                        <div class="my-menu collapse navbar-collapse  justify-content-center"
                            id="navbarSupportedContent">
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
                        <a class="navbar-brand d-lg-none d-block" href="{{ route('welcome') }}" target="_self">
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
                                <a class="navbar-brand d-lg-none d-block" href="{{ route('welcome') }}" target="_self">
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
                                                    <div id="sub-sm-nav-1"
                                                        class="container collapse sub-small-nav-item"
                                                        data-bs-parent="#sm-nav-1">
                                                        <ul class=" my-3">
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Court</a></li>
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Long</a></li>
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Trenchcoat</a></li>
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Made
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
                                                    <div id="sub-sm-nav-3"
                                                        class=" container collapse sub-small-nav-item"
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
                                                    <div id="sub-sm-nav-4"
                                                        class=" container collapse sub-small-nav-item"
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
                                                        aria-controls="sub-sm-nav-5" href="">Pantalons &
                                                        Shorts</a>
                                                    <div id="sub-sm-nav-5"
                                                        class=" container collapse sub-small-nav-item"
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
                                                    <div id="sub-sm-nav-6"
                                                        class="container collapse sub-small-nav-item"
                                                        data-bs-parent="#sm-nav-2">
                                                        <ul class=" my-3">
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Court</a></li>
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Long</a></li>
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Trenchcoat</a></li>
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Made
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
                                                    <div id="sub-sm-nav-8"
                                                        class=" container collapse sub-small-nav-item"
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
                                                    <div id="sub-sm-nav-9"
                                                        class=" container collapse sub-small-nav-item"
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
                                                    <div id="sub-sm-nav-10"
                                                        class=" container collapse sub-small-nav-item"
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
                                                    <div id="sub-sm-nav-11"
                                                        class="container collapse sub-small-nav-item"
                                                        data-bs-parent="#sm-nav-3">
                                                        <ul class=" my-3">
                                                            <li><a class="fw-medium text-capitalize"
                                                                    href="">Court</a></li>
                                                    </div>
                                                </li>
                                                <li class="my-2">
                                                    <img src="{{ asset('assets/images/my-menu/kid-1.jpg ') }}"
                                                        alt="" width="60px" height="60px">
                                                    <a class="fw-normal text-capitalize  py-3 collapsed"
                                                        role="button" data-bs-toggle="collapse"
                                                        data-bs-target="#sub-sm-nav-12" aria-expanded="false"
                                                        aria-controls="sub-sm-nav-12" href="">Vétements</a>
                                                    <div id="sub-sm-nav-12"
                                                        class=" container collapse sub-small-nav-item"
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
                                <form class="d-flex mt-3" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Rechercher..."
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
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
            </div>
    @endif
    <div class="slider container-fluid px-0">
        <div id="myslider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner px-0 ">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="" height="450">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-01.jpg" alt="" height="450">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="" height="450">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myslider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myslider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    
    </div>
    <section id="" class="new-arrivals-products-container  py-3 ">
        <div class="container-fluid d-flex">
            <div class="new-arrivals-products ">
                <div class="section-title">
                    <h2>NOUVELLE COLLECTION</h2>
                </div>
                <div class="products-list  container-fluid d-flex flex-wrap justify-content-evenly gap-5">
                    <div class="product-item shadow">
                        <div class="product-image position-relative">
                            <img src="assets/images/product/new-arrivals/a1.jpg" alt="">
                            <span class="badge sold position-absolute">-20%</span>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Pantalons</div>
                            <div class="product-name">
                                <h3>Pantalons supreme</h3>
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
                                    <h4>$89.99</h4>
                                </del>
                                <h4>$29.99</h4>
                            </div>
                            <div class="product-options">
                                <button class="btn">Select Options</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item shadow">
                        <div class="product-image position-relative">
                            <img src="assets/images/product/new-arrivals/a2.jpg" alt="">
    
                            <span class="badge sold position-absolute">-20%</span>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Pantalons</div>
                            <div class="product-name">
                                <h3>Pantalons supreme</h3>
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
                                    <h4>$89.99</h4>
                                </del>
                                <h4>$29.99</h4>
                            </div>
                            <div class="product-options">
                                <button class="btn">Select Options</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item shadow">
                        <div class="product-image position-relative">
                            <img src="assets/images/product/new-arrivals/a4.jpg" alt="">
    
                            <span class="badge sold position-absolute">-20%</span>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Pantalons</div>
                            <div class="product-name">
                                <h3>Pantalons supreme</h3>
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
                                    <h4>$89.99</h4>
                                </del>
                                <h4>$29.99</h4>
                            </div>
                            <div class="product-options">
                                <button class="btn">Select Options</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item shadow">
                        <div class="product-image position-relative">
                            <img src="assets/images/product/new-arrivals/a1.jpg" alt="">
    
                            <span class="badge sold position-absolute">-20%</span>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Pantalons</div>
                            <div class="product-name">
                                <h3>Pantalons supreme</h3>
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
                                    <h4>$89.99</h4>
                                </del>
                                <h4>$29.99</h4>
                            </div>
                            <div class="product-options">
                                <button class="btn">Select Options</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <section id="" class="new-arrivals-products-container  py-3 mx-0 px-0">
        <div class="section-title">
            <h2 class="ff-main">Nos produits</h2>
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
                                            <button class="btn" data-bs-toggle="modal"
                                                data-bs-target="#{{ $product->id }}">Aperçu</button>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="{{ $product->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-bold ffb-main" id="exampleModalLabel">
                                                {{ $product->sub_category }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <img src="{{ asset('/img') }}/{{ $product->img_path }}"
                                                                alt="" width="350" height="90%">
    
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="ffi-main fw-bolder text-dark">{{ $product->name }}</h3>
                                                        <h4 class="ffb-main">${{ $product->price }}</h4>
                                                        <p class="ff-main ">{{ $product->description }}</p>
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
                                                                        <input type="number" name="quantity"
                                                                            class="form-control" placeholder="Quantité"
                                                                            minlength="1" maxlength="5">
    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-control justify-content-end d-flex position-relative">
                                                                <div class="position-absolute start-0 px-2 pt-2 ffi-main">
                                                                    <label for="">Ajouter au :</label>
                                                                </div>
                                                                <div class="btn-group" role="group"
                                                                    aria-label="Basic mixed styles example">
                                                                    <button type="button"
                                                                        class="btn modal-btn1 text-light fw-bold">Favoris</button>
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    
    <div class="pages"></div>





    <script src="{{ asset('assets/js/utilities/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/utilities/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/myScript.js') }}"></script>
</body>

</html>


