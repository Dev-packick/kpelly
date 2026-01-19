@extends('layouts.client')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">A propos</h1>
            </div>
        </div>
    </div>

	<!-- Full Screen Search Start -->
	<div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                <div class="col-lg-6">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">KPELLY INDUSTRIES</h1>
                    </div>
                    <h5 class="fw-bold text-primary text-uppercase">Un service client de qualité</h5>
                    <p class="mb-4">Bienvenue dans l'univers de notre société de production de café et de chips où<br>
                        nous nous efforçons toujours d'améliorer nos produits et services.<br>
                        Nous sommes toujours là pour aider, écouter et offrir une expérience sans compromis qui ne se
                        compare à aucune autre.<br><br>

                        Grâce à notre présence mondiale et nationnale avec nos partenaires, commmerciaux et nos centres de
                        relation client,
                        nos clients ont le choix et la flexibilité de s'engager avec nous comme ils le souhaitent et où ils
                        le souhaitent.<br>
                        <p>Nous offrons des opportunités d'investissement attractives pour les investisseurs qui souhaitent
                            soutenir notre entreprise.
                            Nous sommes convaincus que nos produits innovants et de qualité supérieure, combinés à notre solide
                            stratégie de marketing et de distribution,
                            peuvent générer des revenus élevés et des rendements solides pour nos investisseurs.<br><br>

                            Si vous cherchez à investir dans une entreprise dynamique et innovante, alors nous sommes la société
                            qu'il vous faut.
                            Contactez-nous pour en savoir plus sur nos produits et nos opportunités d'investissement, et
                            découvrez comment vous pouvez devenir un partenaire clé de notre entreprise.
                        </p>
                    </p>
                </div>
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid" data-wow-delay="0.9s" src="{{ asset ('client/assets/img/africa.jpg')}}" style="object-fit: cover;"
                            width="250%" height="250%;">
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
                <h5 class="fw-bold text-primary text-uppercase">KPELLY GROUP</h5>
                <h6 class="mb-0">Une équipe de professionnels passionnés dirige notre entreprise, apportant une expertise variée pour répondre à vos besoins.</h6>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img class="img-fluid" src="{{ asset ('client/assets/img/EKIP8.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img class="img-fluid" src="{{ asset ('client/assets/img/EKIP.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img class="img-fluid" src="{{ asset ('client/assets/img/EKIP5.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img class="img-fluid" src="{{ asset ('client/assets/img/EKIP2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img class="img-fluid" src="{{ asset ('client/assets/img/team.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h5 class="text-white mb-4"> Notre équipe est plus qu'une simple collection de professionnels</h5>
                        <p class="text-white mb-3"></p>
                        <h3 class="text-white mb-0">(+228) 90491838</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- TEAM START -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Notre équipe</h5>
            </div>
            <div class="row g-5" style="display: flex; justify-content: center; align-items: center;">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset ('client/assets/img/DGE.png')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">KPELLY Koami Elom Paul</h4>
                            <p class="text-uppercase m-0">Directeur Général</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset ('client/assets/img/DAE.png')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">CISSE Mohamed Korech</h4>
                            <p class="text-uppercase m-0">Directeur des opérations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM END -->

    <button class="MuiButtonBase-root MuiFab-root MuiFab-circular MuiFab-sizeLarge MuiFab-default css-aoq6w5"
        tabindex="0" type="button" style="position: fixed; bottom: 50px; right: 50px; background-color: green;">
        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-x8nsji"
            target="_blank" href="https://wa.me/22890612190">
            <svg class="MuiSvgIcon-root MuiSvgIcon-colorGreen MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                aria-hidden="true" viewBox="0 0 24 24" data-testid="WhatsappRoundedIcon">
                <path
                    d="M19.05 4.91C17.18 3.03 14.69 2 12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91
                        0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31c-.82-1.31-1.26-2.83-1.26-4.38 0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42 1.56
                        1.56 2.41 3.63 2.41 5.83.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.78.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.
                        74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31-.22.25-.
                        86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z">
                </path>
            </svg>
        </a>
        <span class="MuiTouchRipple-root css-w0pj6f"></span>
    </button>

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset ('client/assets/img/Ramco.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/TotalSA.jpeg')}}" alt="">
                    <img src="{{ asset ('client/assets/img/SogeaSatom.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/Msc.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/FAIEJ.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/logo-2FEVRIER-lome.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/Espaceviva.jpg')}}" alt="">
                    <img src="{{ asset ('client/assets/img/OMCATOGO.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/logo-sarakawa-min.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/Presidence.svg')}}" alt="">
                    <img src="{{ asset ('client/assets/img/epiceriedulevant.png')}}" alt="">
                    <img src="{{ asset ('client/assets/img/tonomi-logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
