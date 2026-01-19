@extends('layouts.client')
@section('content')
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">KINGCAFE</h1>
                    <img class="img-fluid" src="{{ asset ('client/assets/img/kc-fond-noir.png')}}" width="200px" height="200px">
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
                            aria-label="Close"></button>
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
                            <h1 class="mb-0">KINGCAFE</h1>
                        </div>
                        <p class="mb-4">
                            L'objectif principal de KINGCAFE, c'est de fournir un café de meilleure qualité à ses clients.
                            Pour atteindre cet objectif, nous nous assurons que les processus de production soient efficaces
                            et que les collaborateurs soient formés pour garantir que le café cultivé, produit, torréfié et
                            conditionné avec soin.<br><br>
                            KINGCAFE également cherche à augmenter sa productivité pour pouvoir répondre à la demande croissante
                            de café. Pour y parvenir,
                            nous voulons investir dans de nouvelles technologies et équipements de production et optimisation
                            des processus de production.<br><br>
                            Pour nous démarquer de la concurrence, KINGCAFE cherche à développer de nouveaux produits,
                            tels que des mélanges de cafés innovants, des variétés de cafés rares, ou des boissons à base de
                            café. Cela peut également aider
                            notre entreprise à répondre aux demandes de ses clients en constante évolution.<br><br>
                            La production de café peut avoir un impact important sur l'environnement et sur les communautés
                            locales.
                            KINGCAFE cherche à assurer sa durabilité en adoptant des pratiques de production respectueuses de
                            l'environnement, en soutenant les
                            communautés locales, et en s'engageant à une production éthique.
                        </p>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid" data-wow-delay="0.9s" src="{{ asset ('client/assets/img/kc-fond-noir.png')}}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h3 class="mb-0">Quel type de café nous vous proposons qui sont extrêmement amoureux du système
                        écologique.</h3>
                </div>
                <div class="row g-5">

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <img src="{{ asset ('client/assets/img/GC.png')}}" width="100%" height="100%" />
                            </div>
                            <h4 class="mb-3">Grains de café</h4>
                            <p class="m-0">Un grain de café est une graine du caféier et la source du café.
                                C'est le pépin à l'intérieur du fruit rouge ou violet souvent appelé cerise.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <img src="{{ asset ('client/assets/img/CC.png')}}" width="100%" height="100%" />
                            </div>
                            <h4 class="mb-3">Capsules de café</h4>
                            <p class="m-0">Solution de commercialisation du café dans un emballage qui s'adapte à la machine
                                à café.
                                La capsule est donc une variante de récipient fermé avec un sceau en aluminium.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <img src="{{ asset ('client/assets/img/PC.png')}}" width="100%" height="100%" />
                            </div>
                            <h4 class="mb-3">Poudre de café</h4>
                            <p class="m-0">Il est riche en antioxydants et en nutriments.
                                Le bon choix de poudre de café rafraîchit votre humeur et vous aide à démarrer votre journée.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <img src="{{ asset ('client/assets/img/CI.png')}}" width="100%" height="100%" />
                            </div>
                            <h4 class="mb-3">Café instantané</h4>
                            <p class="m-0">Le café instantané, permet aux gens de préparer rapidement du café chaud en
                                ajoutant de l'eau chaude
                                ou du lait à la poudre ou aux cristaux et en remuant.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <img src="{{ asset ('client/assets/img/cocoa powder.png')}}" width="100%" height="100%" />
                            </div>
                            <h4 class="mb-3">Cocoa_powder</h4>
                            <p class="m-0">Produit de chocolat non sucré, ajoute une saveur profonde de chocolat aux
                                desserts et aux boissons</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <img src="{{ asset ('client/assets/img/icecup.282931d735ca647d1a2a.jpg')}}" width="100%" height="100%" />
                            </div>
                            <h4 class="mb-3">Ice Cappuccino</h4>
                            <p class="m-0">boisson au café avec expresso, lait, glace et facultativement un édulcorant</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Pricing Plan Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">A propos du café Arabica et Robusta</h5>
                    <h3 class="mb-0">Au Togo, la région du nord-ouest compte 30 000 hectares de Canephora (robusta et
                        niaouli),
                        l'essentiel de la production étant cantonnée vers le centre-ouest du pays, sur 20 000 hectares,
                        dans un triangle rectangle dont les côtés mesurent quelques dizaines de kilomètres,
                        traversé par la route Kpalimé-Atakpamé.
                    </h3>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                            <div class="border-bottom py-3 px-5 mb-4">
                                <h4 class="text-primary mb-1">ROBUSTA TOGOLAIS</h4>
                                <small class="text-uppercase">Caractéristiques</small>
                            </div>
                            <div class="p-5 pt-0">
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">CULTURE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>Basses altitudes (0-700m). Résistant aux maladies, à la chaleur et à
                                        l'humidité. Maturité plus lente (10-11 mois)</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">CLIMAT</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>20-30°C / Coffea Canephora prospère à des températures plus élevées</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">CAFEINE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>1.7 à 3.5%</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">HUILE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>10 - 12% / Un pourcentage plus faible donne une crème épaisse et stable avec
                                        des mélanges d'espresso italiens</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">SUCRE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>3-7% / Une faible teneur en sucre conduit à un goût plus amer</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">FORME</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>Le grain Robusta est plutôt petit, rond, a une pointe polaire et une coupe
                                        droite.</span>
                                    <img alt="" class=img-responsive
                                        src="https://beans.at/media/wysiwyg/Kaffeewissen/Diverse/Coffea_Robusta.png"
                                        width="75">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                            <div class="border-bottom py-3 px-5 mb-4">
                                <h4 class="text-primary mb-1">ARABICA ETHIOPIEN</h4>
                                <small class="text-uppercase">Caractéristiques</small>
                            </div>
                            <div class="p-5 pt-0">
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">CULTURE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>Altitudes plus élevées (1000-2000m) Plante délicate, forte demande sur le sol
                                        et le climat. Maturité plus rapide (9 mois)</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">CLIMAT</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>15-25°C / Coffea Arabica a besoin d'un climat tempéré</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">CAFEINE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>Bas 0.8 à 1.5%</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">HUILE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>15 - 17% / Un pourcentage plus élevé conduit à une texture plus lisse</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">SUCRE</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>6-9% / L'arabica est le grain de café le plus sucré</span>
                                </div>
                                <h1 class="display-9 mb-3">
                                    <small class="align-bottom"
                                        style="font-size: 20px; line-height: 10px;">FORME</small>
                                </h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>La forme typique du grain Arabica est ovale, plutôt plate et avec une coupe en
                                        forme de S au milieu.</span>
                                    <img alt="" class=img-responsive
                                        src="https://beans.at/media/wysiwyg/Kaffeewissen/Diverse/Coffea_Arabica.png"
                                        width="75">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Plan End -->

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
