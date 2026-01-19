@extends('layouts.client')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">FORPELLY CHIPS</h1>
                        <img class="img-fluid" src="{{ asset ('client/assets/img/logochips.png')}}" width="200px" height="200px">
                </div>
            </div>
        </div>
    </div>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- About Start -->
	<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">FORPELLY CHIPS</h1>
                    </div>
                    <p class="mb-4">
                        La consommation locale ne saura aller de l’avant si les produits ne se
                        transforment pas sur place. Notre promoteur de KingCafé et KingChoco, Monsieur
                        Elom Paul KPELLY l’a compris. Il a mis sur le marché togolais,
                        des chips de maïs pour le grand bonheur de toute la population et au-delà
                        des frontières du Togo.<br><br>
                        Forpelly CHIPS est le projet du promoteur de KingCafé. Il s’agit
                        des chips de maïs, un produit disponible sur le marché. L’usine basée
                        à Lomé permet de mettre en valeur le maïs Togolais, ce céréale qui est de loin
                        le plus produit et le plus consommé au Togo.<br><br>
                        Le chips est fait à base de GRITZ de maïs, huile d’arachide, sel naturel en poudre
                        et sucre en poudre. C’est un produit entièrement naturel, sans ajout de conservateur
                        ou colorant, produit dans un environnement sain et protégé. Le produit respecte les normes
                        HACCP et l’usine dispose des matériels complètement en INOX.
                    </p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid" data-wow-delay="0.9s" src="{{ asset ('client/assets/img/ABV.png')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('client/assets/img/Ramco.png')}}" alt="">
                    <img src="{{ asset('client/assets/img/TotalSA.jpeg')}}" alt="">
                    <img src="{{ asset('client/assets/img/SogeaSatom.png')}}" alt="">
                    <img src="{{ asset('client/assets/img/Msc.png')}}" alt="">
                    <img src="{{ asset('client/assets/img/FAIEJ.png') }}" alt="">
                    <img src="{{ asset('client/assets/img/logo-2FEVRIER-lome.png')}}" alt="">
                    <img src="{{ asset('client/assets/img/Espaceviva.jpg')}}" alt="">
                    <img src="{{ asset('client/assets/img/OMCATOGO.png')}}" alt="">
                    <img src="{{ asset('client/assets/img/logo-sarakawa-min.png')}}" alt="">
                    <img src="{{ asset('client/assets/img/Presidence.svg')}}" alt="">
                    <img src="{{ asset('client/assets/img/epiceriedulevant.png')}}" alt="">
                    <img src="{{ asset('client/assets/img/tonomi-logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
