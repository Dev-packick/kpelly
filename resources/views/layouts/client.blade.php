<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>KPELLY INDUSTRIES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="KPELLY INDUSTRIES" name="title">
    <meta content="KPELLY INDUSTRIES est une entreprises spécialisé dans la production de café et de chips.
		Nous disposons également d'une boulangerie de production de pains et biscuits sans oublier
		nos pressing KPELLY CENTER" name="description">
    <meta content="keywords" name="KPELLY INDUSTRIES from TOGO to the world">
    <meta name="language" content="French">
    <!-- Favicon -->
    <link href="{{ asset ('client/assets/img/KI_icon.png')}}" rel="icon" type="image/png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Times New Roman:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset ('client/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset ('client/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
	<!-- CSS FILES -->
    <link href="{{ asset('client/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('client/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('client/assets/css2/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('client/assets/css2/templatemo-festava-live.css')}}" rel="stylesheet">
    <!-- CSS FILES END -->
</head>

    <body>
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <font color="white">
                            <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Lomé (TOGO)</small>
                            <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><a href="tel:+22890491838">(+228) 90491838</a></small>
                            <small class="text-light"><i class="fa fa-envelope-open me-2"></i><a href="mailto:contact@kpellyindustries.com" data-placement="top" title="gmail">contact@kpellyindustries.com</a></small>
                        </font>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                            href="https://www.facebook.com/kpellyinvestgroup?mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top">
                <a href="{{route('ACCUEIL')}}" class="navbar-brand ms-4 ms-lg-0" style="text-decoration: none; font-size: 1.5rem;">
                    <h1 class="text-primary m-0" style="font-size: inherit;">KPELLY INDUSTRIES</h1>
                </a>
                <!--logoEnd-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('ACCUEIL')}}" class="nav-item nav-link" style="margin: 0 5px;">ACCUEIL</a>
                        <a href="{{route('ABOUT')}}" class="nav-item nav-link" style="margin: 0 5px;">A PROPOS</a>
                        <a href="{{route('MOROKINGCAFE')}}" class="nav-item nav-link" style="margin: 0 5px;">KINGCAFE</a>
                        <a href="{{route('FORPELLYCHIPS')}}" class="nav-item nav-link" style="margin: 0 5px;">FORPELLY CHIPS</a>
                        <a href="{{route('POMAFRICA')}}" class="nav-item nav-link" style="margin: 0 5px;">TAVERNELLO</a>
                    </div>
                    <a href="{{route('FORMCONTACT')}}" class="btn btn-primary py-2 px-4 ms-3">CONTACT</a>
                </div>
                <style>
                    /* CSS intégré pour ajustements responsives */
                    @media (max-width: 576px) {
                        .navbar-brand h1 {
                            font-size: 1.2rem; /* Ajuster la taille selon les besoins */
                        }
                        .navbar-nav .nav-link {
                            margin: 5px 0; /* Ajuster l'espacement pour les petits écrans */
                        }
                    }
                </style>
            </nav>
        <!-- Navbar End -->

		@yield('content')


		<!-- FOOTER START -->
		<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center h-30 bg-primary p-4">
                            <a href="/" class="navbar-brand" style="text-decoration: none;">
                                <h3 class="m-0 text-white">Newsletter</h3>
                            </a>
                            <p class="mt-3 mb-4">
                                <font color="white">Inscrivez-vous gratuitement à notre newsletter pour ne rater aucune de nos informations</font>
                            </p>
                            <!-- Formulaire avec un ID -->
                            <form id="newsletterForm">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Votre Email" name="email" required>
                                    <button class="btn btn-dark" type="submit">Inscription</button>
                                </div>
                            </form>
                            <!-- Message de confirmation -->
                            <div id="message" class="mt-3" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="row gx-5">
                            <div class="col-lg-4 col-md-12 pt-5 mb-5">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="text-light mb-0">
                                        <font color="white">Contacts</font>
                                    </h3>
                                </div>
                                <div class="link-animated d-flex flex-column justify-content-start">
                                    <a class="text-light mb-2" href="mailto:contact@kpellyindustries.com" style="text-decoration: none;">
                                        <i class="bi bi-envelope-fill text-white me-2"></i>contact@kpellyindustries.com
                                    </a>
                                    <a class="text-light mb-2" href="tel:+22890491838" style="text-decoration: none;">
                                        <i class="bi bi-telephone-fill text-white me-2"></i>(+228) 90491838
                                    </a>
                                    <a class="text-light mb-2" href="https://maps.app.goo.gl/LLKCApQcbdju1FT87" target="_blank" style="text-decoration: none;">
                                        <i class="bi bi-geo-alt-fill text-white me-2"></i>Lomé, Togo
                                    </a>
                                    <!--<a class="text-light mb-2" href="{{ route('page-login') }}" style="text-decoration: none;">-->
                                    <!--    <i class="fa fa-user text-white me-2"></i>se connecter-->
                                    <!--</a>-->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="text-light mb-0">
                                        <font color="white">Nos pages</font>
                                    </h3>
                                </div>
                                <div class="link-animated d-flex flex-column justify-content-start">
                                    <a class="text-light mb-2" href="{{route('ABOUT')}}" style="text-decoration: none;">
                                        <i class="bi bi-arrow-right text-primary me-2"></i>A propos
                                    </a>
                                    <a class="text-light mb-2" href="{{route('MOROKINGCAFE')}}" style="text-decoration: none;">
                                        <i class="bi bi-arrow-right text-primary me-2"></i>Kingcafe
                                    </a>
                                    <a class="text-light mb-2" href="{{route('FORPELLYCHIPS')}}" style="text-decoration: none;">
                                        <i class="bi bi-arrow-right text-primary me-2"></i>Forpellychips
                                    </a>
                                    <a class="text-light" href="{{route('FORMCONTACT')}}" style="text-decoration: none;">
                                        <i class="bi bi-arrow-right text-primary me-2"></i>Contact
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="text-light mb-0">
                                        <font color="white">Réseaux</font>
                                    </h3>
                                </div>
                                <div class="link-animated d-flex flex-column justify-content-start">
                                    <a class="text-light mb-2" href="https://www.facebook.com/kpellyinvestgroup?mibextid=ZbWKwL" style="text-decoration: none;">
                                        <i class="fab fa-facebook-f fw-normal"></i>&ensp;kpelly industries
                                    </a>
                                    <a class="text-light mb-2" href="https://www.linkedin.com/company/kingcaf%C3%A9-africa/about/" style="text-decoration: none;">
                                        <i class="fab fa-linkedin"></i>&ensp;kpelly industries
                                    </a>
                                    <a class="text-light mb-2" href="https://www.instagram.com/kpellyindustries?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="text-decoration: none;">
                                        <i class="fab fa-instagram"></i>&ensp;kpelly industries
                                    </a>
                                    <a class="text-light mb-2" href="wa.me/90491838" style="text-decoration: none;">
                                        <i class="fab fa-whatsapp"></i>&ensp;kpelly industries
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-white" style="background: #000;">
            <div class="container text-center">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-md-6">
                        <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- FOOTER END -->


		<!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset ('client/assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset ('client/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <!-- Template Javascript -->
        <script src="{{ asset('client/assets/js/main.js')}}"></script>

    <!-- Ajoute jQuery (si ce n'est pas déjà fait) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#newsletterForm").submit(function(event) {
                    event.preventDefault(); // Empêche le rechargement de la page

                    $.ajax({
                        url: "{{ route('SENDNEWSLETTER') }}", // Assure-toi que la route est bien définie
                        method: "POST",
                        data: $(this).serialize(), // Envoie les données du formulaire
                        success: function(response) {
                            $("#message").text(response.message).css("color", "white").show(); // Affiche le message
                            $("#newsletterForm")[0].reset(); // Vide le formulaire après soumission
                        },
                        error: function(xhr) {
                            let errorMessage = "Une erreur est survenue.";
                            if (xhr.status === 422) {
                                errorMessage = "L'email est déjà enregistré.";
                            }
                            $("#message").text(errorMessage).css("color", "red").show();
                        }
                    });
                });
            });
        </script>
    </body>
</html>
